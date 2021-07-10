<?php

session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=2)
header("location:../login.php");

include 'connection.php';


$search_id=$_SESSION['user_id'];

$query = "SELECT * FROM category WHERE  shopid='$search_id'";//You don't need a ; like you do in SQL
$result = mysqli_query($con, $query);

$query1 = "SELECT * FROM card_type ORDER BY id ASC;" ;//You don't need a ; like you do in SQL
$result1 = mysqli_query($con, $query1);

if(isset($_POST['submit'])){

  $name=$_POST['name'];
  $price=$_POST['price'];
  $categoryid=$_POST['categoryid'];
  
   $query2 = "INSERT INTO `product`(`name`,`price`,`categoryid`)VALUES('$name','$price','$categoryid')";
   $result2=mysqli_query($con,$query2);
   if($result2){
         $query3 = "SELECT id FROM product WHERE categoryid='$categoryid' AND name='$name'";
           
         $result3 = mysqli_query($con, $query3);
         $data=mysqli_fetch_assoc($result3);
         
         $productid=$data['id'];

         while ($temp = mysqli_fetch_assoc($result1)){ 
         $abc=$_POST['discount'.$temp['id']];
         $xyz=$temp['id'];
            $query3 = "INSERT INTO `discount`(`discount`,`productid`,`card_typeid`)VALUES('$abc','$productid','$xyz')";
            $result3=mysqli_query($con,$query3);

            header("location: addproduct.php?message=Product Successfully add!");
       }
   }else{
         header("location: addproduct.php?message=Product Successfully add!");
   } 

}
?>