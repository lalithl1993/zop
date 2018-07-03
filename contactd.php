<?php

require 'phpmailer/class.phpmailer.php';

try {
    $mail = new PHPMailer(true); //New instance, with exceptions enabled

    $to = 'zoprent@gmail.com';
	$mail->AddAddress($to);
	$mail->From       = 'zoprentcs@gmail.com';
    $mail->FromName   = $_POST['name'];
	$mail->Subject  = "Candidate Request Form";
	$job=$_COOKIE['classroomnumber'];

	$body             = "<table>
	                         <tr>
							    <th colspan='2'>New Candidate Resume</th>
							 </tr>
							 <tr>
							    <td style='font-weight:bold'>Job Applied :</td>
								<td>".$job."</td>
							 </tr>

							 <tr>
							    <td style='font-weight:bold'>Name :</td>
								<td>".$_POST['name']."</td>
							 </tr>

							 <tr>
							  <td style='font-weight:bold'>E-mail : </td>
							  <td>".$_POST['email']."</td>
							</tr>

							<tr>
							  <td style='font-weight:bold'>Phone : </td>
							  <td>".$_POST['phone']."</td>
							</tr>
							<tr>
							  <td style='font-weight:bold'>Previous/Current Company : </td>
							  <td>".$_POST['cname']."</td>
							</tr>
							<tr>
							  <td style='font-weight:bold'>Current CTC : </td>
							  <td>".$_POST['salary']."</td>
							</tr>
							<tr>
							  <td style='font-weight:bold'>Education : </td>
							  <td>".$_POST['level']."</td>
							</tr>

							<tr>
							  <td style='font-weight:bold'>Message : </td>
							  <td>".$_POST['message']."</td>
							</tr>
	                     <table>";
	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	$mail->MsgHTML($body);

	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->Port       = 25;                    // set the SMTP server port
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "zoprentcs@gmail.com";     // SMTP server username
	$mail->Password   = "Code321#";            // SMTP server password

	$mail->IsSendmail();  // tell the class to use Sendmail
	$mail->AddReplyTo("zoprentcs@gamil.com");
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->WordWrap   = 80; // set word wrap

	$mail->AddAttachment($_FILES['file']['tmp_name'],
                         $_FILES['file']['name']);
	$mail->IsHTML(true); // send as HTML
	$mail->Send();
	header('location:career.php#thankyou');
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
?>
