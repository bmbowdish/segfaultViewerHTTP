<!DOCTYPE html>
<!-- saved from url=(0072)http://twitter.github.com/bootstrap/examples/starter-template.html#about -->
<html lang="en" height="100%"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>CSH Segfault Viewer</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="CSH Segfault viewer">
<meta name="author" content="Ryan Buzzell w/Bootstrap template">

	<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
			<style>
				body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
				}
			</style>
			<link href="css/bootstrap-responsive.css" rel="stylesheet">

			<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
</head>
<body height="100%">
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
		        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			</a>
   		<!-- Be sure to leave the brand out there if you want it shown -->
		<a class="brand" href="index.php">Segfault Archive</a>
	        <a href="segfaults.php" class="btn btn-mini btn-primary">Segfault Archive</a>

		<!--<a href="uploadNew.html" class="btn btn-mini btn-danger">Upload</a>-->
		</div>
	</div>
</div>
</div>

<div class="container-fluid">
<div class="row-fluid">
<div class="span2" name="scroll" style="overflow: auto;">
<iframe src="content.php" frameborder="0" name"scroll" width="100%"></iframe>
</div>

<div class="span10">
	<!--Body content-->
	<iframe src="https://members.csh.rit.edu/segfault/Segfault%20-%20Volume%201,%20Issue%201.pdf" frameborder="0" name="iframePdf" width="100%"></iframe>
 	<!-- Le javascript
	 ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./Bootstrap, from Twitter_files/jquery.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-transition.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-alert.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-modal.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-dropdown.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-scrollspy.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-tab.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-tooltip.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-popover.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-button.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-collapse.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-carousel.js"></script>
	<script src="./Bootstrap, from Twitter_files/bootstrap-typeahead.js"></script>
	<script>
	$(window).load(function (){
		console.log("test, bitches");
		$("iframe").height($(window).height() - 85);
		$("scroll").height($(window).height() - 85);
	});
	$(document).ready(function () {
	console.log("testicles");
	});
	</script>
	</body><style type="text/css"></style></html>
