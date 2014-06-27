<?php
				
				if(isset($_POST['email']))
				{
					$email_to = "eatthesoul@gmail.com";
					$email_subject = "InDistance Form Submission";
					
					function died($error)
					{
						echo "Sorry, there were error(s) in your submission.";
						echo $error. "<br /><br />";
						die();
					}
				
					// Validate expected data
					 
					if (!isset($_POST['name']) ||
						!isset($_POST['email']) ||
						!isset($_POST['message']))
						{
							died('Sorry, there are errors in your submission.');
						}
						
					$name = $_POST['name'];
					$email_from = $_POST['email'];
					$message = $_POST['message'];
					
					$error_message = "";
					$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
					if(!preg_match($email_exp,$email_from)) 
					{
						$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
					}
					
					if(!preg_match($string_exp,$name)) 
					{
						$error_message .= 'The Name you entered does not appear to be valid.<br />';
					}