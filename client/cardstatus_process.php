<?php

if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../login.php");

include 'connection.php';

$search=$_SESSION['user_id'];
     
    $query="SELECT * FROM `card` INNER JOIN card_type ON `card_type`.`id`= `card`.`card_typeid` where profileId='$search'";
    
    $run_query = mysqli_query($con,$query);

    
    $data= mysqli_fetch_assoc($run_query);
    
    $cardid=$data['id'];
    $fname1=$data['fname'];
    $lname1=$data['lname'];
    $gmail1=$data['gmail'];
    $cnic=$data['cnic'];
    $gender=$data['gender'];
    $dob=$data['dob'];
    $age=$data['age'];
    $phone1=$data['phone1'];
    $phone2=$data['phone2'];
    $profession=$data['profession'];
    $income=$data['income'];
    $street=$data['street'];
    $apartment=$data['apartment'];
    $city=$data['city'];
    $country=$data['country'];
    $postcode=$data['postcode'];
    $category=$data['type'];
    $makeStatus=$data['makeStatus'];
    $profileId=$data['profileId'];
    $status=$data['status'];
    $date=$data['date'];
    $discount=$data['discount'];
   

?>