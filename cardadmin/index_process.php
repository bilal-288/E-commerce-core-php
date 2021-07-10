<?php
include 'connection.php';

$search=$_SESSION['user_id'];

//visitors
         $countvisitors=0;
         $query9="SELECT COUNT(*) AS totalvisit FROM visitors GROUP BY ip";
         $result9=mysqli_query($con, $query9);
         while ($visit=mysqli_fetch_assoc($result9)) {
            $countvisitors++;
         }
         $total_visitors=$countvisitors;
         $number6=($total_visitors/100)*100;
         $total_visitors_result=(int)round($number6);

//card counter
       $card_query ="SELECT COUNT(IF(makeStatus='make',1, NULL)) 'cards',
       COUNT(IF(status='accept',1, NULL)) 'accept',
       COUNT(IF(status='reject',1, NULL)) 'reject',
       COUNT(IF(status='pending',1, NULL)) 'pending' FROM card";

       $card_result=mysqli_query($con, $card_query);
       $card_data=mysqli_fetch_assoc($card_result);
     
       $totalCards=$card_data['cards'];
      
       $accept=$card_data['accept'];
       $accept1=($accept/30)*100;
         $acceptPercentage=(int)round($accept1);
       
       $reject=$card_data['reject'];
       $reject1=($reject/30)*100;
         $rejectPercentage=(int)round($reject1);

       $pending=$card_data['pending'];
       $pending1=($pending/30)*100;
         $pendingPercentage=(int)round($pending1);
 
      $pie_query="SELECT COUNT(IF(type='economy',1, NULL)) 'economy',
       COUNT(IF(type='premium',1, NULL)) 'premium',
       COUNT(IF(type='business',1, NULL)) 'business',
       COUNT(IF(type='first',1, NULL)) 'first' FROM card INNER JOIN card_type ON card_type.id=card.card_typeid WHERE card.makeStatus='make'"; 
       $pie_result=mysqli_query($con, $pie_query);
       $pie_data=mysqli_fetch_assoc($pie_result);

       $economy=$pie_data['economy'];
       $economy1=($economy/30)*100;
         $economyPercentage=(int)round($economy1);


       $premium=$pie_data['premium'];
       $premium1=($premium/30)*100;
         $premiumPercentage=(int)round($premium1);


       $business=$pie_data['business'];
       $business1=($business/30)*100;
         $businessPercentage=(int)round($business1);


       $first=$pie_data['first'];
       $first1=($first/30)*100;
         $firstPercentage=(int)round($first1);

//registration counter

       $registration_query ="SELECT COUNT(IF(userroll='1',1, NULL)) 'clients',
       COUNT(IF(userroll='2',1, NULL)) 'shops' FROM registration WHERE status='active'";
       $registration_result=mysqli_query($con, $registration_query);
       $registration_data=mysqli_fetch_assoc($registration_result);
       $clients= $registration_data['clients'];
       $shops= $registration_data['shops'];

//clients table model
         $status10="accept";
         $query5="SELECT *, card.id AS cardid, card.fname AS cardfname, card.lname AS cardlname FROM card INNER JOIN registration ON registration.id=card.profileid INNER JOIN card_type ON card_type.id=card.card_typeid where `card`.`status`= '$status10' ORDER BY card.id DESC";
         $result5=mysqli_query($con, $query5); 
//messages madule

  /* $msg_query="SELECT * FROM messages WHERE readStatus='unread' ORDER BY id DESC";
   $msg_result=mysqli_query($con, $msg_query);

   $count_msg_query="SELECT COUNT(IF(readStatus='unread',1, NULL))'total_unread' FROM messages";
   $count_msg_result=mysqli_query($con, $count_msg_query);
   $msg_data=mysqli_fetch_assoc($count_msg_result);
   $totalunread=$msg_data['total_unread'];*/
?>