<?php 
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=2)
header("location:../login.php");

include 'connection.php';

$search_id=$_SESSION['user_id'];

$pid=$_GET['id'];


$query5="SELECT *, `product`.`id` AS proid, `category`.`name` AS catname, `product`.`name` AS proname, `category`.`id` AS catid FROM product INNER JOIN category ON `product`.`categoryid`=`category`.`id` WHERE `product`.`id`=$pid";

$result5= mysqli_query($con,$query5);

$productdata=mysqli_fetch_assoc($result5);


if($search_id!=$productdata['shopid']){

      header("location: updateproduct_table.php?message=error(): something wrong!");
}else{

$query = "SELECT * FROM category WHERE  shopid='$search_id'";

$result = mysqli_query($con, $query);

                    $query1="SELECT * FROM card_type ORDER BY id ASC";
 
                    $result1 = mysqli_query($con, $query1);
}
?>
<?php 
include 'header.php';

?>
<?php include 'addcardshop_process.php' ?>
<link rel="stylesheet" type="text/css" href="assets/css/card_request.css">
<link rel="stylesheet" type="text/css" href="assets/css/addcardshop.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" 
integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/card_request.css">

<div class="page-heading"><center><h3 style="padding-left:20px; color:#FF8500;">Update Product</h3></center></div>

<div class="form-style-2">
<div  style="padding-top: 30px;"class="form-style-2-heading">Edit Product information</div> 
<p style="color: red; text-align: center;"><?php echo @$_GET['message']; ?></p>
<form name="msform" action="updateproduct_process.php" method="post">

<input type="text" class="input-field" name="productid" value="<?php echo $productdata['proid'] ?>" / hidden="on">

<label for="field1"><span>Product Name<span class="required">*</span></span><input type="text" class="input-field" name="name" value="<?php echo $productdata['proname'] ?>" / required></label>
<label for="field1"><span>Price <span class="required">*</span></span><input class="input-field" type="number" name="price" value="<?php echo $productdata['price'] ?>" min="0.00" max="10000.00" step="0.01" required/></label>

<label for="field1"><span>Category <span class="required">*</span></span>
    <!-- <option class='select-field' value=""></option>" -->

<?php
echo "<select class='select-field' name='categoryid'>";
echo "<option class='select-field' value='".$productdata['catid']."'>".$productdata['catname']."</option>";
while ($temp = mysqli_fetch_assoc($result)){
    if($productdata['categoryid']!=$temp['id'])
    echo "<option class='select-field' value='".$temp['id']."'>".$temp['name']."</option>";
}
echo "</select>";

?>
</label>

<br>
<label for="field1"><span>Discount <span class="required">*</span></span>
<br>
</label>
<?php

while ($temp = mysqli_fetch_assoc($result1)){
      $pid1=$productdata['proid'];
      $crdid=$temp['id'];
      
      $query7="SELECT * FROM discount WHERE productid='$pid1' AND card_typeid='$crdid'";
      $result7=mysqli_query($con,$query7);
      $data1=mysqli_fetch_assoc($result7);
      echo "<label style='padding-left:10%;'>".$temp['type']." class (%)  <input style='float:right; margin-right:150px; width:60px;'class='input-field' type='number' value='".$data1['discount']."' name='".$temp['id']."'></label><br>";
}

?>

<br>

<label><button name="submit" style="margin-left: 35%;"><i class="menu-icon fa fa-pencil" style="font-size: 20px;"></i>  update Product</button></label>
<br>
<br>
</form>
</div>



   <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Card Maker Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Pyxis Ad</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
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
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

</body>
</html>