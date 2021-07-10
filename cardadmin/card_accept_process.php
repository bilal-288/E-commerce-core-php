<?php
include 'connection.php';



    $usergmail= @$_GET["id"];

    $query="SELECT *, card.id AS cardid FROM `card` INNER jOIN card_type ON card.card_typeid=card_type.id where gmail='$usergmail'";
    
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
    $makeStatus=$data['makeStatus'];
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
    $profileimage="../client/".$profile_data['image'];

        if(isset($_POST['reject'])){
      
    $id=$_POST['btnid'];
      $edit="reject";
      $editdiscount=0;
      $makeStatus="notmake";
       
           $query="UPDATE `card` SET status = '$edit', discount='$editdiscount', makeStatus='$makeStatus' WHERE id = '$id'";

                    
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