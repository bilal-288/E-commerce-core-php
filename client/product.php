<?php 
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../logout.php");
 
$search=$_SESSION['user_id'];

include 'home_header.php'
?>
<div style="background-color: white;">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <style>
    .page-header {
        padding-bottom: 9px;
        margin: 40px 0 20px;
        border-bottom: 1px solid #eee;
    }
    .item {
    border: 1px solid #eee;
    box-shadow: 0 0 10px -3px #ccc;
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 25px;
     color: orange;
    
}
.item:hover{

  background-color: orange;
  color: white;

}
.productheading{
    border: 1px solid #eee;
    box-shadow: 0 0 10px 1px orange;
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 10px;
   
}
.productheading:hover{
  background-color: orange;
  color: white;
}
    </style>
<?php

include 'connection.php';


$categoryid=@$_GET['id'];

$query1="SELECT name FROM category WHERE id=$categoryid";
$result1=mysqli_query($con, $query1);
$category=mysqli_fetch_assoc($result1);

 $query2="SELECT card_typeid, makeStatus FROM card INNER JOIN registration ON registration.id=card.profileid WHERE registration.id=$search";
 $result2=mysqli_query($con, $query2);
 $card=mysqli_fetch_assoc($result2);
 $cardtype=$card['card_typeid'];

  $query="SELECT * FROM product INNER JOIN discount ON discount.productid=product.id INNER JOIN card_type ON discount.card_typeid=card_type.id WHERE product.categoryid=$categoryid AND discount.card_typeid=$cardtype";
  $result=mysqli_query($con, $query);

?>

    <div class="container">

            <h1 style="color: grey;"><?php echo "\n\n\n".$category['name']; ?></h1>
            <p class="lead" style="color: grey;"><?php echo $category['name']; ?>s are given below</p>
       
        
  <!-- <div class="row masonry" data-target=".item" data-col-xs="12" data-col-sm="6" data-col-md="4" data-col-lg="4" data-col-xl="3"> -->



        <?php
          $count=0;
          if($card['makeStatus']=="make")
          {
              while($row = mysqli_fetch_array($result)){   
                
                       if($count%3==0){
                        
                          echo  "
                             <div class='row masonry' data-target='.item' data-col-xs='12' data-col-sm='6' data-col-md='4' data-col-lg='4' data-col-xl='3'>\n\n";
                        

                      }
                $categoryid= $row['id'];  
                $after_discount=$row['price'] * ( (100-$row['discount']) / 100 );   
                echo "<div class='col'>
                       <div class='item' style=' border-color: orange;'>
                          <p class='productheading' style=' font-size:30px; font-weight:bold;'>".$row['name']."</p>"."<p style='font-size:13px; font-weight:bold;'> &nbsp;&nbsp; Price: ".$row['price']." rs.<br><b><span style='font-size:18px;'>Discount</span></b><br>&nbsp;&nbsp;&nbsp;&nbsp;".$row['type'].": ".$row['discount']."% <br>&nbsp;&nbsp;&nbsp;&nbsp; Price after discount: ".round($after_discount,2)."  rs.</p>  
                        </div>
                       </div>";
                     if(($count+1)%3==0){
                    
                     	echo "</div>";
                     }
                   
                      $count++;
    
               }
             }
               

        ?>
        <!-- </div> -->
             
           <?php  
         if($card['makeStatus']=="make")
        { 
        if($result){  
        if(mysqli_num_rows($result)>0){
        echo "<button class='btn btn-block btn-primary js-ajax' id='twofuns' type='button'>More</button>";
         }
       }
       }  
        ?>
    </div>
</div>
	<script src="https://www.cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://www.maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap4.masonry.min.js"></script>
	<script src="assets/js/script.js"></script>
<script type="text/javascript">
	
var btn = document.querySelector('#twofuns');
btn.addEventListener('click',method1);
btn.addEventListener('click',method2);
function method2(){
  console.log("Method 2");
}
function method1(){
  console.log("Method 1");
}
</script>
</body>
</html>
