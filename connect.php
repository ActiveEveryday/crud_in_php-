<?php 

    $conn = new mysqli('localhost','root','','crud');

    if(!$conn)
    {
        die(mysqli_errno($conn));
    }
?>