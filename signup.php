<html>
  <head>
  <title>signup</title>
  
<link rel="stylesheet" type="text/css" href="assets/css/signup.css"  />
<script type="text/javascript" src="assets/js/signup.javascripts"></script>
<script src="assets/js/jqueryFunction.js"></script>

<script type="text/javascript" src="assets/js/cardmakeform.js"></script>
<script type="text/javascript">

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

   function checkpassword(){
    var alphaExp =/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/;
    var x1 = document.forms["form-signup"]["password"].value;
    if(document.forms["form-signup"]["password"].value.length>5){
      if(x1.match(alphaExp)){
            document.forms["form-signup"]["password"].style.border="1px solid blue";
      }else{
         $('#password').val("");
      document.forms["form-signup"]["password"].style.border="1px solid red";
      document.forms["form-signup"]["password"].placeholder="contain at least one number and capital charater";
      }    
    }else{
      $('#password').val("");
      document.forms["form-signup"]["password"].style.border="1px solid red";
      document.forms["form-signup"]["password"].placeholder="password must be greater then 5 digit!";
    }
}
function checkconformpassword(){
    var x1 = document.forms["form-signup"]["password"].value;
    var x2 = document.forms["form-signup"]["conform_Password"].value;
    if(document.forms["form-signup"]["password"].value.length>5){
      if(x1==x2){
      document.forms["form-signup"]["password"].style.border="1px solid green";
      document.forms["form-signup"]["conform_Password"].style.border="1px solid green";
    }else{
      $('#password').val("");
      $('#conform_Password').val("");
      document.forms["form-signup"]["password"].style.border="1px solid red";
      document.forms["form-signup"]["password"].placeholder="password not match try again!";
      document.forms["form-signup"]["conform_Password"].style.border="1px solid red";
      document.forms["form-signup"]["conform_Password"].placeholder="password not match try again!";

    }    
    }else{
      $('#password').val("");
      $('#conform_Password').val("");
      document.forms["form-signup"]["password"].style.border="1px solid red";
      document.forms["form-signup"]["password"].placeholder="password must be greater then 5 digit!";
    }
}
function checkgmail(){
  var alphaExp=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  
   if (document.forms["form-signup"]["gmail"].value.match(alphaExp)) {
            document.forms["form-signup"]["gmail"].style.border="1px solid green";  
   }else{
          $('#gmail').val("");
          document.forms["form-signup"]["gmail"].placeholder="gmail not valid!";
          document.forms["form-signup"]["gmail"].style.border="1px solid red";  
   }

}

function checkfname(){
  var alphaExp=/^[a-zA-Z]+$/;
  if(document.forms["form-signup"]["fname"].value.length>2){
  if(document.forms["form-signup"]["fname"].value.match(alphaExp)){
    document.forms["form-signup"]["fname"].style.border="1px solid green";
  }else{
     $('#fname').val("");
          document.forms["form-signup"]["fname"].placeholder="only alphabet put in name!";
          document.forms["form-signup"]["fname"].style.border="1px solid red";  
  }
  }
  else{
     $('#fname').val("");
          document.forms["form-signup"]["fname"].placeholder="name must be greater then 2 digit!";
          document.forms["form-signup"]["fname"].style.border="1px solid red";  
  }

}
function checklname(){
  var alphaExp=/^[a-zA-Z]+$/;
  if(document.forms["form-signup"]["lname"].value.length>2){
  if(document.forms["form-signup"]["lname"].value.match(alphaExp)){
    document.forms["form-signup"]["lname"].style.border="1px solid green";
  }else{
     $('#lname').val("");
          document.forms["form-signup"]["lname"].placeholder="only alphabet put in name!";
          document.forms["form-signup"]["lname"].style.border="1px solid red";  
  }
  }
  else{
     $('#lname').val("");
          document.forms["form-signup"]["lname"].placeholder="name must be greater then 2 digit!";
          document.forms["form-signup"]["lname"].style.border="1px solid red";  
  }

}

function checkphone(){
   if(document.forms["form-signup"]["phone"].value.length==16 || document.forms["form-signup"]["phone"].value.length==15){
    document.forms["form-signup"]["phone"].style.border="1px solid green";
   }else{
     $('#phone').val("");
     document.forms["form-signup"]["phone"].style.border="1px solid red";
     document.forms["form-signup"]["phone"].placeholder="Number not valid! ";
   }
}
function checkusername() {
 var x = document.forms["form-signup"]["username"].value;
 var alphaExp = /^\w+$/;
  if(document.forms["form-signup"]["username"].value.length>2){
      
      if(x.match(alphaExp)){
        
      document.forms["form-signup"]["username"].style.border="1px solid green";
      }else{
          $('#username').val("");
          document.forms["form-signup"]["username"].placeholder="only alphabets and numbers allowed in username!";
          document.forms["form-signup"]["username"].style.border="1px solid red";  
      }
      }
    else{
      $('#username').val("");
      document.forms["form-signup"]["username"].style.border="1px solid red";
      document.forms["form-signup"]["username"].placeholder="name must be greater then 2 digit!";
      
    }
}
function checkaddress(){
  if(document.forms["form-signup"]["address"].value.length>5){
    document.forms["form-signup"]["address"].style.border="1px solid green";
  }
  else{
     $('#address').val("");
          document.forms["form-signup"]["address"].placeholder="address must be greater then 5 digit!";
          document.forms["form-signup"]["address"].style.border="1px solid red";  
  }

}
</script>
</head>

<body>
    <div class="container">
        <div class="card card-container" style="background-color: white;">
            
            <img id="profile-img" class="profile-img-card" src="assets/images/profile-logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
        
            <form name="form-signup" class="form-signup" action="signup_process.php" method="POST" onsubmit="return checkForm(this);" enctype="multipart/form-data">
                <p style="color: red; text-align: center;"><?php echo @$_GET['signup_error']; ?></p>
                <input id="username" name="username" placeholder="User Name" type="text" class="form-control" onfocusout="checkusername()" maxlength="28" size="28" autocomplete="off">
                  
                <input id="fname" name="fname" type="text" onfocusout="checkfname()" class="form-control" placeholder="First Name" maxlength="28" size="28" autocomplete="off">

                <input id="lname" name="lname" type="text" class="form-control" onfocusout="checklname()"  placeholder="Last Name"  maxlength="28" size="28" autocomplete="off">

                <input id="gmail" name="gmail" placeholder="Gmail" type="email" class="form-control" maxlength="48" size="48" onfocusout="checkgmail()  " autocomplete="off">

                <!-- <input name="password" placeholder="Password" type="password" class="form-control input-lg" required maxlength="68" size="68" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> -->

                <input id="password" name="password" placeholder="Password" type="password" class="form-control input-lg" maxlength="68" size="68" autocomplete="off" onfocusout="checkpassword()" >

                <input type="password" id="conform_Password" name="conform_Password" class="form-control" placeholder="Conform Password" onfocusout="checkconformpassword()"  autocomplete="off">

                <input name="phone" id="phone" type="text" class="form-control" placeholder="Contact Number" maxlength="16" size="16" onfocusout="checkphone()" autocomplete="off">

                <input id="address" name="address" type="text" class="form-control" placeholder="Address" onfocusout="checkaddress()" maxlength="98" size="98" autocomplete="off">

                <label class="image_font">Upload Profile Picture</label>
                </br>
                </br>
                <input type="file" name="file" class="form-control" placeholder="profile picture">
                </br>
                </br>
                <button class="btn btn-lg btn-primary btn-block btn-signup" type="submit" name="submit" value="submit">Signup</button>
            </form>

        </div>

    </div>
</body>
</html>
