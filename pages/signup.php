
<?php
$showAlert = false;
$showError = false;
$exists = false;

if($_SERVER["REQUEST_METHOD"]== "POST"){
    include ('dbconnect.php');

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 0){
        if(($password == $cpassword) && $exists==false){
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `users` (`name`, `email`, `password`, `date`) VALUES ('$name', '$email','$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if($result){
                $showAlert= true;
            }

        }
        else{
            $showError = true;
        }
    }
    if($num>0){
        $exists = "Email not available";
    }
}
?>

<?php
if($showAlert) {
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You can log in now.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
};
if($showError) {
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Alas!</strong> Password do not match.'. $showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
}
if($exists) {
echo ' <div class="alert alert-dangeralert-dismissible fade show" role="alert">
<strong>Error!</strong> '. $exists.'
<button type="button" class="close"data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span></button></div> ';
}

?>

    <div class="signup">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="?p=signup">
                        <div class="form-outline mb-4">
                            <input type="text" id="name1" name="name" class="form-control form-control-lg" placeholder="Your name">

                        </div>
                        <div class="form-outline  mb-4">
                            <input type="email" id="email1" name="email" class="form-control form-control-lg"
                                placeholder="Your email">

                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password1" name="password" class="form-control form-control-lg"
                                placeholder="Password">

                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="password1" name="cpassword" class="form-control form-control-lg"
                                placeholder="Repeat your password">

                        </div>
                        <div class=" mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="" id="check1" checked>
                                <label class="form-check-label" for="check1">
                                    I agree all statements in <a href="#!">Terms of service</a>
                                </label>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Sign up</button>
                        <div class="text-center mt-3">
                            <p>Already a member? <a href="./signin.html">Log in</a></p>

                        </div>
                        <div class="divider  align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <a href="#!" class="btn btn-primary btn-lg btn-block shadow  w-100 mb-2"
                            style="background-color: #3b5998;" role="button"><i
                                class="fab fa-facebook-f me-2"></i>Continue with Facebook</a>
                        <a href="#!" class="btn btn-primary btn-lg btn-block w-100 mb-2 shadow "
                            style="background-color: #55acee;" role="button"><i class="fab fa-twitter me-2"></i>Continue
                            with Twitter</a>
                        <a href="#!" class="btn btn-primary btn-lg btn-block w-100 shadow hover-shadow-lg "
                            style="background-color: #1c3468;" role="button"><i
                                class="fa-brands fa-google me-2"></i>Continue with Google</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

   