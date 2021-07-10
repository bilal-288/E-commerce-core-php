<?php
include 'connection.php';
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=2)
header("location:../login.php");

 if(isset($_POST['submit'])){
     
    $name=$_POST['name'];
    $description=$_POST['description'];
    
    $search_shop=$_SESSION['user_id'];
    
      $search_query="SELECT * FROM `category` where shopid='$search_shop' AND name='$name'";

         $search_data= mysqli_query($con,$search_query);
    
         $data= mysqli_fetch_assoc($search_data);

              $find_name=$data['name'];

    if(empty($find_name)){ 
          
            $query="INSERT INTO `category`( `name`,`description`,`shopid`) VALUES ('$name','$description','$search_shop')";
           
           $result1=mysqli_query($con,$query);

           if($result1){

               header("location: addcategory.php?message=Category Successfully add!");
              
  
           }
           else{
              header("location: addcategory.php?message=error() try again!");
          }
    }else{
      header("location: addcategory.php?message=error() Category already exist!");

    } 
}
?>