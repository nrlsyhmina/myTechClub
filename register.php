<?php

if (isset($_POST['save'])) {
    include("connection/connection.php");

    $STUD_NAME = strtoupper($_POST['STUD_NAME']);
    $STUD_IC = $_POST['STUD_IC'];
    $STUD_USERNAME = $_POST['STUD_USERNAME'];
    $STUD_PASSWORD = $_POST['STUD_PASSWORD'];
    $STUD_ADDRESS = strtoupper($_POST['STUD_ADDRESS']);
    $STUD_GENDER = $_POST['STUD_GENDER'];
    $STUD_EMAIL = $_POST['STUD_EMAIL'];
    $STUD_CLASS = $_POST['STUD_CLASS'];
    $STUD_AGE = $_POST['STUD_AGE'];
    $STUD_PHONE = $_POST['STUD_PHONE'];

    $duplicate = "SELECT STUD_IC FROM STUDENT WHERE STUD_IC = '$STUD_IC'";
    $check = mysqli_query($conn, $duplicate);
    $checkrows = mysqli_num_rows($check);


    if ($checkrows > 0) {
        header("Location: register.php?op=errkod");
        return false;
    } else {
        $query = "INSERT INTO STUDENT(STUD_NAME, STUD_IC, STUD_USERNAME, STUD_PASSWORD, STUD_ADDRESS, STUD_GENDER, STUD_EMAIL, STUD_CLASS, STUD_AGE, STUD_PHONE)
        VALUES('$STUD_NAME', '$STUD_IC','$STUD_USERNAME', '$STUD_PASSWORD', '$STUD_ADDRESS', '$STUD_GENDER', '$STUD_EMAIL', '$STUD_CLASS', '$STUD_AGE' , '$STUD_PHONE')";
    }


    if (!mysqli_query($conn, $query)) {
        echo "<script>
  $(document).ready(function(){
    $('#myModal').modal('show');
  });
    </script>";

        header("Location: register.php?op=errkod");
    } else {
        echo "<script>
    $(document).ready(function(){
      $('#myModal').modal('show');
    });
      </script>";

        header("Location: index.php?op=success");
    }

    echo $query;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MyTech Club</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    

    <!-- =======================================================
  * Template Name: eStartup - v4.7.0
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div id="logo">
                <h1><a href="index.html"><span>My</span>Tech</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="register.php">Registration</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            <h1>Register as Member of MyTech Club</h1>
            <h2>Technology is The Future of Creativity</h2>
            <img src="assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
        </div>
    </section><!-- End Hero Section -->

    <main id="main">


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="padd-section">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Registration</h2>
                    <p class="separator">Become our Tech People Now!</p>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">



                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="register.php" method="post" role="form" name="register" onsubmit="return validateForm()">
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_NAME" class="form-control" id="STUD_NAME" placeholder="Your Name" maxlength="50" required>
                                    <font style="color: red;"><p id="err_uname"></p></font>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="STUD_EMAIL" id="STUD_EMAIL" placeholder="Your Email" required>
                                    <font style="color: red;"><p id="err_mail"></p></font>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_IC" class="form-control" id="STUD_IC" placeholder="Your IC Number" maxlength="12" required>
                                    <font style="color: red;"><p id="err_ic"></p></font>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_USERNAME" class="form-control" id="STUD_USERNAME" placeholder="Your Username" required>
                                    <font style="color: red;"><p id="err_stduname"></p></font>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="password" name="STUD_PASSWORD" class="form-control" id="STUD_PASSWORD" placeholder="Your Password" minlength="5" maxlength="12" required>
                                    <font style="color: red;"><p id="err_pass"></p></font>  `
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_ADDRESS" class="form-control" id="STUD_ADDRESS" placeholder="Your Home Address" required>
                                    <font style="color: red;"><p id="err_address"></p></font>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="radio" id="gender1" name="STUD_GENDER" value="Female">
                                    <label for="gender1">Female</label><br>
                                    <input type="radio" id="gender2" name="STUD_GENDER" value="Male">
                                    <label for="gender2">Male</label><br>
                                    <input type="radio" id="gender3" name="STUD_GENDER" value="Rather Not To Say">
                                    <label for="gender3">Rather Not To Say</label><br><br>
                                    <font style="color: red;"><p id="err_gender"></p></font>
                                </div>
                                <div class="form-group mt-3">
                                    <select name="STUD_CLASS" id="STUD_CLASS">
                                        <option value="classA">M3CS2306A</option>
                                        <option value="classB">M3CS2306B</option>
                                        <option value="classC">M3CS2306C</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="number" name="STUD_AGE" class="form-control" id="STUD_AGE" placeholder="Your Age" required>
                                    <font style="color: red;"><p id="err_age"></p></font>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="number" name="STUD_PHONE" class="form-control" id="STUD_PHONE" placeholder="Your Phone Number" required>
                                    <font style="color: red;"><p id="err_tnum"></p></font>
                                </div>
                                <div class="text-center"><button type="submit" name="save">Register</button>
                                <button type="reset">Reset</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-4">
                    <div class="footer-logo">

                        <a class="navbar-brand" href="#">MyTech</a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>Support</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">faq</a></li>
                            <li><a href="#">Editor help</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="list-menu">

                        <h4>About Us</h4>

                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Features item</a></li>
                            <li><a href="#">Live streaming</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

        <div class="copyrights">
            <div class="container">
                <p>&copy; Copyrights eStartup. All rights reserved.</p>
                <div class="credits">
                    <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
                   
                </div>
            </div>
        </div>

    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
            function validateForm(){
                let val;
                let text;
                //VALIDATE FULL NAME
                let stdname = document.getElementById("STUD_NAME").value;
                if (stdname.length > 50 )
                {
                    text = "Your input exceeds 50 characters!!";
                    document.getElementById("err_uname").innerHTML = text;
                    val = false;
                }
                if (!stdname)
                {
                    text = "Please fill in this field";
                    document.getElementById("err_uname").innerHTML = text;
                    val = false;
                }
                //VALIDATE IC NUMBER
                let ic_num = document.getElementById("STUD_IC").value;
                if (ic_num.length > 12 || ic_num.length < 12 )
                {
                    text = "Please enter the 12 digits of IC number without '-'";
                    document.getElementById("err_ic").innerHTML = text;
                    val = false;
                }
                if (!ic_num)
                {
                    text = "Please fill in this field";
                    document.getElementById("err_ic").innerHTML = text;
                    val = false;
                }
                //VALIDATE EMAIL
                let email = document.getElementById("STUD_EMAIL").value;
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
                {
                    text = "Please enter the valid email form ie. meton@gmail.com";
                    document.getElementById("err_mail").innerHTML = text;
                    val = false;
                }
                if (!email)
                {
                    text = "Please fill in this field";
                    document.getElementById("err_mail").innerHTML = text;
                    val = false;
                }
                //VALIDATE ADDRESS
                let address = document.getElementById("STUD_ADDRESS").value;
                if (!address)
                {
                    text = "Please fill in this field";
                    document.getElementById("err_address").innerHTML = text;
                    val = false;
                }
                //VALIDATE INTEREST
                var checkBoxes = document.getElementsByClassName( 'STUD_CLASS' );
                var isChecked = false;
                for (var i = 0; i < checkBoxes.length; i++) {
                    if ( checkBoxes[i].checked ) {
                        isChecked = true;
                    };
                };
                if (isChecked) {
                    text = "Please, check at least one checkbox!";
                    document.getElementById("err_interest").innerHTML = text;
                    val = false;
                }  
                //VALIDATE PHONE NUMBER
                let x = document.getElementById("STUD_PHONE").value;
                if (!/^[0-9]+$/.test(x)) {
                   text = "Input not numbers";
                   document.getElementById("err_tnum").innerHTML = text;
                   val = false;
                } 
                if (!x) {
                   text = "Please fill in this field";
                   document.getElementById("err_tnum").innerHTML = text;
                   val = false;
                }
                //VALIDATE GENDER RADIOBOX
                var radios = document.getElementsByName("STUD_GENDER");
                checked = false;
                for (var i = 0, len = radios.length; i < len; i++) {
                    if (radios[i].checked) {
                        checked = true;
                    }
                }
                if (!checked ) {
                    text = "Please, check at least one input!";
                    document.getElementById("err_gender").innerHTML = text;
                    val = false;
                } 
                //VALIDATE AGE
                let age = document.getElementById("STUD_AGE").value;
                if (!/^[0-9]+$/.test(age)) {
                   text = "Input not numbers";
                   document.getElementById("err_age").innerHTML = text;
                   val = false;
                } 
                if (!age) {
                   text = "Please fill in this field";
                   document.getElementById("err_age").innerHTML = text;
                   val = false;
                }
                //VALIDATE USERNAME
                let stduname = document.getElementById("STUD_USERNAME").value;
                if (stduname.length <5 || stduname.length >20)
                {
                    text = "Your input must be in range of 5-20 characters only!!";
                    document.getElementById("err_stduname").innerHTML = text;
                    val = false;
                }
                if (!stduname)
                {
                    text = "Please fill in this field";
                    document.getElementById("err_stduname").innerHTML = text;
                    val = false;
                }
                //VALIDATE PASSWORD
                let pass = document.getElementById("STUD_PASSWORD").value;
                if (pass.length <5 || pass.length >20)
                {
                    text = "Your password must be in range of 5-20 characters only!!";
                    document.getElementById("err_pass").innerHTML = text;
                    val = false;
                }
                if (!pass)
                {
                    text = "Please fill in this field";
                    document.getElementById("err_pass").innerHTML = text;
                    val = false;
                }
    
                return val;
            }
        </script>

</body>

</html>