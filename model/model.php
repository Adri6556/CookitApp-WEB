<?php
/**
 * Created by PhpStorm.
 * User: adrii
 * Date: 04/03/2017
 * Time: 2:04
 */
    require_once 'controller/connectDB.php';

    function getUser() {
        $conn = connectDB();

        $sql = 'SELECT First_Name, Last_Name, Password, City FROM User';
        $resQuery = $conn->query($sql);

        $conn->close();

        return $resQuery;
    }

    ?>