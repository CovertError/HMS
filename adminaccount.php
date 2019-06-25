<?php
include("adheader.php");
include("dbconnection.php");

session_start();
if(!isset($_SESSION[adminid]))
{
    echo "<script>window.location='adminlogin.php';</script>";
}
if(!isset($_SESSION[adminid]))
{
    echo "<script>window.location='adminlogin.php';</script>";
}

?>


<div class="container-fluid">
    <div class="block-header">
        <h2>Dashboard</h2>
        <small class="text-muted">Welcome to Admin Panel</small>
    </div>







    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account col-blue"></i> </div>
                <div class="content">
                    <div class="text">Total Patient</div>
                    <div class="number">
                        <?php
	$sql = "SELECT * FROM patient WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-account col-green"></i> </div>
                <div class="content">
                    <div class="text">Total Doctor </div>
                    <div class="number">
                        <?php
	$sql = "SELECT * FROM doctor WHERE status='Active' ";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-bug col-blush"></i> </div>
                <div class="content">
                    <div class="text">Performing Admin</div>
                    <div class="number">
                        <?php
	$sql = "SELECT * FROM admin WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
            <div class="info-box-4 hover-zoom-effect">
                <div class="icon"> <i class="zmdi zmdi-balance col-cyan"></i> </div>
                <div class="content">
                    <div class="text">Hospital Earning</div>
                    <div class="number">
                        <?php
	$sql = "SELECT * FROM billing_records WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_num_rows($qsql);
	?>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Hospital Survey</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu float-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                        <canvas id="line_chart" height="164" width="704" style="display: block; width: 704px; height: 164px;"></canvas>
                    </div>
                </div>
            </div>
        </div>


    <div class="clear"></div>
</div>
</div>
<?php
include("adfooter.php");
?>
