<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ('dbconnect.php');
    $email = $_POST["email"];
    $password = $_POST["password"];


  $sql = "Select * from users where email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("location: home.php");
  } else {
    $showError = "Invalid Credentials";
  }
}

?>
     <div class="login">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log in</p>
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form>
                        <div class="form-outline mb-4">
                            <input type="email" id="email1" class="form-control form-control-lg"
                                placeholder="Email address">

                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="password1" class="form-control form-control-lg"
                                placeholder="Password">

                        </div>
                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="" id="check1" checked>
                                <label for="check1" class="form-check-label">Remember me</label>
                            </div>
                            <a href=""> Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block w-100">Sign in</button>
                        <div class="text-center mt-3">
                            <p>Not a member? <a href="./signup.html">Register</a></p>

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
                        <a href="#!" class="btn btn-primary btn-lg btn-block w-100 shadow hover-shadow-lg"
                            style="background-color: #1c3468;" role="button"><i
                                class="fa-brands fa-google me-2"></i>Continue with Google</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
   