<?php
  $email = $_POST['email'];

// this is the email message 
	$email_from = "$email";
	$email_subject = "Web.com Beta Sign-up Submission";
  $email_body = "Someone filled out the Web.com beta form, here is their email: $email.";

//code to send email
  $to = "davedelanunez@gmail.com";
  $headers = "From: $email_from \r\n";
  mail($to,$email_subject,$email_body,$headers);

  header("Location: https://www.web.com/beta/beta-thank-you");

?>