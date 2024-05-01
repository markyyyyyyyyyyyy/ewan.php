
<?php
include 'config/db_conn.php';
include 'appointments.php';

session_start();


if(isset($_GET['submit'])){
 
   
$contact_number =  $_GET['contact_number'];
    $date = $_GET['date'];
    $time =  $_GET['time'];
    $branch =  $_GET['branch'];
    $sql = "INSERT INTO appointments ( contact_number, date, time, branch, uid) VALUES ('$contact_number', '$date', '$time', '$branch', '$_SERVER['uid']')";
    $sql1 = mysqli_query($conn, $sql);
     
    
    if($sql1){
    $success[] = "successfully booked";
    }
    }
    

$user = $_SESSION['user_name'];
$sqlselect = "SELECT * FROM users where user_name = '$user'";
$query = mysqli_query($conn, $sqlselect);
$row = mysqli_fetch_array($query);
$id = $row['id'];
echo $id;

if(!isset($_SESSION['name'])){
    header ("location: login.php");
}






?>

<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Toothbook Dental Clinic</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                                <li><i class="bi bi-envelope"></i> toothbookdentalcare@gmail.com</li>
                                <li><i class="bi bi-telephone"></i> 0917-624-3186</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="rit-info">
                                <li><i class="bi bi-stopwatch"></i> Monday - Sunday: 8:00am - 7:00pm</li>
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
                                 <img src="tblogo.jpg" alt="">
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
                              <a class="nav-link active" aria-current="page" href="user_page.php">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="about_user.php">About Us</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="pricing_user.php">Services/pricing</a>
                          </li>
                          
                           <li class="nav-item">
                              <a class="nav-link" href="contact_user.php">Contact US</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="booking-system.php">Book Now</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="notification.php">Notification</a>
                          </li>
                         
                      </ul>
                  </div>
                  </div>
              </nav>
      </div>
    </div>
</div>
            
</header>
<!-----------------------------------booking system --------------------------------------------------->

<form action="#" class="row g-3" method="GET">
<div class="container">
<style>
.regis-form{
    padding: 15px;
}
.success-msg form span{
    margin:10px 0;
   display: block;
   background: rgb(50, 50, 50);
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}

</style>

<?php   if(isset($success)){
echo '<script>alert("succesully booked")</script>';
}

    ?>
<div class="regis-form">
  <?php $result=mysqli_fetch_array($sqlappointments) ?>
  <div class="col-12">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input type="number" class="form-control" id="contact_number" name="contact_number" required placeholder="Contact Number">
    <input type="hidden"   name="editnumber" value="<?php echo $editcontact ?>">
  </div>
  <div class="col-12">
  <label for="date">Preferred date</label>
            <input type="date" id="date" name="date" required name="date" value="">
            <input type="hidden"    name="editdate" value="<?php echo $result['date'] ?>"><br><br>
    
  </div>
  <div class="col-md-6">
  <label for="time">Preferred time:</label>
            <input type="time" id="time" name="time" required name="time"><br><br>
            <input type="hidden"  value="<?php echo $result['time']; ?>" name="edittime"><br><br>
  </div>
  <div class="col-md-6">
    <label for="inputMessComs" class="form-label">Message/Comments </label>
    <input type="text" class="form-control" id="inputMessComs" name="message">
  </div>
  <div class="col-md-4">
    <label for="inputMessComm" class="form-label">Select Branch</label>
    <select id="inputMessComm" class="form-select" name="branch">
    
      <option selected name="panay">Panay Avenue Branch</option>
      <option name="bagobantay">Bago Bantay (Santo Cristo Branch)</option>

    </select>
   
</div>
  </div>
  
 
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      </label>
    </div>
  </div>

  <div class="col-12">
 
  <input type="submit" name="submit" id="" class="btn btn-primary">
    <!-- <input type="hidden" name="editid" value="<?php echo $result['id'] ?>"> -->
    
</div>
  </div>
 
</form>








<!--********************************* Footer Starts Here ********************************************-->


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 about">
                <h2>Toothbook's Contact Information</h2>
                
                <div class="foot-address">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="addet">
                    195 Ilocos Sur Sreet, Santo Cristo, Quezon City, Philippines
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                        <i class="far fa-envelope-open"></i>
                    </div>
                    <div class="addet">
                        toothbookdentalcare@gmail.com<br>
                    </div>
                </div>
                <div class="foot-address">
                    <div class="icon">
                       <i class="fas fa-mobile-alt"></i>
                   </div>
                   <div class="addet">
                    0917-624-3186<br>
                </div>
            </div>
        </div>
        
        <div class="col-md-3 glink">
            <ul>
                <li><a href="user_page.php"><i class="fas fa-angle-double-right"></i>Home</a></li>
                <li><a href="about_user.php"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                <li><a href="pricing-user.php"><i class="fas fa-angle-double-right"></i>Services/Pricing</a></li>
                <li><a href="logout.php"><i class="fas fa-angle-double-right"></i>Logout</a></li>
             </ul>
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