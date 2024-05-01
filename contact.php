<?php 
 include 'config/db_conn.php';
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $message = $_POST['message'];

    $sql = ("INSERT INTO contact_form (name, email, contact_number, message) VALUES ('$name', '$email', '$contact_number','$message')");
$sqlquery= mysqli_query($conn, $sql);
echo '<script>alert("Successfully submitted")</script>';

 }else{
    $error[] = "Theres an error while sending message, please try again later.";
    echo '<script>alert('. $error .'))</script>';
 }



?>



<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dental Hospital Website Template | Smarteyeapps.com</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/testimonial/css/owl.theme.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>

    <body>
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-none d-md-block">
                            <ul class="left-info">
                                <li><i class="bi bi-envelope"></i> info@smarteyeapps.com</li>
                                <li><i class="bi bi-telephone"></i> +91 9159669599</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="rit-info">
                                <li><i class="bi bi-stopwatch"></i> Mn - St: 8:00am - 9:00pm Sn: Closed</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12  mx-auto logo-col">
                            <a href="index.php">
                                 <img src="assets/images/logo.png" alt="">
                            </a>
                           
                            <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                             <i class="bi bi-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div  class="nav-row">
                <div class="container">
                    <div id="menu-jk" class="nav-row">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                      <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="about.php">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="services.php">Services</a>
                          </li>
                           <li class="nav-item">
                              <a class="nav-link" href="blog.php">Blog</a>
                          </li>
                           <li class="nav-item">
                              <a class="nav-link" href="contact.php">Contact US</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pricing.php">Pricing</a>
                          </li>
                         
                      </ul>
                  </div>
                  </div>
              </nav>
      </div>
    </div>
</div>
            
</header>
   <!--  ************************* Page Title Starts Here ************************** -->
<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>Contact Us</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li><i class="fas fa-angle-double-right"></i> Contact Us</li>
            </ul>
        </div>
    </div>
</div>
   
   


      <!--  ************************* Contact Us Starts Here ************************** -->

<form action="" method="post">
    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <h2 >Contact Form</h2> <br>
                    <div class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Name </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                        <div class="col-sm-8"><input type="text" name="contact_number" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="message"></textarea>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-success btn-sm" name="submit">Send Message</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">

                    <div style="margin:50px" class="serv">





                        <h2 style="margin-top:10px;">Address</h2>

                       Antonya Street, <br>
                        23/H-2, Building<br>
                        TA, AUS District<br>
                        Phone:+91 9159669599<br>
                        Email:support@smarteyeapps.com<br>
                        Website:www.smarteyeapps.com.com<br>







                    </div>


                </div>

            </div>
        </div>

    </div>

    </form>
<!--********************************* Footer Starts Here ********************************************-->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 about">
                <h2>About Us</h2>
                <p>Phasellus scelerisque ornare nisl sit amet pulvinar. Nunc non scelerisque augue. Proin et sollicitudin velit. </p>
                
                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="addet">
                        BlueDart
                        Marthandam (K.K District)
                        Tamil Nadu, IND 
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="addet">
                        info@smarteyeapps.com <br>
                        sales@smarteyeapps.com
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                       <i class="fas fa-mobile-alt"></i>
                   </div>
                   <div class="addet">
                    +23 323 43434 <br>
                    +1 3232 434 55
                </div>
            </div>
        </div>
        <div class="col-md-3 fotblog">
            <h2>From latest Blog</h2>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
            <div class="blohjb">
                <p>dignissim. Integer tempor facilisis malesuada. Proin ac varius velit, tincidunt condimentum</p>
                <span>22-1-2019</span>
            </div>
        </div>
        <div class="col-md-3 glink">
            <ul>
                <li><a href="index.php"><i class="fas fa-angle-double-right"></i>Home</a></li>
                <li><a href="about_us.php"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                <li><a href="services.php"><i class="fas fa-angle-double-right"></i>Services</a></li>
                <li><a href="blog.php"><i class="fas fa-angle-double-right"></i>Blog</a></li>
                <li><a href="pricing.php"><i class="fas fa-angle-double-right"></i>Gallery</a></li>
                <li><a href="contact_us.php"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
            </ul>
        </div>
        <div class="col-md-3 tags">
            <h2>Easy Tags</h2>
            <ul>
                <li>Finance</li>
                <li>Web Design</li>
                <li>Internet Pro</li>
                <li>Node Js</li>
                <li>Java Swing</li>
                <li>Angular Js</li>
                <li>Vue Js</li>
            </ul>
        </div>
    </div>
</div>
</footer>
<div class="copy">
    <div class="container">
        <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>
        <span>
            <a><i class="fab fa-github"></i></a>
            <a><i class="fab fa-google-plus-g"></i></a>
            <a><i class="fab fa-pinterest-p"></i></a>
            <a><i class="fab fa-twitter"></i></a>
            <a><i class="fab fa-facebook-f"></i></a>
        </span>
    </div>
</div>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>

        </html>