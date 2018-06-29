<?php

$connection = mysqli_connect("localhost", "sacpoolp_spcrm", "459NX^!N+4xi", "sacpoolp_spcrm"); // Establishing Connection with Server..

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
		//Fetching Values from URL
	  	$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$zcode = $_POST['zcode'];
		$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		//Insert query
		$query = mysqli_query($connection, "insert into form_element(name, lastname, email, phone, zcode, message) values ('$name', '$lastname', '$email', '$phone','$zcode','$message')");
	  	if($query){
	  		echo "Thank you ". $name ." Your form was submitted succesfully";
		}else{
			echo("Error description: " . mysqli_error($connection));
		}

	  //email
	  	$to = "info@sacpool.com";
	  	$subject = "New email from: ".$name;
	  	$txt = "Name: ".$name;
	  	$txt .= "<br>Last Name: ".$lastname;
	   	$txt .= "<br>Email: ".$email;
	  	$txt .= "<br>Phone: ".$phone;
	  	$txt .= "<br>Zip Code: ".$zcode;
	  	$txt .= "<br>Message:<br>".$message;
	  	$headers = "MIME-Version: 1.0" . "\r\n";
	  	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  	$headers .= "From: ".$email;

mail($to,$subject,$txt,$headers);
	  //end of email

	  //email 2

	  $to_2 = $email;
	  $subject_2 = "We have received your request";
	  $message = "<html>
	  			<head>
<title>Sac Pool email</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
<style type='text/css'>
	body{
		padding-top: 15px;
		width: 80%;
		margin: auto;
		font-family: 'Lato', sans-serif;
		font-size: 16px;
	}
	th{
		background-color: #CCCCCC;
		padding: 5px;
	}
	.header{
		padding-top: 15px 0;
	}
	table{
		background-color: #DFDFDF;
		margin: auto;
	}
	.table{
		background-color: #00548C;

		padding: 15px;
	}
	.footer{
		text-align: center;
		padding: 40px 0;
		background-color: cadetblue;
    	color: #fff;
		background-image: url(https://sacpoolpros.com/beta/images/logo-stone.png);
		background-position: right 15px bottom 0px;
		background-repeat: no-repeat;
	}
	.col-6{
		width: 19.5%;
		float: left;
		margin-right: .5%;

	}
	.title{
		background-color: #A2A2A2;
		color: #fff;
		padding: 5px;
	}
	.tr{
		background-color: #fff;
		padding: 5px;
	}
	a{
		color: #E7E7E7;
	}
	@media (max-width:767px){
		.col-6{
		width: 100%;
		float: none;
		margin-right: 0;
		margin-bottom: 5px;
		-webkit-border-radius: 5px;
		border-radius: 15px;
		}
		.title{
			border-radius: 5px 5px 0px 0;
		}
	}
</style>

</head>
<body>
<div class='header' >
	<img src='https://sacpoolpros.com/beta/images/logo-stone.png' >
</div>

<h2>Thank you, we have recevied the below details!</h2>
<div class='table'>
	<div class='col-6'>
		<div class='title'>First name</div>
		<div class='tr'>". $name ."</div>
	</div>
	<div class='col-6'>
		<div class='title'>Last name</div>
		<div class='tr'>". $lastname ."</div>
	</div>
	<div class='col-6'>
		<div class='title'>Phone</div>
		<div class='tr'>". $phone ."</div>
	</div>
	<div class='col-6'>
		<div class='title'>Email</div>
		<div class='tr'>". $email ."</div>
	</div>
	<br style='clear: both'>
	<div class='tr'>
	<p>Message:<br>".$message."</p>
	</div>
</div>
<div class='footer'>
You are receiving this email because you submitted your information to <a href='https://www.sacpoolpros.com'>www.sacpoolpros.com</a><br>
<div class='company'>
	Sac Pool Pros<br>
	www.sacpoolpros.com<br>
	6241 Turner Rd | Suite A<br>
	Sacramento, CA 95829<br>
	(530) 312-2614
</div>

</div>
</body>
</html>";
	  $headers = "MIME-Version: 1.0" . "\r\n";
	  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  $headers .= 'From: <webmaster@sacpoolpros.com>' . "\r\n";
	  mail($to_2,$subject_2,$message,$headers);
	  //end of email 2
	  }
mysqli_close($connection); // Connection Closed
?>
