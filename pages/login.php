<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/Css/style.css" />
    <title>The Gallery Cafe</title>
</head>

<body>

    <!-- Header -->

    <header class="pg2header">
        <nav>
            <div class="nav__header">
            </div>
           
            <ul class="nav__links" id="nav-links">
                <li><a href="../Index.html">Home</a></li>
                <li><a href="#reservation">RESERVATIONS</a></li>
                <li><a href="#event">EVENTS</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="#about">ABOUT</a></li>
            </ul>
        </nav>
        </div>
    </header>

<!-- Login -->


<section class="vh-100 signinform">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Sign in</h3>

                        <?php
                        session_start();
                        if (isset($_SESSION['success_message'])) {
                            echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
                            echo '<input type="hidden" id="redirectUrl" value="../index.html">';
                            unset($_SESSION['success_message']);
                        }
                        if (isset($_SESSION['error_message'])) {
                            echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
                            unset($_SESSION['error_message']);
                        }
                        ?>

                        <form method="POST" action="../assets/php/login.php">
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" name="email" required />
                                <label class="form-label" for="typeEmailX-2">Email</label>
                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" required />
                                <label class="form-label" for="typePasswordX-2">Password</label>
                            </div>

                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                                <label class="form-check-label" for="form1Example3"> Remember password </label>
                            </div>

                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                            <hr class="my-4">

                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="button">
                                <i class="fab fa-google me-2"></i> Sign in with google
                            </button>
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;" type="button">
                                <i class="fab fa-facebook-f me-2"></i>Sign in with facebook
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer  -->
    <br>
    <hr>
    <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__logo">
            </div>
            <div class="footer__content">
                <p>
                    Welcome to The Gallery Cafe, where passion for exceptional food and
                    genuine hospitality come together. Our story is one of dedication to
                    crafting the perfect food experience, from sourcing the finest
                    ingredients to delivering unparalleled taste in every bite.
                </p>
                <div>
                    <ul class="footer__links">
                        <li>
                            <span><i class="ri-map-pin-2-fill"></i></span>
                            No.125/4,
                            Peter Street,
                            Bambalapitiya
                        </li>
                        <li>
                            <span><i class="ri-mail-fill"></i></span>
                            info@thegallerycafe.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </footer>
</body>

</html>