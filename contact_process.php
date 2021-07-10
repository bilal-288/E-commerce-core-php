<?php
include 'connection.php';

 if(isset($_POST['submit'])){
     
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gmail=$_POST['gmail'];
    $message=$_POST['message'];
    if($fname=="" || $lname=="" || $gmail=="" || $message==""){   
           header("location: contact.php?message=any input field missing try again!");   
            
    }else{
      $query="INSERT INTO `messages`( `fname`,`lname`,`gmail`,`message`) VALUES ('$fname','$lname','$gmail','$message')";
           $result1=mysqli_query($con,$query);

           if($result1){

               header("location: contact.php?message=Message Successfully Send!");
              
           }
           else{
              header("location: contact.php?message=Oops,message not send try again!");
          }

    } 
}
?>