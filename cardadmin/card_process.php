<?php
include 'connection.php';
$usergmail= @$_GET["id"];
$query="SELECT *, card.id AS cardid FROM `card` INNER jOIN card_type ON card.card_typeid=card_type.id where gmail='$usergmail'";

$run_query = mysqli_query($con,$query);
$data= mysqli_fetch_assoc($run_query);

$id=$data['cardid'];
$fname=$data['fname'];
$lname=$data['lname'];
$gmail=$data['gmail'];
$cnic=$data['cnic'];
$gender=$data['gender'];
$dob=$data['dob'];
$age=$data['age'];
$phone1=$data['phone1'];
$phone2=$data['phone2'];
$profession=$data['profession'];
$income=$data['income'];
$street=$data['street'];
$apartment=$data['apartment'];
$city=$data['city'];
$country=$data['country'];
$postcode=$data['postcode'];
$type=$data['type'];
$profileId=$data['profileId'];
$date=$data['date'];
$discount=$data['discount'];
$profile_query="SELECT * FROM `registration` where id='$profileId'";

$profile_run_query = mysqli_query($con,$profile_query);
$profile_data= mysqli_fetch_assoc($profile_run_query);
$profileusername=$profile_data['username'];
$profilefname=$profile_data['fname'];
$profilelname=$profile_data['lname'];
$profilegmail=$profile_data['gmail'];
$profilephone=$profile_data['phone'];
$profileaddress=$profile_data['address'];
$profileimage="../client/".$profile_data['image'];
if(isset($_POST['remake'])){

  $sendgmail=$_POST['gmail'];

$request_query="SELECT *, card.id AS cardid FROM card INNER JOIN card_type ON card.card_typeid=card_type.id WHERE card.gmail='$sendgmail'";
$request_result = mysqli_query($con, $request_query);
$request_data= mysqli_fetch_assoc($request_result);

$requestid= $request_data['cardid'];
$requestfname= $request_data['fname'];
$requestlname= $request_data['lname'];
$requestgmail= $request_data['gmail'];
$requestphone1= $request_data['phone1'];
$requestcity= $request_data['city'];
$requestage= $request_data['age'];
$requestcategory= $request_data['type'];
$requestdate= $request_data['date'];


$shopmessage = "                      Welcome to Card Maker \n\n Make card with in week. card details have given below\n\n"."                Card id: ".$requestid . "\n                Name: " . $requestfname ." ". $requestlname."\n                Card Category: ".$requestcategory."\n                Contact #: ". $requestphone1 ."\n                Gmail: ". $requestgmail ."\n                city: ". $requestcity ."\n                Age: ". $requestage ."\n                Date: ". $requestdate ."\n\n\n"."note: card will be gotten by that customer from your shop after 1 week. you can contact with customer from above details!";

$shop_query="SELECT * FROM card_shop";
$shop_result= mysqli_query($con, $shop_query);


$shop_data= mysqli_fetch_assoc($shop_result);

$shopname= $shop_data['shopname'];
$shopgmail= $shop_data['gmail'];
$shopphone= $shop_data['phone'];
$shopaddress= $shop_data['address'];

$customermessage = "                      Welcome to Card Maker \n\n Your card request accept and your card details send to printing shop\n\n"."                Shop Name: ".$shopname . "\n                Shop Gmail: " . $shopgmail ."\n                Contact #: ". $shopphone ."\n                Address: ". $shopaddress ."\n\n\n"."note: you got card from that shop after 1 week and you can contact with shop from above mention contacts! \n\n Thanks for make card!";

$subject="Card Maker";
$header="From: Card Maker admin<sabahatpycis@gmail.com>";

if(mail($shopgmail, $subject, $shopmessage, $header) && mail($requestgmail, $subject, $customermessage, $header)){
    header("location: card_table.php?message= Card Remake Mail send!");
}
else{
    header("location: card_table.php?message=Card Remake Mail not send. try again!");

}
}
?>