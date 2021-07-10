<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=3)
header("location:../login.php");
 
include 'connection.php';

$search=$_SESSION['user_id'];

$shopid=@$_GET['id'];

$query1="SELECT shopname FROM registration WHERE id=$shopid";
$result1=mysqli_query($con, $query1);
$shop=mysqli_fetch_assoc($result1);

  $query="SELECT * FROM category WHERE shopid=$shopid";
  $result=mysqli_query($con, $query);

?>
<?php include 'header.php'?>
    <link rel="stylesheet" href="assets/css/grid.css" />

    <div class="container">

            <h1 style="color: grey;"><?php echo "\n\n\n".$shop['shopname']; ?></h1>
            <p class="lead" style="color: grey;">Categories are given below</p>
       
        
  <!-- <div class="row masonry" data-target=".item" data-col-xs="12" data-col-sm="6" data-col-md="4" data-col-lg="4" data-col-xl="3"> -->



        <?php
          $count=0;
              while($row = mysqli_fetch_array($result)){   
                
                       if($count%2==0){
                        
                          echo  "
                             <div class='row masonry' data-target='.item' data-col-xs='12' data-col-sm='6' data-col-md='4' data-col-lg='4' data-col-xl='3'>\n\n";
                        

                      }
                $categoryid= $row['id'];     
                echo "<div class='col'>
                       <a href='view_product.php?id=$categoryid'><div class='item' style=' border-color: grey;'>
                          <p style='color: grey; font-size:30px; font-weight:bold;'>".$row['name']."</p>"."\n"."<p style='color: grey; font-size:13px;' ><strong>Description:  </strong>".$row['description']."</p>
                        </div></a>
                       </div>";
                     if(($count+1)%2==0){
                    
                     	echo "</div>";
                     }
                   
                      $count++;
                 
               }

        ?>
        <!-- </div> -->
        <?php  
           if($count!=0){
          /*echo "<input type='hidden'  id='result_no' value='8'>
          <input type='button' class='btn btn-block btn-primary js-ajax' id='load' onclick='loadmore()' value='More'>"; */
          echo"<input type='button' class='btn btn-block btn-primary js-ajax' value='More'>"; 
        }
        ?>

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
