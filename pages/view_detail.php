<?php
    include_once'dbconnection/connection.php';
?>

<?php
        if(!isset($_GET['view'])){
          $id = $_GET['id'];
          //var_dump ($id);
          $query="select * from applicant where id =".$id;
          $result=mysqli_query($conn,$query);
          
      }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Genesys Ignite</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="../index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>G</b>Ig</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Genesys</b>IGN</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">No messages</li>

                                <li class="footer"><a href="#">No Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs">Genesys Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Genesys Admin - Genesys Staff
                                        <small>How are you doing?</small>
                                    </p>
                                </li>

                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Genesys Admin</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="/">
                            <i class="fa fa-th"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green">hot</small>
                            </span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Ignite Applicants
                    <small>Complete List of applicants</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Ignite</a></li>
                    <li class="active">Applicant Details</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <?php
                    $rows = mysqli_fetch_array($result,MYSQLI_BOTH);
                ?>
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-6 connectedSortable">
                        <!-- Chat box -->
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Business Uniqueness</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                        <h4><?php echo $rows["Business_uniqueness"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <!-- /.box (chat box) -->

                        <!-- TO DO List -->
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Business Details</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                        <h4><?php echo $rows["Business_details"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">About last funding </h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                        <h4><?php echo $rows["about_last_funding"]; ?></h4>
                                        <hr>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">What Excites you about your Business </h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                        <h4><?php echo $rows["what_excites_you_about_your_business"]; ?></h4>
                                        <hr>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title"> Difference between you and your competitions</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                        <h4><?php echo $rows["competitors_and_difference"]; ?></h4>
                                        <hr>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">how are customers solving problems daily </h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                        <h4><?php echo $rows["how_are_customers_solving_problems_daily"]; ?></h4>
                                        <hr>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">How do you plan to acquire customers </h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                        <h4><?php echo $rows["how_do_you_plan_to_acquire_customers"]; ?></h4>
                                        <hr>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">What is your Team size</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["Team_size"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Have You Receieved Funding Before</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["received_funding_before"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Total Funding Received</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["total_funding_raised"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                    </section>
                    <!-- /.Left col -->
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-6 connectedSortable">
                       
                      
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">What Stage is Your Business</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["Business_stage"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Number Of Current Users</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["current_users"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">What is Your Customers Segment</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["customers_segment"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">What is your Customers Pain Point</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["customers_painpoint"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">What Impact does your business have on the community</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["business_impact_on_community"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">What is Revenue Model</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["revenue_model"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Progress in the last six months</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["progress_in_the_last_six_months"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Traction from Paid users</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["traction_from_paid_users"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Areas You need funding</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["areas_where_you_need_funding"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">How did you hear of the incumbation Programme</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["how_did_you_hear_of_genesys"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="fa fa-question"></i>

                                <h3 class="box-title">Have Read the T&C</h3>
                            </div>
                            <div class="box-body chat" id="chat-box">
                                <!-- chat item -->
                                <div class="item">
                                    <div class="attachment">
                                      
                                    <h4><?php echo $rows["have_you_read_T&C"]; ?></h4>
                                    </div>
                                    <!-- /.attachment -->
                                </div>
                                <!-- /.item -->
                            </div>
                        </div>
                        <!-- Rating form -->
                        <form method="POST" action="process_grade.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">SCORE</label>
                               
                                <select name="rating" id="" class="form-control" required>
                                    <option value="">Select Grade</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                </select>
                                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>"/>
                                <input type="hidden" name="judge" value="<?php echo $_GET['judge']; ?>"/>
                            </div>
                            <button type="submit" name="submit" class="btn btn-outline-success">Submit My Grade</button>
                        </form>
                        <!-- </Rating form> -->
                    </section>
                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2019 <a href="#">Genesys Techhub</a>.</strong> All rights
            reserved.
        </footer>
       
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="../bower_components/raphael/raphael.min.js"></script>
    <script src="../bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../bower_components/moment/min/moment.min.js"></script>
    <script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
</body>

</html>