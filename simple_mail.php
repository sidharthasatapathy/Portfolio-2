<?php
 if(isset($_POST['submit']))
{ 
	$name = $_POST['name'];
	$email = $_POST['email'];
	/*$phone = $_POST['phone']; */
	$message1 = $_POST['message'];
 
		$display_header="New Website Enquiry";
		$to = 'ssatapathy000@gmail.com';
		$subject = 'New Website Enqiry';
		$from = 'ssatapathy000@gmail.com';
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		// Create email headers
		$headers .= 'From: '.$display_header."\r\n".
					'Reply-To: '.$email."\r\n" .
					'X-Mailer: PHP/' . phpversion();
		// Compose a simple HTML email message
				
			$message = '<html><body>'; 
			$message .= '<p style="color:#D74516;font-size:18px;">New Website Enquiry</p>';
			$message .= '<h3 style="color:#000000;">Name :-  '.$name.'</h3>';
			$message .= '<h3 style="color:#000000;">Email :-  '.$email.'</h3>';
			/*$message .= '<h3 style="color:#000000;">Phone :-  '.$phone.'</h3>'; */
			$message .= '<h3 style="color:#000000;">Message :-  '.$message1.'</h3>';
					
			$message .= '<p style="color:#A20106;font-size:18px;"><br>Thank You .. !</p>'; 
					 
			$message .= '</body></html>';   
					
			mail($to, $subject, $message, $headers) or die ("Failure");
			echo"<script>alert('Thank you for Contacting With us..! ');window.location='enquiry.php';</script>";
 }
    
?>