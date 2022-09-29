<?php
    $conn = new mysqli("localhost", "talkerti_profile", "tommysamuel", "talkerti_profile");
    if (mysqli_connect_errno()) {
        printf("connection failed: %s\n", mysqli_connect_error());

        exit();
    }



?>