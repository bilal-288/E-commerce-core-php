<?php 
include 'home_process.php';

?>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Card Maker &mdash; Business card</title>
    <link rel="apple-touch-icon" href="images/slide1.jpg">
    <link rel="shortcut icon" href="images/slide1.jpg">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
		<meta name="description" content="Free Bootstrap 4 Theme by uicookies.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="assets/css/cardmakeform.css" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">

          <!-- <script src="assets/js/home.js"></script> -->
    <script type="text/javascript">
             $(document).ready(function(){
                $('#dropDown').click(function(){
                    $('.drop-down').toggleClass('drop-down--active');
                });
             });
             
    </script>

	</head>
	<body id="fullsingle" class="page-template-page-fullsingle-split">
    

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar probootstrap_scrolled-light" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" menufont href="#">CardMaker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home</a></li>
        
            <div class="dropdown">
            <li class="nav-item "><a style="color: white;" class="nav-link dropbtn" href="#"><i class="fa fa-credit-card"></i> Card</a></li>
                     <div class="dropdown-content">
                              <a href="cardstatus.php"><strong><i class="fa fa-credit-card"></i> card status</strong></a>
                              <a href="discount.php"><strong>% Discounts</strong></a>
                          
                      </div>
            </div>  

            <div class="dropdown">
            <li class="nav-item "><a style="color: white;" class="nav-link dropbtn" href="#"><i class="fa fa-cog fa-spin fa-1x fa-fw"></i> profile setting</a></li>
                     <div class="dropdown-content">
                              <a href="update_profile.php"><strong><i class="fa fa-user"></i> Update Profile</strong></a>
                              <a href="#"><strong>Delete Account</strong></a>
                          
                      </div>
            </div>          
           <!--  <form method="Post" action="home_process.php"> -->
    <div class="modal-container">

  <input id="modal-toggle" type="checkbox">

  <li class="nav-item"><a class="nav-link" href="#"><img id="profile-img" class="profile-image" src="<?php echo $image;  ?>" /></a></li>

  <div class="modal-backdrop">

    <div class="modal-content">

      <div style="position: relative;">
      <center><img  class="profile-image" style="height: 90px; width: 90px; margin-top: 1%;" src="<?php echo $image;  ?>" />
      <h2 class="contact"> <?php echo $fname." ".$lname ?></h2>
      </center>

      <hr />
      </div>
      
      <p class="contact" ><strong>Gmail: </strong> <?php echo $gmail ?> </p>
      <p class="contact" ><strong>Phone #: </strong> <?php echo $phone ?> </p>
      <p class="contact" ><strong>Address: </strong> <?php echo $address ?> </p>
     

      <a class="modal-close button" for="modal-toggle" href="../logout.php"><strong><i class="fa fa-power-off"></i> Logout</strong></a>
      
      <!-- <label class="modal-close button"  for="modal-toggle">Logout</label> -->

    </div>

  </div>

</div>
                        <!-- </form> -->

          </ul>
        </div>
      </div>
    </nav>

<br>
<br>


