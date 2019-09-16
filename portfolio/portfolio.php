<?php
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Chris Carton</title>
	<link rel="stylesheet" type="text/css" href="../system/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../system/css/style.css">
	<link rel="stylesheet" type="text/css" href="../system/fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../system/js/zoombox/zoombox.css">


</head>
<body>

<?php

?>



<section class="row bg_gray" id="Accueil">
	<div class="container follow_height">
		<div id="Accueil_content">
			<h1 class="ft_Amatic-SC text-center fz_8 mg-v-0 sz_6">Chris Carton</h1>
			<h2 class="text-center ft_Archivo-Narrow mg-v-0">Portfolio</h2>
			<p class="text-center ft_Archivo-Narrow sz_1-2 italic mg-tp-10">« Qu'est-ce que vous voulez ? Il faut bien s'occuper ! »</p>
			
			<div class="text-center mg-tp-30">
				<a class="btn btn-primary" href="#Offres"><span class="glyphicon glyphicon-chevron-down"></span>&nbsp; Allez fais voir</a>
				<a href="../index.php" class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span>&nbsp;Non merci</a>

			</div>

		</div>
	</div>
</section>




<section class="row bg_white" id="Offres">
	<div class="container follow_height bg_white">
		
		<div id="Portfolio_content">
			<div class="row">
				<h1 class="text-center ft_Amatic-SC">Mes réalisations graphiques</h1>

				<div class="col-lg-8 col-lg-offset-2">
					<p class=" ft_Archivo-Narrow text-justify sz_1-4 mg-tp-10 mg-bt-20">Voici quelques uns de mes travaux. J'utilise les logiciels Photoshop, Illustrator, mais aussi les alternatives libres, The Gimp et Inkscape. Je travaille également avec Blender, un logiciel libre permettant de faire de la 3d avec un rendu photoréaliste !</p>
				</div>
			</div>
			<div class="row mg-bt-50">
				<div class="col-lg-12">
					
					<div class="work">
						<a class="zoombox" href="images/Vigilante_Hacker_By_Night_2_web.png"><img src="images/mins/Vigilante_Hacker_By_Night_2_web_min.png" class="img-responsive"></a>
					</div>

					<div class="work">
						<a class="zoombox" href="images/woman-1_web.png"><img src="images/mins/woman-1_web-min.png" class="img-responsive"></a>
					</div>

					<div class="work">
						<a class="zoombox" href="images/1.png"><img src="images/mins/1.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/2.png"><img src="images/mins/2.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/3.png"><img src="images/mins/3.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/4.jpg"><img src="images/mins/4.jpg" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/5.png"><img src="images/mins/5.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/6.png"><img src="images/mins/6.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/7.png"><img src="images/mins/7.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/8.png"><img src="images/mins/8.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/9.png"><img src="images/mins/9.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/10.png"><img src="images/mins/10.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/11.png"><img src="images/mins/11.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/12.jpg"><img src="images/mins/12.jpg" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/13.png"><img src="images/mins/13.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/14.png"><img src="images/mins/14.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/15.png"><img src="images/mins/15.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/16.png"><img src="images/mins/16.png" class="img-responsive"></a>
					</div>
					<div class="work">
						<a class="zoombox" href="images/17.jpg"><img src="images/mins/17.jpg" class="img-responsive"></a>
					</div>

					<div class="clear"></div>

				</div>
			</div>
			<div class="row mg-bt-50">
				<div class="col-lg-12">
					<a href="../index.php" class="btn btn-danger">Retour au site</a>
				</div>
			</div>

		</div>

	</div>

</section>



<div class="mentions">
<p class="text-center">Chris Carton © <?php echo date('Y');?>. Tous droits réservés. <a href="mentions_legales.php">Mentions légales</a></p>
</div>

<script type="text/javascript" src="../system/js/jquery-1.7.js"></script>
<script type="text/javascript" src="../system/js/bootstrap.js"></script>
<script type="text/javascript" src="../system/js/center.js"></script>
<script type="text/javascript" src="../system/js/defilement.js"></script>
<script type="text/javascript" src="../system/js/generated.js"></script>
<script type="text/javascript" src="../system/js/zoombox/zoombox.js"></script>
<script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

            /**
            * Or You can also use specific options
            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 600,              // Default width
                height      : 400,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            */
        });
        </script>


</body>
</html>