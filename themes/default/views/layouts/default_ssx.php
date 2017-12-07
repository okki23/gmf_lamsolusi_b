<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Dashboard</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?php echo $this->config->base_url(); ?>assets/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?php echo $this->config->base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- CSS3 Animate It Plugin Stylesheet -->
<link href="<?php echo $this->config->base_url(); ?>assets/css/plugins/css3-animate-it-plugin/animations.css" rel="stylesheet">
<!-- /css3 animate it plugin stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?php echo $this->config->base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?php echo $this->config->base_url(); ?>assets/css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="<?php echo $this->config->base_url(); ?>assets/css/mouldifi-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Page container -->
<div class="page-container">

	<!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.html"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		 
        <ul id="side-nav" class="main-menu navbar-collapse collapse">
				<?php
				$iclass=false;
				foreach($this->config->item('list_menu') as $link=>$caption){
					if($iclass==false && uri_string()==$link){
						$iclass=true;
						$aclass='active';
					}else{
						$aclass='';
					}
					$user = $this->session->userdata('level');
					if(in_array($user,$caption[1])){
						if(!isset($caption[2])){
							echo '<li class="'.$aclass.'">'.anchor($link,$caption[0]).'</li>';
						}else{
							echo '<li class="has-sub '.$aclass.' '.($caption[0]==''?'visible-md visible-lg':'').'">'.anchor('#',$caption[0].'<span class="sr-only">Toggle Dropdown</span> ',' class="dropdown-toggle" data-toggle="dropdown"').'
							<ul class="dropdown-menu">';
							foreach($caption[2] as $slink=>$scaption){
								if(in_array($user,$scaption[1])){
									echo '<li>'.anchor($slink,$scaption[0]).'</li>';
								}
							}
							echo '</ul></li>';
							if($caption[0]==''){
								foreach($caption[2] as $slink=>$scaption){
									if(in_array($user,$scaption[1])){
										echo '<li class="'.$aclass.' hidden-md hidden-lg">'.anchor($slink,$scaption[0]).'</li>';
									}
								}
							}
						}
					}
				}
				?>
			</ul>
			<ul  id="side-nav" class="main-menu navbar-collapse">
				<li class="has-sub">
					<?php echo anchor('#',str_replace("|"," ",$this->session->userdata('real_name')).' ',' class="dropdown-toggle" data-toggle="dropdown"');?>
					<ul class="dropdown-menu">
						<li><?php echo anchor('user/password','Ganti Password'); ?></li>
						<li><?php echo anchor('user/log/out','Log Out'); ?></li>
					</ul>
				</li>
			</ul>
        
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container gray-bg">
  
		<!-- Main header -->
		<div class="main-header row">
		  <div class="col-sm-6 col-xs-7">
		  
			<!-- User info -->
		 
			<!-- /user info -->
			
		  </div>
		  
		  <div class="col-sm-6 col-xs-5">
			<div class="pull-right">
				<!-- User alerts -->
				 
				<!-- /user alerts -->
				
			</div>
		  </div>
		</div>
		<!-- /main header -->
		
		<!-- Main content -->
		<div class="main-content">
			<h1 class="page-title">Dashboard</h1>
			<div class="row">
				 
			</div>
			<div class="row">
				 
			</div>
			<!-- Footer -->
			<footer class="animatedParent animateOnce z-index-10"> 
				<div class="footer-main animated fadeInUp slow">&copy; 2016 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a> </div>
			</footer>	
			<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="<?php echo $this->config->base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Load CSS3 Animate It Plugin JS -->
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/css3-animate-it-plugin/css3-animate-it.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/blockui-master/jquery-ui.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/blockui-master/jquery.blockUI.js"></script>
<!--Float Charts-->
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/flot/jquery.flot.selection.min.js"></script>        
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>assets/js/functions.js"></script>

<!--ChartJs-->
<script src="<?php echo $this->config->base_url(); ?>assets/js/plugins/chartjs/Chart.min.js"></script>
 
</body>
</html>


  
