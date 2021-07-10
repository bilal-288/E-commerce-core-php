<?php 
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=3)
header("location:../logout.php");
  
include 'connection.php';
 
 $search=$_SESSION['user_id'];
?>
<?php include 'header.php'?>
 <link rel="stylesheet" href="assets/css/grid.css" />
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
    color: grey;
    
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
    color: grey;
}
.productheading:hover{
  background-color: orange;
  color: white;
}
    </style>
<?php



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
              while($row = mysqli_fetch_array($result)){   
                
                       if($count%3==0){
                        
                          echo  "
                             <div class='row masonry' data-target='.item' data-col-xs='12' data-col-sm='6' data-col-md='4' data-col-lg='4' data-col-xl='3'>\n\n";
                        

                      }
                $categoryid= $row['id'];  
                $after_discount=$row['price'] * ( (100-$row['discount']) / 100 );   
                echo "<div class='col'>
                       <div class='item as' style=' border-color: orange; background-color;'>
                          <p class='productheading' style='font-size:30px; font-weight:bold;'>".$row['name']."</p>"."<p style='font-size:13px; font-weight:bold;'> Price: ".$row['price']." rs. </p>"."<p style='font-size:13px;' >Discount  ".$row['type'].": ".$row['discount']."% </p> <p style='font-size:13px;' > Price after discount: ".round($after_discount,2)."  rs.</p>  
                        </div>
                       </div>";
                     if(($count+1)%3==0){
                    
                     	echo "</div>";
                     }
                   
                      $count++;
    
               }
             
               

        ?>
        <!-- </div> -->
             
           <?php  
         if($count!=0)
        { 
       
        echo "<button class='btn btn-block btn-primary js-ajax' id='twofuns' type='button'>More</button>";
        
       }  
        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
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
