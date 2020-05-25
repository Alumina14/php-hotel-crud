<?php
    header('Content-Type: application/json');

    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbName = 'hotel_db';
    $conn = new mysqli($server, $username, $password, $dbName);
    if ($conn -> connect_errno) {
        echo $conn -> connect_errno;
        return;
    }
    $sql = "
        SELECT status, price
        FROM pagamenti
    ";
    $results = $conn -> query($sql);
    if ($results -> num_rows < 1) {
        echo "no result";
        return;
    }
      $res = [];
    while ($row = $results -> fetch_assoc()) {
        $res[] = $row['status'] . " " . $row['price'];
    }

    $conn -> close();

    echo json_encode($res);
