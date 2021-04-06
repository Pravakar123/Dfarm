<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dfarm";
    $port = 3307;

    $connection = mysqli_connect($server, $username, $password, $dbname, $port);

    if(!$connection) {
        die("Unable to Connect");
    }

?>