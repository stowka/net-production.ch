<?php
	/**
	 * Default home front controller
	 * @author Marie Cogis
	 * @copyright Net Production Köbe & Co
	 */

	$right = Vocabulary::getMenu("right", $lang);


	if(isset($_POST['name']) && !empty($_POST['name'])
		&& isset($_POST['email']) && !empty($_POST['email'])
		&& isset($_POST['reason']) && !empty($_POST['reason'])
		&& isset($_POST['message']) && !empty($_POST['message'])) {

		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$reason = htmlspecialchars($_POST['reason']);
		$message = htmlspecialchars($_POST['message']);
		$phone = htmlspecialchars($_POST['tel']);

    	require_once "lib/phpmailer.class.php";
		$mail = new PHPMailer();

     	$mail->From = 'no-reply@net-production.ch';
		$mail->FromName = '[Contact] Net Production';

		$mail->AddAddress("antoine.degieter@net-production.ch");

		$mail->WordWrap = 50;
		$mail->IsHTML(true);

		$mail->Subject = utf8_decode($reason);
		$mail->Body = '<h3>Net Production</h3><h4>Message from ' . utf8_decode($name) . ' (<a href="mailto:' . $email . '">' . $email . '</a>)<br>Tel :' . $phone .'</h4><p>' . nl2br(utf8_decode($message)) . '</p>';

		if ($mail->Send())
			$sent = true;

    }	 
