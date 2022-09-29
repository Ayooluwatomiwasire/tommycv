<?php
    $conn = new mysqli("localhost", "wetinde1_stroge", "oluwatimileyin", "wetinde1_stroge");
    if (mysqli_connect_errno()) {
        printf("connection failed: %s\n", mysqli_connect_error());

        exit();
    }



?>