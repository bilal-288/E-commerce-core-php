<html>
<head>

    <title>CardMaker Shop - Shop Admin side</title>

    <link rel="apple-touch-icon" href="images/download.png">
    <link rel="shortcut icon" href="images/download.png">

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
        button{
          border: none;
          padding: 8px 15px 8px 15px;
          background: #FF8500;
          color: #fff;
          box-shadow: 1px 1px 4px #DADADA;
          -moz-box-shadow: 1px 1px 4px #DADADA;
          -webkit-box-shadow: 1px 1px 4px #DADADA;
          border-radius: 3px;
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          margin-left: 3%;
        }
        button:hover{
         background: #EA7B00;
         box-shadow: 0 0 0 2px white, 0 0 0 3px #EA7B00;
         color: #fff;
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
                    <li class="menu-title"><span style="font-weight: bold;">Card </span> Maker</li><!-- /.menu-title -->

                    <!-- <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon fa fa-credit-card"></span>Card</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-male"></i><a href="card_request_table.php">Card requests</a></li>
                        </ul>
                    </li> -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon   fa fa-shopping-basket"></span>Category</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="addcategory.php">Add Category</a></li>
                            <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="#">upgrade Category</a></li>
                            <li><i class="menu-icon fa fa-trash-o"></i><a href="#">delete Category</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="#">Category Recycle Bin</a></li>
                        </ul>
                    </li>
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon    fa fa-shopping-bag"></span>Products</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon  fa  fa-cart-plus"></i><a href="addproduct.php"> Add Products</a> </li>
                            <li><i class="menu-icon  fa fa-desktop"> </i> <a href="viewproduct.php"> View Products</a> </li>
                            <li><i class="menu-icon  fa fa-pencil-square-o"> </i> <a href="updateproduct_table.php"> upgrade Products</a></li>
                            <li><i class="menu-icon  fa fa-trash"></i> <a href="#"> delete Products</a></li>
                        </ul>
                   <!--  </li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="menu-icon fa fa-shopping-bag"></span>Shops</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-cart-plus"></i><a href="addshop.php">Add Shops</a></li>
                            <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="#">upgrade shops</a></li>
                            <li><i class="menu-icon fa fa-trash-o"></i><a href="#">delete shops</a></li>
                            <li><i class="menu-icon fa fa-trash"></i><a href="#">shops Recycle Bin</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
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
                           
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
 -->
                            <a class="nav-link" href="../logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>