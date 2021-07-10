<?php

include 'connection.php';
   $msg_query="SELECT * FROM messages WHERE readStatus='unread' ORDER BY id DESC";
   $msg_result=mysqli_query($con, $msg_query);
   
   $count_msg_query="SELECT COUNT(IF(readStatus='unread',1, NULL))'total_unread' FROM messages";
   $count_msg_result=mysqli_query($con, $count_msg_query);
   $msg_data=mysqli_fetch_assoc($count_msg_result);
   $totalunread=$msg_data['total_unread'];

?><html>
<head>

    <title>CardMaker Admin - Admin side</title>

    <link rel="apple-touch-icon" href="images/favicon.jpg">
    <link rel="shortcut icon" href="images/favicon.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }
        p.main-title{
           font-size: 20px;
           color: #061C30;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title"><span style="font-weight: bold;">Card </span> Maker</li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon fa fa-credit-card"></span>Card</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-male"></i><a href="card_request_table.php">Card requests</a></li>
                            <li><i class="menu-icon fa fa-check-square-o"></i><a href="card_accept_table.php">Accept Cards</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="card_reject_table.php">Reject Cards</a></li>
                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon fa fa-pencil-square-o"></span>Cards Maker</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa fa-plus-square-o"></i><a href="card_make_table.php"> Make Card</a></li>
                            <li><i class="menu-icon fa fa-desktop "></i><a href="card_table.php"> View cards</a></li>
                        </ul>
                    </li>
                       <li class="menu-title">Accounts</li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon fa fa-shopping-cart"></span>Shops</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="addshop.php">Add Shops</a></li>
                            <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="update_shop_table.php">edit shops</a></li>
                            <li><i class="menu-icon fa fa-desktop"></i><a href="view_shop.php">View shops</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="shop_recyclebin.php">shops Recycle Bin</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon fa fa-users"></span>Clients</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-address-book"></i><a href="view_client_table.php">View</a></li>
                            <li><i class="menu-icon fa fa-user-times"></i><a href="block_client_table.php">blocked client</a></li>
                        </ul>
                    </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon fa fa-plus"></span>CardMake Shop</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="#">Add cardmake Shop</a></li>

                            <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="update_cardmaker_table.php">edit cardmake shops</a></li>
                            <li><i class="menu-icon fa fa-trash-o"></i><a href="#">delete shop</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="#">shops Recycle Bin</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </aside>
    
    <div id="right-panel" class="right-panel">
       
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><p class="main-title"><span style="font-weight: bold; font-size: 25px;">Card </span>Maker</p></a>
                    <a class="navbar-brand hidden" href="./"><p>Card Maker</p>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>

            <div class="top-right">

                <div class="header-menu">
                     <div class="header-left">
                        <!-- <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> -->

                      <!--   <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">3</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-check"></i>
                                    <p>Server #1 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-info"></i>
                                    <p>Server #2 overloaded.</p>
                                </a>
                                <a class="dropdown-item media" href="#">
                                    <i class="fa fa-warning"></i>
                                    <p>Server #3 overloaded.</p>
                                </a>
                            </div>
                        </div> -->
                       <?php
                        if($totalunread==0){
                           echo "<a href='messanger.php'><div class='dropdown for-message'>
                            <button style='margin-top: 15%;' class='btn btn-secondary dropdown-toggle' type='button' id='message' aria-expanded='false'>
                                <i class='fa fa-envelope'></i>
                                <span class='count bg-primary'>".$totalunread."</span>
                            </button></a>";
                        }else{
                        echo "<div class='dropdown for-message'>
                            <button style='margin-top: 50%;' class='btn btn-secondary dropdown-toggle' type='button' id='message' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fa fa-envelope'></i>
                                <span class='count bg-primary'>".$totalunread."</span>
                            </button>";
                             
                             if($totalunread>0){
                              echo "
                                <div class='dropdown-menu' aria-labelledby='message'>
                                <p class='red'>You have".$totalunread." new messages</p>";
                              }else{
                                echo"
                                <div class='dropdown-menu' aria-labelledby='message'>
                                <p class='red'>there is no new message yet..</p>";
                              }
                                $count=0;
                                while ($row=mysqli_fetch_assoc($msg_result)) {
                                if($count<5){
                                $count++;


                                echo "
                                <a class='dropdown-item media' href='#'>
                                    <span class='photo media-left'><img alt='avatar' src='images/profile-logo.png'></span>
                                    <div class='message media-body'>
                                        <span class='name float-left'>".$row['fname']." ".$row['lname']."</span>
                                        <span class='time float-right'>10 minutes ago</span>
                                        <p>";
                                $message=$row['message'];
                                if(strlen($message)>30){
                                    $message=substr($message,0,30)."...";
                                    }

                                echo substr($message,0,33)."</p>
                                    </div>
                                </a>";
                                }
                            }

                                echo "<a class='dropdown-item media' href='messanger.php'>
                                    <div class='message media-body'>
                                        <center><p>
                                  ";
                                 if($totalunread>0){
                              echo "see more";
                              }else{
                                 echo "see inbox";
                              }
                                        
                                echo "</p></center>
                                    </div>
                                </a>
                               
                            </div>
                        </div>
                    </div>";
                     }
                    ?>
                  
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>
                       
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>

                    </div>


                </div>
            </div>
        </header>