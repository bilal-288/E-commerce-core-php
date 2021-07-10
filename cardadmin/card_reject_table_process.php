<?php

include 'connection.php';

$status="reject";
$query = "SELECT *, card.id AS cardid FROM `card` INNER JOIN card_type ON card.card_typeid=card_type.id WHERE  status='$status'";//You don't need a ; like you do in SQL
$result = mysqli_query($con, $query);
if(isset($_POST['submit'])){
	$sendgmail=$_POST['gmail'];
    header("location: card_reject.php?id=$sendgmail");
}
//Close the table in HTML

 //Make sure to close out the database connection

?>