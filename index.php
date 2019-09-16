<?php
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
define('WEBROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));

require_once ROOT."scripts/recaptcha/recaptchalib.php";
$recaptcha_key = '6Lf_iOoSAAAAABjEzQqqlctHByv4rEgT82Vr_agt';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Chris Carton</title>
	<link rel="stylesheet" type="text/css" href="system/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="system/css/style.css">
	<link rel="stylesheet" type="text/css" href="system/fontawesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="system/css/textillate/animate.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="open bg_blue rounded-3 fixed hidden-sm hidden-xs hidden-md">
	<a class="block" style="color:white;"><i class="fa fa-reorder"></i></a>
</div>

<?php require_once('elements/menu.php'); ?>



<section class="row bgWhiteToBlue" id="Accueil">
	
	<div class="flash">
		<div class="container-fluid" style="position:relative;">
			<img src="images/flash.png" class="center-block flash-image">
		</div>
	</div>


	<div class="container follow_height" style="z-index:1;position:relative;">


		<div id="Accueil_content" style="z-index:1000000000;">

			<h1 class="ft_Amatic-SC text-center fz_8 mg-v-0 sz_6 textillate">Chris Carton</h1>
			<h2 class="text-center ft_Archivo-Narrow mg-v-0">Webdesign & Développement</h2>
			
			<div class="text-center ft_Archivo-Narrow sz_1-2 italic mg-tp-10" style="min-height:15px;">

				<p class="quote">« Je fais des petits sites internet, vous en voulez ? »</p>
				<p class="quote">Webmaster la journée, webmaster la nuit</p>
				<p class="quote">Sites en <strike>carton</strike></p>
				<p class="quote">Parle en Codes</p>
				<p class="quote">Signalez-moi tout bug ou comportement suspect</p>
				<!-- <p class="quote">Webdesigner à la journée, à la semaine ou au mois</p> -->
				<p class="quote">Webmaster le matin, webmaster le soir</p>
				<!-- <p class="quote">Bonjour, je suis webmaster</p> -->
				<!-- <p class="quote">Internet simplement</p> -->
				<p class="quote">Auto-dérision et création Web</p>
				<p class="quote">Travaille avec <?php echo htmlentities('<style></style>');?></p>
				<p class="quote">Travaille aussi avec <b>class</b></p>
				<p class="quote">Chat et création web</p>
				<p class="quote">Création de site internet intéractifs</p>
				<p class="quote">Web & Design</p>
				<p class="quote">Read the f#Ck!n9 m@nu#l</p>
				<p class="quote">Never trust user input</p>
			</div>

			<div class="text-center">
				<a href="#Offres" class="no-style fz_2"><span class="glyphicon glyphicon-menu-down"></span></a>
			</div>

		</div>
	</div>
</section>




<section class="row bg_cardboard" id="Offres">
	<div class="container follow_height bg_white ">
		
		<div id="Offres_content">
			
			<div class="col-lg-12">
				<h1 class="text-center ft_SciFly ft_Amatic-SC fz_5 wow rollIn">Offres</h1>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<h4 class="ft_Amatic-SC text-center fz_2">Site vitrine intéractif</h2>

					<div class="text-center blue sz_4">
						<i class="fa fa-rocket"></i>
					</div>

					<div class="ft_Archivo-Narrow sz_1-2 text-justify mg-tp-20 mg-bt-20 pd-10">
						Cette offre permet de développer rapidement un site éditable composé d'une ou de plusieurs pages. Le système permet de mettre en place un contenu modifiable (textes et images) par l'utilisateur (vous) via un système d'administration protégé par nom d'utilisateur et mot de passe. 
					</div>

				</div>

				<div class="col-lg-4">

					<h4 class="ft_Amatic-SC text-center fz_2">Site vitrine intéractif + Wordpress</h2>
					<div class="text-center blue sz_4">
						<i class="fa fa-fighter-jet"></i>
					</div>

					<div class="ft_Archivo-Narrow sz_1-2 text-justify mg-tp-20 mg-bt-20 pd-10">
						<p>En plus, cette offre vous permet de bénéficier de Wordpress, le moteur de blog le plus utilisé au monde, afin de générer un flux d'actualité sur votre site.</p>
						<p>Développement d'un thème Wordpress sur mesure.</p>
					</div>


				</div>

				<div class="col-lg-4">

					<h4 class="ft_Amatic-SC text-center fz_2">Site intéractif sous Framework</h2>
					<div class="text-center blue sz_4">
						<i class="fa fa-space-shuttle"></i>
					</div>

					<div class="ft_Archivo-Narrow sz_1-2 text-justify mg-tp-20 mg-bt-20 pd-10">
						Outil de communication permettant d'ajouter, d'éditer, de positionner, masquer et supprimer (fonctionnalités de base) des éléments textes, images et vidéos. Gestion d'actualités, de catégories, de produits, de projets, ect... Code sur mesure. 
					</div>

				</div>
			</div>

			<div class="row hidden-xs hidden-sm">

				<div class="col-lg-4">
					<ul class="ft_Archivo-Narrow sz_1-2">
						<li>Charte graphique</li>
						<li>Intégration ou création d'un logo</li>
						<li>Système d'administration</li>
						<li>Contenu de base</li>
						<li>Gestion des images</li>
						<li>Géolocalisation</li>
						<li>Formulaire de contact</li>
						<li>Référencement simple</li>
					</ul>
				</div>
				<div class="col-lg-4">
					<ul class="ft_Archivo-Narrow sz_1-2">
						<li>Charte graphique</li>
						<li>Intégration ou création d'un logo</li>
						<li>Système d'administration</li>
						<li>Contenu de base</li>
						<li>Gestion des images</li>
						<li>Géolocalisation</li>
						<li>Formulaire de contact</li>
						<li>Référencement simple</li>
						<li>Blog Wordpress</li>
						<li>Thème Wordpress sur mesure</li>
						<li>Mises à jour Wordpress</li>
					</ul>
				</div>
				<div class="col-lg-4">
					<ul class="ft_Archivo-Narrow sz_1-2">
						<li>Charte graphique</li>
						<li>Ajout, édition, suppression (textes, images, vidéos)</li>
						<li>Outils d'administration personnalisés</li>
						<li>Messagerie interne</li>
						<li>Plusieurs présentations possibles</li>
						<li>Référencement général</li>
						<li>Référencement page par page</li>
						<li>Modules personnalisés</li>
						<li>Système de recherche interne</li>
						<li>Gestion de gros volumes de données</li>
						<li>Support technique et formation</li>
					</ul>
				</div>
			</div>

		</div>

	</div>

</section>

<section class="row bg_blue_sky" id="Mobile">
	<div class="relative hidden-sm hidden-xs">
		<div class="wow fadeInDownBig">
			<img src="images/iphone-2.png" class="img-responsive absolute iphone" style="max-height:450px;">
		</div>
		
		<div class="wow fadeInUpBig">
			<img src="images/iphone-1.png" class="img-responsive absolute iphone" style="max-height:450px;left:100px;top:100px;">
		</div>
	</div>

	<div class="container follow_height">

			<div id="Mobile_content" class="col-lg-8 col-lg-offset-2">
				<h1 class="text-center ft_SciFly ft_Amatic-SC fz_5 white wow rollIn">Responsive Webdesign</h1>

				<h3 class="text-center ft_SciFly ft_Archivo-Narrow white">Un site pour tous les écrans</h3>
				<p class="lead white ft_Archivo-Narrow">
					Votre site s'adapte automatiquement (responsive webdesign) sur tous les terminaux (téléphones portables de type smartphone, tablettes tactiles, écrans d'ordinateur moyens et larges), et la mise en page est agréable à l'oeil.
				</p>

				<p class="white ft_Archivo-Narrow italic">Testez dès maintenant cette fonctionnalité en réduisant la fenêtre de votre navigateur, puis réactualisez. Vous pourrez voir la mise en page s'adapter.</p>

				<img src="images/responsive.png" class="center-block mg-tp-50 img-responsive">

				<img src="images/iphone-1-sm.png" class="img-responsive center-block iphone visible-xs visible-sm"/>

			

			</div>
	</div>

</section>

<div class="row bg-primary">
	<div class="container ">

		<h3 class="text-center ft_SciFly ft_Archivo-Narrow white">Retro-compatibilité (Internet Explorer)</h3>
		<p class="lead white ft_Archivo-Narrow">Suivant le principe de « dégradation élégante », votre site et son recours aux innovations technologiques les plus récentes s'adapte même aux navigateurs les plus anciens. Ces innovations technologiques, souvent d'ordre graphique, sont alors délaissées en fonction du navigateur utilisé par le visiteur au profit de présentations plus simples. </p>

		<p class="white ft_Archivo-Narrow italic">Ainsi informations et visuels restent accessibles à tous. </p>

	</div>
</div>

<section class="row" id="References">
	<h1 class="text-center ft_SciFly ft_Amatic-SC fz_5 wow rollIn">Références</h1>
	
	<div class="container-fluid follow_height mg-bt-50">

			<div id="Mobile_content" class="col-lg-8 col-lg-offset-2">
				<!--
				<div class="mg-tp-30 box-shadow bd-silver">
					<a href="http://www.petr-opelik.com" target="_blank" title="Petr Opelik"><img class="img-responsive" src="images/references/petr-opelik.png"></a>
				</div>
				-->

				<div class="text-center">
					<a href="http://www.petr-opelik.com" target="_blank">www.petr-opelik.com</a>
				</div>

				<div class="mg-tp-30 box-shadow bd-silver">
					<a href="http://www.expositif.fr" target="_blank" title="Expositif"><img class="img-responsive" src="images/references/expositif.png"></a>
				</div>


				<div class="text-center">
					<a href="http://www.expositif.fr" target="_blank">www.expositif.fr</a>
				</div>

				<div class="mg-tp-30 box-shadow bd-silver">
					<a href="http://www.stephen-maas.com" target="_blank" title="Stephen Maas"><img class="img-responsive" src="images/references/stephen-maas.png"></a>
				</div>


				<div class="text-center">
					<a href="http://www.stephen-maas.com" target="_blank">www.stephen-maas.com</a>
				</div>
				
				<div class="mg-tp-30 box-shadow bd-silver">
					<a href="http://www.esad-valenciennes.fr" target="_blank" title="École Supérieure d'Art et de Design de Valenciennes"><img class="img-responsive" src="images/references/esad.png"></a>
				</div>
				<div class="text-center">
					<a href="http://www.esad-valenciennes.fr" target="_blank">www.esad-valenciennes.fr</a>
				</div>
				
				<div class="mg-tp-30 box-shadow bd-silver">
					<a href="http://www.placeauxcartons.com" target="_blank" title="Association Place aux cartons"><img class="img-responsive" src="images/references/placeauxcartons.png"></a>
				</div>
				<div class="text-center">
					<a href="http://www.placeauxcartons.com" target="_blank">www.placeauxcartons.com</a>
				</div>

			</div>
	</div>

</section>

<section class="row" id="Admin" style="background-color:#DADADA;">
	<br><br><br><br><br>
	<h1 class="text-center ft_SciFly ft_Amatic-SC fz_5 wow rollIn">Administration</h1>
	<img src="images/pencil.png" class="img-responsive center-block mg-bt-20">
	<div class="container follow_height mg-bt-50">

	<p class="lead text-center ft_Archivo-Narrow">Je conçois des systèmes d'administration sur mesure qui vous permettent via un accès sécurisé par mot de passe et nom d'utilisateur d'éditer intuitivement le contenu de votre site, sans connaissance en programmation. 

	<p class="lead text-center ft_Archivo-Narrow">
	Cliquez sur ce texte et vous verrez.
	</p>
	
		<div class="editable ft_Archivo-Narrow fz_1-4 text-justify" style="margin-top:40px;margin-bottom:20px;border:1px dotted black;padding:30px;">
			<p>Vous avez un problème avec l'autorité, Monsieur Anderson : vous pensez que vous êtes unique et que le règlement ne vous concerne pas, et bien sur vous vous méprenez. Nous sommes parmis les plus grands producteurs de softwares au monde, parce que chacun de nos employés sait qu'il fait parti d'un tout, par conséquence si un employé a un problème, l'entreprise a un problème.</p>
			<p>Alors l'heure est venue de faire un choix, M. Anderson, ou vous choisissez d'être à votre poste à l'heure à dater de ce jour, ou vous choisissez de vous dégoter un autre job ! J'espère que c'est clair ?</p>
		</div>
	
		<div class="text-right">
			<a href="#Admin" class="btn btn-primary">
				<span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;Enregistrer
			</a>
		</div>



	<p class="lead text-center ft_Archivo-Narrow">C'est aussi simple que ça.</p>
	

	</div>

</section>

<section class="row bg_cardboard-2" id="Talents">
	<div class="container follow_height">
		<div id="Talents_content">
			<div class="text-center white">
				<h1 class="ft_Amatic-SC fz_5 wow rollIn">Services</h1>
			</div>
			
			<div class="row">
				<h2 class="ft_Archivo-Narrow text-center white">Graphismes, illustrations, logos et chartes graphiques</h2>

			</div>
			<div class="row mg-tp-20">
				<div class="col-lg-2 pd-0">
					
					<div class="bg_white myColumn ft_Archivo-Narrow">

						<div class="myIcon">
							<i class="fa-file-text-o"></i>
						</div>
						<h3 class="text-center ft_Amatic-SC">Contenu</h3>

					</div>	
				</div>

				<div class="col-lg-2 pd-0">
					<div class="bg_white myColumn ft_Archivo-Narrow">

						<div class="myIcon">
							<i class="fa fa-bomb"></i>
						</div>
						<h3 class="text-center ft_Amatic-SC">Logo</h3>

					</div>
				</div>

				<div class="col-lg-2 pd-0 ">
					<div class="bg_white myColumn ft_Archivo-Narrow">
						<div class="myIcon">
							<i class="fa fa-pencil"></i>
						</div>
						<h3 class="text-center ft_Amatic-SC">Charte graphique</h3>
						


					</div>
				</div>

				<div class="col-lg-2 pd-0 ">
					<div class="bg_white myColumn ft_Archivo-Narrow">
						<div class="myIcon">
							<i class="fa fa-comments-o"></i>
						</div>
						<h3 class="text-center ft_Amatic-SC">Conseil</h3>
					</div>
				</div>

				<div class="col-lg-2 pd-0 ">
					<div class="bg_white myColumn ft_Archivo-Narrow">
						<div class="myIcon">
							<!-- <i class="fa fa-camera-retro"></i> -->
							<i class="fa fa-paint-brush"></i>
						</div>
						<h3 class="text-center ft_Amatic-SC">Illustration</h3>
					</div>
				</div>

				<div class="col-lg-2 pd-0">
					<div class="bg_white myColumn ft_Archivo-Narrow">
						<div class="myIcon">
							<i class="fa fa-bullhorn"></i>
						</div>
						<h3 class="text-center ft_Amatic-SC">Animation</h3>

					</div>
				</div>
			</div>
			<div class="row mg-tp-50">
				<div class="text-center">
					<a href="portfolio/portfolio.php" class="btn btn-primary">
						<span class="glyphicon glyphicon-book"></span>&nbsp;
						Quelques exemples de mes réalisations sur mon portfolio
					</a>
				</div>
			</div>
		
		</div>

	</div>
</section>

<section class="row bg_blue_sky" id="Email">
	<div class="container follow_height">
		<div id="Email_content" class="col-lg-8 col-lg-offset-2">
			<img src="images/letter.png" class="img-responsive center-block">
			<h1 class="text-center ft_SciFly ft_Amatic-SC fz_5 white wow rollIn">Votre adresse email pro</h1>
			<h3 class="text-center ft_SciFly ft_Archivo-Narrow white">vous@votre-site.com</h3>
			<p class="lead white ft_Archivo-Narrow">
				Bénéficiez d'une ou de plusieurs adresses emails personnalisées fournies avec l'hébergement de votre site. Vos adresse se présentent sous cette forme : <a mailto:'vous@votre-site.com'>vous@votre-site.com</a>, qui a une véritable facture professionnelle.
			</p>

			<p class="lead white ft_Archivo-Narrow">
				Vous pourrez consulter vos messages et en envoyer grâce un logiciel de message comme <a target="_blank" href="https://www.mozilla.org/fr/thunderbird/">thunderbird</a> par exemple.
			</p>


		</div>
	</div>

</section>



<div class="row bg_yellow" id="Technos">
	<div class="container">
		<div id="Technos_content">

			<h1 class="ft_Amatic-SC text-center sz_5 wow rollIn">Technologies</h1>
			<div class="row mg-tp-20 mg-bt-20">
				<div class="col-lg-2 col-lg-offset-1 techColumn text-justify">
					<img src="images/html5_logo.png" class="img-responsive">
				</div>

				<div class="col-lg-2 techColumn text-justify">
					<img src="images/css3_logo.png" class="img-responsive">
				</div>

				<div class="col-lg-2 techColumn text-justify">
					<img src="images/php.png" class="img-responsive" style="margin-top:50px;">
				</div>

				<div class="col-lg-2 techColumn text-justify">
					<img src="images/logo_php_mysql.png" class="img-responsive" style="margin-top:15px;">
				</div>

				<div class="col-lg-2 techColumn text-justify">
					<img src="images/jquery.png" class="img-responsive" style="margin-top:25px;">
				</div>
							
			</div>




		</div>
	</div>
</div>

<section class="row bg_blue_sky" id="Apropos" style="/*background-image:url('images/graybackground.png');*/">
	<div class="container-fluid">
		<h1 class="ft_Amatic-SC text-center fz_5 wow rollIn">À Propos</h1>
		<p class="ft_Archivo-Narrow lead text-center white">Who is Mr Carton ?</p>
		<!-- <img src="images/memrrobot.jpg" class="img-responsive center-block" style="max-height:378px;"> -->
		<img src="images/chrisc-colors.png" class="img-responsive center-block">
		<!-- <img src="images/chris-c-nb.png" class="img-responsive center-block"> -->
		<div class="container ft_Archivo-Narrow fz_12">
			<div class="col-lg-4 col-lg-offset-4 text-justify mg-tp-20 mg-bt-20">
			<p>Je conçois et réalise votre site de A à Z, le plus simplement possible. Je viens à votre rencontre, j'analyse vos besoins, et je vous propose une maquette. Si vous l'acceptez, je réalise votre site et bientôt vous serez en ligne.</p>

			<p>Je suis votre webmaster personnel. J'aime dire que je travaille seul, mais c'est faux. Je travaille avec vous. Je tiens à établir une relation de confiance avec mes clients et à assurer un suivi de qualité. Pour plus d'infos sur ma méthode de travail ou mes compétences, je vous invite à me contacter.</p>

			<p>Sky is the limit, Bro.</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</section>



<section class="row bg_gray" id="Contact">
	<div class="container">
		
		<div id="Contact_content">
			
			
			<div class="row">
				<h1 class="text-center ft_Amatic-SC sz_5 wow rollIn">Contact</h1>
				<div class="col-lg-6">
					<h3 class="ft_Archivo-Narrow">Des questions ?</h3>
					<?php require_once('contact.php'); ?>
				</div>

				<div class="col-lg-6">
					<div class="text-right">
						<h3 class="ft_Archivo-Narrow">Enregistrez ma carte de visite</h3>
						<a href="images/carte_de_visite.png" download><img src="images/carte_de_visite.png"></a>
						
						<div class="mg-tp-20">
						<a href="images/carte_de_visite.png" download class="btn btn-primary">
							<span class="glyphicon glyphicon-download"></span>
							&nbsp;Télécharger
						</a>
						</div>

					</div>
				</div>

			</div>



		</div>

	</div>
</section>
<!--
<section class="row" id="Quote">
	<div class="container">
		<div id="Quote_content">
			<p class="ft_Archivo-Narrow sz_2 typed">“It’s about passion, passion in your work. It’s science, yes, but it’s also an art. Ingredients are ingredients but, if you go quiet and you just listen… they start to talk back to you. And they tell you what they need. The whole becomes greater than the sum of the parts. Take your robot for instance. So many disparate ideas and concepts that all need to come together. But if you’ll approach your work with reverence, and put your very soul into it, it starts to get a life of its own. And, dare I say, you can grow very fond of that creation…” </p>
			<p class="text-right">Rudy, Almost Human</p>
		</div>
	</div>
</section>
-->

<div class="mentions">
<p class="text-center">Chris Carton © <?php echo date('Y');?>. Tous droits réservés. <a href="mentions_legales.php">Mentions légales</a></p>
</div>

<script type="text/javascript" src="system/js/jquery-1.7.js"></script>
<script type="text/javascript" src="system/js/bootstrap.js"></script>

<script type="text/javascript" src="system/js/textillate/jquery.lettering.js"></script>
<script type="text/javascript" src="system/js/textillate/jquery.fittext.js"></script>
<script type="text/javascript" src="system/js/textillate/jquery.textillate.js"></script>
<script type="text/javascript" src="system/js/wow.js"></script>
<script type="text/javascript" src="system/js/home.js"></script>

<script type="text/javascript" src="system/js/center.js"></script>
<script type="text/javascript" src="system/js/menu.js"></script>
<script type="text/javascript" src="system/js/defilement.js"></script>
<script type="text/javascript" src="system/js/generated.js"></script>
<script type="text/javascript" src="system/js/validation.js"></script>
<script type="text/javascript" src="system/js/easing.js"></script>

<script type="text/javascript" src="system/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="system/js/tinymce_init.js"></script>



</body>
</html>