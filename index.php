<!DOCTYPE HTML>

<html>
	<head>
		<title>inDistance By Rooftop Application Technologies</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Android Mobile App inDistance Platform" />
		<meta name="keywords" content="Android inDistance Mobile Application" />
		<meta name="author" content="Hoofar Pourzand"/>
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>		
		<!-- Header -->
			<section id="header">
				<header>
					<h1>inDistance</h1>
					<p>By Rooftop Applications</p>
				</header>
				<footer>
				<!--	<a href="#banner" class="button style2 scrolly scrolly-centered">Why it's so anticipated?</a> -->
				
				<!-- Download -->
					<a class="button style2 scrolly scrolly-centered" href="./inDistance.apk" download="inDistance.apk">Download</a>
				</footer>
			</section>
		
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Because Texting is too much!</h2>
				</header>
				<p>A brand new way to leave messages and share moments designed by <a href="http://itshoofar.com">Rooftop Applications Team</a> for Android phones</a>.<br/>
				 <br />
				With three clicks you are sharing what you like, using your WiFi.</p>
				<footer>
					<a href="#first" class="button style2 scrolly">What? How?</a>
				</footer>
			</section>
		
		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image full"><img src="Famous/Monro.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Upload Audio<br />
						using your Voice Recorder</h2>
					</header>
					<p>with a click you start to upload your audio to your Youtube channel after you singed in. If you may, the moment you had WiFi, the Audio will be sent to whoever you want.</p>
				</div>
			</article>
		
		<!-- Feature 2 -->
			<article class="container box style1 left">
				<div class="inner">
					<header>
						<h2>Or even your Video<br />
						Just start recording!</h2>
					</header>
					<p>You won't miss a moment, again, it will be uploaded to your youtube channel, when you got Wifi, no-extra-bother! The link will be sent to who ever you want within a time frame you want. <br><br></p>
				
				</div>
				
				<div class = "inner2">
					<video width = 100% height = 100% controls>
						<source src = "videos/smarties-1.mp4">
					</video>	
				</div>
				
			</article>
		
		<!-- Portfolio -->
			<article class="container box style2">
				<header>
					<h2>Or multiple pictures! </h2>
					<p>Take multi-pictures!or what we call as PicChick! <br />
					And don't worry about when or how they are uploaded! Not a moment is lost!<br><br> </p>
					
					<!-- Image viewer -->
					<!--START JUICEBOX EMBED-->
						<script src="web/jbcore/juicebox.js"></script>
							<script>
								new juicebox({
									containerId: "juicebox-container",
									galleryWidth: "100%",
									galleryHeight: "70%",
									backgroundColor: "rgba(34,34,34,1)"
									});
							</script>
							<div id="juicebox-container"></div>
					<!--END JUICEBOX EMBED-->
				</header>
			</article>
		
		<!-- This is not properly working yet! -->
		<!-- Contact -->
		<?php
			// Define variables
			$name = $email = $message = "";
		?>
			<article class="container box style3">
				<header>
					<h2>Please send us a message! </h2>
					<p>If you are a developer or just interested somehow!</p>
					<p id= "feedback"><?php echo $feedback ?></p>
				</header>
				<form method = "post" action= "?">
					<div class="row half">
						<div class="6u"><input type="text" class="text" name="name" placeholder="Name" id = "name" /></div>
						<div class="6u"><input type="text" class="text" name="email" placeholder="Email" id = "email" /></div>
					</div>
					<div class="row half">
						<div class="12u">
							<textarea name="message" placeholder="Message" id= "message" ></textarea>
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<ul class="actions">
								<li><input class="button style4 scrolly scrolly-centered" type= "submit" value="Submit"</li>
						
					</div>
				</form>
				
<?php
$to = 'hpourzand@gmail.com';
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
	$feedback= "Thanks for the message!";
}
?>					
			</article>
				
		
		<section id="footer">
			<ul class="icons">
				<li><a href= "https://www.facebook.com/inDistanceapp" class = "fa fa-facebook-square fa-lg"></a></li>
				<li></li><a href= "https://twitter.com/inDistanceapp" class = "fa fa-twitter-square fa-lg"></a></li>
				<li><a href= "https://vimeo.com/user28557464" class = "fa fa-vimeo-square fa-lg"></a></li>
				<li><a href= "https://medium.com/@inDistanceapp" class = "fa fa-pencil-square fa-lg"></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy;inDistance 2012-2014. </li>
					<li>Maintained by InDistance Team</li>
				</ul>
			</div>
		</section>

	</body>
	
<!-- ClickDesk Live Chat Service for websites -->
<script type='text/javascript'>
var _glc =_glc || []; _glc.push('all_ag9zfmNsaWNrZGVza2NoYXRyDwsSBXVzZXJzGLm_3MEDDA');
var glcpath = (('https:' == document.location.protocol) ? 'https://my.clickdesk.com/clickdesk-ui/browser/' : 
'http://my.clickdesk.com/clickdesk-ui/browser/');
var glcp = (('https:' == document.location.protocol) ? 'https://' : 'http://');
var glcspt = document.createElement('script'); glcspt.type = 'text/javascript'; 
glcspt.async = true; glcspt.src = glcpath + 'livechat-new.js';
var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(glcspt, s);
</script>
<!-- End of ClickDesk -->

</html>
