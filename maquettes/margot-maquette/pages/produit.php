<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
	<link href="css/helpers.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="owl/owl.carousel.css" rel="stylesheet" type="text/css"/>
	<link href="css/menu-collections.css" rel="stylesheet" type="text/css"/>


	<style type="text/css">


		#owl-demo .item img{
		    display: block;
		    width: 100%;
		    height: auto;
		    /*recadrer à 195px de haut max*/
		    /*object-fit:contain; */
		}

		#owl-news .item img{
		    display: block;
		    width: 100%;
		    height: auto;
		    /*recadrer à 195px de haut max*/
		    /*object-fit:contain; */
		}

	</style>

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
			<div class="absolute">
			<?php require_once('elements/menu-collections.php'); ?>
			</div>

			<div class="absolute" style="right:100px;top:150px;width:300px;background-color:rgba(255,255,255,0.7);padding:30px;z-index:9999999999999;">
			
				<small>
					<a href="index.php?p=collections" class="no-style">Collection</a> 
					<span class="glyphicon glyphicon-menu-right"></span> 
					<a href="index.php?p=familles" class="no-style">Famille</a> 
					<span class="glyphicon glyphicon-menu-right"></span> 
					<a href="index.php?p=lignes" class="no-style">Ligne</a>

				</small>


				<h3 class="ft_Georgia">Nom du produit</h3>
				<p class="ft_Georgia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="index.php?p=familles" class="no-style ft_Georgia inblock mg-tp-10" style="border:1px solid gray;padding:5px;">
					Voir d'autres images

				</a>

				<a href="index.php?p=familles" class="no-style ft_Georgia inblock mg-tp-10" style="border:1px solid gray;padding:5px;">
					<span class="glyphicon glyphicon-download"></span>
					Télécharger le schéma technique

				</a>
			</div>

<!-- 		<div class="text-right">
				<h1 class="ft_Georgia sz_2 italic silver">
					Nom de la collection <span class="glyphicon glyphicon-menu-right sz_0-6"></span> Nom de la ligne <span class="glyphicon glyphicon-menu-right sz_0-6"></span> Nom de la famille <span class="glyphicon glyphicon-menu-right sz_0-6"></span> Nom du produit
				</h1>
			</div> -->

			<div class="row">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item relative">
						<img src="img/product/1.jpg" alt="">




					</div>
					<div class="item relative">
						<img src="img/product/2.jpg" alt="">

<!-- 						<div class="absolute" style="right:100px;top:50px;width:300px;background-color:rgba(255,255,255,0.7);padding:30px;">
						
						<small>
							<a href="index.php?p=collections" class="no-style">Collection</a> 
							<span class="glyphicon glyphicon-menu-right"></span> 
							<a href="index.php?p=familles" class="no-style">Famille</a> 
							<span class="glyphicon glyphicon-menu-right"></span> 
							<a href="index.php?p=lignes" class="no-style">Ligne</a>

						</small>


						<h3 class="ft_Georgia">Nom du produit</h3>
						<p class="ft_Georgia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="index.php?p=familles" class="no-style ft_Georgia inblock mg-tp-10" style="border:1px solid gray;padding:5px;">
							Voir d'autres images

						</a>

						<a href="index.php?p=familles" class="no-style ft_Georgia inblock mg-tp-10" style="border:1px solid gray;padding:5px;">
							<span class="glyphicon glyphicon-download"></span>
							Télécharger le schéma technique

						</a>
						</div> -->
					</div>
					<div class="item relative">
						<img src="img/product/3.jpg" alt="">

<!-- 						<div class="absolute" style="right:100px;top:50px;width:300px;background-color:rgba(255,255,255,0.7);padding:30px;">
						
						<small>
							<a href="index.php?p=collections" class="no-style">Collection</a> 
							<span class="glyphicon glyphicon-menu-right"></span> 
							<a href="index.php?p=familles" class="no-style">Famille</a> 
							<span class="glyphicon glyphicon-menu-right"></span> 
							<a href="index.php?p=lignes" class="no-style">Ligne</a>

						</small>


						<h3 class="ft_Georgia">Nom du produit</h3>
						<p class="ft_Georgia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="index.php?p=familles" class="no-style ft_Georgia inblock mg-tp-10" style="border:1px solid gray;padding:5px;">
							Voir d'autres images

						</a>

						<a href="index.php?p=familles" class="no-style ft_Georgia inblock mg-tp-10" style="border:1px solid gray;padding:5px;">
							<span class="glyphicon glyphicon-download"></span>
							Télécharger le schéma technique

						</a>
						</div> -->
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
<script type="text/javascript" src="owl/owl.carousel.js"></script>
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

$(document).ready(function() {
     
    $("#owl-demo").owlCarousel({
     
    // navigation : true, // Show next and prev buttons
    slideSpeed : 1000,
    paginationSpeed : 2000,
    singleItem:true,
    autoPlay:true,
    stopOnHover:true
    // transitionStyle : 'backSlide'
     
    // "singleItem:true" is a shortcut for:
    // items : 1,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false
     
    });
     
});
</script>


</body>



</html>