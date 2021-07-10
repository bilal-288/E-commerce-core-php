<?php
require_once 'connection.php';
if(isset($_POST['update'])){
$username=$_POST['username'];
$shopname=$_POST['shopname'];
$gmail=$_POST['gmail'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$query1="SELECT * FROM `registration` WHERE `gmail`='$gmail'";
$result1=mysqli_query($con, $query1);
$check=mysqli_fetch_assoc($result1);
$find_username=$check['username'];
$temp=1;
if($find_username!=$username){
$query3="SELECT username FROM `registration` WHERE `username`='$username'";
$result3=mysqli_query($con, $query3);
$check3=mysqli_fetch_assoc($result3);
$find_username3=$check3['username'];
if(empty($find_username3)){
$temp=1;
}else{
$temp=0;
}
}
if($temp==1){
if(empty($username)){
$username=$check['username'];
}
if(empty($shopname)){
$shopname=$check['shopname'];
}
if(empty($password)){
$password=$check['password'];
}
if(empty($phone)){
$phone=$check['phone'];
}
if(empty($address)){
$address=$check['address'];
}
$query2="UPDATE `registration` SET username = '$username', shopname = '$shopname', password='$password'  , phone='$phone' , address='$address' WHERE gmail = '$gmail'";
$result2=mysqli_query($con,$query2);
if($result2)
{
header("location: update_shop_table.php?message=Shop successfully updated!");
$shopmessage = "                      Welcome to Card Maker \n\n Your Account updated successfully and account details are given below..\n\n"."                Shop Name: ".$shopname ."\n                Username: ".$username. "\n                Shop Gmail: " . $gmail . "\n                Password: " . $password ."\n                Contact #: ". $phone ."\n                Address: ". $address ."\n\n\n"."note: You use this gmail and password for login your shop admin panel in card Maker";
$subject="Card Maker";
$header="From: Card Maker admin<developed by pyxisad>";
mail($gmail, $subject, $shopmessage, $header);
}
else{
header("location: update_shop_table.php?message=error!.....shop not updated!");
}
}else{
	header("location: update_shop_table.php?message=error!.....username already exist!");
}
}
?>