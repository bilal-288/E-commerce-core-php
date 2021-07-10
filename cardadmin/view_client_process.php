<?php
include 'connection.php';

    $usergmail= @$_GET["id"];

    $profilestatus="active";
    $profile_query="SELECT * FROM `registration` where gmail='$usergmail' AND userroll=1 AND status='$profilestatus'";
    
    $profile_run_query = mysqli_query($con,$profile_query);

    $profile_data= mysqli_fetch_assoc($profile_run_query);
    $profileid=$profile_data['id'];
    $profileusername=$profile_data['username'];
    $profilefname=$profile_data['fname'];
    $profilelname=$profile_data['lname'];
    $profilegmail=$profile_data['gmail'];
    $profilephone=$profile_data['phone'];
    $profileaddress=$profile_data['address'];
    $profileimage="../client/".$profile_data['image'];

    $query="SELECT *, card.id AS cardid FROM `card` INNER jOIN card_type ON card.card_typeid=card_type.id where card.profileid='$profileid'";
    
    $run_query = mysqli_query($con,$query);

    $data= mysqli_fetch_assoc($run_query);
    
    $id=$data['cardid'];
    $fname=$data['fname'];
    $lname=$data['lname'];
    $gmail=$data['gmail'];
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
    $type=$data['type'];
    $status=$data['status'];
    $makeStatus=$data['makeStatus'];
    $profileId=$data['profileId'];
    $date=$data['date'];
    $discount=$data['discount'];


        if(isset($_POST['block'])){
      
      $id=$_POST['btnid'];
      $edit="block";
      $editdiscount=0;
      $makeStatus="notmake";
       
          $status="unactive";
          $query="UPDATE registration SET status='$status' WHERE id='$id'";
          $result=mysqli_query($con,$query);

          $query1="UPDATE card SET status='$edit', discount='$editdiscount', makeStatus='$makeStatus' WHERE profileid='$id'";
          $result1=mysqli_query($con,$query1);  
                    
     
if($result && $result1)
    {
      
      header("location: view_client_table.php?message=user blocked");
}
else{
    header("location: view_client_table.php?message=error occurred user not block try again!");
}

}


?>