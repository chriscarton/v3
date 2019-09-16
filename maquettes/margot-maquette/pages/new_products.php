<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<link href="css/helpers.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="css/chris-slider.css" rel="stylesheet" type="text/css"/>


</head>
<body class="no-overflow-x">


<div class="container-fluid full-height">
	<div class="row">
		<div class="col-lg-2 full-height" style="border-right:1px solid gray;position:relative;background-color:white;z-index:8000000;">
			
			<div class="fixed-menu" style="position:fixed;">
			

			<?php require_once('elements/menu.php'); ?>
			</div>

		</div>

		<div class="col-lg-10 pd-0 slider-container site">
			<div class="row">
				<div class="col-lg-12 text-right">
					<div class="relative" style="width:100%;">
						<div class="absolute" style="right:5px;top:-70px;">
							<h1 class="ft_Georgia sz_2 italic underline">Nouveautés</h1>
						</div>
					</div>
				</div>
			</div>

			<?php require_once('elements/slider_new-products.php'); ?>



		<div class="relative" style="width:100%;">
			<div class="absolute" style="top:20px;right:5px;">
				<a href="#" class="slideNext no-style sz_2">
					<span class="glyphicon glyphicon-menu-left"></span>
				</a>
				
				<a href="#" class="slidePrev no-style sz_2">
					<span class="glyphicon glyphicon-menu-right"></span>
				</a>
				
			</div>
		</div>









			
		</div>
	</div>
</div>




<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- <script type="text/javascript" src="js/actu.js"></script> -->
<script type="text/javascript" src="js/imgLiquid/imgLiquid.js"></script>
<script type="text/javascript" src="js/chris-slider.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

<script type="text/javascript">
	$(".imgLiquid").imgLiquid({

    	fill: true,
    	verticalAlign:'center',    // 'center' //  'top'   //  'bottom' // '50%'  // '10%'
    	horizontalAlign:'center'    // 'center' //  'left'  //  'right'  // '50%'  // '10%'

	});
</script>

</body>



</html>