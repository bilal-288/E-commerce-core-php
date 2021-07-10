<?php

include 'connection.php';

$query22="SELECT * FROM registration WHERE id=$search";
$result22=mysqli_query($con, $query22);
$data22=mysqli_fetch_assoc($result22);

if($data22['status']!="active"){
       header("location:../logout.php");
}

?>