<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$amount = $_POST["amount"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'hostel');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	mysqli_query($conn, "INSERT INTO payments (userName, userEmail,amount,subject,content) VALUES ('" . $name. "', '" . $email. "', '" . $amount. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	if(!empty($insert_id)) {
	   $message = "Your Details Submitted successfully.";
	   $type = "success";
	}
}
require_once "contact-view.php";
?>