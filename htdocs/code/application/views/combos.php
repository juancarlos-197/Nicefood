
<!DOCTYPE html>
<html lang="en">
<head>
<title>Nice-Food</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.6.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/cufon-replace.js"></script>  
<script type="text/javascript" src="<?php echo base_url(); ?>js/Forum_400.font.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/tms-0.3.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/tms_presets.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/atooltip.jquery.js"></script> 

<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->


</head>


<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main">
<!-- header -->
				<?php
				echo$banner;
				?>

<article id="content">

				<?php
				echo $cuadrocom;
				?>	
				    
    					

</article>
			</div>
		</div>
	</div>
</div>




<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
				<?php
				require_once("informacion.php");
				?>
<!-- / footer -->
		</div>
	</div>
</div>











</html>