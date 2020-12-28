<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];
    $headers = "Organization: Sender Organization\r\n";
    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers = "X-Priority: 3\r\n";
    $headers = "X-Mailer: PHP". phpversion();
	$toEmail = "chintanudani2000@gmail.com";
	$headers = "From: " . $name . "<". $email ."> . \r\n";
	if(mail($toEmail, $subject, $content, $headers)) {
	    $message = "Your contact information is received successfully.";
        $type = "success";
        echo $message."".$type;
	}
}

?>