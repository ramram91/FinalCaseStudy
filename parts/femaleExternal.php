<html>
	<head>
		<title>HUMAN BODY SYSTEM</title><meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
		<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
		<script src="js/jquery.slide.js" type="text/javascript"></script>
		<script src="js/jquery-func.js" type="text/javascript"></script>
		<script src="js/jquery-func.js" type="text/javascript"></script>
		<?php include_once('style.php');?>
		<style>
		.head{
				position:absolute;
				margin-top: 42px;
				margin-left: 400px;		
			}
			.torsor{
				position:absolute;
				margin-top: 137px;
				margin-left: 140px;		
			}
			.arms{
				position:absolute;
				margin-top: 195px;
				margin-left: 473px;		
			}
			.legs{
				position:absolute;
				margin-top: 532px;
				margin-left: 147px;		
			}
			
			#font h1 a {
				font-family: century gothic;
				font-size: 20px;
				color: yellowgreen;
				font-weight: normal;
			}
			#font h1 a:hover {
				font-family: century gothic;
				font-size: 20px;
				color: yellowgreen;
				text-decoration: none;
				font-weight: bold;
			}
			
			#frontbody {
				margin-left: -1%;
				align: center;
			}
			h2 a {
				color: white;
				font-family: century gothic;
				font-size: 17px;
			}
			h2 a:hover {
				font-size: 17px;
				color: black;
				text-decoration: none;
				font-weight: bold;
				text-shadow: 4px 4px 20px white;
	
			}
			</style>
	</head>

	<body>
		<?php include_once('header.php');?>
		<!-- -->
			
		<div id="font">
			<!--data-toggle="modal" data-target="#head"-->
			<h1 class = "head" > <a href = "femaleHead.php">Head</a></h1>
			<h1 class = "torsor" > <a href = "femaleTorso.php">Torso</a></h1>
			<h1 class = "arms" > <a href = "femaleArms.php" data-toggle="modal" data-target="#arms">Arms</a></h1>
			<h1 class = "legs" > <a href = "femaleLegs.php" data-toggle="modal" data-target="#legs">Legs</a></h1>
		</div>
	
	<div align = center>
		<img src="images\Female\female.jpg" class="Front" id="frontbody" width="500" height="750">		
	</div>
			<h2 align="center"><a href="main.php" >HOME</a></h2>
		
		<?php include_once('footer.php');?>
	</body>
</html>