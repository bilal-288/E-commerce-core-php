<?php
require_once 'connection.php';
if(isset($_POST['update'])){
$id=$_POST['id'];

$shopname=$_POST['shopname'];
$gmail=$_POST['gmail'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$temp=0;

if(empty($shopname)){
$shopname=$check['shopname'];
$temp=1;
}
if(empty($gmail)){
$gmail=$check['gmail'];
$temp=1;
}
if(empty($phone)){
$phone=$check['phone'];
$temp=1;
}
if(empty($address)){
$address=$check['address'];
$temp=1;
}
if($temp==0){
$query2="UPDATE `card_shop` SET shopname = '$shopname', phone='$phone' , address='$address' WHERE id='$id'";
$result2=mysqli_query($con,$query2);
if($result2)
{
header("location: update_cardmaker_table.php?message=cardmaker Shop successfully updated!");
$shopmessage = "                      Welcome to Card Maker \n\n Your Account updated successfully and account details are given below..\n\n"."                Shop Name: ".$shopname ."\n                Shop Gmail: " . $gmail . "\n                Contact #: ". $phone ."\n                Address: ". $address ."\n\n\n"."note: Please make card with in time thanks";
$subject="Card Maker";
$header="From: Card Maker admin<developed by pyxisad>";
mail($gmail, $subject, $shopmessage, $header);
}else{
header("location: update_cardmaker_table.php?message=error!.....cardmaker shop not updated!");
}
}else{
	header("location: update_cardmaker_table.php?message=error!.....not updated because anyone field empty during updation!");
}
}
?>