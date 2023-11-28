<?php
include('../connection.php');
session_start();
if (isset($_SESSION['login'])) {
    header(("location: ../admin/"));
}
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    if ($username === "admin" && $password === "admin12345") {
        $_SESSION['login'] = true;
        header(("location: ../admin/"));
    } else {
        echo "<script>alert('Incorrect password')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    <form method="POST" action="login.php" class="container p-4">
        <h4>Login</h4>
        <div class="input-group flex-nowrap">
            <input required name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <div class="input-group flex-nowrap mt-2">
            <input required name="password" type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
        </div>
        <button class="btn btn-primary mt-2" type="submit" name="submit">Login</button>
    </form>
</body>

</html>