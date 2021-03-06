<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title><?php echo $template['title']; ?></title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url();?>assets/images/logo2.png' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?php echo base_url();?>assets/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- CSS3 Animate It Plugin Stylesheet -->
<link href="<?php echo base_url();?>assets/css/plugins/css3-animate-it-plugin/animations.css" rel="stylesheet">
<!-- /css3 animate it plugin stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?php echo base_url();?>assets/css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="<?php echo base_url();?>assets/css/mouldifi-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->


</head>
<body class="login-page">
	<div class="login-pag-inner">
		<div class="animatedParent animateOnce z-index-50">
			<div class="login-container animated growIn slower">
				<div class="login-branding">
					<a href="index.html"><img src="<?php echo base_url();?>assets/images/logo2.png" alt="Mouldifi" title="Mouldifi"></a>
				</div>
				<div class="login-content">
					<h2><strong>Welcome</strong>, please login</h2>
					<?php 
					$alert_message = $this->session->flashdata('alert_message');
					$alert_type = $this->session->flashdata('alert_type');
					echo $alert_message == '' ? '' : '<div class="alert alert-'.$alert_type.'"><button type="button" class="close" data-dismiss="alert">&times;</button>
					<p>'.$alert_message.'</p>
					</div><script>$(".alert").bind("close", function(){$(this).addClass("fade out");});$(".alert").alert();</script>';
					?>
					<?php echo $template['body']; ?>
				</div>
			</div>
		</div>
	</div>
<!--Load JQuery-->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Load CSS3 Animate It Plugin JS -->
<script src="<?php echo base_url();?>assets/js/plugins/css3-animate-it-plugin/css3-animate-it.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
