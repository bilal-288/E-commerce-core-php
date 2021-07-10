<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../logout.php");

$search=$_SESSION['user_id'];

include 'connection.php';

$query2="SELECT makeStatus FROM card INNER JOIN registration ON registration.id=card.profileid WHERE registration.id=$search";
$result2=mysqli_query($con, $query2);
$card=mysqli_fetch_assoc($result2);


?>
<?php include 'home_header.php'?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/grid.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.page-header {
padding-bottom: 9px;
margin: 40px 0 20px;
border-bottom: 1px solid #eee;
}
.shopheading{
    border: 1px solid #eee;
    box-shadow: 0 0 10px 1px white;
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 10px;
    color: grey;
}
.shopheading:hover{
  background-color: orange;
  color: white;
}
</style>
<script type="text/javascript">
/*$(document).ready(function(){
$("#load").click(function(){
loadmore();
});
});*/
function loadmore()
{
var val = document.getElementById("result_no").value;
$.ajax({
type: 'post',
url: 'discount.php',
data: {
getresult:val
},
success: function (response) {
var content = document.getElementById("result_para");
content.innerHTML = content.innerHTML+response;
<?php $strartlimit?>=val;
// We increase the value by 2 because we limit the results by 2
document.getElementById("result_no").value = Number(val)+8;
 <?php $endlimit?>=Number(val)+8;
 alert("dfbgf");
}
});
}
</script>
<?php
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../login.php");

include 'connection.php';
?>
<div class="container">
  
  <h1 style="color: white;">Shops</h1>
  <p class="lead" style="color: grey;">Products with respect to shops</p>
  
  
  <!-- <div class="row masonry" data-target=".item" data-col-xs="12" data-col-sm="6" data-col-md="4" data-col-lg="4" data-col-xl="3"> -->
  <div id="result_para">
<?php

$count=0;

if($card['makeStatus']=="make")
{
  $strartlimit=0;
  $endlimit=8;
  /*limit $strartlimit, $endlimit"*/
$select = mysqli_query($con, "SELECT * FROM registration WHERE userroll='2' AND status='active'");
while($row = mysqli_fetch_array($select)){

if($count%4==0){

echo  "
<div class='row masonry' data-target='.item' data-col-xs='12' data-col-sm='6' data-col-md='4' data-col-lg='4' data-col-xl='3'>\n\n";
  
  }
  $shopid= $row['id'];
  echo "<div class='col'>
    <a href='category.php?id=$shopid'><div class='item' style=' border-color: white;'>
      <p class='shopheading' style='color: white; font-weight:bold;'>".$row['shopname']."</p>"."\n"."<p style='color: white; font-size:13px;' ><strong>Address:  </strong>".$row['address']."</p>
    </div></a>
  </div>";
  if(($count+1)%4==0){
  
  echo "</div>";
}

$count++;

}
}

?>
    <!-- </div> -->
    <?php
    include 'discount_value.php';
    if($card['makeStatus']=="make")
    {
    echo "<input type='hidden'  id='result_no' value='8'>
    <input type='button' class='btn btn-block btn-primary js-ajax' id='load' onclick='loadmore()' value='More'>";
    }
    ?>
  </div>
</div>
</body>
</html>