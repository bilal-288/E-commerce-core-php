
       <?php 
include 'updateproduct_table_process.php';

?>

<?php 
include 'header.php';

?>

<style type="text/css">
    input[type="submit"]{
        float: right;
        margin-right: 20%;
        background-color: #FF8500;
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


        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card" >
                            <div class="card-header">
                                <strong class="card-title" style="color: #FF8500;">Update Products</strong>
                                 <p style="color: red; background-color: yellow; text-align: center; font-size: 25px;"><?php echo @$_GET['message']; ?></p>
                            </div>
                            <div class="card-body" style="color: #696969;">
                                <!-- background-color: #f1f2f7; -->
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr style="color: #696969; background-color: #C8C8C8;">
                                            <th><center>Product Name</center></th>
                                            <th><center>Price</center></th>
                                            <th><center>Category</center></th>
                                            <?php
                                            global $col1;
                                             while($row = mysqli_fetch_array($result3)){   
                                              
                                            echo "<th style='font-size:13px;'><center>".$row['type']." Class</center></th>";
                                               $GLOBALS['col1']=$GLOBALS['col1']+1;
                                               
                                            }
                                            ?>
                                            <th><span class='fa fa-pencil'></span></th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                       <?php

                                          
                                          global $col_plus;

                                          while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                                           echo "<tr style='font-size:15px;'><td style='color:#FF8500;'>" . $row['pname'] . "</td><td style='color:#0066FF;'>" . $row['price'] . "</td><td style='color:#FF8500;'>" . $row['cname']."</td>"; 
                                         

                                           global $col2;

                                           $price=$row['price'];
                                            
                                           $query1='SELECT * FROM discount
                                           INNER JOIN card_type ON
                                           discount.card_typeid=card_type.id
                                           WHERE `productid` = '.$row["pid"].'
                                           ORDER BY `card_type`.`id` ASC'; 

                                           $result1 = mysqli_query($con, $query1);
                                             
                                           while($row1 = mysqli_fetch_array($result1)){ 

                                           echo "<td style='font-size:13px; color:#0066FF;'>".$row1['discount']."%<span style='color:#FF8500;'> Price:</span> ";
                                             $temp1 = $row1['discount']; 
                                             $temp=$price * ( (100-$temp1) / 100 );
                                             echo round($temp,2)."</td>";
                                             $GLOBALS['col2']=$GLOBALS['col2']+1;
                                             }
                                             
                                             $GLOBALS['col_plus']=$GLOBALS['col1']-$GLOBALS['col2'];   
                                                          
                                             for ($i=0; $i <$col_plus ; $i++) { 
                                                  echo "<td></td>";

                                             }
                                             $GLOBALS['col_plus']=0;
                                             $GLOBALS['col2']=0;
                                             
                                             
                                             echo "<td>"."<form action='updateproduct_table_process.php' method='post'><input type='text' name='pid' value='".$row['pid']."' hidden>  <button type='submit' name='edit'>
                                                    <span class='fa fa-pencil'></span></button></form>"."</td></tr>";
                                             echo " </tr>";
                                             
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
