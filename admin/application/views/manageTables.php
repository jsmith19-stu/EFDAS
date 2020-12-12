<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	foreach ($css_files as $file) : ?>
		<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>



	<title> Tables</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- Bootstrap 3.3.4 -->
	<link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- FontAwesome 4.3.0 -->
	<link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons 2.0.0 -->
	<link href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
	<!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
	<link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<style>
		.error {
			color: red;
			font-weight: normal;
		}
	</style>
	<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript">
		var baseURL = "<?php echo base_url(); ?>";
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div>
		<header class="main-header">
			<!-- Logo -->
			<a href="<?php echo base_url(); ?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>EF</b>DAS</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Dashboard</b></span>
			</a>

			


			<a href='<?php echo site_url('tables/alerts_management') ?>' class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->

				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Alerts</b></span>
			</a>
			<a href='<?php echo site_url('tables/devices_management') ?>' class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->

				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Devices</b></span>
			</a>
			<a href='<?php echo site_url('tables/owners_management') ?>' class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->

				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Owners</b></span>
			</a>
			<a href='<?php echo site_url('') ?>' class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->

				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b></b></span>
			</a>
			<a href='' class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->

				<!-- logo for regular state and mobile devices -->
				<span> </span>
			</a>







		</header> <br>



	</div>


	<div style='height:20px;'></div>
	<div style="padding: 10px">
		<?php echo $output; ?>
	</div>
	<?php foreach ($js_files as $file) : ?>
		<script src="<?php echo $file; ?>"></script>
	<?php endforeach; ?>
</body>

</html>