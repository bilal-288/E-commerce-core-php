<?php
include 'connection.php';

    $usergmail= @$_GET["id"];

    $query="SELECT * FROM `card_request` where gmail='$usergmail'";
    
    $run_query = mysqli_query($con,$query);

    $data= mysqli_fetch_assoc($run_query);
    
    $id=$data['id'];
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
    $category=$data['category'];
    $profileId=$data['profileId'];
    $date=$data['date'];
    $discount=$data['discount'];

    $profile_query="SELECT * FROM `registration` where id='$profileId'";
    
    $profile_run_query = mysqli_query($con,$profile_query);

    $profile_data= mysqli_fetch_assoc($profile_run_query);

    $profileusername=$profile_data['username'];
    $profilefname=$profile_data['fname'];
    $profilelname=$profile_data['lname'];
    $profilegmail=$profile_data['gmail'];
    $profilephone=$profile_data['phone'];
    $profileaddress=$profile_data['address'];
    $profileimage=$profile_data['image'];

        if(isset($_POST['reject'])){
      
    $id=$_POST['btnid'];
      $edit="reject";
      $editdiscount=0;
       
           $query="UPDATE `card` SET status = '$edit', discount='$editdiscount' WHERE id = '$id'";

                    
    $result=mysqli_query($con,$query);
if($result)
    {
      header("location: card_accept_table.php?message=request accepted!");
}
else{
    header("location: card_accept_table.php?message=request canceled!");
}

}


?>