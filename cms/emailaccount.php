<?php
 if(isset($_POST['send']) && !empty($_POST['email'])){
	 
  
  $url = 'https://lcinavrongo.org';
  
			// Set the email subject
			$subject = "LCI Navrongo | Account Details";

			// FIXME: Update this to your desired email address
			$to = $_POST['email'];

			// Build the email data
			$msg =  "Greetings! ".$_POST['salutation']." ".$_POST['firstname']." ".$_POST['lastname'].". \n Bellow are your Membership Account Login Detail, \n Your Username: ".$_POST['username']." \n Your Password: ".$_POST['realpass']." \n Click on the link to Login ".$url." \n Thank You.";
			
			
			$name = 'LCI Navrongo';
			// Build the email headers
			$from = 'Account Details';
			$headers = "From: ".$name." < ".$from." >";

			// Send the email
			if (mail($to, $subject, $msg, $headers)) {
				// Set a 200 (okay) response code
				http_response_code(200);
				echo "<h1><span class='colored-text'>Thank You!</span> Your message has been sent</h1>";
				echo '<script type="text/javascript">';
        echo 'window.location.href="accounts.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=accounts.php" />';
        echo '</noscript>'; exit;
			} else {
				// Set a 500 (internal server error) response code
				http_response_code(500);
				echo "<h1><span class='colored-text'>Oops!</span> Something went wrong and we couldn't send your message</h1>";
				echo '<script type="text/javascript">';
        echo 'window.location.href="accounts.php";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url=accounts.php" />';
        echo '</noscript>'; exit;
			}
				}
			?>