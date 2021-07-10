
<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=3)
header("location:../login.php");

include 'connection.php';

$search=$_SESSION['user_id'];
?>
<?php 
include 'header.php';

?>
<style type="text/css">
    input[type="submit"]{
        float: right;
        margin-right: 20%;
        background-color: #42C0FB;
        color:white;
        border-radius:2px;
        border:none;
         box-shadow: 3px 3px grey;
    }
    input[type="submit"]:hover{
        box-shadow: 0 0 0 2px white, 0 0 0 3px #4BB74C;
        background-color: #4BB74C;
        font-weight: bold;

    }
</style>
        <!-- Header-->

       <?php 
include 'card_reject_table_process.php';

?>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Card reject</strong>
                                <p style="background-color: skyblue; border-radius: 50px; color: red; text-align: center; font-size: 25px;"><?php echo @$_GET['message']; ?></p>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><center>Card Id</center></th>
                                            <th><center>Name</center></th>
                                            <th><center>City</center></th>
                                            <th><center>Card Category</center></th>
                                            <th><center>Income</center></th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                       <?php
                                          while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                           echo "<tr><td>" . $row['cardid'] . "</td><td>" . $row['fname'] . "</td><td>" . $row['city'] . "</td><td>" . $row['type'] . "</td><td>" . $row['income'] ."<form action='card_reject_table_process.php' method='post'><input type='text' name='gmail' value='".$row['gmail']."' hidden><input type='submit' name='submit' value='View'></form>". "</td></tr>";//$row['index'] the index here is a field name
                                          }

                                        ?>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

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
