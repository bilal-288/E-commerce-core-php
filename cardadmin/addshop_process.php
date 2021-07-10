<?php

include 'connection.php';

 if(isset($_POST['submit'])){
  
    $username=$_POST['username'];
    $shopname=$_POST['shopname'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $userroll=2;

      $search_query="SELECT * FROM `registration` where gmail='$gmail' OR username='$username'";

         $search_data= mysqli_query($con,$search_query);
    
         $data= mysqli_fetch_assoc($search_data);

              $find_gmail=$data['gmail'];
              $find_username=$data['username'];

    if(empty($find_gmail)&&empty($find_username)){ 
          
          if($username==""||$shopname==""||$phone==""||$address==""){
                  header("location: addshop.php?message=error() Password required!");
           }else{
              
              $query="INSERT INTO `registration`( `username`,`userroll`,`shopname`,`gmail`,`password`,`phone`,`address`) VALUES ('$username','$userroll','$shopname','$gmail','$password','$phone','$address')";

           
           $result1=mysqli_query($con,$query);

           if($result1){

               header("location: addshop.php?message=Shop Successfully add!");
              
               $shopmessage = "                      Welcome to Card Maker \n\n Your Account created successfully and account details are given below..\n\n"."                Shop Name: ".$shopname . "\n                Shop Gmail: " . $gmail . "\n                Password: " . $password ."\n                Contact #: ". $phone ."\n                Address: ". $address ."\n\n\n"."note: You use this gmail and password for login your shop admin panel in card Maker \n\n Thanks for being a participate with Card Maker";
              $subject="Card Maker";
              $header="From: Card Maker admin<developed by pyxisad>";
              mail($gmail, $subject, $shopmessage, $header);
           }
           else{
              header("location: addshop.php?message=error() try again!");
           }
           }
            
         }else{
          header("location: addshop.php?message=error() gmail already exist!");
         }
}
?>