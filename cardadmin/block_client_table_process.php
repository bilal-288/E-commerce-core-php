<?php

if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=3)
header("location:../login.php");

include 'connection.php';

$search=$_SESSION['user_id'];

$status="unactive";
$query = "SELECT * FROM `registration` WHERE `userroll`=1 AND `status`='$status'";//You don't need a ; like you do in SQL
$result = mysqli_query($con, $query);
if(isset($_POST['submit'])){
	$sendgmail=$_POST['gmail'];
    header("location: block_client.php?id=$sendgmail");
}
//Close the table in HTML

 //Make sure to close out the database connection

?>