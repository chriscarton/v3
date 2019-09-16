<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<link href="css/helpers.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="css/menu-collections.css" rel="stylesheet" type="text/css"/>


</head>
<body class="">


<div class="container-fluid full-height">
	<div class="row">
		<div class="col-lg-2 full-height" style="border-right:1px solid gray;position:relative;">
			
			<div class="fixed-menu" style="position:fixed;">
			<?php require_once('elements/menu.php'); ?>
			</div>

		</div>

		<div class="col-lg-10">
			<div>
				<?php require_once('elements/menu-collections.php'); ?>

				<h1 class="ft_Georgia sz_2 italic silver">
					Nom de la collection <span class="glyphicon glyphicon-menu-right sz_0-6"></span> lignes <span class="glyphicon glyphicon-menu-right sz_0-6"></span> familles
				</h1>
			</div>

			<div class="row">
				<div style="background-color:silver;background-image:url('img/collections/fonds/mandoline-ban.jpg');background-size:cover;height:200px;padding-top:65px;">

					<div style="">
						<h3 class="ft_Archivo-Narrow text-center" style="color:white;text-shadow: 2px 2px 5px #2F2F2F;">
							<a href="index.php?p=lignes" class="no-style">
							Mandoline (<small style="color:white;">Nom de la ligne</small>)
							</a>
						</h3>
					</div>
				</div>
			</div>



			<div class="row">
				<div class="container">

					<div style="width:1050px;margin-left:auto;margin-right:auto;margin-top:50px;">
						<div class="float-left border mg-rt-10 mg-bt-10" style="width:200px;height:200px;background-image:url('img/familles/lavabos.jpg');background-size:cover;">
							<div class="ft_Archivo-Narrow text-center mg-tp-70">
								<a href="index.php?p=products" style="font-size:2em;color:white;text-shadow: 2px 2px 5px #2F2F2F;">Lavabos</a>
							</div>
						</div>
						<div class="float-left border mg-rt-10 mg-bt-10" style="width:200px;height:200px;background-image:url('img/familles/douches.jpg');background-size:cover;">
							<div class="ft_Archivo-Narrow text-center mg-tp-70">
								<a href="index.php?p=products" style="font-size:2em;color:white;text-shadow: 2px 2px 5px #2F2F2F;">Douches</a>
							</div>
						</div>
						<div class="float-left border mg-rt-10 mg-bt-10" style="width:200px;height:200px;background-image:url('img/familles/accessoires.jpg');background-size:cover;">
							<div class="ft_Archivo-Narrow text-center mg-tp-70">
								<a href="index.php?p=products" style="font-size:2em;color:white;text-shadow: 2px 2px 5px #2F2F2F;">Accessoires</a>
							</div>
						</div>
						<div class="float-left border mg-rt-10 mg-bt-10" style="width:200px;height:200px;background-image:url('img/familles/bains.jpg');background-size:cover;">
							<div class="ft_Archivo-Narrow text-center mg-tp-70">
								<a href="index.php?p=products" style="font-size:2em;color:white;text-shadow: 2px 2px 5px #2F2F2F;">Bains</a>
							</div>
						</div>
						<div class="float-left border mg-rt-10 mg-bt-10" style="width:200px;height:200px;background-image:url('img/familles/bidets.jpg');background-size:cover;">
							<div class="ft_Archivo-Narrow text-center mg-tp-70">
								<a href="index.php?p=products" style="font-size:2em;color:white;text-shadow: 2px 2px 5px #2F2F2F;">Bidets</a>
							</div>
						</div>
					</div>

				</div>
			</div>
			

		</div>

		

	</div>
</div>




<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/actu.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/map.js"></script>
<script type="text/javascript" src="js/imgLiquid/imgLiquid.js"></script>
<script type="text/javascript" src="js/menu-collections.js"></script>


<script type="text/javascript">
$(".imgLiquid").imgLiquid({

	fill: true,
	verticalAlign:'center',    // 'center' //  'top'   //  'bottom' // '50%'  // '10%'
	horizontalAlign:'center'    // 'center' //  'left'  //  'right'  // '50%'  // '10%'

});
	
</script>

<script type="text/javascript">


</script>


</body>



</html>