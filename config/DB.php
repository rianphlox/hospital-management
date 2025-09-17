<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class DB {
    private $conn;

    public function __construct(
        private string $host = 'localhost',
        private string $user = 'root',
        private string $password = '',
        private string $dbname = 'hospital'
    ) {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
            $this->conn->set_charset("utf8mb4");
        } catch (mysqli_sql_exception $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }

    /** 🔹 Helper to run SELECT queries */
    private function fetchAll(string $sql, string $types = "", array $params = []): array {
        $stmt = $this->conn->prepare($sql);
        if ($types) {
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /** 🔹 Helper to run INSERT/UPDATE/DELETE */
    private function executeQuery(string $sql, string $types = "", array $params = []): bool {
        $stmt = $this->conn->prepare($sql);
        if ($types) {
            $stmt->bind_param($types, ...$params);
        }
        return $stmt->execute();
    }

    /** ================================
     *   CRUD METHODS
     *  ================================ */

    public function getAllPatients(): array {
        return $this->fetchAll("SELECT * FROM attendance_register ORDER BY age ASC");
    }

    public function getAllStates(): array {
        return $this->fetchAll("SELECT * FROM states");
    }

    public function getPatient(int $id): array {
        return $this->fetchAll("SELECT * FROM attendance_register WHERE id = ?", "i", [$id]);
    }

    public function editPatient(int $id, array $data): bool {
        $sql = "UPDATE attendance_register 
                SET patient_name = ?, card_number = ?, date_of_birth = ?, sex = ?, age = ?, 
                    contact_address = ?, state = ?, telephone = ?, first_contact = ?, 
                    nok_name = ?, nok_relationship = ?, nok_address = ?, nok_phone = ?
                WHERE id = ?";
        return $this->executeQuery($sql, "ssssisssssssi", [
            $data['patient_name'], $data['card_number'], $data['date_of_birth'], 
            $data['sex'], $data['age'], $data['contact_address'], $data['state'], 
            $data['telephone'], $data['first_contact'], $data['nok_name'], 
            $data['nok_relationship'], $data['nok_address'], $data['nok_phone'], $id
        ]);
    }

    public function getLaborPatients(): array {
        return $this->fetchAll("SELECT * FROM labour ORDER BY date DESC");
    }

    public function getLaborPatient(int $id): array {
        return $this->fetchAll("SELECT * FROM labour WHERE id = ?", "i", [$id]);
    }

    public function getOpdPatient(int $id): array {
        return $this->fetchAll("SELECT * FROM out_patient_dept WHERE id = ?", "i", [$id]);
    }

    /** 🔹 Sanitize for output */
    public function sanitize(string $field): string {
        return htmlspecialchars($field, ENT_QUOTES, 'UTF-8');
    }
}
