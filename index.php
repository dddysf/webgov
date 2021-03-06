<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home Gov-Talk</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Add custom CSS here -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">Portal Resmi Gov-Talk</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Dashboard </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-road"></i> Layanan <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="?page=informasi">Informasi Publik</a></li>
                                <li><a href="?page=pengaduan">Pengaduan Publik</a></li>
                            </ul>
                        </li> 
                    </ul>

                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown user-dropdown">
                            <a href="logout.php" <i class="fa fa-user"></i>Logout </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <?php
                if(@$_GET['page'] == 'pengaduan'){
                include "views/pengaduan.php";
                }else if(@$_GET['page'] == 'informasi'){
                include "views/informasi.php";
                }
                ?>

            </div><!-- /#page-wrapper -->

        </div><!-- /#wrapper -->

        <!-- JavaScript -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.js"></script>

    </body>
</html>