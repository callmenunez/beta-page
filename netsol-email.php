<?php
  $email = $_POST['email'];

// this is the email message 
	$email_from = "$email";
	$email_subject = "Network Solutions Beta Sign-up Submission";
  $email_body = "Someone filled out the Network Solutions beta form, here is their email: $email.";

//code to send email
  $to = "davedelanunez@gmail.com";
  $headers = "From: $email_from \r\n";
  mail($to,$email_subject,$email_body,$headers);

  header("Location: http://marketing.networksolutions.com/beta-use/thank-you.php");

?>