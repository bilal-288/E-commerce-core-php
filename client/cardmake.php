
<?php 
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../logout.php");
 
$userid = @ $_GET['userid'];
require_once 'connection.php';

 $search_query="SELECT profileId FROM `card` WHERE profileId=$userid";
         $search_data= mysqli_query($con, $search_query);   
         $data= mysqli_fetch_assoc($search_data);          
         $find_id=$data['profileId'];

if ($userid == $find_id) {
  header("location: home.php?msg=oops! You have already Created Card");
}

include 'home_header.php';

 ?>

<script src="assets/js/jqueryFunction.js"></script>

<script type="text/javascript" src="assets/js/cardmakeform.js"></script>
<script  type="text/javascript" >

function checkfname() {
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
function checklname() {
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
function checkcnic() {
  var x = document.forms["msform"]["cnic"].value;
  if(document.forms["msform"]["cnic"].value.length!=15){

      document.forms["msform"]["cnic"].style.border="1px solid red";
      $('#cnic').val("");
      document.forms["msform"]["cnic"].placeholder="cnic must be contain 15 digits!";
    }
    else{
      document.forms["msform"]["cnic"].style.border="1px solid green";
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
function checkphone1() {
  if(document.forms["msform"]["phone1"].value.length<14){

      document.forms["msform"]["phone1"].style.border="1px solid red";
      $('#phone1').val("");
      document.forms["msform"]["phone1"].placeholder="phone must greater then 9 digits!";
    }
    else{
      document.forms["msform"]["phone1"].style.border="1px solid green";
    }
}
function checkphone2() {
  if(document.forms["msform"]["phone2"].value.length<14){

      $('#phone2').val("");
      document.forms["msform"]["phone2"].placeholder="phone must greater then 9 digits!";
    }
}
function checkdob() {
 var x = document.forms["msform"]["dob"].value;
  if(x==""){

      document.forms["msform"]["dob"].style.border="1px solid red";
      document.forms["msform"]["dob"].placeholder="must be required!";
    }
    else{
      document.forms["msform"]["dob"].style.border="1px solid green";
    }
}
function checkprofession() {
 var x = document.forms["msform"]["profession"].value;
 var alphaExp = /^[a-zA-Z\s\.]*$/;
  if(document.forms["msform"]["profession"].value.length>3){
      
      if(x.match(alphaExp)){
        
      document.forms["msform"]["profession"].style.border="1px solid green";
      }else{
          $('#profession').val("");
          document.forms["msform"]["profession"].placeholder="only alphabet put in profession!";
          document.forms["msform"]["profession"].style.border="1px solid red";  
      }
      }
    else{
      $('#profession').val("");
      document.forms["msform"]["profession"].style.border="1px solid red";
      document.forms["msform"]["profession"].placeholder="profession must be greater then 3 digit!";
      
    } 
}
function checkincome() {
  if(document.forms["msform"]["income"].value.length<2){

      $('#income').val("");
      document.forms["msform"]["income"].placeholder="income must be greater then 1000!";
    }
}
function checkstreet() {
 var x = document.forms["msform"]["street"].value;
  if(x==""){

      document.forms["msform"]["street"].style.border="1px solid red";
      document.forms["msform"]["street"].placeholder="must be greater then 2 digitand should be alphabet!";
    }
    else{
      document.forms["msform"]["street"].style.border="1px solid green";
    }
}
function checkcity() {
 var x = document.forms["msform"]["city"].value;
  if(x==""){

      document.forms["msform"]["city"].style.border="1px solid red";
      document.forms["msform"]["city"].placeholder="must be greater then 2 digitand should be alphabet!";
    }
    else{
      document.forms["msform"]["city"].style.border="1px solid green";
    }
}
function checkpostcode() {
 var x = document.forms["msform"]["postcode"].value;
  if(x==""){

      document.forms["msform"]["postcode"].style.border="1px solid red";
      document.forms["msform"]["postcode"].placeholder="must be greater then 2 digitand should be alphabet!";
    }
    else{
      document.forms["msform"]["postcode"].style.border="1px solid green";
    }
}
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(document).ready(function(){
$(".next").click(function(){
  
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });


});
})
$(document).ready(function(){
$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});
})
$(document).ready(function(){
$(".submit").click(function(){

 
    return true;
});
})

$(document).on('click','.card',function() {
        var id = $(this).attr('card-id');
         document.getElementById("cardcategoryoutput").value =id;
        //$("#cardcategoryoutput").html(id);
   
        /*$.ajax({
        type:"POST",
        url:"cardmake_process.php",
        data:{id:id},
        success:function(data){
          alert(data);
        }
        
        });*/
    /*var x = document.getElementById("#cardcategoryoutput").value;*/
    });

function nextFunction() {

 return false;
}

$(function () {

    $('#cnic').keydown(function (e) {
       var key = e.charCode || e.keyCode || 0;
       $text = $(this); 
       if (key !== 8 && key !== 9) {
           if ($text.val().length === 5) {
               $text.val($text.val() + '-');
           }
           if ($text.val().length === 13) {
               $text.val($text.val() + '-');
           }
          if ($text.val().length === 15){
                var temp=$text.val();
                var lastChar = temp.substr(temp.length - 1);
                if(lastChar%2==0){
                     radiobtn = document.getElementById("female");
                     radiobtn.checked = true;
                }else{
                  radiobtn = document.getElementById("male");
                  radiobtn.checked = true;
                }
          }
       }

       return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
   })
});

$(function () {

    $('#phone1').keydown(function (e) {
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
$(function () {

    $('#phone2').keydown(function (e) {
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
<!-- cardform start -->
<!-- multistep form -->

<form id="msform" name="msform" action="cardmake_process.php" method="POST" >
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Information</li>
    <li>Address And Profession</li>
    <li>Card category</li>
  </ul>
  <!-- <div class="cardformdiv"> -->
  <!-- fieldsets -->
  <fieldset>
    <p style="color: red; background-color: yellow; text-align: center; font-size: 25px;"><?php echo @$_GET['message']; ?></p>
    
    <h2 class="fs-title">Put your Personal detail</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    
    
    <div class="row">
       <div class="col-sm-6" >
        <input type="text" name="profileid" value="<?php echo $userid; ?>" hidden="on">
         <label class="labelstyle">First Name <span style="color:red;">..*</span></label>             
         <input type="text" id="fname" name="fname" onfocusout="checkfname()" class="inputstyle" value="">
         <p class="labelhelp">e.g. Abdul</p>

       </div>
       <div class="col-sm-6" >
             
          <label class="labelstyle">Last Name <span style="color:red;">..*</span></label>
          <input type="text" id="lname" name="lname" class="inputstyle" value="" onfocusout="checklname()">
          <p class="labelhelp">e.g. Rasheed</p>

       </div>
    </div>
    <div class="row">
        <div class="col-sm-6">

             <label class="labelstyle">CNIC # <span style="color:red;">..*</span></label>
             <input id="cnic" class="inputstyle" type="text" name="cnic" onfocusout="checkcnic()" maxlength="15" />
            <p class="labelhelp">e.g. 33303-3188908-7</p>

        </div>  
        <div class="col-sm-6">
          
          <label class="labelstyle">Gmail <span style="color:red;">..*</span></label>
             <input class="inputstyle" type="email" name="gmail" id="gmail" onfocusout="checkgmail()" />
            <p class="labelhelp">e.g. abdul12@gmail.com</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label class="labelstyle">1<span style="color:#061C30;font-size: 10px;">st</span> Phone # <span style="color:red;">..*</span></label>
            <input id="phone1" type="text" name="phone1" class="inputstyle" value="" onfocusout="checkphone1()" maxlength="15" /> 
            <p class="labelhelp">e.g.  (780) 509-6995</p>
        </div>
        <div class="col-sm-6">
            <label class="labelstyle">2<span style="color:#061C30;font-size: 10px;">nd</span> Phone #</span></label>
            <input id="phone2" type="text" name="phone2" class="inputstyle" value="" maxlength="15" onfocusout="checkphone2()">
            <p class="labelhelp">(optional)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <label class="labelstyle">Gender <span style="color:red;">..*</span></label>
             <ul style=" overflow: hidden;">
               <li style="float: left;"><span>male</span><input type="radio" name="gender" id="male" value="male" checked></li>
               <li style="float: left;"><span>female</span><input type="radio" name="gender" id="female" value="female"></li>
               <li style="float: left;"><span>other</span><input type="radio" name="gender" value="other"></li>
             </ul>
        </div>
        <div class="col-sm-6">
               <label class="labelstyle">Date of birth<span style="color:red;">..*</span></label>
               <input type="date" id="dob" name="dob" class="inputstyle" value="" onfocusout="checkdob()">
        </div>
    </div>

    <input type="button" name="next"  class="next action-button" value="Next" /> 

  </fieldset>
  <fieldset>
    <h2 class="fs-title">Address And Profession</h2>
    <h3 class="fs-subtitle">This is 2nd step</h3>

    <div class="row">
       <div class="col-sm-6" >
            <label>Profession <span style="color:red;">..*</span></label>
            <input type="text" id="profession" name="profession" onfocusout="checkprofession()"/>
            <p class="labelhelp">e.g.  software engineer</p>
       </div>
       <div class="col-sm-6" >
            <label>Income <span style="color:grey;">(yearly)</span></label>
            <input type="number" id="income" name="income" onfocusout="checkincome()" />
            <p class="labelhelp">e.g.  1500000000 (optional)</p>
       </div>
    </div>

    <label style="font-weight: bold; font-size: 20px">Address</label>
    <div class="row">
       <div class="col-sm-6" >
        <label>Street<span style="color:red;">..*</span></label>
          <input type="text" id="street" name="street" onfocusout="checkstreet()"/>
       </div>
       <div class="col-sm-6" >
        <label>apartment<span style="color:grey;">(optional)</span></label>
          <input type="text" name="apartment" />
       </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
            <label>Town/City<span style="color:red;">..*</span></label>
             <input type="text" id="city" class="input-city" name="city" onfocusout="checkcity()"/>
      </div>
    </div>
    <div class="row">
        <div class="col-sm-6" >
            <label>Country</label>
              <!-- country list start-->
              <select id="country" name="country" class="form-control" >
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option selected="selected" value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
            <!-- country list end -->
        </div>
        <div class="col-sm-6" >
                <label>Post code<span style="color:red;">..*</span></label>
                <input id="postcode" type="number" name="postcode" onfocusout="checkpostcode()" />
                <p>e.g. 4869</p>
        </div>
    </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
     <h2 class="fs-title">Select one of card category</h2>
    <h3 class="fs-subtitle">This is 3rd step</h3>
    <div id="cardcategorydiv" class="tariffCards">
    <div card-id="0" class="economy card">
      
      <h3 class="cardcategory"><strong>Economy Class</strong></h3>
      <span class="cardcategory">Full discount</span>
    </div>
    <div card-id="1" class="premiumeconomy card" name="premiumeconomy" value="premiumeconomy">
      
      <h3 class="cardcategory"><strong>Premium Economy Class</strong></h3>
      <span class="cardcategory">Full discount</span>
    </div>
    <div card-id="2" class="business card">
      
      <h3 class="cardcategory"><strong>Business Class</strong></h3>
      <span class="cardcategory">Full discount</span>
    </div>
    <div class="first card" card-id="3">
      
      <h3 class="cardcategory"><strong>First Class</strong></h3>
      <span class="cardcategory">Full discount</span>
    </div>
  </div>
  <input type="number" name="category" id="cardcategoryoutput" value="" hidden="on">
 
    <!-- end category -->
    
       <input style="margin-top: 90px;" type="button" name="previous" class="previous action-button" value="Previous" />
       <input style="margin-top: 90px;" type="submit" name="submit" class="submit action-button" value="Submit" />
  
  </fieldset>
</form>
<!-- cardform end -->

<!-- category section start -->

<div class="afterformdiv">
  

</div>

<!--  <center><span class="category-heading">Select one of card category</span></center> -->

 
<!-- category section end -->

<?php include 'footer.php'?>