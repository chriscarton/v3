<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<link href="css/helpers.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>


</head>
<body class="body_bg-black-to-white">

<div class="container-fluid full-height" >
	<div class="row">
		<div class="col-lg-12">


			<div class="relative">
				<div class="absolute slideshow">
					
					<?php for($i=1;$i<20;$i++): ?>
					<div class="imgLiquid absolute slideshow-image">
						<div class="relative" style="/*border:1px solid red;*/height:700px;">
							<div class="grd-3"></div>
							<div class="grd-4"></div>
						</div>
						<img src="img/slideshow/<?php echo $i; ?>.jpg">
					</div>
					<?php endfor; ?>
					
				</div>
			</div>
		
		<div class="main-center" style="/*background-color:rgba(0,0,0,0.5);padding:30px;*/">
			<a href="index.php?p=actu">
				<img src="img/margot.png" class="fadeIn">
			</a>
			
			<div class="fadeIn-2">
				<h1 class="ft_Andada-SC main-title text-center sz_1-6 white" style="padding:0 !important;margin:0 !important;text-shadow: 2px 2px 5px #2F2F2F;">
					<a class="no-style" href="index.php?p=actu">
						Maîtres Robinetiers de France
					</a>
				</h1>
			</div>


			<div class="fadeIn-3 text-center">
			
				<a href="index.php?p=actu" class="inblock sz_1-2 pd-5 ft_Andada-SC white mg-tp-20 home-button">
					Entrer sur le site
				</a>
			</div>

			<div class="fadeIn-4 text-center mg-tp-40">
				<a href="#"><img src="img/collections/retro.png" class="inblock mg-rt-10 collection-img"></a>
				<a href="#"><img src="img/collections/design.png" class="inblock mg-rt-10 collection-img"></a>
				<a href="#"><img src="img/collections/classique.png" class="inblock mg-rt-10 collection-img"></a>
			</div>

		</div>
		
		
		</div>
	</div>
</div>


<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/home.js"></script>
<script type="text/javascript" src="js/imgLiquid/imgLiquid.js"></script>



</body>



</html>