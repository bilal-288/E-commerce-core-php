<?php

include 'connection.php';



 if(isset($_POST['submit'])){
  
    $shopname=$_POST['shopname'];
    $gmail=$_POST['gmail'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

      $search_query="SELECT * FROM `card_shop` where gmail='$gmail'";

         $search_data= mysqli_query($con,$search_query);
    
         $data= mysqli_fetch_assoc($search_data);

              $find_name=$data['username'];
              $find_gmail=$data['gmail'];

    if(empty($find_gmail) && empty($find_name)){ 
          
          
            $query="INSERT INTO `card_shop`( `shopname`,`gmail`,`phone`,`address`) VALUES ('$shopname','$gmail','$phone','$address')";
           
           $result1=mysqli_query($con,$query);

           if($result1)
           {
               header("location: addcardshop.php?message=Shop Successfully add!");
           }
           else{
              header("location: addcardshop.php?message=error() try again!");
           }
         }else{
         	header("location: addcardshop.php?message=error() gmail already exist!");
         }
}
  
?>