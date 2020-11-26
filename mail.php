<?php
 if (isset($_POST['submit'])) {
 	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$phone=$_POST['phone'];
 	$message=$_POST['message'];

 	$to='daveshubham611@gmail.com';
 	$subject="form submission";
 	$message="Name:".$name."\n"."Phone:".$phone."\n"."Message:".$message;
 	$headers="from:".email;

 	if (mail($to, $subject, $message, $headers)) {
 		echo "<h1>Sent Successfully! Thank you"."".$name.",We will contatct you shortly!</h1>";
 	}
 	else
 	{
 		echo "Somthing Wrong!";
 	}
 }

?>