<?php 
include 'addproduct_process.php';

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

<div class="page-heading"><center><h3 style="padding-left:20px; color:#FF8500;">Add Product</h3></center></div>

<div class="form-style-2">
<div  style="padding-top: 30px;"class="form-style-2-heading">Provide Product information</div> 
<p style="color: red; text-align: center;"><?php echo @$_GET['message']; ?></p>
<form name="msform" action="addproduct_process.php" method="post">
<label for="field1"><span>Product Name<span class="required">*</span></span><input type="text" id="name" class="input-field" name="name" value="" / required></label>
<label for="field1"><span>Price <span class="required">*</span></span><input class="input-field" type="number" name="price" min="0.00" max="10000.00" step="0.01" /></label>
<!-- <label for="field1"><span>Discount <span class="required">*</span></span> -->
<!--  <?php
//echo "<select name='user'>";
//while ($temp = mysql_fetch_assoc($query)){
    //echo "<option value='".$temp['id']."'>".$temp['name']."</option>";
//}
//echo "</select>";
?> -->
<label for="field1"><span>Category <span class="required">*</span></span>
<?php
echo "<select class='select-field' name='categoryid'>";
while ($temp = mysqli_fetch_assoc($result)){
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
      echo "<label style='padding-left:10%;'>".$temp['type']." (%)  <input style='float:right; margin-right:150px; width:60px;'class='input-field' type='number' name='discount".$temp['id']."'></label><br>";
}

?>


<br>

<label><button name="submit" style="margin-left: 35%;"><i class="menu-icon fa fa-cart-plus" style="font-size: 20px;"></i>  ADD Product</button></label>
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
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</body>
</html>