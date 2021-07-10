<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=2)
header("location:../login.php");
   
include 'connection.php';


$pending="pending";
$count_request="SELECT COUNT(*) as total_request FROM `card` WHERE status='$pending'";

         $request_count= mysqli_query($con,$count_request);

         $data=mysqli_fetch_assoc($request_count);
         $total_request_result = $data['total_request'];
         $number1=($total_request_result/30)*100;
         $total_request_result_pending=(int)round($number1);
$accept="accept";
$count_request1="SELECT COUNT(*) as total_request FROM `card` WHERE status='$accept'";

         $request_count1= mysqli_query($con,$count_request1);

         $data1=mysqli_fetch_assoc($request_count1);
         $total_accept_result = $data1['total_request'];
         $number2=($total_accept_result/30)*100;
         $total_request_result_accept=(int)round($number2);
$reject="reject";
$count_request2="SELECT COUNT(*) as total_request FROM `card` WHERE status='$reject'";

         $request_count2= mysqli_query($con,$count_request2);

         $data2=mysqli_fetch_assoc($request_count2);
         $total_reject_result = $data2['total_request'];
         $number3=($total_reject_result/30)*100;
         $total_request_result_reject=(int)round($number3);

if(isset($_POST['check'])){  
   
   $searchcard=$_POST['cardid'];
   //echo $searchcard;
   //die();
   $makeStatus="make";
   $query5="SELECT `card`.`id` AS cardid, type FROM card INNER JOIN card_type ON `card_type`.`id`=`card`.`card_typeid` WHERE `card`.`id`='$searchcard' AND makeStatus='$makeStatus'";
   $result5=mysqli_query($con, $query5);
   if($carddata=mysqli_fetch_assoc($result5)){

       $datavalid=$carddata['cardid']." valid, card type: ".$carddata['type']."...";
       header("location: index.php?message= $datavalid");
   }else{
       $datainvalid=$searchcard." invalid!";
       header("location: index.php?message= $datainvalid");

   }
}

?>