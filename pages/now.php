<?php

    require $_SERVER['DOCUMENT_ROOT'] . "/hospital/config/DB.php";
    $db = new DB();
    $results = $db->getLaborPatients();



    ?>

<?php foreach ($results->fetch_all(MYSQLI_ASSOC) as $result) : ?>
                    <tr>
                      <?php foreach ($result as $key => $val) : ?>
                        <td><?= $val ?></td>
                      <?php endforeach; ?>
                    </tr>

                  <?php endforeach; ?>