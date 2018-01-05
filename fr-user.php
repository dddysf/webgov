<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gov-Talk - Aplikasi Pengaduan Masyarakat</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

<!--Form-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="section-heading text-uppercase">Silahkan Login Terlebih Dahulu</h1>
          </div>
        </div>
        <div class="row text-center">
          
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h3 class="service-heading">Masukkan Username dan password</h3>
             <div class="outter-form-login"></div>
             <form action="login.php" class="inner-login" method="post">
             <h2 class="text-center title-login">Login Member</h2>
                 <div class="form-group">
                     <input type="text" class="form-control" name="username" placeholder="Username">
                 </div>
 
                 <div class="form-group">
                     <input type="password" class="form-control" name="password" placeholder="Password">
                 </div>
                
                 <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
             </form>
          </div>
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-plus fa-stack-1x fa-inverse"></i>
            </span>
            <h3 class="service-heading">Silahkan Isi Form</h3>
            <div class="outter-form-login">
            <form action="simpanreguser.php" class="inner-login" method="post">
            <h2 class="text-center title-login">Registrasi</h2>
                <div class="form-group">
                    <input type="text" class="form-control" name="idu" placeholder="User ID">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="nohp" placeholder="No. Handphone">
                </div>

                <input type="submit" class="btn btn-block btn-custom-green" value="REGISTER" />

            </form>
        </div>
          </div>
        </div>
      </div>


   <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <span class="copyright">Copyright &copy; GOV-Talk</span>
          </div>
        </div>
      </div>
    </footer>
   

  <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/js/agency.min.js"></script>

  </body>

</html>
