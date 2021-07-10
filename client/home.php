<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../logout.php");
?>
<?php include 'home_header.php' ?>
<br>
<div class="fs-split">

    <!-- Image Side -->
    <div class="split-image">
    <img src="assets/images/slide3.jpg" alt="Cinque Terre" width="100%" height="100%"> 
    </div>

    <!-- Content Side -->
    <div class="split-content">



        <div class="split-content-vertically-center">
        
            <div class="split-intro">
                
                <h1><?php echo $fname ." ".$lname  ?></h1>
                <p style="background-color: white; border-radius: 50px; color: red; text-align: center; font-size: 25px;"><?php echo @$_GET['msg']; ?></p>
                <span class="tagline"> Make Your Card here!</span>

            </div>

            <div class="split-bio">
                
                <p class="greycolor">Create Your cards in minutes with Card Maker. You make card and send to <a href="#"> pyxis Ad </a> . <a href="#"> pyxis Ad </a> send card to you by tcs or you recieve it by ownself. <a href="#"> pyxis Ad </a> will inform you by gmail after process</p>

            </div>

            <a href="cardmake.php?userid=<?php echo $id; ?>" class="myButton"><i class="fa fa-credit-card"></i> Click here for make card</a>

            <div class="split-bio">
                
                <p class="greycolor">Create Your cards in minutes with Card Maker. You make card and send to <a href="#"> pyxis Ad </a> . <a href="#"> pyxis Ad </a> send card to you by tcs or you recieve it by ownself. <a href="#"> pyxis Ad </a> will inform you by gmail after process</p>

            </div>
                
        </div>
 

        </div>

    </div>

</div>

<!-- feature  section start -->
 <section class="probootstrap_section backgroundwhite" id="section-feature">
      <div class="container ">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5 probootstrap-animate">
            <h2>Card categories</h2>
          </div>
        </div>
        <div class="row">
          
          <div class="col-md-3 col-sm-6 probootstrap-animate">
            <div class="media d-block text-center probootstrap-media">
              <img class="mr-0 mb-3 w-50 img-fluid rounded-circle" src="assets/images/slide1.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-3">Economy Class</h5>
                <p class="probootstrap_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="read-more"><a href="cardmake.php?userid=<?php echo $id; ?>"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 probootstrap-animate">
            <div class="media d-block text-center probootstrap-media">
              <img class="mr-0 mb-3 w-50 img-fluid rounded-circle" src="assets/images/slide2.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-3">Premium Class</h5>
                <p class="probootstrap_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="read-more"><a href="cardmake.php?userid=<?php echo $id; ?>"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 probootstrap-animate">
            <div class="media d-block text-center probootstrap-media">
              <img class="mr-0 mb-3 w-50 img-fluid rounded-circle" src="assets/images/slide3.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-3">Business Class</h5>
                <p class="probootstrap_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="read-more"><a href="cardmake.php?userid=<?php echo $id; ?>"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 probootstrap-animate">
            <div class="media d-block text-center probootstrap-media">
              <img class="mr-0 mb-3 w-50 img-fluid rounded-circle" src="assets/images/slide4.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-3">First Class</h5>
                <p class="probootstrap_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="read-more"><a href="cardmake.php?userid=<?php echo $id; ?>"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- feacture section end -->

<?php include 'footer.php'?> 