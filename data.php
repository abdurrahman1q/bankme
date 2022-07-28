<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <?php require 'partails/nav.php' ?>

    <table class="container table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Accounts</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <!-- <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody> -->
    </table>
    <?php
    $con = new mysqli('localhost', 'root', " ", 'storedata');
    if (!$con) {
        mysqli_error($con);
    }
    $sql = "SELECT * FROM accounts"; //mysql for read data base

    $result = mysqli_query($con, $sql);
    if ($result) {
        $index = 1; //this variable for Ui/row no sl no.

        while ($row = mysqli_fetch_assoc($result)) {

            // print_r($row);



            $id =  $row['id'];
            $account = $row['account'];
            $email = $row['email'];
            $name = $row['name'];
        }
    }
    $index += 1;
    ?>
    <tr>
        <td scope="row"> <?php echo  $index; ?></td>
        <td><?php echo  $account; ?></td>
        <td><?php echo  $email; ?></td>
        <td><?php echo  $name; ?></td>



    </tr>
    ;
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>