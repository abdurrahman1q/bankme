<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snow Bre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100&family=Josefin+Sans:wght@200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./book-library-with-open-textbook.jpg" class="d-block w-100" height="586" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://ychef.files.bbci.co.uk/976x549/p01ljjs2.jpg" class="d-block w-100"
                    style="height: 586px;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/premium-photo/chair-with-books-background-bookshelves-library-background_105428-3837.jpg?w=2000"
                    class="d-block w-100" style="height: 586px;" alt="...">
            </div>
        </div>

    </div>
    <nav class="navbar navbar-light bg-dark">
        <div class="container col-6 col-md-6 ">
            <ul class="navbar-nav d-flex flex-row me-auto mb-2 mb-lg-0 d-flex">
                <li class="nav-item p-1"><a class=" nav-link" href="#">
                        <i class="fa-brands fa-facebook text-white"></i>
                    </a></li>
                <li class="nav-item p-1"><a class=" nav-link" href="#">
                        <i class="fa-brands fa-youtube text-white"></i>
                    </a></li>
                <li class="nav-item p-1"> <a class=" nav-link" href="#">
                        <i class="fa-brands fa-reddit text-white"></i>
                    </a></li>
                <li class="nav-item p-1"><a class=" nav-link" href="#">
                        <i class="fa-brands fa-twitter text-white"></i>
                    </a></li>
                <li class="nav-item p-1"><a class=" nav-link" href="#">
                        <i class="fa-brands fa-linkedin text-white"></i>
                    </a></li>
            </ul>
        </div>
        <div class="container d-flex flex-row-reverse col-6 col-md-6 ">
            <ul>
                <button type="button" class="btn btn-outline-warning btn-rounded p-1">
                    <a href="?p=signup" class="text-light text-decoration-none sign " >Sign up!</a>
                </button>
                <button type="button" class="btn btn-outline-warning btn-rounded p-1">
                    <a href="?p=signin" class="text-light text-decoration-none">Log in!</a>
                </button>
            </ul>
        </div>
    </nav>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-dark text-light" id="navbar-example2">
        <div class="container-fluid">
            <button class="navbar-toggler border border-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-white "></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand text-light" href="#">
                    SnowBreezeLibrary
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="?p=home" class="nav-link active text-light " aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#scrollspyHeading1">Posts</a>
                    </li>
                    <div class="carvd border border-white rounded-pill d-flex justify-content-center align-items-center"
                        style="width: 10rem;">
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="checkbox" onclick="setDarkMode()">
                            <label for="checkbox" class="form-check-label">Dark Mode</label>
                        </div>
                    </div>
                </ul>
                <form class="d-flex input-group w-auto">
                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    <button class="btn btn-outline-warning" type="button" data-bs-ripple-color="dark">Search</button>
                </form>
            </div>
        </div>
    </nav>

<?php 
include('controller/controller.php')
?>

    <footer class="text-center text-white bg-dark">

        <div class="container p-4 pb-0">


            <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Join the Community </span>
                <button type="button" class="btn btn-outline-light btn-rounded">
                    <a href="./signup.html" class="t text-decoration-none">Sign up!</a>
                </button>
            </p>


        </div>



        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="https://github.com/abdurrahman1q/">Abdur Rahman</a>
        </div>

    </footer>
    <!-- <a href="#" style="z-index: 999;
    padding: 10px 12px;
    text-align: center;
    background: #4a5969;
    border-radius: 50%;
    font-weight: 700;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    position: fixed;
    bottom: 75px;
    right: 15px;
    display: inline;"><span class="fas fa-angle-up"> </span>
    </a> -->
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="main.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        if (localStorage.getItem('theme') == 'dark') {
            setDarkMode();
            if (document.getElementById('checkbox').checked) {
                localStorage.setItem('checkbox', true)
            }
        }

        function setDarkMode() {
            let isDark = document.body.classList.toggle('darkmode');
            if (isDark) {
                setDarkMode.checked = true;
                localStorage.setItem('theme', 'dark');
                document.getElementById('checkbox').setAttribute('checked', 'checked');
            } else {
                setDarkMode.checked = true;
                localStorage.removeItem('theme', 'dark');
            }
        }
    </script>
</body>

</html>