<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../logout.php");
 
include 'connection.php';

$search=$_SESSION['user_id'];

$shopid=@$_GET['id'];

 $query2="SELECT makeStatus FROM card INNER JOIN registration ON registration.id=card.profileid WHERE registration.id=$search";
 $result2=mysqli_query($con, $query2);
 $card=mysqli_fetch_assoc($result2);

$query1="SELECT shopname FROM registration WHERE id=$shopid";
$result1=mysqli_query($con, $query1);
$shop=mysqli_fetch_assoc($result1);

  $query="SELECT * FROM category WHERE shopid=$shopid";
  $result=mysqli_query($con, $query);


?>
<?php include 'home_header.php'?>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/grid.css" />

    <style>
    .page-header {
        padding-bottom: 9px;
        margin: 40px 0 20px;
        border-bottom: 1px solid #eee;
    }
    .categoryheading{
    border: 1px solid #eee;
    box-shadow: 0 0 10px 1px white;
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 10px;
    color: grey;
}
.categoryheading:hover{
  background-color: orange;
  color: white;
}
    </style>


    <div class="container">

            <h1 style="color: white;"><?php echo "\n\n\n".$shop['shopname']; ?></h1>
            <p class="lead" style="color: grey;">Categories are given below</p>
       
        
  <!-- <div class="row masonry" data-target=".item" data-col-xs="12" data-col-sm="6" data-col-md="4" data-col-lg="4" data-col-xl="3"> -->



        <?php
          $count=0;
             if($card['makeStatus']=="make")
          {
              while($row = mysqli_fetch_array($result)){   
                
                       if($count%2==0){
                        
                          echo  "
                             <div class='row masonry' data-target='.item' data-col-xs='12' data-col-sm='6' data-col-md='4' data-col-lg='4' data-col-xl='3'>\n\n";
                        

                      }
                $categoryid= $row['id'];     
                echo "<div class='col'>
                       <a href='product.php?id=$categoryid'><div class='item' style=' border-color: white;'>
                          <p class='categoryheading' style='color: white; font-size:30px; font-weight:bold;'>".$row['name']."</p>"."\n"."<p style='color: white; font-size:13px;' ><strong>Description:  </strong>".$row['description']."</p>
                        </div></a>
                       </div>";
                     if(($count+1)%2==0){
                    
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
