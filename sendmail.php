<?php
date_default_timezone_set('Asia/Calcutta');

	if(isset($_POST['send_mail']))
	{   
	    $email= 'zoprentcs@gmail.com';
		$emailTo = $email ;
		
		
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$phone = trim($_POST['phone']);
		$subje = trim($_POST['subject']);
		$message = trim($_POST['message']);
		
		$email_body  = "Name  : ".$name."\n\n";
		$email_body .= "Email : ".$email."\n\n";
		$email_body .= "Phone : ".$phone."\n\n";
		$email_body .= "Subject : ".$subje."\n\n";
		$email_body .= "Message : ".$message."\n\n";
		
			$headers = "From:no-reply@zoprent.com\r\n" . "Reply-To: " . $email;
			mail($emailTo, $subject="New Enquiry from zoprent.com", $email_body, $headers);
			
			
			header('Location:contact.php#thankyou');
	
	}
?>
