<?php include 'header.php' ?>
    <!-- END nav -->
<style>

section {
  margin-top: 30px;
}

section::after {
  content: '';
  display: block;
  clear: both;
}

.top-label {
  display: block;
  margin: 10px 0;
}

input[type="email"], textarea {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 5px;
  border: none;
  color: #593e4e;
  background-color: #fff;
  font-family: inherit;
  font-size: inherit;
  appearance: none;
}

input[type="email"]:focus, textarea:focus, button:focus {
  outline: 2px solid #9ab593;
}

textarea {
  height: 100px;
}

input[type="checkbox"], input[type="radio"] {
  position: absolute;
  left: -9999px;
}

.side-label {
  display: block;
  position: relative;
  margin: 10px 0;
  padding-left: 35px;
  cursor: pointer;
}

.side-label::before, .side-label::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
}

input[type="radio"] + .side-label::before,
input[type="radio"] + .side-label::after {
  border-radius: 50%;
}

.side-label::before {
  display: block;
  width: 20px;
  height: 20px;
  border: 2px solid skyblue;  
}

input:focus + .side-label::before {
  border-color: skyblue;
}

.side-label::after {
  display: none;
  width: 12px;
  height: 12px;
  margin: 4px;
  background-color: skyblue;
}

input:checked + .side-label::after {
  display: block;
}

.how-other-disclosure {
  display: none;
  margin: 10px 0 0 35px;
}

#how-other:checked ~ .how-other-disclosure {
  display: block;
}

.blocked {
  margin-top: 40px;
  color: skyblue;
  text-align: center;
}

button.btn {
  display: none;
  appearance: none;
  cursor: pointer;
}

#permitted:checked ~ .blocked {
  display: none;
}

#permitted:checked ~ button.btn {
  display: block;
}
</style>
<script type="text/javascript" src="assets/js/signup.javascripts"></script>
<script src="assets/js/jqueryFunction.js"></script>
   
<script type="text/javascript" src="assets/js/cardmakeform.js"></script>
    <section class="probootstrap_cover_v3 overflow-hidden relative text-center" style="background-image: url('assets/images/img_2.jpg');" id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md">
            <h2 class="heading mb-2 probootstrap-animate">Contact</h2>
            <p class="lead mb-5  probootstrap-animate">Another free template by uicookies.com Under License CC 3.0</p>
            <p class="probootstrap-animate">
              <a  href="#" target="_blank" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">Get The App</a> 
              <a href="#" class="text-white text-uppercase">Watch The Video</a> 
            </p>
          </div> 
        </div>
      </div>
      <div class="scroll-wrap js-scroll-wrap probootstrap-animate">
        <a href="#section-feature" class="text-white probootstrap_font-24 smoothscroll"><i class="ion-chevron-down"></i></a>
      </div>
    </section>
    <!-- END section -->
    

    <section class="probootstrap_section bg-light" id="section-contact">
      <div class="container">
        <div class="row">

          <div class="col-md-7 probootstrap-animate">
            <form action="contact_process.php" name="msform" method="post" class="probootstrap-form probootstrap-form-box mb60">
             <p style="color: red; text-align: center;"><?php echo @$_GET['message']; ?></p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" id="fname" name="fname" onfocusout="checkfname()"value="" maxlength="150">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" maxlength="150" onfocusout="checklname()" value="">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="gmail" name="gmail" maxlength="150" onfocusout="checkgmail()" value="">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" value="" name="message" maxlength="1000"></textarea>
              </div>
              <div class="form-group">
               <!--  <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Message"> -->
                <section>
         <input id="permitted" type="checkbox">
         <label for="permitted" class="side-label">I am legally permitted that i am not rebot</label>
         <div class="blocked">(click on above checkbox if you aren't rebot)</div>
         <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
         </section>
              </div>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3 probootstrap-animate">
            <ul class="probootstrap-contact-details">
              <li>
                <span class="text-uppercase">Email</span>
                pyxisadcardmaker@gmail.com
              </li>
              <li>
                <span class="text-uppercase">Phone</span>
                +30 976 1382 9789
              </li>
              <li>
                <span class="text-uppercase">Fax</span>
                .............
              </li>
              <li>
                <span class="text-uppercase">Address</span>
                faisal town (Lahore), PAK  <br>
                edmonton (Alberta), CA <br>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>
    <!-- END section -->
    <?php include 'footer.php' ?>
<script type="text/javascript">
  function checkgmail(){
  var alphaExp=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if(document.forms["msform"]["gmail"].value.length>8 && document.forms["msform"]["gmail"].value.match(alphaExp)){
       document.forms["msform"]["gmail"].style.border="1px solid green";  
  }
  else{
     $('#gmail').val("");
          document.forms["msform"]["gmail"].placeholder="gmail not valid!";
          document.forms["msform"]["gmail"].style.border="1px solid red";  
  }

}

function checkfname(){
  var alphaExp=/^[a-zA-Z]+$/;
  if(document.forms["msform"]["fname"].value.length>2){
  if(document.forms["msform"]["fname"].value.match(alphaExp)){
    document.forms["msform"]["fname"].style.border="1px solid green";
  }else{
     $('#fname').val("");
          document.forms["msform"]["fname"].placeholder="only alphabet put in name!";
          document.forms["msform"]["fname"].style.border="1px solid red";
  }
  }
  else{
     $('#fname').val("");
         document.forms["msform"]["fname"].placeholder="name must be greater then 2 digit!";
          document.forms["msform"]["fname"].style.border="1px solid red";  
  }

}
function checklname(){
  var alphaExp=/^[a-zA-Z]+$/;
  if(document.forms["msform"]["lname"].value.length>2){
  if(document.forms["msform"]["lname"].value.match(alphaExp)){
    document.forms["msform"]["lname"].style.border="1px solid green";
  }else{
     $('#lname').val("");
          document.forms["msform"]["lname"].placeholder="only alphabet put in name!";
          document.forms["msform"]["lname"].style.border="1px solid red";  
  }
  }
  else{
     $('#lname').val("");
          document.forms["msform"]["lname"].placeholder="name must be greater then 2 digit!";
          document.forms["msform"]["lname"].style.border="1px solid red";  
  }

}
</script>
    
  