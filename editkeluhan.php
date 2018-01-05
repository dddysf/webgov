<?php
include 'config.php';

//membuat query select
$sql = "SELECT * FROM tb_data_keluhan";
$result = $conn->query($sql);
$row        = mysqli_fetch_array($result);

?>
<!-- Custom styles for this template -->
    <link href="dashboard/css/agency.min.css" rel="stylesheet">
	<div class="col-lg-12">
            <div class="outter-form-login">
            <form action="simpankeluhan.php" class="inner-login" method="post">
            	<div class ="table responsive">
					<table class = "table table-bordered table-hover table-stripped">
						<tr>	
							<th>NO</th>
							<th>USER ID</th>
							<th>TOPIK</th>
							<th>KELUHAN</th>
							<th>OPSI				
						</tr>
                <tr>
                   <td><input type="text" value="<?php echo $row['no'];?>" name="no"></td>
                   <td><input type="text" value="<?php echo $row['idu'];?>" name="idu"></td>
	               <td><input type="text" value="<?php echo $row['topik'];?>" name="topik"></td>
				    <td><input type="text" value="<?php echo $row['keluhan'];?>" name="keluhan"></td>
					<td>
						<input type="submit" class="btn btn-info btn-xs" value="SUBMIT" />
					</td>

            
        </div>
    </div>

    <script src="dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="dashboard/js/jqBootstrapValidation.js"></script>
    <script src="dashboard/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="dashboard/js/agency.min.js"></script>