<?php 
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['phone'];
        $password=$_POST['password'];

        $insert_query = "INSERT INTO `users_details`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
        $result = $conn->query($insert_query);

        if($result)
        {
            header('location:display.php');
        }
        else{
            die($conn->error);
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label for="user-name" class="form-label">Name</label>
                <input type="text" class="form-control" id="user-name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="email-add" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email-add" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="phone-num" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phone-num" name="phone" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="pass-word" class="form-label">Password</label>
                <input type="password" class="form-control" id="pass-word" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>