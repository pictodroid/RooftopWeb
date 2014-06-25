<?
$to = 'eatthesoul@gmail.com';
$subject = 'Interested in InDistance';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$message = <<<EMAIL

Name: $name

$message

From $name

EMAIL;

$header = '$email';

if($_POST)
{
	$sent= mail($to, $subject, $message, $header);
}

if($sent)
{
	echo "Mail sent";
}
else
{
	echo "Error sending mail";
}
?>
