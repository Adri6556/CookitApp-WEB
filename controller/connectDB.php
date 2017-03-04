<?php

    function connectDB() {

        $servername = 'cookitapp-4891.mysql.dbs.appsdeck.eu:31185';
        $username = 'cookitapp_4891';
        $password = 'MXprIyeyvoZ9pKIuUJ7R';
        $dbname = 'cookitapp_4891';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn -> connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }
        // Setting the return characters from the database PHP queries to  UTF-8.
        $conn->set_charset('utf8');

        return $conn;

    }

?>