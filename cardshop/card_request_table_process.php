<?php

include 'connection.php';

$status="pending";
$query = "SELECT * FROM card WHERE  status='$status'";//You don't need a ; like you do in SQL
$result = mysqli_query($con, $query);
if(isset($_POST['submit'])){
	$sendgmail=$_POST['gmail'];
    header("location: card_request.php?id=$sendgmail");
}
//Close the table in HTML

 //Make sure to close out the database connection

?>