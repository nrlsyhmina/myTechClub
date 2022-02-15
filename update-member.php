<?php

if (isset($_GET['STUD_ID'])) {
    include("connection/connection.php");
    $STUD_ID = urldecode($_GET['STUD_ID']);
    $sql = "SELECT * FROM STUDENT WHERE STUD_ID = $STUD_ID";
    //echo $sql;
    $qry = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($qry);
}

if (isset($_POST['update'])) {
    include("connection/connection.php");
    $STUD_ID = $_POST['STUD_ID'];
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


        $query = "UPDATE STUDENT SET
        STUD_NAME = '$STUD_NAME',
        STUD_IC = '$STUD_IC',
        STUD_USERNAME = '$STUD_USERNAME',
        STUD_PASSWORD = '$STUD_PASSWORD', 
        STUD_ADDRESS = '$STUD_ADDRESS', 
        STUD_GENDER = '$STUD_GENDER', 
        STUD_EMAIL = '$STUD_EMAIL', 
        STUD_CLASS = '$STUD_CLASS',
        STUD_AGE = '$STUD_AGE' , 
        STUD_PHONE = '$STUD_PHONE'
        WHERE STUD_ID = $STUD_ID";
    



    if (!mysqli_query($conn, $query)) {
        echo "<script>
  $(document).ready(function(){
    $('#myModal').modal('show');
  });
    </script>";

        header("Location: index.php?op=errkod");
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
else if (isset($_POST['delete'])) {
    include("connection/connection.php");
    $STUD_ID = $_POST['STUD_ID'];
    $STUD_NAME = $_POST['STUD_NAME'];
    $STUD_IC = $_POST['STUD_IC'];
    $STUD_USERNAME = $_POST['STUD_USERNAME'];
    $STUD_PASSWORD = $_POST['STUD_PASSWORD'];
    $STUD_ADDRESS = $_POST['STUD_ADDRESS'];
    $STUD_GENDER = $_POST['STUD_GENDER'];
    $STUD_EMAIL = $_POST['STUD_EMAIL'];
    $STUD_CLASS = $_POST['STUD_CLASS'];
    $STUD_AGE = $_POST['STUD_AGE'];
    $STUD_PHONE = $_POST['STUD_PHONE'];


        $query = "DELETE from student WHERE  STUD_ID = $STUD_ID";
 
    if (!mysqli_query($conn, $query)) {
        echo "<script>
        $(document).ready(function(){
            $('#myModal').modal('show');
        });
            </script>";

        header("Location: index.php?op=errkod");
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

    <script language="javascript">
        function validateForm() {
            let ic = document.forms["register"]["STUD_IC"].value;
            if (ic == "") {
                alert("Name must be filled out");
                return false;
            }

            let name = document.forms["register"]["STUD_NAME"].value;
            if (name == "") {
                alert("Name must be filled out");
                return false;
            }

            let username = document.forms["register"]["STUD_USERNAME"].value;
            if (username == "") {
                alert("Name must be filled out");
                return false;
            }

            let password = document.forms["register"]["STUD_PASSWORD"].value;
            if (password == "") {
                alert("Name must be filled out");
                return false;
            }

            let address = document.forms["register"]["STUD_ADDRESS"].value;
            if (address == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>

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
                <h1><a href="index.php"><span>My</span>Tech</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" title="" /></a>-->
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
                    <h2>Update Member</h2>
                    <p class="separator">Become our Tech People Now!</p>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">



                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="update-member.php" method="post" role="form" name="register">
                            <div class="form-group mt-3">
                                    <input type="text" name="STUD_ID" class="form-control" value="<?php echo $row['STUD_ID']; ?>" id="STUD_ID" maxlength="50" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_NAME" class="form-control" value="<?php echo $row['STUD_NAME']; ?>" id="STUD_NAME" maxlength="50" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="STUD_EMAIL" id="STUD_EMAIL" value="<?php echo $row['STUD_EMAIL']; ?>" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_IC" class="form-control" id="STUD_IC" value="<?php echo $row['STUD_IC']; ?>" maxlength="12" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_USERNAME" class="form-control" id="STUD_USERNAME" value="<?php echo $row['STUD_USERNAME']; ?>" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="password" name="STUD_PASSWORD" class="form-control" id="STUD_PASSWORD" value="<?php echo $row['STUD_PASSWORD']; ?>" minlength="5" maxlength="12" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" name="STUD_ADDRESS" class="form-control" id="STUD_ADDRESS" value="<?php echo $row['STUD_ADDRESS']; ?>" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="radio" id="gender1" name="STUD_GENDER" value="Female">
                                    <label for="gender1">Female</label><br>
                                    <input type="radio" id="gender2" name="STUD_GENDER" value="Male">
                                    <label for="gender2">Male</label><br>
                                    <input type="radio" id="gender3" name="STUD_GENDER" value="Rather Not To Say">
                                    <label for="gender3">Rather Not To Say</label><br><br>
                                </div>
                                <div class="form-group mt-3">
                                    <select name="STUD_CLASS" id="STUD_CLASS">
                                        <option value="classA">M3CS2306A</option>
                                        <option value="classB">M3CS2306B</option>
                                        <option value="classC">M3CS2306C</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="number" name="STUD_AGE" class="form-control" id="STUD_AGE" value="<?php echo $row['STUD_AGE']; ?>" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="number" name="STUD_PHONE" class="form-control" id="STUD_PHONE" value="<?php echo $row['STUD_PHONE']; ?>" required>
                                </div><br>
                                <div class="text-center"><button type="submit" name="update">Update</button>
                                <button type="submit"  name="delete">Delete</button></div>
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
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

</body>

</html>