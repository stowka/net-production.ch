<?php
	/**
	 * Default home front controller
	 * @author Marie Cogis
	 * @copyright Net Production Köbe & Co
	 */

	$right = Vocabulary::getMenu("right", $lang);
	

    	if( isset($_POST['name']) && !empty($_POST['name'])
    		&& isset($_POST['email']) && !empty($_POST['email'])
    		&& isset($_POST['reason']) && !empty($_POST['reason'])
    		&& isset($_POST['message']) && !empty($_POST['message'])) {

    		

	    	require_once "lib/phpmailer.class.php";
			$mail = new PHPMailer();

	     	$mail->From = 'contact@net-production.ch';
			$mail->FromName = '[Contact] Net production';

			$contact_email = isset($_POST['email']);
			$email = isset($_POST['email']);
			$name = isset($_POST['name']);
			$text = isset($_POST['message']);
			$reason = isset($_POST['reason']);
			$tel = isset($_POST['tel']);

			$mail->AddAddress( $contact_email );

			$mail->WordWrap = 50;
			$mail->IsHTML( true );

			$mail->Subject = $reason;
			$mail->Body = '<h3>Net Production</h3><h4>Message from ' . utf8_decode( $name ) . ' (<a href="mailto:' . $email . '">' . $email . '</a>)Tel :' . $tel .'</h4><p>' . nl2br( utf8_decode( $text ) ) . '</p>';

			if ( $mail->Send() )
			$sent = true;

    	} 
		 
