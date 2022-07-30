<?php
$con = new mysqli('localhost', 'root', " ", 'practice');
if (!$con) {
    mysqli_error($con);
}
if (isset($_POST['submit'])) {
    $account = $_POST['account'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    

    $insert_query = "INSERT INTO accounts(account , email ,name) VALUES ('$account', '$email','$name')";
    $submit = mysqli_query($con, $insert_query);

    if ($submit) {
        header("location: data.php");
    } else {
        echo 'beta tumse na ho payega';
    }
}
