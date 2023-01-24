<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    class DB {
        private $host;
        private $user;
        private $password;
        private $dbname;
        public $conn;

        public function __construct($host = 'localhost', $user = 'root', $password = '', $dbname = 'hospital') {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->dbname = $dbname;
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname) or die("Failed to connect to MySQLi" . $this->conn->connect_error) ;
        }

        public function getAllPatients() {
            $sql = 'SELECT * FROM `attendance_register` ORDER BY `attendance_register`.`age` ASC';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->get_result();
        }

        public function getAllStates() {
            $sql = 'select * from states';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->get_result();
        }

        // public function addPatient() {
        //     $sql = "insert into attendance register ";
        //     $stmt = $this->conn->prepare($sql);
        //     $stmt->bind_param();
        // }
        public function editPatient($id) {
            $sql = "UPDATE `attendance_register` SET `date` = '2022-09-10 03:31:10', `patient_name` = 'Andrew Peter', `card_number` = 'J890', `date_of_birth` = '2000-06-12', `sex` = 'male', `age` = '21', `contact_address` = 'Apo', `state` = 'Abia', `telephone` = '08119071285', `first_contact` = 'yes', `nok_name` = 'Musa Milla', `nok_relationship` = 'Sister', `nok_address` = 'Dutse', `nok_phone` = '08045761211' WHERE `attendance_register`.`id` = 1";
            
        }

        public function getPatient($id) {
            $sql = "SELECT * FROM attendance_register where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result();
        }

        public function getLaborPatients() {
            $sql =  "SELECT * FROM `labour` ORDER BY `labour`.`date` DESC";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->get_result();
        }

        public function getLaborPatient($id) {
            $sql = "select * from labour where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result();
        }

        public function getOpdPatient($id) {
            $sql = "SELECT * FROM `out_patient_dept` where id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param('i', $id);
            $stmt->execute();
            return $stmt->get_result();
        }

        public function sanitize($field) {
            return htmlentities(htmlspecialchars($field));
        }
    }