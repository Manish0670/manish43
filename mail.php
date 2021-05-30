<?php
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='dhakalmanish20@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
		}
	}
?>