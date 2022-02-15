<?php
include("connection/connection.php");
$sql = "SELECT * FROM STUDENT";
$result = mysqli_query($conn, $sql);
//mysqli_close($conn);
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
        <h1><a href="index.php"><span>My</span>Tech</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about-us">Club Info</a></li>
          <li><a class="nav-link scrollto" href="#features">Activity</a></li>
          <li><a class="nav-link scrollto" href="#screenshots">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#team">Members</a></li>
          <li><a class="nav-link scrollto" href="register.php">Registration</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-in">
      <h1>Welcome to MyTech Club</h1>
      <h2>Technology is The Future of Creativity</h2>
      <img src="assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <a href="#pricing" class="btn-get-started scrollto">Register Now!</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us padd-section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-5 col-lg-3">
            <img src="assets/img/codes.png" alt="About" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-md-7 col-lg-5">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">

              <h2>About <span>MyTech</span></h2>
              <p>MyTech club is an organization conducted by Faculty Computer Science UiTM Jasin to expose the knowledge about computer.
                There are various types of activity conducted by MyTech Club to educate the students regarding the computer world such as
                coding competition and hacking simulation.
              </p>

              <ul class="list-unstyled">
                <li><i class="vi bi-chevron-right"></i>Creative</li>
                <li><i class="vi bi-chevron-right"></i>Innovative</li>
                <li><i class="vi bi-chevron-right"></i>Critical Thinking</li>
                <li><i class="vi bi-chevron-right"></i>Problem Solving</li>
                <li><i class="vi bi-chevron-right"></i>Imaginative</li>
              </ul>

            </div>
          </div>

        </div>
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Club Activities</h2>
          <p class="separator">Peace your computer, peace your mind.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/paint-palette.svg" alt="img">
              <h4>creative design</h4>
              <p>Create an interactive design for website and system</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/design-tool.svg" alt="img">
              <h4>easy to use</h4>
              <p>Educate club members the shortcut on computer program</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/asteroid.svg" alt="img">
              <h4>free software</h4>
              <p>Provide free software and computer application for members</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="assets/img/svg/code.svg" alt="img">
              <h4>clean codes</h4>
              <p>Teach the members to write clean and good codes</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Screenshots Section ======= -->
    <section id="screenshots" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Gallery</h2>
          <p class="separator">I love my computer because my friends live in it</p>
        </div>

        <div class="screens-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/poster.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/poster 1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/poster 2.jpeg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/poster 3.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Screenshots Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Team Member</h2>
          <p class="separator">No, hitting the computer won't help. We will</p>
        </div>

        <div class="row">


          <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
              <thead>
                <tr>

                  <th class="">Member Name</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                  include('connection/connection.php');

                  echo "<tr>";

                  echo "<td>" . $row['STUD_NAME'] . "</td>";
                  echo '<td class="text-center">';
                  echo '<ul class="table-controls">';
                  echo '<li><a href="update-member.php?STUD_ID=' . urlencode($row['STUD_ID']) . '" data-toggle="tooltip" data-placement="top" title="Edit">Edit</a></li>';
                  echo '</ul>';
                  echo '</td>';
                  echo "</tr>";
                }
                ?>
              </tbody>
            </table>
          </div>




          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="hero-container" data-aos="fade-in">
              <center><button style="margin-bottom: 4px" class="btn btn-success" type="button" data-dismiss="modal">Update Member Information</button></center>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="padd-section text-cente">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Let's Join Us!</h2>
          <p class="separator">Frustrations? We Give Computer Solutions</p>
        </div>
        <!-- Pie Chart --> 
      <div class="col-xl-10 col-lg-10">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Gender of Member</h6>
            
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <div >
              <div id="donutchart" style="width: 900px; height: 500px;"></div>
            </div>
          
          </div>
        </div>
      </div>
       

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="hero-container" data-aos="fade-in">
            <center><button class="btn btn-success" type="button" data-dismiss="modal"><a style="color: white" class="button" href="register.php">Register Now!</a></button></center>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Contact</h2>
          <p class="separator">We talk to computers so you don't have to</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-4" placeholder="Name*" id="name">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control mb-4" placeholder="Email*" id="email">
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control mb-4" placeholder="Subject*" id="subject">
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" id="message" rows="5" placeholder="Message*"></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" onclick="send_ws()">Send Message</button></div>
              </form>
            </div>

          </div>
        </div>
      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.8200168934977!2d102.4509268147026!3d2.2213963983808775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d1c2904d683dc3%3A0x216b1d164eba26a1!2sUniversiti%20Teknologi%20MARA%20Cawangan%20Melaka%20Kampus%20Jasin!5e0!3m2!1sen!2smy!4v1644331249530!5m2!1sen!2smy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>




  </div>


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
  <script>
    function send_ws() {
      let msg = document.getElementById("message").value;
      let sub = document.getElementById("subject").value;
      let email = document.getElementById("email").value;
      let name = document.getElementById("name").value;
      var win = window.open(`https://wa.me/${60197418171}?text=Hello%20Nurul%20Syahmina,%0A%0AI%27m%20*${name}*%0A*Email:*%20${email}%0A*Message:*%20${msg}%0A*Subject:*%20${sub}`, '_blank');
      // win.focus();
    }
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['STUD_GENDER', 'total'],
        
        <?php
          include('connection/connection.php');
          $query = "SELECT STUD_GENDER, COUNT(*) AS total FROM student  GROUP BY STUD_GENDER ORDER BY total, STUD_GENDER";
          $result = mysqli_query($conn,$query);
          while($row = mysqli_fetch_assoc($result))
          {
            echo "['".$row['STUD_GENDER']."', ".$row['total']."],";
          }
        ?>
        ]);
        var options = {
          title: '',
          pieHole: 0.4,
        };
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</body>

</html>