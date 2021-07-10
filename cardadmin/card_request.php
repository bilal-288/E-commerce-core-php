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
<?php include 'card_request_process.php' ?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" 
integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/card_request.css">

<div class="page-heading"><h4 style="padding-left:20px; color:#FF8500;">Card Request View</h4></div>


<div class="container" style="margin-top: 30px;">
    <div class="profile-head">
        <!--col-md-4 col-sm-4 col-xs-12 close-->
        <div class="col-md- col-sm-4 col-xs-12">
            <img src="../card/<?php echo $profileimage;  ?>" class="img-responsive"/>
            <h6><i class="fa fa-user"></i> <?php echo $profileusername?></h6>
        </div>
        <!--col-md-4 col-sm-4 col-xs-12 close-->

        <div class="col-md-5 col-sm-5 col-xs-12">
            <h5><?php echo $profilefname; echo " "; echo $profilelname; ?></h5>
            <ul>
                <li></li>
                <li></li>  
                <li><span class="glyphicon glyphicon-home"></span> <?php echo $profileaddress?></li>
                <li><span class="glyphicon glyphicon-phone"></span> <a href="#" title="call"><?php echo $profilephone?></a></li>
                <li><span class="glyphicon glyphicon-envelope"></span><a href="#" title="mail"><?php echo $profilegmail?></a></li>
            </ul>
        </div>
    </div>
    <!--profile-head close-->
</div>
<!--container close-->


<br/>
<br/>

<div class="container">
    <div class="col-sm-8">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Card id:  <?php echo $id ?></a>

                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <form action="card_request_process.php" method="POST">
                        <input type="text" name="btnid" value="<?php echo $id  ?>" hidden="on">
                         <input type="text" name="btncat" value="<?php echo $type  ?>" hidden="on">
                        <p align="right" style="float: right; padding:20px;">
                        <button type="submit" name="accept" class="accept btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-check"></span> Accept</button>
                        </p>
                        <p align="right" style="float: left; padding:20px;">
                         <button type="submit" name="reject" class="decline btn btn-default btn-sm">
                            <span class="glyphicon glyphicon-remove"></span> decline</button>
                        </p>
                        </form>
                        <div class="well well-sm">
                            <h4>Card Request Description</h4>

                        </div>
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td><strong>Name:</strong>  <?php echo $fname ?> <?php echo $lname ?></td>
                                <td><strong><span style="color:grey;" class="glyphicon glyphicon-envelope"></span></strong> <span style="color: #42C0FB;"><?php echo $gmail ?></span></td>
                            </tr>
                            <tr>    
                                <td><strong><span style="color: grey;" class="glyphicon glyphicon-phone"></span></strong>  <span style="color: #42C0FB;"><?php echo $phone1 ?></span></td>
                                <td><strong><span style="color: grey;" class="glyphicon glyphicon-phone"></span></strong>  <span style="color: #42C0FB;"><?php echo $phone2 ?> </span></td>
                            </tr>
                            <tr>    
                               <td><strong>Cnic:</strong>  <?php echo $cnic ?></td>
                                <td><strong>Age:</strong> <?php echo $age ?> </td> 
                            </tr>
                            <tr>
                               <td><strong>Date of Birth:</strong>  <?php echo $dob ?></td>
                                <td><strong>Gender:</strong> <?php echo $gender ?> </td> 
                            </tr>
                            <tr>
                               <td ><strong>Profession:</strong>  <?php echo $profession ?></td>
                                <td><strong><span style="color:grey;" class="fa fa-money"></span> Income:</strong> <?php echo $income ?> </td> 
                            </tr>
                            <tr>
                               <td colspan="2"><strong><span style="color:grey;" class="glyphicon glyphicon-home"></span> Address:</strong>  <?php echo $apartment ?> ( <?php echo $street ?>), <?php echo $city ?>, <?php echo $country ?></td>
                            </tr>
                            <tr>                               
                                <td><strong>Nationality:</strong> <?php echo $country ?> </td>
                                <td><strong>Postcode:</strong>  <?php echo $postcode ?></td> 
                            </tr>
                            <tr>
                               <td colspan="2"><strong>Card Category:</strong>  <?php echo $category ?></td>
                            </tr>
                            <tr>
                               <td colspan="2"><strong>card Request time:</strong>  <?php echo $date ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>

<div class="col-sm-3">
    <div class="panel panel-default">
        <div class="menu_title">
            <b>Discount Details</b>
            <p><strong>Category:</strong>  <?php echo $category ?></p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="email">Disount: </label>
                        <p><?php echo $discount ?> %</p>
                    </div>
                   <!--  <div class="form-group">
                        <label for="email">Emp ID:</label>
                        <p>1020</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Data of Joining:</label>
                        <p>09-05-2016</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Blood Group:</label>
                        <p>O+ve</p>
                    </div>
                    <div class="form-group">
                        <label for="email">In Case of emergency please contact:</label>
                        <p>9500028421</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
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