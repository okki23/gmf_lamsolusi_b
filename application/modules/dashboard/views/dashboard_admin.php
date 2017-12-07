<?php
 
$pesan ='';
$time  = date('Hi');
if($time < 1200)
	$pesan ="Good morning";
else if($time<=1400)
	$pesan='Good Afternoon';
elseif($time<=1800)
	$pesan='A Good Afternoon';
elseif($time<=2400)
	$pesan='Good night';
?>
<div class="well">
	<h1> <b> Welcome... </b>  </h1>
	<?php echo $pesan." ".str_replace("|"," ",$this->session->userdata('real_name')); ?>, The following are your activities that we summarize
	</div>
 

	<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-50">
			<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"><?php echo lang('dash_wait_req'); ?></div> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body">  
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $dist_request; ?> 
							<div style="float:right;">
								<i class="fa fa-archive fa-2x" aria-hidden="true"></i> 
							</div>
							</h1> 
						</div> 
					</div> 
				
					<div class="panel-footer">
							<a href="<?php echo site_url('shipment/index'); ?>">
							<span class="pull-left"><?php echo lang('dash_view_dtl'); ?></span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
							</a> 
					</div> 
			</div>
 
	</div>

	<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-50">
			<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"><?php echo lang('dash_open_awab'); ?> </div> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body">  
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $open_awb; ?> 
							<div style="float:right;">
								<i class="fa fa-archive fa-2x" aria-hidden="true"></i> 
							</div>
							</h1> 
						</div> 
					</div> 
				
					<div class="panel-footer">
							<a href="<?php echo site_url('shipment/monitoring/index'); ?>">
							<span class="pull-left"><?php echo lang('dash_view_dtl'); ?></span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
							</a> 
					</div> 
			</div>
 
	</div>

	<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-50">
			<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"><?php echo lang('dash_open_sp'); ?> </div> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body">  
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $open_sp; ?>
							<div style="float:right;">
								<i class="fa fa-archive fa-2x" aria-hidden="true"></i> 
							</div>
							</h1> 
						</div> 
					</div> 
				
					<div class="panel-footer">
							<a href="<?php echo site_url('shipment/generatesp/index'); ?>">
							<span class="pull-left"><?php echo lang('dash_view_dtl'); ?></span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
							</a> 
					</div> 
			</div>
 
	</div>

	<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-50">
			<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"><?php echo lang('dash_user_log'); ?> </div> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body">  
						<div class="stack-order">
							<h1 class="no-margins"><?php echo $aktif_user; ?>
							<div style="float:right;">
								<i class="fa fa-archive fa-2x" aria-hidden="true"></i> 
							</div>
							</h1> 
						</div> 
					</div> 
				
					<div class="panel-footer">
							<a href="<?php echo site_url('master/petugas'); ?>">
							<span class="pull-left"><?php echo lang('dash_view_dtl'); ?></span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
							</a> 
					</div> 
			</div>
 
	</div>

	<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-50">
			<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">All Request </div> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body">  
						<div class="stack-order">
							<h1 class="no-margins"><?php echo number_format($mothly_request); ?>
							<div style="float:right;">
								<i class="fa fa-archive fa-2x" aria-hidden="true"></i> 
							</div>
							</h1> 
						</div> 
					</div> 
				
					<div class="panel-footer">
							<a href="<?php echo site_url('rpt/index'); ?>">
							<span class="pull-left"><?php echo lang('dash_view_dtl'); ?></span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
							</a> 
					</div> 
			</div>
 
	</div>

	<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-50">
			<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"><?php echo lang('dash_rejc_req'); ?> </div> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body">  
						<div class="stack-order">
							<h1 class="no-margins"><?php echo number_format($rejected_request); ?>
							<div style="float:right;">
								<i class="fa fa-archive fa-2x" aria-hidden="true"></i> 
							</div>
							</h1> 
						</div> 
					</div> 
				
					<div class="panel-footer">
							<a href="<?php echo site_url('rpt/index'); ?>">
							<span class="pull-left"><?php echo lang('dash_view_dtl'); ?></span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
							</a> 
					</div> 
			</div>
 
	</div>

	  