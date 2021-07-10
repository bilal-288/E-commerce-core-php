<?php 
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=1)
header("location:../logout.php");
 
include 'home_header.php' 
?>
<?php 
include 'cardstatus_process.php';

?>

<link rel="stylesheet" type="text/css" href="assets/css/card_status.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.discount{

   font-size: 15px;

}
</style>
<div class="update-profile-maindiv" style="border: 2px solid white;  margin-top:70px;">

<br/>

    <div class="col-sm-8" style="position: relative; display: inline-block;">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Card id: <?php echo $cardid ?> </a>

                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="well well-sm">
                            <h4>Card Request Status: <span style="color: red;"><?php 
                                echo $status;
                                if(empty($status)) echo "card request not sent!"; ?>... </span></h4>

                        </div>
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td><strong style="font-weight: bold;">Name:</strong> <?php echo $fname1 ?> <?php echo $lname1 ?>  </td>
                                <td><strong><i class="fa fa-envelope" style="font-size:25px"></i></strong> <span style="color: #42C0FB;"> <?php echo $gmail1 ?></span></td>
                            </tr>
                            <tr>    
                                <td><strong><i class="fa fa-mobile-phone" style="font-size:25px"></i></strong>  <span style="color: #42C0FB;"> <?php echo $phone1 ?></span></td>
                                <td><strong><i class="fa fa-mobile-phone" style="font-size:25px"></i></strong>  <span style="color: #42C0FB;"> <?php echo $phone2 ?></span></td>
                            </tr>
                            <tr>    
                               <td><strong style="font-weight: bold;">Cnic:</strong> <?php echo $cnic ?> </td>
                                <td><strong style="font-weight: bold;">Age: </strong> <?php echo $age ?> </td> 
                            </tr>
                            <tr>
                               <div style=""> 
                               <td><strong style="font-weight: bold;">Date of Birth:</strong> <?php echo $dob ?></td>
                                <td><strong style="font-weight: bold;">Gender:</strong>  <?php echo $gender ?></td> 
                               </div>
                            </tr>
                            <tr>
                               <td ><strong style="font-weight: bold;">Profession:</strong><?php echo $profession ?></td>
                                <td><strong style="font-weight: bold;"><span style="color:grey;" class="fa fa-money"></span> Income:</strong> <?php echo $income ?></td> 
                            </tr>
                            <tr>
                                <td colspan="2"><strong style="font-weight: bold;"><i class="fa fa-home" style="font-size:25px"></i> Address:</strong>  <?php echo $apartment ?> ( <?php echo $street ?>), <?php echo $city ?>, <?php echo $country ?></td>
                            </tr>
                            <tr>                               
                                <td><strong style="font-weight: bold;">Nationality:</strong>  <?php echo $country ?></td>
                                <td><strong style="font-weight: bold;">Postcode:</strong> <?php echo $postcode ?>  </td> 
                            </tr>
                            <tr>
                               <td colspan="2"><strong style="font-weight: bold;">Card Category:</strong>  <?php echo $category ?></td>
                            </tr>
                             <tr>
                               <td colspan="2"><strong style="font-weight: bold;">Request time: </strong> <span style="color: #42C0FB;"> <?php echo $date ?></span></td>
                            </tr>
                        </tbody>

                    </table>

                </div>
                
            </div>

        </div>
    
    </div> 
</div>
<div class="col-sm-3" style="position:relative; float: right; background-color: white; ">
      <?php 
            if($makeStatus=='make'){
            echo "<span style=' padding: 10px;
                
                border-radius: 2px;
              
               
                margin: 0 0px;
                background: green;
                font-size: 15px;
                line-height: 15px;
                color: white;
                width: auto;
                height: auto;
            box-sizing: content-box;'>card maked</span>";
            }else{
            echo "<span style=' padding: 10px;
                
                border-radius: 2px;
              
               
                margin: 0 0px;
                background: orange;
                font-size: 15px;
                line-height: 15px;
                color: white;
                width: auto;
                height: auto;
            box-sizing: content-box;'>card not make</span>";
            
            }?>
    <div class="panel panel-default">
        <div class="menu_title">
            <center><b class="discount" style="font-weight: bold; color: #061C30;">Discount Details</b></center>
            <p class="discount"><strong style="font-weight: bold; color: #061C30;">Category:</strong> <?php echo $category ?></p>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                         <label class="discount" ><strong style="color: #061C30; font-weight: bold;">CardMaker Products Discount:</strong><span style="color: #42C0FB;">  <?php echo $discount ?> %</span></label>
                        
                        <p class="discount" id="discount"></p>
                    </div>
                    
                    <div class="form-group">
                        <label class="discount" >Calculate item price after discount</label>
                        <center><label class="discount" style="color: #061C30; font-weight: bold;"> Discount Calculator</label></center>
                        <input class="discount"  type="Number" id="price" placeholder="put item price here.." maxlength="7">
                      
                        <center><button onclick="getPrice()"><i class="menu-icon fa fa-calculator"></i> Calculate</button></center>
                       
                        <input class="discount"  type="Number" id="total" readonly="on">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="update-profile-maindiv" style="">
</div>
<?php include 'footer.php'?> 
<script type="text/javascript">
                        
function getPrice() {         

    var numVal1 = Number(document.getElementById("price").value);   
    var numVal2 = <?php echo $discount ?>;

    var totalValue = numVal1 * ( (100-numVal2) / 100 );
    document.getElementById("total").value = totalValue.toFixed(2);
}

</script>