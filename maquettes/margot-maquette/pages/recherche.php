<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<link href="css/helpers.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>


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
			<div class="text-right">
				<h1 class="ft_Georgia sz_2 italic underline">Recherche</h1>
			</div>

			<div class="row">
				<div class="col-lg-4" style="border-right:1px solid silver;position:relative;">

					<p class="lead ft_Georgia">Vous pouvez utiliser ce formulaire pour rechercher un produit ou une information particulière. </p>

					<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Votre recherche</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre recherche">
					  </div>

					  
					  <div class="form-group text-right">
					  	<button type="submit" class="btn btn-default">Rechercher</button>
					  </div>
					
					</form>
				</div>

				<div class="col-lg-4">
					<!--
					<p class="lead">Resultats de la recherche</p>
					-->
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



</body>



</html>