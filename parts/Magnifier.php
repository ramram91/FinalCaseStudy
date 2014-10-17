<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Male - CardiovascularSystem</title>
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
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<link href="css/b.css" rel="stylesheet">
	</head>
		<style>
	
			#font h1 a {
				font-family: century gothic;
				font-size: 20px;
				color: black;
				font-weight: normal;
			}
			#font h1 a:hover {
				font-family: century gothic;
				font-size: 20px;
				color: yellowgreen;
				text-decoration: none;
				font-weight: bold;
			 text-shadow: 2px 2px 10px white;
	
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
	<body>
			<?php include_once('header.php');?>
			<div id="font">
				<table border = 5  id="table">
						<th>Magnifier</th>
						<tr><td><h1 class = "blood"> <a href = "#" data-toggle="modal" data-target="#blood">Blood</a></h1></td></tr>
						<tr><td><h1 class = "bone" > <a href = "#" data-toggle="modal" data-target="#bones">Bone</a></h1></td></tr>
						<tr><td><h1 class = "eye" > <a href = "#" data-toggle="modal" data-target="#eye">Eye</a></h1></td></tr>
						<tr><td><h1 class = "muscle"> <a href = "#" data-toggle="modal" data-target="#muscle">Muscle</a></h1></td></tr>
					<tr><td><h1 class = "skin" > <a href = "#" data-toggle="modal" data-target="#skin">Skin</a></h1></td></tr></table>
				
				
				
			</div>
			
			<!--BLOOD-->
			<div class="modal fade" id="blood" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">BLOOD</h4>
					</div>
					<div class="modal-body">
						<div align= center>
							<link rel="stylesheet" type="text/css" href="microscope.css">						
							<div id='bloodcell_holder'>
								<link rel="stylesheet" type="text/css" href="microscope.css">						
								<script src="microscope.js"></script>
								<img class='magnifier' id='bloodcell' src='images/blood.jpg' onmousemove='get_image_offset(event, this.id);' onmouseout='hide_magnifier(this.id)'>
							</div>						
						</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
					</div>
				</div>
			  </div>
			</div>
			</div>
					<!--BONE-->
		
			<div class="modal fade" id="bones" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">BONE</h4>
					</div>
					<div class="modal-body">
						<div align = center>
						<div id='bonecell_holder'>
	<img class='magnifier' id='bonecell' src='images/bone.jpg' onmousemove='get_image_offset(event, this.id);' onmouseout='hide_magnifier(this.id)'>
</div>
<script src="microscope.js"></script>
<link rel="stylesheet" type="text/css" href="microscope.css">	
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
					</div>
				</div>
			  </div>
			</div>							
					<!--EYES-->
		
			<div class="modal fade" id="eye" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">EYE</h4>
					</div>
					<div class="modal-body">
						<div align = center>
<div id='eyemicroscope_holder'>
	<img class='magnifier' id='eyemicroscope' src='images/eye.jpg' onmousemove='get_image_offset(event, this.id);' onmouseout='hide_magnifier(this.id)'>
</div>
<script src="microscope.js"></script>
<link rel="stylesheet" type="text/css" href="microscope.css">
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
					</div>
				</div>
			  </div>
			</div>							
		
			<!--SKIN-->
		<div class="modal fade" id="skin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">SKIN</h4>
					</div>
					<div class="modal-body">
						<div align = center>
						<div id='skincell_holder'>
	<img class='magnifier' id='skincell' src='images/skin.jpg' onmousemove='get_image_offset(event, this.id);' onmouseout='hide_magnifier(this.id)'>
</div>
<script src="microscope.js"></script>
<link rel="stylesheet" type="text/css" href="microscope.css">
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
					</div>
				</div>
			  </div>
			</div>							
		
			<!--MUSCLE-->
		<div class="modal fade" id="muscle" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">MUSCLE</h4>
					</div>
					<div class="modal-body">
						<div align = center>
						<div id='musclecell_holder'>
	<img class='magnifier' id='musclecell' src='images/muscle.jpg' onmousemove='get_image_offset(event, this.id);' onmouseout='hide_magnifier(this.id)'>
</div>
<script src="microscope.js"></script>
<link rel="stylesheet" type="text/css" href="microscope.css">
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn" data-dismiss="modal">Close</button>
					</div>
				</div>
			  </div>
			</div>							
			
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="js/b.js"></script>
			<h2 align="center"><a href="main.php" >HOME</a></h2>
			<?php include_once('footer.php');?>
	</body>
</html>

