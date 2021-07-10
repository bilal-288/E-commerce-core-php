<?php
include 'connection.php';

if(isset($_POST['submit'])){
    
    $username=$_POST['username'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    
      if($username==""){
         header("location: signup.php?signup_error=try again() Username are missing!");

      }elseif($fname==""){
        header("location: signup.php?signup_error=try again() First name are missing!");

      }elseif($lname==""){
        header("location: signup.php?signup_error=try again() Last name are missing!");

      }elseif($gmail==""){
        header("location: signup.php?signup_error=try again() gmail are missing!");

      }elseif($password==""){
        header("location: signup.php?signup_error=try again() password are missing!");

      }elseif($phone==""){
        header("location: signup.php?signup_error=try again() phone are missing!");

      }elseif($address==""){
        header("location: signup.php?signup_error=try again() address are missing!");

      }else{
      $search_query="SELECT * FROM `registration` where gmail='$gmail' OR  username='$username'";

         $search_data= mysqli_query($con,$search_query);
    
         $data= mysqli_fetch_assoc($search_data);

              $find_name=$data['username'];
              $find_gmail=$data['gmail'];

             
    
    if(empty($find_gmail) && empty($find_name)){ 

    $filename=basename($_FILES['file']["name"]);
    $fileerror=$_FILES['file']["error"];
    $filetemp=$_FILES['file']["tmp_name"];

    $fileext=explode('.', $filename);
    $filecheck=strtolower(end($fileext));

    $fileextstore=array('png','jpg','jpeg');
    
    if(in_array($filecheck, $fileextstore)){
            
          $imagepath="upload/".$filename;
          $imagemove="client/".$imagepath;
          move_uploaded_file($filetemp, $imagemove);
          
          
            $query="INSERT INTO `registration`( `username`,`fname`,`lname`,`gmail`,`password`,`phone`,`address`,`image`) VALUES ('$username','$fname','$lname','$gmail','$password', '$phone','$address','$imagepath')";
           
           $result1=mysqli_query($con,$query);

           if($result1)
           {
               $message = "                      Welcome to Card Maker \n\n Your Account signup successfully and account details are given below..\n\n"."                Shop Name: ".$fname." ".$lname ."\n                Username: ".$username. "\n                Shop Gmail: " . $gmail . "\n                Password: " . $password ."\n                Contact #: ". $phone ."\n                Address: ". $address ."\n\n\n"."note: You use this gmail and password for login your shop admin panel in card Maker";
                $subject="Card Maker";
                $header="From: Card Maker admin<developed by pyxisad>";
                mail($gmail, $subject, $message, $header);
               header('location: login.php');

           }
           else{
              header("location: signup.php?signup_error=user1 not register due to error()!");
           }
         }
    else{
         $imagenull="upload/profile-logo.png";
         $query1="INSERT INTO `registration`( `username`,`fname`,`lname`,`gmail`,`password`,`phone`,`address`,`image`) VALUES ('$username','$fname','$lname','$gmail','$password','$phone','$address','$imagenull')";
           $result1=mysqli_query($con,$query1);
           if($result1)
           {
               header('location: login.php');
           }
           else{
                header("location: signup.php?signup_error=user2 not register due to error()!");
           }
    }
}
  else{
               header("location: signup.php?signup_error=Username Or gmail already exist!");
           }
         }

}
?>