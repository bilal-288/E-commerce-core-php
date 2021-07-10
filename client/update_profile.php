<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../logout.php");
 

?>
<?php include 'home_header.php' ?>
<br>
<link rel="stylesheet" type="text/css" href="assets/css/update_profile.css">
<script src="assets/js/jqueryFunction.js"></script>

<script type="text/javascript" src="assets/js/cardmakeform.js"></script>
<script type="text/javascript">

function checkusername(){
 var x = document.forms["msform"]["username"].value;
 var alphaExp = /^\w+$/;
  if(document.forms["msform"]["username"].value.length>2){
      
      if(x.match(alphaExp)){
        
      document.forms["msform"]["username"].style.border="1px solid green";
      }else{
          $('#username').val("");
          document.forms["msform"]["username"].placeholder="only alphabet and number put in user name!";
          document.forms["msform"]["username"].style.border="1px solid red";  
      }
      }
    else{
      $('#username').val("");
      document.forms["msform"]["username"].style.border="1px solid red";
      document.forms["msform"]["username"].placeholder="user name must be greater then 2 digit!";
      
    }
}

function checkfname(){
 var x = document.forms["msform"]["fname"].value;
 var alphaExp = /^[a-zA-Z]+$/;
  if(document.forms["msform"]["fname"].value.length>2){
      
      if(x.match(alphaExp)){
        
      document.forms["msform"]["fname"].style.border="1px solid green";
      }else{
          $('#fname').val("");
          document.forms["msform"]["fname"].placeholder="only alphabet put in name!";
          document.forms["msform"]["fname"].style.border="1px solid red";  
      }
      }
    else{
      $('#fname').val("");
      document.forms["msform"]["fname"].style.border="1px solid red";
      document.forms["msform"]["fname"].placeholder="name must be greater then 2 digit!";
      
    }
}

function checklname(){
 var x = document.forms["msform"]["lname"].value;
 var alphaExp = /^[a-zA-Z]+$/;
  if(document.forms["msform"]["lname"].value.length>2){
      
      if(x.match(alphaExp)){
        
      document.forms["msform"]["lname"].style.border="1px solid green";
      }else{
          $('#lname').val("");
          document.forms["msform"]["lname"].placeholder="only alphabet put in name!";
          document.forms["msform"]["lname"].style.border="1px solid red";  
      }
      }
    else{
      $('#lname').val("");
      document.forms["msform"]["lname"].style.border="1px solid red";
      document.forms["msform"]["lname"].placeholder="name must be greater then 2 digit!";
      
    }
}

function checkphone() {
  if(document.forms["msform"]["phone"].value.length<14){

      document.forms["msform"]["phone"].style.border="1px solid red";
      $('#phone').val("");
      document.forms["msform"]["phone"].placeholder="phone must greater then 9 digits!";
    }
    else{
      document.forms["msform"]["phone"].style.border="1px solid green";
    }
}

function checkaddress(){
 var x = document.forms["msform"]["address"].value;
 var alphaExp = /^[a-zA-Z]+$/;
  if(document.forms["msform"]["address"].value.length>5){

      document.forms["msform"]["address"].style.border="1px solid green";

      }
    else{
      $('#address').val("");
      document.forms["msform"]["address"].style.border="1px solid red";
      document.forms["msform"]["address"].placeholder="address must be greater then 5 digit!";
      
    }
}

function checkpassword(){
    var alphaExp =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
    var x1 = document.forms["msform"]["password"].value;
    if(document.forms["msform"]["password"].value.length>5){
      if(x1.match(alphaExp)){
            document.forms["msform"]["password"].style.border="1px solid blue";
      }else{
          $('#password').val("");
      document.forms["msform"]["password"].style.border="1px solid red";
      document.forms["msform"]["password"].placeholder="contain at least one number and capital charater";
      }    
    }else{
      $('#password').val("");
      document.forms["msform"]["password"].style.border="1px solid red";
      document.forms["msform"]["password"].placeholder="password must be greater then 5 digit!";
    }
}
function checkconformpassword(){
    var x1 = document.forms["msform"]["password"].value;
    var x2 = document.forms["msform"]["conformpassword"].value;
    if(document.forms["msform"]["password"].value.length>5){
      if(x1==x2){
      document.forms["msform"]["password"].style.border="1px solid green";
      document.forms["msform"]["conformpassword"].style.border="1px solid green";
    }else{
      $('#password').val("");
      $('#conformpassword').val("");
      document.forms["msform"]["password"].style.border="1px solid red";
      document.forms["msform"]["password"].placeholder="password not match try again!";
      document.forms["msform"]["conformpassword"].style.border="1px solid red";
      document.forms["msform"]["conformpassword"].placeholder="password not match try again!";

    }    
    }else{
      $('#password').val("");
      $('#conformpassword').val("");
      document.forms["msform"]["password"].style.border="1px solid red";
      document.forms["msform"]["password"].placeholder="password must be greater then 5 digit!";
    }
}

function imageclick() {

    $('#newfile').click();

} 
$(document).ready(function(){

  $('#newfile').change(function(){
$('#showfile').html("new image successfully loadded!");
});
})
$(function () {
    $('#phone').keydown(function (e) {
       var key = e.charCode || e.keyCode || 0;
       $text = $(this); 
       if (key !== 8 && key !== 9) {
           if ($text.val().length === 0) {
               $text.val($text.val() + '(');
           }
           if ($text.val().length === 5) {
               $text.val($text.val() + ')');
           }
           if ($text.val().length === 6) {
               $text.val($text.val() + ' ');
           }
            if ($text.val().length === 10) {
               $text.val($text.val() + '-');
           }

       }
       return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
   })
}); 
</script>
<!-- profile update form start -->
<div class="update-profile-maindiv" style="border: 2px solid white;">
    <center><p style="padding-top:2%;">Update Profile here!</p></center>
    <form id="msform" name="msform" action="update_profile_process.php" method="POST" enctype="multipart/form-data">
        <fieldset>
             <p style="background-color: skyblue; border-radius: 50px; color: red; text-align: center; font-size: 25px;"><?php echo @$_GET['message']; ?></p>
            <div class="row">
                 <div class="col-sm-12" >
                   <div class="image" style="background-image: url('<?php  echo $image ?>');">
                   <img onclick="imageclick()" src="<?php  echo $image ?>"   onmouseout="this.src='<?php  echo $image ?>'" onmouseover="this.src='upload/upload-image.png'" />
                   <input type="file" id="newfile" name="newfile" style="display: none;" /></div>
                   <p id="showfile" class="imagemessage"></p>
                   </div>
            </div>
          <br>
            <div class="row">
                 <div class="col-sm-6" >
                     <label class="labelstyle">User Name</label>             
                     <input type="text" id="username" name="username" class="inputstyle" value="<?php  echo $username ?>" readonly="">
                 </div>
                 <div class="col-sm-6" >
                     <label class="labelstyle">Gmail</label>
                     <input type="text" id="gmail" name="gmail" class="inputstyle" value="<?php  echo $gmail ?>" readonly="">
                 </div>
            </div>    
            <div class="row">
                 <div class="col-sm-6" >
                     <label class="labelstyle">First Name</label>             
                     <input type="text" id="fname" name="fname" onfocusout="checkfname()" class="inputstyle" value="<?php  echo $fname ?>">

                  </div>
                  <div class="col-sm-6" >            
                    <label class="labelstyle">Last Name</label>
                    <input type="text" id="lname" name="lname" class="inputstyle" value="<?php  echo $lname ?>" onfocusout="checklname()">

                  </div>
            </div>
            <div class="row">
                 <div class="col-sm-6" >
                     <label class="labelstyle">New Password</label>             
                     <input type="password" id="password" name="password" onfocusout="checkpassword()" class="inputstyle" value="">

                  </div>
                  <div class="col-sm-6" >            
                    <label class="labelstyle">Conform Password</label>
                    <input type="password" id="conformpassword" name="conformpassword" class="inputstyle" value="" onfocusout="checkconformpassword()">

                  </div>
            </div>
            <div class="row">
                 <div class="col-sm-6" >
                     <label class="labelstyle">Contact #</label> 
                     <input id="phone" type="text" name="phone" class="inputstyle" value="<?php  echo $phone ?>" onfocusout="checkphone()" maxlength="15" /> 
                  </div>
                  <div class="col-sm-6" >            
                    <label class="labelstyle">Address</label>
                    <input type="text" id="address" name="address" class="inputstyle" value="<?php  echo $address ?>" onfocusout="checkaddress()" maxlength="100">
              
                  </div>
            </div>
                     <input style="margin-top: 30px;" type="submit" name="submit" class="submit action-button" value="Submit" />
                
        </fieldset>
    </form>
 </div>
<!-- profile update form end -->
<div class="update-profile-maindiv" >
    
</div>
<?php include 'footer.php'?> 