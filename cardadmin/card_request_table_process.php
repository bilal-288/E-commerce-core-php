<?php

include 'connection.php';

$status="pending";
$query = "SELECT *, card.id AS cardid  FROM card INNER JOIN card_type ON card_type.id=card.card_typeid WHERE  status='$status'";//You don't need a ; like you do in SQL
$result = mysqli_query($con, $query);
if(isset($_POST['submit'])){
	$sendgmail=$_POST['gmail'];
    header("location: card_request.php?id=$sendgmail");
}
//Close the table in HTML

 //Make sure to close out the database connection

?>