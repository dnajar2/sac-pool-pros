<?php

$connection = mysqli_connect("localhost", "sacpoolp_spcrm", "459NX^!N+4xi", "sacpoolp_spcrm"); // Establishing Connection with Server..

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	if( !empty($_POST['remote']) ){
		//Fetching Values from URL
	  	$name = filter_var($_POST['name2'], FILTER_SANITIZE_STRING);
		$lastname = filter_var($_POST['lastname2'], FILTER_SANITIZE_STRING); 
		$email = 'leads@sacpoolpors.com';
		$phone = $_POST['phone2'];
		$message = filter_var($_POST['note2'], FILTER_SANITIZE_STRING);
		//Insert query
		$query = mysqli_query($connection, "insert into form_element(name, lastname, email, phone, zcode, message) values ('$name', '$lastname', '$email', '$phone','null','$message')");
	  	if($query){
	  		echo "Thank you ". $name ." Your form was submitted succesfully";			
		}else{
			echo("Error description: " . mysqli_error($connection)); 	
		}
	  
	  //email
	  	$to = "info@sacpoolpros.com";
	  	$subject = "New email from: ".$name;
	  	$txt = "Name: ".$name;
	  	$txt .= "<br>Last Name: ".$lastname;
	  	$txt .= "<br>Phone: ".$phone;
	  	$txt .= "<br>Message:<br>".$message;
	  	$headers = "MIME-Version: 1.0" . "\r\n";
	  	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	  	$headers .= "From: ".$email;
	  
	  mail($to,$subject,$txt,$headers);
	  }
  }
mysqli_close($connection); // Connection Closed
?>
