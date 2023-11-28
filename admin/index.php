<?php
include('../connection.php');
session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hillespeack</title>
    <style>
        .navv{
            background-color: red !important;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-info bg-info navv">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
        </div>
    </nav>
    <div class="container p-5">
        <h3>Bookings</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Where To</th>
                    <th scope="col">How Many</th>
                    <th scope="col">Arrivals</th>
                    <th scope="col">Leaving</th>
                    <th scope="col">Timestamp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SelectQuery = mysqli_query($connection, "SELECT * FROM `bookings` WHERE 1 ORDER BY `id` DESC");
                if (mysqli_num_rows($SelectQuery) !== 0) {
                    while ($row = mysqli_fetch_assoc($SelectQuery)) {
                ?>
                        <tr>
                            <th><?php echo $row['id']; ?></th>
                            <td><?php echo $row['where_to']; ?></td>
                            <td><?php echo $row['how_many']; ?></td>
                            <td><?php echo $row['arrivals']; ?></td>
                            <td><?php echo $row['leaving']; ?></td>
                            <td><?php echo $row['timestamp']; ?></td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <h3>No Bookings.</h3>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="container p-5">
        <h3>Contact Messages</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Number</th>
                    <th scope="col">Message</th>
                    <th scope="col">Timestamp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $SelectQuery = mysqli_query($connection, "SELECT * FROM `contact` WHERE 1 ORDER BY `id` DESC");
                if (mysqli_num_rows($SelectQuery) !== 0) {
                    while ($row = mysqli_fetch_assoc($SelectQuery)) {
                ?>
                        <tr>
                            <th><?php echo $row['id']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['number']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['timestamp']; ?></td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <h3>No Contact Meesages.</h3>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>