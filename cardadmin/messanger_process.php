<?php

include 'connection.php';


   
   $msg_query="SELECT * FROM messages WHERE status='recieve' ORDER BY id DESC";
   $msg_result=mysqli_query($con, $msg_query);

   $count_msg_query="SELECT COUNT(IF(readStatus='unread',1, NULL))'total_unread', COUNT(IF(readStatus='read',1, NULL))'total_read', COUNT(IF(favouriteStatus='unfavourite',1, NULL))'total_unfavourite', COUNT(IF(favouriteStatus='favourite',1, NULL))'total_favourite' FROM messages WHERE status='recieve'";
   $count_msg_result=mysqli_query($con, $count_msg_query);
   $msg_data=mysqli_fetch_assoc($count_msg_result);
   $totalunread=$msg_data['total_unread'];
   $totalread=$msg_data['total_read'];
   $totalunfavourite=$msg_data['total_unfavourite'];
   $totalfavourite=$msg_data['total_favourite'];
?>