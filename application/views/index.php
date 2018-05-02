<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Akademik UIN Sky</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="<?php echo base_url();?>assets/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='<?php echo base_url();?>assets/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->

 <!-- js-->
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/mdb.min.css" rel="stylesheet">
<!--//webfonts-->

<!-- Metis Menu -->
<script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
	<!-- requried-jsfiles-for owl -->
					<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
					<script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index.php"><span class="fa fa-area-chart"></span> Akademik<span class="dashboard_text">UIN SKY</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="<?php echo base_url(); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
			  <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Perkuliahan</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="<?php echo base_url('perkuliahan/dosens'); ?>"><i class="fa fa-angle-right"></i> Dosen</a></li>
                  <li><a href="<?php echo base_url('perkuliahan/matkul'); ?>"><i class="fa fa-angle-right"></i> Mata Kuliah</a></li>
                  <li><a href="<?php echo base_url('perkuliahan/krs'); ?>"><i class="fa fa-angle-right"></i> Lihat KRS</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url('ruang'); ?>">
                <i class="fa fa-pie-chart"></i>
                <span>Ruang</span>
                </a>
              </li>
              <li class="treeview">
                <a href="<?php echo base_url('grafik'); ?>">
                <i class="fa fa-dashboard"></i> <span>Grafik</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->

				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


			

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img"><img src="<?php echo base_url();?>assets/images/2.jpg" alt=""> </span>
									<div class="user-name">
										<p><?php echo $this->session->userdata('nama'); ?></p>
										<span>Mahasiswa</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->

      <div id="page-wrapper">
  			<div class="main-page general">
                  <?php
                        $this->load->view($page);
                  ?>
  			</div>
  		</div>

	<!--footer-->
	<div class="footer">
	   <p>&copy; Fadqurrosyidik | 16650021 <a href="https://farasyidk.gitlab.io/profil" target="_blank">Profil</a></p>
	</div>
    <!--//footer-->
	</div>

	<!-- new added graphs chart js-->

    <script src="<?php echo base_url();?>assets/js/utils.js"></script>


	<!--scrolling js-->
	<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
	<!--//scrolling js-->

	<!-- side nav js -->
	<script src='<?php echo base_url();?>assets/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	

	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url();?>assets/js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->

</body>
</html>
