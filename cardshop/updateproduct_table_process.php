<?php

session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=2)
header("location:../login.php");

include 'connection.php';


$search_id=$_SESSION['user_id'];


$query="SELECT `product`.`id` AS pid,`product`.`name` AS pname,`product`.`price` AS price,`category`.`name` AS cname FROM registration INNER JOIN category ON `category`.`shopid`= `registration`.`id` INNER JOIN product ON `product`.`categoryid` = `category`.`id`   WHERE `registration`.`id`='$search_id' ORDER BY `product`.`id` ASC" ;
    
$result = mysqli_query($con, $query);


$query3="SELECT * FROM card_type  ORDER BY id ASC";
$result3 = mysqli_query($con, $query3);

if(isset($_POST['edit'])){

       $pid=$_POST['pid'];
       header("location: updateproduct.php?id=$pid");
}
?>