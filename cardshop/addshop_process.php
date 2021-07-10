<?php
include 'connection.php';

 if(isset($_POST['submit'])){
  
    $shopname=$_POST['shopname'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

      $search_query="SELECT * FROM `registration` where gmail='$gmail' OR username='$username'";

         $search_data= mysqli_query($con,$search_query);
    
         $data= mysqli_fetch_assoc($search_data);

              $find_gmail=$data['gmail'];
              $find_username=$data['username'];

    if(empty($find_gmail) && empty($find_username)){ 
          
          if($password!=""){
            $query="INSERT INTO `registration`( `username`,`shopname`,`gmail`,`password`,`phone`,`address`) VALUES ('$username','$shopname','$gmail','$password','$phone','$address')";
           
           $result1=mysqli_query($con,$query);

           if($result1){

               header("location: addcardshop.php?message=Shop Successfully add!");
              
               $shopmessage = "                      Welcome to Card Maker \n\n Your Account created successfully and account details are given below..\n\n"."                Username: ".$username ."                Shop Name: ".$shopname . "\n                Shop Gmail: " . $gmail . "\n                Password: " . $password ."\n                Contact #: ". $phone ."\n                Address: ". $address ."\n\n\n"."note: You use this gmail and password for login your shop admin panel in card Maker \n\n Thanks for being a participate with Card Maker";
              $subject="Card Maker";
              $header="From: Card Maker admin<sabahatpycis@gmail.com>";
              mail($gmail, $subject, $shopmessage, $header);
           }
           else{
              header("location: addshop.php?message=error() try again!");
           }
           }else{
              header("location: addshop.php?message=error() Password required!");
           }
         }else{
          header("location: addshop.php?message=error() gmail already exist!");
         }
}
?>