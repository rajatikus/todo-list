<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/') ?>normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/') ?>bootstrap.min.css">
	<link rel="icon" href="<?php echo base_url('assets/img/') ?>icon.png" type="image/png">
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/') ?>icon.png" type="image/png">
	<style type="text/css">
		body
		{
			font-family: Ubuntu, sans-serif;
			padding-top: 70px;
		}
	</style>
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/') ?>jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/') ?>bootstrap.min.js"></script>

	<?php if( isset($require_jquery_ui) ) :?>
		<?php if( $require_jquery_ui ) : ?>
			<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui/') ?>jquery-ui.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url('assets/js/tinymce/') ?>tinymce.min.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/jquery-ui/') ?>jquery-ui.min.css">
		<?php endif; ?>
	<?php endif; ?>
</head>
<body>
	<div class="container">