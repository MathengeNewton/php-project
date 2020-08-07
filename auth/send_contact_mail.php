 <?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = $_POST["phone"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "ngangajames1995@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your Complain has been received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";
?>