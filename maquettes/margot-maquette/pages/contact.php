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
				<h1 class="ft_Georgia sz_2 italic underline">Contact</h1>
			</div>

			<div class="row">
				<div class="col-lg-4" style="border-right:1px solid silver;position:relative;">

					<p class="lead ft_Georgia">Si vous souhaitez nous envoyez un message, vous trouverez ici le formulaire qu'il vous faut. </p>

					<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nom</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre nom">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Prénom</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez votre prénom">
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleInputPassword1">Compagnie</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrez éventuellement la compagnie que vous representez">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputPassword1">Sujet</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sujet de votre message">
					  </div>
					  
					  <div class="form-group">
					    <label for="exampleInputPassword1">Message</label>
					    <textarea class="form-control"></textarea>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre email">
					  </div>
					  
					  <div class="form-group text-right">
					  <button type="submit" class="btn btn-default">Envoyer</button>
					  </div>
					
					</form>
				</div>

				<div class="col-lg-4">

					<p class="lead">Vous pouvez aussi directement passer au showroom.</p>

					<div class="text-right">
					<a href="#" class="no-style link-sub-address bold ft_Georgia sz_1-2"><u>Showroom MARGOT</u></a>
					<address>
						150 avenue Ledru Rollin 
						<br/>75011 
						<br/>Paris
					</address>
					</div>
					<!--Mettre une image à la place de cet iframe car le serveur sera notFound-->
					<a href="#"><img src="img/gmap.png" class="img-responsive"></a>
					<!--
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.154477718093!2d2.3786842!3d48.8552646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67208036e26b1%3A0xad28b588e864e04f!2s150+Avenue+Ledru+Rollin%2C+75011+Paris!5e0!3m2!1sfr!2sfr!4v1432040381382" width="100%" height="300" frameborder="0" style="border:0;margin:0;"></iframe>
					-->
					<hr>
					<p class="lead">Ou bien contactez-nous par téléphone ou par mail.</p>

						<span class="glyphicon glyphicon-phone-alt"></span>&nbsp;01 43 71 72 73 <br/>
						<span class="glyphicon glyphicon-envelope"></span>&nbsp;contact@margot-france.com<br/>
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