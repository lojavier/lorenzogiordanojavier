<?php

$to = "loj90@sbcglobal.net";
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$message = str_replace("\n.", "\n..", $message);

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: Sender Name <sender@domain.com>";
$headers[] = "Bcc: JJ Chong <bcc@domain2.com>";
$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();
	
mail($to,$subject,$message,$headers);

header('Location: contact.php');
?>