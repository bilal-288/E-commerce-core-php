<?php include 'header.php' ?>
    <!-- END nav -->
<?php
include 'connection.php';
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

   $ip=get_client_ip();
   $query="INSERT INTO `visitors` (`ip`)VALUES('$ip')";
   $result=mysqli_query($con, $query);
   
?>
    <section class="probootstrap_cover_v3 overflow-hidden relative text-center" id="section-home">
      <div class="overlay"></div>
      <a class="ytp_player" data-property="{videoURL:'https://youtu.be/MtCMtC50gwY',containment:'#section-home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:40, opacity:1, quality:'default'}"></a> 
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md">
            <h2 class="heading mb-2 probootstrap-animate">welcome in Card Maker &amp; Make discount card here </h2>
            <p class="lead mb-5 probootstrap-animate">there are many types of discount cards</p>
            <p class="probootstrap-animate">
              <a href="login.php" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Lets make card</a> 
            </p>
          </div> 
        </div>
      </div>
      <div class="scroll-wrap js-scroll-wrap probootstrap-animate">
        <a href="#section-feature" class="text-white probootstrap_font-24 smoothscroll"><i class="ion-chevron-down"></i></a>
      </div>
    </section>
    <!-- END section -->
    
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
                <p class="read-more"><a href="login.php"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 probootstrap-animate">
            <div class="media d-block text-center probootstrap-media">
              <img class="mr-0 mb-3 w-50 img-fluid rounded-circle" src="assets/images/slide2.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-3">Premium Class</h5>
                <p class="probootstrap_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="read-more"><a href="login.php"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 probootstrap-animate">
            <div class="media d-block text-center probootstrap-media">
              <img class="mr-0 mb-3 w-50 img-fluid rounded-circle" src="assets/images/slide3.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-3">Business Class</h5>
                <p class="probootstrap_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="read-more"><a href="login.php"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 probootstrap-animate">
            <div class="media d-block text-center probootstrap-media">
              <img class="mr-0 mb-3 w-50 img-fluid rounded-circle" src="assets/images/slide4.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-3">First Class</h5>
                <p class="probootstrap_font-14">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="read-more"><a href="login.php"><span class="fa fa-credit-card probootstrap_font-30"></span></a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->
  

    


    <section class="probootstrap-section-half d-md-flex" id="section-about">
      <div class="probootstrap-image probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/slide5.jpg)"></div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInRight">
          <h2 class="heading mb-4">About Us</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href="about.php" class="btn btn-primary">Read More</a></p>
        </div>
      </div>
    </section>
    <section class="probootstrap-section-half d-md-flex">
      <div class="probootstrap-image order-2 probootstrap-animate" data-animate-effect="fadeIn" style="background-image: url(assets/images/slide2.jpg)"></div>
      <div class="probootstrap-text order-1">
        <div class="probootstrap-inner probootstrap-animate" data-animate-effect="fadeInLeft">
          <h2 class="heading mb-4">Created with love</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <p><a href="about.php" class="btn btn-primary">Read More</a></p>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="probootstrap_section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center mb-5 probootstrap-animate">
            <h2>Testimonial</h2>
            <p class="probootstrap_font-18">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md probootstrap-animate">
            <div class="media d-block text-center testimonial_v1 probootstrap_quote_v1">
              <div class="media-body">
                <div class="quote">&ldquo;</div>
                <blockquote class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</blockquote>
                <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/p2.jpg" alt="Generic placeholder image">
                <h3 class="heading">Muhammad Aslam</h3>
                <p class="subheading">@m_aslam</p>
              </div>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="media d-block text-center testimonial_v1 probootstrap_quote_v1">
              <div class="media-body">
                <div class="quote">&ldquo;</div>
                <blockquote class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</blockquote>
                <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/p1.jpg" alt="Generic placeholder image">
                <h3 class="heading">Safder Ali</h3>
                <p class="subheading">@safder12</p>
                
              </div>
            </div>
          </div>
          <div class="col-md probootstrap-animate">
            <div class="media d-block text-center testimonial_v1 probootstrap_quote_v1">
              
              <div class="media-body">
                <div class="quote">&ldquo;</div>
                <blockquote class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</blockquote>
                <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="assets/images/p2.jpg" alt="Generic placeholder image">
                <h3 class="heading">Abdul Haneef</h3>
                <p class="subheading">@abdul12</p>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <?php include 'footer.php';?>
    
	