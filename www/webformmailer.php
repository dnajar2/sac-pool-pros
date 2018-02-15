<?php

if(!isset($_POST['submit'])){
	if(empty($_POST['contact-name']) || empty($_POST['contact-email']) || empty($_POST['contact-message'])){
	?>

    <script language="javascript" type="text/javascript">
		alert('Message not sent.');
		window.location = "index.php#contact";
    </script>
	
<?php
}
else{
	
	$name = $_POST['contact-name'];
	$email = $_POST['contact-email'];
	$subject= $_POST['contact-subject'];
	$phone = $_POST['contact-phone']
	$message = $_POST['contact-message'];
	
	$formcontent="Name: $name\n\nEmail: $email\n\nMessage: $message\n\nPhone: $phone";
	
	// Enter the email where you want to receive the notification when someone submit form
	$recipient = "info@sacpoolpros.com";
	
	$subject = " Contact Form";
	
	$mailheader = "From: $email\\r\\n";
	$mailheader .= "Reply-To: $email\\r\\n";
	$mailheader .= "MIME-Version: 1.0\\r\\n";
	
	$success = mail($recipient, $subject, $formcontent, $mailheader);
	
	if ($success == true){
	
?>
	
	<script language="javascript" type="text/javascript">
		alert('Thank you for you e-mail. We will contact you shortly.');
		window.location = "index.php#contact";
	</script>
	
<?php
	
	} else {
	
?>

    <script language="javascript" type="text/javascript">
		alert('Message not sent.');
		window.location = "index.php#contact";
    </script>
	
<?php
		}
    }
}
	
?>