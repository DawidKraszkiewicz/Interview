<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	require 'vendor/autoload.php';
	$mail = new PHPmailer;
	$email="";
	$servername = "localhost";
	$username = "admin2021";
	$password = "";
	$dbname = "logic";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "update sent_forms set accepted = 1 where sent_forms.id = ?";
	
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $_GET['q']);
	$stmt->execute();
	
	$sqlMail = "select email_address from sent_forms where sent_forms.id = ?";
	
	$stmt = $conn->prepare($sqlMail);
	$stmt->bind_param("s", $_GET['q']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($email);
	$stmt->fetch();
	echo "$email";
	
	$result="";
	$mail->HOST='smtp.gmail.com';
	$mail->PORT=587;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure='tls';
	$mail->Username="email";
	$mail->Password='password';
	
	$mail->setFrom('myemail','Dawid');
	$mail->addAddress($email, 'Dawid');
	$mail->addReplyTo('myemail','Dawid');
	
	$mail->isHTML(true);
	$mail->Subject = "form Status change ";
	$mail->Body = "your Form has been accepted";
	if(!$mail->send()){
		$result = "something was wrong";
	}
	else{
		$result = "thanks x";
	}
	echo "$result";

	
//	$mail = new PHPMailer(true);
//	try {
//		$mail->SMTPDebug = 2;                                       
//		$mail->isSMTP();                                            
//		$mail->Host       = 'smtp.gmail.com;';                    
//		$mail->SMTPAuth   = true;                             
//		$mail->Username   = 'd.kraszkiewicz2002@gmail.com';                 
//		$mail->Password   = 'Kraszka19741!';                        
//		$mail->SMTPSecure = 'tls';                              
//		$mail->Port       = 587;  
//		
//		$mail->setFrom('d.kraszkiewicz2002@gmail.com');           
//		$mail->addAddress('kraszka1234@gmail.com');
//		
//		
//		$mail->isHTML(true);                                  
//		$mail->Subject = 'your form';
//		$mail->Body    = 'your form was accepted';
//		
//		$mail->send();
//		echo "Mail has been sent successfully!";
//	} catch (Exception $e) {
//		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//	}
//	if($conn->connect_error) {
//		exit('Could not connect');
//	}
//	$id = $_GET['q'];
//	$sql = "update sent_forms set accepted = 1 where sent_forms.id = '$id'";
//	
//	if ($conn->query($sql) === TRUE) {
//		echo "form accepted";
//	} else {
//		echo "Error: " . $sql . "<br>" . $conn->error;
//	}
	
		
	
		
		
	$conn->close();
?>
<div><? echo $email ?></div>