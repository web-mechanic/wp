<?php
	session_start();

	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		extract($_POST);
		$is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? true : false;
		$msg = '';

		if(!empty($email)){
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailSender = $email;
			}else{
				$msg.='L’email semble incorrect ';
				$_SESSION['errorMail'] = 'l\'email semble incorrect';
				if( $is_ajax ){
					header('HTTP/1.0 404 Not Found');
					echo $msg;
					exit();
				}
			}
		}else{
			$_SESSION['errorMail'] = 'le champ e-mail ne peut pas être vide';
		}

		if(empty($name)){
			$_SESSION['emptyNom'] = 'le champ nom ne peut pas être vide';
		}

		if(empty($message)){
			$_SESSION['emptyTexte'] = 'le champ message ne peut pas être vide';
		}

		$to = 'th.lissens@gmail.com';

		$message = $nom . "\n\n" .$texte;

		$headers = 'From: th.lissens@gmail.com' . "\r\n" .
			       'Reply-To: ' . $emailSender . "\r\n" .
			       'X-Mailer: PHP/' . phpversion();

		mail($to, 'aucun sujet', $message, $headers);


		if (!$is_ajax) {
			header('Location: '.$_SERVER['HTTP_REFERER'].'/#contact');
		}else{
			echo($msg?$msg:'Le formulaire de contact à bien été envoyé');
		}
	}