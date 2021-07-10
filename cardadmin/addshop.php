<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=3)
header("location:../login.php");

include 'connection.php';

$search=$_SESSION['user_id'];
?>

<?php include 'addcardshop_process.php' ?>
<?php 
include 'header.php';

?>
<style>
  #myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 0%;
  height: 3px;
  background-color: orange;
}
</style>
<link rel="stylesheet" type="text/css" href="assets/css/card_request.css">
<link rel="stylesheet" type="text/css" href="assets/css/addcardshop.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" 
integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/card_request.css">

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

function checkphone(){
   if(document.forms["msform"]["phone"].value.length==14 || document.forms["msform"]["phone"].value.length==15){
    document.forms["msform"]["phone"].style.border="1px solid green";
   }else{
     $('#phone').val("");
     document.forms["msform"]["phone"].style.border="1px solid red";
     document.forms["msform"]["phone"].placeholder="Number not valid! ";
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
function checkusername() {
 var x = document.forms["msform"]["username"].value;
 var alphaExp = /^\w+$/;
  if(document.forms["msform"]["username"].value.length>2){
      
      if(x.match(alphaExp)){
        
      document.forms["msform"]["username"].style.border="1px solid green";
      }else{
          $('#username').val("");
          document.forms["msform"]["username"].placeholder="only alphabet put in name!";
          document.forms["msform"]["username"].style.border="1px solid red";  
      }
      }
    else{
      $('#username').val("");
      document.forms["msform"]["username"].style.border="1px solid red";
      document.forms["msform"]["username"].placeholder="name must be greater then 2 digit!";
      
    }
}

function checkshopname(){
  var alphaExp=/^[ .a-zA-Z]+$/;
  if(document.forms["msform"]["shopname"].value.length>2){
  if(document.forms["msform"]["shopname"].value.match(alphaExp)){
    document.forms["msform"]["shopname"].style.border="1px solid green";
  }else{
     $('#shopname').val("");
          document.forms["msform"]["shopname"].placeholder="only alphabet put in name!";
          document.forms["msform"]["shopname"].style.border="1px solid red";  
  }
  }
  else{
     $('#shopname').val("");
          document.forms["msform"]["shopname"].placeholder="name must be greater then 2 digit!";
          document.forms["msform"]["shopname"].style.border="1px solid red";  
  }

}
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
  function move() {
  var elem = document.getElementById("myBar");   
  var width = -2;
  var id = setInterval(frame, 120);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      document.getElementById("myBar").style.background="darkgreen";
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }

}

</script>

<div class="page-heading"><center><h3 style="padding-left:20px; color:#FF8500;">Add Shop</h3></center></div>

<div class="form-style-2">
<div  style="padding-top: 30px; color: grey; padding: 10px;"><h4>Provide Shop information</h4></div>
<div id="myProgress">
          <div id="myBar"></div>
          </div>
<p style="color: red; text-align: center;"><?php echo @$_GET['message']; ?></p>
<form name="msform" action="addshop_process.php" method="post">
<label for="field1"><span>User Name <span class="required">*</span></span><input type="text" class="input-field" id="username" onfocusout="checkusername()" name="username" value="" /></label>
<label for="field1"><span>Shop Name <span class="required">*</span></span><input type="text" class="input-field" name="shopname" id="shopname" value="" onfocusout="checkshopname()" / ></label>
<label for="field1"><span>Gmail <span class="required">*</span></span><input type="text" class="input-field" id="gmail" name="gmail" value="" onfocusout="checkgmail()" /></label>
<label for="field1"><span>Password <span class="required">*</span></span><input type="password" class="input-field" name="password" id="password" value="" onfocusout="checkpassword()"/></label>

<label for="field2"><span>Conform Password <span class="required">*</span></span><input type="password" class="input-field" id="conformpassword" name="conformpassword" value="" onfocusout="checkconformpassword()"/></label>

<label for="field2"><span>Telephone<span class="required">*</span></span><input id="phone" name="phone" class="input-field" id="phone" type="text"  maxlength="15" size="15" autocomplete="off" onfocusout="checkphone()" ></label>
<label for="field5"><span>Address <span class="required">*</span></span><textarea name="address" class="textarea-field" maxlength="100"></textarea></label>

<label><button name="submit" onclick="move()" style="margin-left: 35%;"><i class="menu-icon fa fa-cart-plus" style="font-size: 20px;"></i>  ADD Shop</button></label>
<br>
<br>
</form>
</div>



   <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Card Maker Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Pyxis Ad</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>