<?php
include 'connection.php';                         

if(isset($_POST['submit'])){

  $productid=$_POST['productid'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $categoryid=$_POST['categoryid'];
  
  //echo $productid." ".$name." ".$price." ".$categoryid;
  //die();
  
   $query2 = "UPDATE product SET name='$name', price='$price', categoryid='$categoryid' WHERE id=$productid";
   $result2=mysqli_query($con,$query2);
   if($result2){

         $query6="SELECT * FROM card_type ORDER BY id ASC;";
         $result6=mysqli_query($con, $query6);

         while ($temp = mysqli_fetch_assoc($result6)){
         $discount=$_POST[$temp['id']];
         $card_typeid=$temp['id'];

            $query3 = "UPDATE `discount` SET `discount`='$discount' where `card_typeid`=$card_typeid AND `productid`='$productid'";

            $result3=mysqli_query($con,$query3);
            
            $checktemp=0;
            $query9="SELECT * FROM discount WHERE productid=$productid";
            $result9=mysqli_query($con, $query9);
            
            while ($check=mysqli_fetch_assoc($result9)){
              if($check['card_typeid']==$card_typeid){
              $checktemp=1;
              }
            }
           
            if($checktemp==0){
                $query8="INSERT INTO `discount`(`discount`,`productid`,`card_typeid`)VALUES('$discount','$productid','$card_typeid')";                $result8=mysqli_query($con,$query8);
            }
            //echo $discount." ".$productid." ".$card_typeid."        rrrrrrrrr         ";
             header("location: updateproduct_table.php?message=Product Successfully updated!");

       }
   }else{
         header("location: updateproduct_table.php?message=error(): Product not updated!");
   } 

}


?>