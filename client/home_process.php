<?php

include 'connection.php';

$search=$_SESSION['user_id'];

 $search_query="SELECT * FROM `registration` where id='$search'";

         $search_data= mysqli_query($con,$search_query);
    
         $data= mysqli_fetch_assoc($search_data);

         $id=$data['id'];
         $username= $data['username'];
         $fname= $data['fname'];
         $lname= $data['lname'];
         $gmail= $data['gmail'];
         $phone= $data['phone'];
         $address= $data['address'];
         $image= $data['image'];    

?>