<?php $name = $_POST['name'];
$email = $_POST['email'];
$referral = $_POST['referral']
$message = $_POST['message'];
$formcontent="From: $name \n Found by: $referral \n Message: $message";
$recipient = "spencercoxcs@gmail.com";
$subject = "Contacted by $name";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Mail sent, thank you for reaching out!";
?>