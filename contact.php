<?php 

			//submit the form
			$userName = $_POST['name'];
			$userEmail = $_POST['email'];
			$message = $_POST['subject'];

      $email_from = 'lxuanniii@gmail.com';
      $email_subject = "Enquiries";
      $email_body = "Name: $userName.\n".
			              "Email: $userEmail.\n".
			             "Message: $message.\n";

			$to = "lxuanniii@gmail.com";
			$headers = "From: $email_from \r\n";
      $headers .= "Reply-To: $userEmail \r\n";

			mail($to, $email_subject, $email_body, $headers);

      header("Location: contact.html");
?> 
