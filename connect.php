<?php
    $conn = mysqli_connect('localhost', 'root', 'root', 'fitzy_database');
    if(!$conn)
    {
        echo "Could not connect to server: ".mysqli_connect_error();
    }
