<?php

if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=3)
header("location:../login.php");

include 'connection.php';

$search=$_SESSION['user_id'];

$status="accept";
$makeStatus="make";
$query = "SELECT *, card.id AS cardid FROM card  INNER JOIN card_type ON card.card_typeid=card_type.id WHERE  card.status='$status' AND card.makeStatus='$makeStatus'";//You don't need a ; like you do in SQL
$result = mysqli_query($con, $query);
if(isset($_POST['submit'])){
	$sendgmail=$_POST['gmail'];
    header("location: card.php?id=$sendgmail");
}
//Close the table in HTML

 //Make sure to close out the database connection

?>