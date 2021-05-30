<?php
if(isset($_POST['submit'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$registrant_email = $_POST['email'];
$number = $_POST['number'];
$city = $_POST['city'];
$postal_code = $_POST['postal_code'];
$DoB = $_POST['Birthday_Year']."-".$_POST['Birthday_Month']."-".$_POST['Birthday_Day'];
$gender = $_POST['gender'];

$email_from = 'info@pratikpaudell.com.np';

$email_subject = 'New Form Submission';

$email_body = "First Name: $first_name.\n".
              "Last Name: $last_name.\n".
              "Registrant Email: $registrant_email.\n".
              "Number: $number.\n".
              "City: $city.\n".
              "Postal Code: $postal_code.\n".
              "DoB: $DoB.\n".
              "Gender: $gender.\n";


$to = 'dhakalmanish20@gmial.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $registrant_email \r\n";

if(mail($to,$email_subject,$email_body,$headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
		header("Location: index.html");
	}
?>