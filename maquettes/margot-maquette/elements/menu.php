<div class="entete mg-tp-20">
	<a href="index.php?p=actu">
	<img src="img/margot-logo.png" class="img-responsive mg-0-auto">
	</a>
	
	<p class="ft_Georgia italic text-center">
		<a href="index.php?p=home" class="no-style">Maîtres Robinetiers de France</a>
	</p>

	<?php 
	if(!empty($_GET['p'])):
		echo '<span class="hidden active-page">'.$_GET['p'].'</span>';
	endif;
	?>



</div>

<div class="main-menu text-center sz_1-2">
	<ul class="list-unstyled">
		<li class="main-item">
			<a href="index.php?p=actu" class="no-style ft_Georgia italic">
				Actualités
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=new_products" class="no-style ft_Georgia italic">
				Nouveautés
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=collections" class="no-style ft_Georgia italic">
				Collections
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=story" class="no-style ft_Georgia italic">
				Histoire
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=knowledge" class="no-style ft_Georgia italic">
				Savoir-faire
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=showroom" class="no-style ft_Georgia italic">
				Showroom
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=points-de-vente" class="no-style ft_Georgia italic">
				Points de vente
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=catalogues" class="no-style ft_Georgia italic">
				Catalogues
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=recherche" class="no-style ft_Georgia italic">
				Recherche
			</a>
		</li>
		<li class="main-item">
			<a href="index.php?p=contact" class="no-style ft_Georgia italic">
				Contact
			</a>
		</li>
	</ul>
</div>