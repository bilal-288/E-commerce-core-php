<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){
    
     
    $loginId=$_POST['userId'];
    $password=$_POST['password'];
     $query="SELECT* FROM `registration` where gmail='$loginId' AND password='$password' OR username='$loginId' AND password='$password'"; 
     $run_query = mysqli_query($con,$query);

     if($run_query){
        if(mysqli_num_rows($run_query)>0){
          $row = mysqli_fetch_assoc($run_query); 
          $_SESSION['user_id']= $row['id'];
          $_SESSION['user_roll']=$row['userroll'];
          $status=$row['status'];
          if($status=='active'){       
            if($row['userroll']==1){
              header("location: client/home.php?name=$loginId"); 
            }elseif($row['userroll']==2){
              header("location: cardshop/index.php?name=$loginId"); 
            }elseif($row['userroll']==3){
              header("location: cardadmin/index.php?name=$loginId"); 
            }
          }else{
            header("location: login.php?login_error=User temporary or permanently disable!");
          }
        }
        else
        {
            header("location: login.php?login_error=User id/gmail or password wrong!");
        }
     }
}

?>