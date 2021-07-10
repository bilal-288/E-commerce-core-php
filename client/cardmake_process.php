<?php

include 'connection.php';


if(isset($_POST['submit'])){

     
    $profileid=$_POST['profileid'];

    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gmail=$_POST['gmail'];
    $cnic=$_POST['cnic'];
    $gender=$_POST['gender'];
    $getdob=$_POST['dob'];
    
    $dob = strtotime(str_replace("/","-",$getdob));       
    $tdate = time();


    $age = 0;
    while( $tdate > $dob = strtotime('+1 year', $dob))
    {
      ++$age;
    }

    $phone1=$_POST['phone1'];
    $phone2=$_POST['phone2'];
    $profession=$_POST['profession'];
    $income=$_POST['income'];
    $street=$_POST['street'];
    $apartment=$_POST['apartment'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $postcode=$_POST['postcode'];

    $status="pending";
    
    $find_category= $_POST['category'];
    
    if($find_category=="0"){
        $type="economy";      
    }elseif ($find_category=="1") {
        $type="premium"; 
    }elseif($find_category=="2"){
        $type="business"; 
    }elseif($find_category=="3"){
        $type="first"; 
    }else{
        $type="premium";
    }
    
    $query6="SELECT id FROM card_type WHERE type='$type'";
    $result=mysqli_query($con, $query6);
    $typedata=mysqli_fetch_assoc($result);
    $category=$typedata['id'];

    if($fname==""||$lname==""||$gmail==""||$cnic==""||$dob==""||$age==""||$gender==""||$phone1==""||$profession==""||$street==""||$city==""||$postcode==""){
        
              header("location: home.php?msg=field missing or wrong try again!");

      }else{
      $search_query="SELECT * FROM `card` WHERE cnic='$cnic' OR gmail='$gmail' OR phone1='$phone1' OR phone2='$phone2' OR profileId=$profileid";

         $search_data= mysqli_query($con, $search_query);
         
        
         
         $data= mysqli_fetch_assoc($search_data);

              $find_cnic=$data['cnic'];
              $find_gmail=$data['gmail'];
              $find_phone1=$data['phone1'];
              $find_phone2=$data['phone2'];
              $find_profileid=$data['profileid'];

    if(empty($find_cnic) && empty($find_gmail) && empty($find_phone1) && empty($find_phone2)){ 

          
            $query="INSERT INTO `card`(`fname`,`lname`,`gmail`,`cnic`,`gender`,`dob`,`age`,`phone1`,`phone2`,`profession`,`income`,`street`,`apartment`,`city`,`country`,`postcode`,`card_typeid`,`profileId`) VALUES ('$fname','$lname','$gmail','$cnic','$gender','$getdob','$age','$phone1','$phone2','$profession','$income','$street','$apartment','$city','$country','$postcode','$category','$profileid')";
           
           $result1=mysqli_query($con,$query);

           if($result1)
           {   
              
               header("location: home.php?msg= Request successfully sent!");
               

           }
           else{
               
               header("location: home.php?msg=try again..error: rerquest not sent!");
           }
         }
         else{
              header("location: home.php?msg=your cnic or gmail or numbers already exist or already maked card!");
         }
       
       }
    

}
?>