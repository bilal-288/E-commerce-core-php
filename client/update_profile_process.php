<?php
include 'connection.php';

              
    $userid= @$_GET["userid"];

    $query="SELECT * FROM `registration` where gmail='$userid'OR username='$userid'";
    
    $run_query = mysqli_query($con,$query);

    $data= mysqli_fetch_assoc($run_query);
    
    $username=$data['username'];
    $fname=$data['fname'];
    $lname=$data['lname'];
    $gmail=$data['gmail'];
    $password=$data['password'];
    $phone=$data['phone'];
    $address=$data['address'];
    $image=$data['image'];


if(isset($_POST['submit'])){

    $searchgmail=$_POST['gmail'];

    $imagequery="SELECT * FROM `registration` where gmail='$searchgmail'";
    
    $runimage_query = mysqli_query($con,$imagequery);

    $imagedata= mysqli_fetch_assoc($runimage_query);

    $oldimage=$imagedata['image'];
    $oldpassword=$imagedata['password'];


    
    $username1=$_POST['username'];
    $fname1=$_POST['fname'];
    $lname1=$_POST['lname'];
    $gmail1=$_POST['gmail'];
    $password1=$_POST['password'];
    $phone1=$_POST['phone'];
    $address1=$_POST['address'];
    $file=$_FILES['newfile'];


    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetemp=$file['tmp_name'];

    if (basename($_FILES["newfile"]["name"]) == '') {
           
            $post_basename = $oldimage;
            $destinationfile=$post_basename;
        }else{
            $post_basename = basename($_FILES["newfile"]["name"]);
            $destinationfile='upload/'.$post_basename;
        }

    if (!$post_basename == '') {
                
     if($fname1==""||$lname1==""||$phone1==""|| $address1==""){
    
                   header("location: update_profile.php?message=field missing or wrong try again!");
     }else{      
          if(empty($password1)){
                  $password1=$oldpassword;
          }
          move_uploaded_file($filetemp, $destinationfile); 

          
           $query="UPDATE `registration` SET fname = '$fname1',lname = '$lname1',password='$password1'  , phone='$phone1' , address='$address1' , image='$destinationfile' WHERE gmail = '$gmail1'";

                    
    $result=mysqli_query($con,$query);
if($result)
    {
      header("location: update_profile.php?message=profile successfully updated!");
}
else{
    header("location: update_profile.php?message=error!.....not value updated!");
}
}
}

}
?>