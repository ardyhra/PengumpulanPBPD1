<!-- Nama : Aldisar Gibran -->
<!-- NIM : 24060122130081 -->
<!-- Tanggal : 25-09-2024 -->

<?php
    $db_host="localhost";
    $db_database="bookorama";
    $db_username="root";
    $db_password= "";

    // connect database
    $db = new mysqli($db_host, $db_username, $db_password, $db_database);
    if ($db->connect_error) {
        die("Could not connect to the database: <br />". $db->connect_error);
    }

    function test_input($data) {
        $data = trim($data);;
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>