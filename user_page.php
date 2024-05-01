<?php 
include 'config/db_conn.php';

session_start();

if(!isset($_SESSION['name'])){
    header ("location: login.php");
}


?>


<!doctype html>
    <html lang="en">
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
            <div class="header-top">Hi, <?php echo $_SESSION['name']; ?>
            your id is <?php echo $_SESSION['user_id']; ?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 d-none d-md-block">
                            <ul class="left-info">
                                <li><i class="bi bi-envelope"></i> Toothbook Dental Clinic</li>
                                <li><i class="bi bi-telephone"></i> 091909697989109</li>
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
                             <a href="      user_page.php">
                                 <img src="assets/images/tblogo.jpg" alt="toothbook dental cl1n1c">
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
                              <a class="nav-link" href="about_user.php">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="services_user.php">Services</a>
                          </li>
                          
                           <li class="nav-item">
                              <a class="nav-link" href="contact_user.php">Contact US</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="booking-system.php">Book Now</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pricing_user.php">Pricing</a>
                          </li>
                          <li class="nav-item">
                            <a href="booked-history.php" class="nav-link">Records</a>
                          </li>
                          <li class="nav-item">
                            <a href="notification.php" class="nav-link">Notifcation</a>
                          </li>
                      </ul>
                  </div>
                  </div>
              </nav>
      </div>
    </div>
</div>
            
</header>
  <body>
<div class="slider container-fluid">
    
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/tb1.jpg" class="d-block w-100" alt="...">
           <div class="carousel-caption d-none d-md-block">
            <h3 class="animate__animated animate__backInLeft">Care with Most Advanced Technology</h3>
            <p class="animate__animated animate__backInRight">Some representative placeholder content for the first slide. The implant fixture is first placed, so that it is likely to osseointegrate</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/s2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h3 class="animate__animated animate__backInLeft">Care with Most Advanced Technology</h3>
            <p class="animate__animated animate__backInRight">Some representative placeholder content for the first slide. The implant fixture is first placed, so that it is likely to osseointegrate</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/images/s3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h3 class="animate__animated animate__backInLeft">Care with Most Advanced Technology</h3>
            <p class="animate__animated animate__backInRight">Some representative placeholder content for the first slide. The implant fixture is first placed, so that it is likely to osseointegrate</p>
          </div>
        </div>
      </div><a href="about.php" title="about"></a>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    
    </div>
</div>

<section class="services container-fluid">
    <div class="container">
        <div class="row section-title">
            <h2>Our Services</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi semper in magna quis tincidunt. Donec at nisi et eros blandit elementum fermentum eget augue</p>
        </div>
        <div class="servic-row row">
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/001.png" alt="">
                    <h4>Dental Implants</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
                <div class="span mx-auto">More</div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/002.png" alt="">
                    <h4>Maxillofacial Surgery</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
                <div class="span mx-auto">More</div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/003.png" alt="">
                    <h4>Endodontics</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
                <div class="span mx-auto">More</div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/004.png" alt="">
                    <h4>Intervention Dentistry</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
                <div class="span mx-auto">More</div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/005.png" alt="">
                    <h4>Braces</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
                <div class="span mx-auto">More</div>
            </div>
            <div class="servic-col col-md-4">
                <div class="servcover">
                    <img src="assets/images/icon/006.png" alt="">
                    <h4>Teeth Whitening</h4>
                    <p>The implant fixture is first placed, so that it is likely to osseointegrate, then a dental prosthetic is added.</p>
                </div>
                <div class="span mx-auto">More</div>
            </div>
        </div>
    </div>
</section>

<!-- ################# Testimonial Starts Here#######################--->
<section class="testimonial-container">
    <div class="container">
         <div class="section-title row">
            <h2>Testimonial</h2>
            <p>Take a look at what people say about us</p>
        </div>
        <div class="row mt-5">
            <div class="col-md-offset-2 float-auto col-md-10">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <div class="pic">
                            <img src="assets/images/testimonial/member-01.jpg" alt="">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <h3 class="title">williamson
                            <span class="post"> -  Developer</span>
                        </h3>
                    </div>

                    <div class="testimonial">
                        <div class="pic">
                            <img src="assets/images/testimonial/member-02.jpg" alt="">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <h3 class="title">Kristina
                            <span class="post"> - Teacher</span>
                        </h3>
                    </div>


                    <div class="testimonial">
                        <div class="pic">
                            <img src="assets/images/testimonial/member-02.jpg" alt="">
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur.
                        </p>
                        <h3 class="title">Kristina
                            <span class="post"> - Teacher</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 <!--  ************************* Blog Starts Here ************************** -->
    <div class="blog">

        <div class="container">
              <div class="section-title row">
               <h2>Our Blog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
           
            <div class="row mt-5 blog-row">
                <div class="col-md-6 col-sm-12">
                    <div class="blog-singe no-margin row">
                        <div class="col-sm-5 blog-img-tab">
                            <img src="assets/images/blog/b1.jpg" alt="">
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <h2>Curabit finibus dui sem.</h2>
                            <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                            <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                            <a href="blog_single.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="blog-singe no-margin row">
                        <div class="col-sm-5 blog-img-tab">
                            <img src="assets/images/blog/b2.jpg" alt="">
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <h2>Excepteur sint occaecat</h2>
                            <p><i class="fas fa-user"><small>Admin</small></i>  <i class="fas fa-eye"><small>(12)</small></i>  <i class="fas fa-comments"><small>(12)</small></i></p>
                            <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                            <a href="blog_single.php">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


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
       
        <div class="col-md-3 glink">
            <ul>
                <li><a href="index.php"><i class="fas fa-angle-double-right"></i>Home</a></li>
                <li><a href="about_us.php"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                <li><a href="services.php"><i class="fas fa-angle-double-right"></i>Services</a></li>
                
                <li><a href="pricing.php"><i class="fas fa-angle-double-right"></i>Gallery</a></li>
                <li><a href="contact_us.php"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
                <li><a href="logout.php"><i class="fas fa-angle-double-right"></i>Logout</a></li>
                
            </ul>
        </div>
       
    </div>
</div>
</footer>



</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/testimonial/js/owl.carousel.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>

</html>

