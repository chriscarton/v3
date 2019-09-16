<?php
define('ROOT',str_replace('scripts/mail.php','',$_SERVER['SCRIPT_FILENAME']));

require_once ROOT.'scripts/recaptcha/recaptchalib.php';

//$recaptcha_key = '6LdUJeoSAAAAANuirRdq36-HSS34PfBiuw2ijtGW';
$recaptcha_private = '6Lf_iOoSAAAAAJn2ey9NkPghWYtKvwWo3-TAcDIe';	//ajout
//invalid request cookie

$contact_site = 'chris-carton@chris-carton.com';
$to_email = "webmaster@chris-carton.com";

if(!empty($_POST['post_type'])){
	



	if($_POST['post_type'] == 'message'){
		
		extract($_POST);

		
		$nom = strip_tags($nom);
		$objet = strip_tags($objet);
		$contenu = strip_tags($contenu);
		$email = strip_tags($email);
		$recaptcha_response_field = strip_tags($recaptcha_response_field);
		$recaptcha_challenge_field = strip_tags($recaptcha_challenge_field);
		$adresse = strip_tags($adresse);


		$nom = filter_var($nom,FILTER_SANITIZE_STRING);
		$objet = filter_var($objet,FILTER_SANITIZE_STRING);
		$contenu = filter_var($contenu,FILTER_SANITIZE_STRING);
		$email = filter_var($email,FILTER_SANITIZE_EMAIL);
		$recaptcha_response_field = filter_var($recaptcha_response_field,FILTER_SANITIZE_STRING);
		$recaptcha_challenge_field = filter_var($recaptcha_challenge_field,FILTER_SANITIZE_STRING);


		//champ caché qui doit être vide (anti-spam)
		if($adresse == ''){
			
					
		}
			
			//il faut que je vois ces variables :)
			$reponse = recaptcha_check_answer($recaptcha_private,$_SERVER['REMOTE_ADDR'],$recaptcha_challenge_field,$recaptcha_response_field);

			//var_dump($reponse);
			if($reponse->is_valid){


				$to = $to_email;
				$sujet = $nom." : contact via SITE INTERNET";
				$header = "FROM: $nom <$contact_site> \n";
				$header.= "Reply-To: $email";

				$message = stripslashes($contenu);
				$nom = stripslashes($nom);


				if(mail($to,$sujet,$message,$header)){
					//echo "valid et mail";
				}

				echo "valid";


				
			}else{

				echo "error";

			}

		



	//fin condition
	}
}


//echo "I think it's work !";


?>