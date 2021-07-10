<?php
session_start();
if(empty($_SESSION['user_id']) OR $_SESSION['user_roll']!=3)
header("location:../logout.php");

include 'connection.php';

$search=$_SESSION['user_id'];

include 'messanger_process.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>messager   Card Maker</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

    

<style>
    /* CSS used here will be applied after bootstrap.css */

/* CSS used here will be applied after bootstrap.css */

body{ margin-top:50px;}
.nav-tabs .glyphicon:not(.no-margin) { margin-right:10px; }
.tab-pane .list-group-item:first-child {border-top-right-radius: 0px;border-top-left-radius: 0px;}
.tab-pane .list-group-item:last-child {border-bottom-right-radius: 0px;border-bottom-left-radius: 0px;}
.tab-pane .list-group .checkbox { display: inline-block;margin: 0px; }
.tab-pane .list-group input[type="checkbox"]{ margin-top: 2px; }
.tab-pane .list-group .glyphicon { margin-right:5px; }
.tab-pane .list-group .glyphicon:hover { color:#FFBC00; }
a.list-group-item.read { color: #222;background-color: #F3F3F3; }
hr { margin-top: 5px;margin-bottom: 10px; }
.nav-pills>li>a {padding: 5px 10px;}

.progress-sm {
  height: 10px;
}

.ad { padding: 5px;background: #F5F5F5;color: #222;font-size: 80%;border: 1px solid #E5E5E5; }
.ad a.title {color: #15C;text-decoration: none;font-weight: bold;font-size: 110%;}
.ad a.url {color: #093;text-decoration: none;}

.unread {
 font-weight:800;
}

/* Unstrap theme for Bootstrap 3.1
   author:Bootply
   license:GPL
*/
body {
  font-family:Verdana, Geneva, sans-serif;
  color:#555;
  font-weight:200;
  font-size:13px;
  background-color:#fefeff;
}
a, .help-block  {
  color:#262626;
}
a:hover {
  color:#333;   
}
h1,h2,h3,h4{
  color:#666;
  font-weight:light;
}
p.lead {
  font-family:arial, sans-serif;
  color:#777;
  font-size:16px;
  font-weight:700;
}
.navbar-nav>li>a,.navbar-brand,.navbar-text,.navbar-btn {
  padding:20px;
  padding-top: 20px;
  padding-bottom: 20px;
}
.navbar-inverse {
  background: #444;
  border-color: #333;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus {
  color: #eee;
  background-color: #111;
}
.well{
  background: #f8f8f8;
  color:#777;
  border-radius:0;
  box-shadow:0 0 0;
}
.well,.page-header,input,.form-control,.table-bordered,.table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td,hr{
  border-color: #f0f0f0;
}
.table-hover>tbody>tr:hover>td,.table-hover>tbody>tr:hover>th {
  background-color: #fafafa;
}
.table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
  background-color: #f7f7f7;
}
.table>thead>tr>th {
  border-bottom-width: 1px;
}
.table>thead>tr td {
  font-weight:800;
  color:#454545; 
}    
.form-control {
  background: #fdfdfd;
  color:#444;
  border-radius:2px;
  border-color:#ddd;
  box-shadow:#ddd 2px 2px 0px;
}
.form-control:active,.form-control:focus {
  box-shadow:#bbb 2px 2px 0px;
  border-color:#ccc;
}
[class*='btn-']:hover {
  border-color: transparent;
} 
.btn,.progress,
.panel,.panel-heading,
.list-group-item:first-child,.list-group-item:last-child,
.nav-tabs>li>a,
.navbar, .dropdown-menu {
  border-radius:0;
}
.nav-pills>li>a {border-radius:2px;}
.panel-primary>.panel-heading {
  background-color:#006890;
}
.list-group-item {
  border-color:#f6f6f6;
  color:#666;
}
a.list-group-item.active, .nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
  color: #fff;
  background-color: #5bc0de;
  border-color: #5bc0de; 
}
.badge {
  border-radius:2px;
  font-size:10px;
}
.btn,.btn-default,.btn.active,.btn.disabled {
  border-width:0;
  box-shadow:#bbb 1px 1px 0px;
} 
[class*='-primary']:not([class*='text-']){
  background-color:#008cba;
  border-width:0;
  color:#f0f0f0;
}
[class*='-default']:not([class*='text-']){
  background-color:#f2f2f2;
  border-width:0;
  color:#888;
}
[class*='-info']:not([class*='text-']){
  background-color:#5bc0de;
  border-width:0;
  color:#fff;
}
[class*='-warning']:not([class*='text-']){
  background-color:#e99002;
  border-width:0;
  color:#eee;
}
[class*='-danger']:not([class*='text-']){
  background-color:#dc2c0f;
  border-width:0;
  color:#fff;
}
[class*='-sucess']:not([class*='text-']){
  background-color:#33bb33;
  border-width:0;
  color:#ffeeff;
}
[class*='-primary']:hover,[class*='primary']:focus {
   background-color:#0079a1;
   border-width:0;
   color:#fff;
}
[class*='-default']:hover,[class*='-default']:active {
   background-color:#eeeeee;
   border-width:0;
   color:#444;
}
[class*='-info']:hover,[class*='-info']:active {
   background-color:#62a6df;
   color:#fff;
}
[class*='-danger']:hover,[class*='-danger']:active {
   background-color:#b1240c;
   color:#fff;
}
[class*='-success']:hover,[class*='-success']:active {
   background-color:#6cd347;
   color:#fff;
}
.btn-group>.btn:not(:first-child) {
   margin-left: 1px;
}
.has-warning,.has-error,.has-success {
   opacity:.6;
   color:#000;
}
.pagination li > a, .pager li>a, .pager li>span, .pager li>a:hover, .pager li>a:focus, .pager .disabled>a, .pager .disabled>a:hover, .pager .disabled>a:focus, .pager .disabled>span{
   background-color: transparent;
   border-color: #eee;
   border-radius:0;
}
.star {
    visibility:hidden;
    font-size:15px;
    cursor:pointer;
}
.star:before {
   content: "\2606";
   color: grey;
   position: absolute;
   visibility:visible;
}
.star:checked:before:hover {
    box-shadow: 5px 10px 20px red inset;
}
.star:checked:before {
   content: "\2605";
   position: absolute;
   color: gold;
}
/*heart*/
.heart {
    visibility:hidden;
    font-size:15px;
    cursor:pointer;
}
.heart:before {
   content: "\2665";
   color: grey;
   position: absolute;
   visibility:visible;
}
.heart:checked:before:hover {
    box-shadow: 5px 10px 20px red inset;
}
.heart:checked:before {
   content: "\2665";
   position: absolute;
   color: tomato;
}
* {
  box-sizing: border-box;
}


/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}
.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
/* end theme */
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 0%;
  height: 3px;
  background-color: orange;
}
</style>
</head>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-9 col-md-10">
             <a href="index.php"><button type="button" class="btn btn-default" data-toggle="tooltip" title="home">
                <span class="glyphicon glyphicon-home"></span> </button></a>
                  <a href="messanger.php"><button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">    
                <span class="glyphicon glyphicon-refresh"></span> </button></a>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">All</a></li>
                    <li><a href="#">Read</a></li>
                    <li><a href="#">Unread</a></li>
                </ul>
            </div>
       
            <!-- <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    More <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Mark all as read</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><small class="text-muted">Select messages to see more actions</small></li>
                </ul>
            </div> -->
           <!--  <div class="pull-right">
                <span class="text-muted"><b>1</b>–<b>50</b> of <b>160</b></span>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div> -->
        </div>
    </div>
    <hr>
    <div class="row">
        <!--left-->
        <aside class="col-sm-3 col-md-2">
             <button type="button" class="btn btn-warning btn-sm btn-block" data-toggle="modal" data-target="#exampleModal">
            <i class="glyphicon glyphicon-edit"></i> Compose</button>
            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Send Gmail</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="myProgress">
          <div id="myBar"></div>
          </div>
      <div class="modal-body">
                
                <form name="msform" autocomplete="off">               
                
                <label for="gmail1">Email</label><br>
                <!-- <input type="email" class="form-control" id="gmail" name="gmail" maxlength="150"  onfocusout="checkgmail()" value="" > -->
                <div class="autocomplete" style="width: 100%;">
                <input id="gmail" type="text" class="form-control" id="gmail" name="gmail" maxlength="150"  onfocusout="checkgmail()" value="">
                </div>
                <label for="message">Message</label>
                <textarea cols="30" rows="10" style="background-image:url(images/textarea_backfround.jpeg); color: white;" class="form-control" id="message" value="" name="message" focus="messageblue()" onfocusout="messagegreen()" maxlength="1000"></textarea>
                </form>
                
      </div>
      <div class="modal-footer">
        <button type="button" onclick="move()" class="btn btn-primary">Send Message</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->
            <hr>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right">32</span> Inbox </a></li>
                <li><a href="#"><span class="badge pull-right">10</span>Archived</a></li>
                <li><a href="#"><span class="badge pull-right">16</span>Favourite</a></li>
                <li><a href="#"><span class="badge pull-right">3</span>Sent</a></li>
                <li><a href="#">trash</a></li>

                <!-- <li><a href="#"><span class="badge pull-right">3</span>Drafts</a></li> -->
            </ul>
            <hr>
        </aside>
        <!--main-->
        <div class="col-sm-9 col-md-10">
            <!-- tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Primary</a></li>
                <li class="favorite-button"><a href="#" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span>
                    favourite </a></li>
            </ul>
            <!-- tab panes -->
            
               <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"></strong>
                                 <p style="background-color: skyblue; border-radius: 50px; color: red; text-align: center; font-size: 25px;"><?php echo @$_GET['message']; ?></p>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><center></center></th>
                                            <th><center></center></th>
                                            <th><center></center></th>
                                            
                                        </tr>
                                    </thead>
                
                                   <tbody>
                            <!-- inbox header -->
                            <tr>
                                <td>
                                    <label>
                                        <input type="checkbox" class="all" title="select all">
                                    </label>
                                </td>
                                <td>
                                    <button class="btn btn-default"><i title="delete selected" class="glyphicon glyphicon-trash"></i></button>
                                    <button class="btn btn-default"><i title="delete selected" class="glyphicon glyphicon-heart"></i></button>
                                    
                                </td>
                                <td></td>
                            
                            </tr>
                            <!-- inbox item -->
                            <?php 
                            while ($row=mysqli_fetch_assoc($msg_result)) {
                            if($row['readStatus']=="unread"){
                            echo "<tr>
                                <td style='background-color:mistyrose;'>
                                    <label>
                                        <input type='checkbox'>
                                        <input class='star' id='".$row['id']."' type='checkbox' title='starred'";
                                         if($row['starredStatus']=="starred"){
                                          echo "checked";
                                        }
                                        echo ">
                                        <input class='heart' id='".$row['id']."' type='checkbox' title='favourite' onclick='heartFunction()'";
                                    if($row['favouriteStatus']=="favourite"){

                                     echo "checked";
                                    }
                                    $name=$row['fname']." ".$row['lname'];
                                    if(strlen($name)>8){
                                    $name=substr($name,0,8)."..";
                                    }
                                     echo ">
                                    </label> ".substr($name,0,10)."</td>
                                <td style='background-color:mistyrose;'>";
                                $message=$row['message'];
                                if(strlen($message)>40){
                                    $message=substr($message,0,40)."...";
                                    }

                                echo substr($message,0,43)."</td>
                                <td style='background-color:mistyrose;'><span class='badge' style='background-color:mistyrose; color:orange;'>";
 
                               
                               $oldyear=gmdate("Y",strtotime($row['date']));
                               $oldmonth=gmdate("m",strtotime($row['date']));
                               $oldday=gmdate("d",strtotime($row['date']));
                               $oldhour=gmdate("h",strtotime($row['date']));
                               $oldsecond=gmdate("s",strtotime($row['date']));  

                               
                               $newyear=strtotime(date('Y'));        
                               $newmonth=strtotime(date('m'));
                               $newday=strtotime(date('d'));
                               $newhour=strtotime(date('h'));  
                               $newsecond=strtotime(date('s'));
                               
                               
                               
                               
                               
                               if($newyear==$oldyear){
                               $month=$newmonth-$oldmonth;
                               }else{
                               $oldmonth=12-$oldmonth;
                               $month=$newmonth+$oldmonth;
                               }

                               if($newmonth==$oldmonth)
                                   $day=$newday-$oldday;
                               else{
                               if($oldmonth==1 || $oldmonth==3 ||$oldmonth==5 ||$oldmonth==7||$oldmonth==8||$oldmonth==10||$oldmonth==12){
                               $oldday=31-$oldday;
                               

                               }elseif ($oldmonth==2) {
                                 $oldday=28-$oldday;
                                 
                               }elseif ($oldmonth==4 || $oldmonth==6 ||$oldmonth==9 ||$oldmonth==11) {
                                 $oldday=30-$oldday;
                                 
                               }
                                 $day=$newday+$oldday;
                             }
                               
                               $hour=$newhour-$oldhour;
                               $second=$newsecond-$oldsecond;
                               
                              

                                
                                /* $datediff=strtotime(date('Y-m-d H:i:s'))-strtotime($row['date']);
                                

                                $year=gmdate("Y",$datediff);
                                $month=gmdate("m",$datediff);
                                $day=gmdate("d",$datediff);
                                $hour=gmdate("h",$datediff);
                                $second=gmdate("s",$datediff);
                                echo gmdate("Y-m-d H:i:s", $datediff);
                               if($year>0){
                                    echo $year." year ago";
                                }elseif ($month>0) {
                                    echo $month." month ago";
                                }elseif ($day>0) {
                                    echo $day." day ago";
                                }elseif ($hour>0) {
                                    echo $hour." hour ago";
                                }elseif ($second>0) {
                                    echo $second." second ago";
                                }*/
                                /*$time=gmdate("d H:i:s", $datediff);*/
                                
                                /*gmdate("d H:i:s", $datediff)*/
                                echo "</span></td>
                            </tr>";
                          }else{
                             echo "<tr>
                                <td width='160px'>
                                    <label>
                                        <input type='checkbox'>
                                        <input class='star' id='".$row['id']."' type='checkbox' title='starred'";
                                         if($row['starredStatus']=="starred"){
                                          echo "checked";
                                        }
                                         $name=$row['fname']." ".$row['lname'];
                                         if(strlen($name)>8){
                                    $name=substr($name,0,8)."..";
                                    }
                                        echo ">
                                        <input class='heart' id='".$row['id']."' type='checkbox' title='favourite' onclick='heartFunction()'";
                                    if($row['favouriteStatus']=="favourite"){

                                     echo "checked";
                                    }
                                     echo ">
                                    </label> <span class='name'>".substr($name,0,10)."</span></td>
                               <td>";
                                $message=$row['message'];
                                if(strlen($message)>40){
                                    $message=substr($message,0,40)."...";
                                    }

                                echo substr($message,0,43)."</td>
                                <td><span class='badge' style='background-color:white; color:orange;'>".date('Y-m-d H:i:s') ." AM</span></td>
                            </tr>";
                          }
                              }
                            ?>       
                        </tbody>
                                   
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
            <div class="row-md-12">

                <div class="well text-right">
                    <small>Copyright © 2019 Card Maker</small>
                </div>

            </div>
        </div>
    </div>
</div>  
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
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
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
         $('#bootstrap-data-table').on('click', '.star', function(){
            
            var id = $(this).attr("id");
            var value = "yes";
            $.ajax({
                url: "http://localhost/card/cardadmin/changestart.php",
                method: "post",
                data: {id:id,value:value},
                success: function(succ){
                    console.log(succ);
                },
                error: function(err){
                    console.log(err);
                }
            });
        });
    });
        $(document).ready(function(){
       $('#bootstrap-data-table').on('click', '.heart', function(){
            var id = $(this).attr("id");
            var value = "yes";
           
            $.ajax({
                url: "http://localhost/card/cardadmin/changeheart.php",
                method: "post",
                data: {id:id,value:value},
                success: function(succ){
                    console.log(succ);
                },
                error: function(err){
                    console.log(err);
                }
            });
        });
    });
 /*$("#favourite").click(function() {

        var id = $(this).attr("id");
            var value = "yes";
            alert(id);
            $.ajax({
                url: "http://localhost/card/cardadmin/changeheart.php",
                method: "post",
                data: {id:id,value:value},
                success: function(succ){
                    console.log(succ);
                },
                error: function(err){
                    console.log(err);
                }
            });
 });*/
</script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table').DataTable();
      } );

  function checkgmail(){
  var alphaExp=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if(document.forms["msform"]["gmail"].value.length>8 && document.forms["msform"]["gmail"].value.match(alphaExp)){
       document.forms["msform"]["gmail"].style.border="1px solid green";  
  }
  else{
     $('#gmail').val("");
          document.forms["msform"]["gmail"].placeholder="gmail not valid!";
          document.forms["msform"]["gmail"].style.border="1px solid red";  
  }
}
/*   autocomplete function*/

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the gmail from the messages:*/
var gmails = [
<?php
 $autocomplete_query="SELECT * FROM messages";
   $autocomplete_result=mysqli_query($con, $autocomplete_query);
$count=0;
while ($row=mysqli_fetch_assoc($autocomplete_result)) {
if($count==0){
   echo '"';
}else{
  echo ',"';
}
echo $row['gmail'].'"';
$count++;
}
?>
];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("gmail"), gmails);
function move() {
  var elem = document.getElementById("myBar");   
  var width = -2;
  var id = setInterval(frame, 120);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      document.getElementById("myBar").style.background="darkgreen";
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }

}
</script>

</body>
</html>
