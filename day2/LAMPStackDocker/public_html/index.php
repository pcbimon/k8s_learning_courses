<?php
// variable for connecting to the database
$host = "mysql";
$username = "admin";
$password = "1234";

// connect to the database
$connect = mysqli_connect($host, $username, $password);

// set the database
$db = mysqli_select_db($connect, "sample_db");

// check if the connection is successful
if ($connect) {
    // echo "Connection database and selected db successful";

    $sql = "SELECT * FROM titanic limit 10";
    $result = mysqli_query($connect, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
        $data[] = $row;
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
    
} else {
    echo "Connection database failed!";
}