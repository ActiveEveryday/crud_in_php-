<?php 
    include 'connect.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $delete_query = "DELETE FROM `users_details` WHERE id='$id'";
        $result = $conn->query($delete_query);
        if($result)
        {
            header('location:display.php');
        }
        else
        {
            echo "Somthing Went Wrong!!";
        }
    }
?>