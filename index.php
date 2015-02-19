<?php
	if ($_POST["submit"]) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Contact form';
		$to = 'codebanditinfo@gmail.com';
		$subject2 = $_POST['subject2'];
		$subject = "[CodeBandit contact] $subject2";

		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		/*Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}*/
		mail($to, $subject, $body, $from);
/* If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}*/
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">
	<title>Code Bandit | Reference Template</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/cover.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
	<link rel="stylesheet" href="css/hover-min.css">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div id="first" class="site-wrapper">
	<div class="site-wrapper-inner">
		<div class="cover-container">
			<div class="masthead clearfix">
				<div class="inner">
					<h2 class="masthead-brand">Code Bandit</h2>
					<nav role="navigation">
						<ul class="nav masthead-nav">
							<li id="home" class="active hvr-pulse-grow"><a href="#home-page" data-toggle="tooltip" data-placement="bottom" title="Home">
								<i class="fa fa-home fa-2x"></i></a>
							</li>
							<li id="about" class="hvr-pulse-grow"><a href="#about-page" data-toggle="tooltip" data-placement="bottom" title="Rólam">
								<i class="fa fa-user fa-2x"></i></a>
							</li>
							<li id="portfolio" class="hvr-pulse-grow"><a href="#portfolio-page" data-toggle="tooltip" data-placement="bottom" title="Portfólió">
								<i class="fa fa-picture-o fa-2x"></i></a>
							</li>
							<li id="contact" class="hvr-pulse-grow"><a href="#contactModal" data-toggle="modal" data-placement="bottom" title="Kapcsolat">
								<i class="fa fa-envelope fa-2x"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="body-container">
				<section id="home-page" class="inner cover page-active container">
						<h1 class="cover-heading">Üdvözöllek a honlapomon!</h1>
						<p class="lead">Ez az oldal azért jött létre, hogy bemutassa az eddigi munkáim és a folyamatban lévő projektjeim.</p>
						<p class="lead"><!-- Social Icons comes here facebook github later twitter dribble linkedln-->
							<a href="http://www.facebook.com/borbely.robert" target="_blank"><i class="fa fa-facebook-official fa-2x hvr-grow-rotate"></i></a>
							<a href="#" target="_blank"><i class="fa fa-twitter-square fa-2x hvr-grow-rotate"></i></a>
							<a href="https://github.com/RobertBorbely" target="_blank"><i class="fa fa-github-square fa-2x hvr-grow-rotate"></i></a>
							<a href="#" target="_blank"><i class="fa fa-linkedin fa-2x hvr-grow-rotate"></i></a>
						</p>
				</section>

			<section id="portfolio-page" class="page-hidden">
				<div class="container-fluid">
					<div class="row">
						<figure id="#pic1" class="col-md-4 col-sm-6 col-xs-12">
							<a href="#" class="hvr-bounce-in"><img src="http://placehold.it/1920x1080"></a>
							<figcaption>Macbook decal design | Adobe Illustrator</figcaption>
						</figure>
						<figure id="#pic2" class="col-md-4 col-sm-6 col-xs-12">
							<a href="#" class="hvr-bounce-in"><img src="http://placehold.it/1920x1080"></a>
							<figcaption>'Lotus Spa' theme | Wordpress</figcaption>
						</figure>
						<figure id="#pic3" class="col-md-4 col-sm-6 col-xs-12">
							<a href="#" class="hvr-bounce-in"><img src="http://placehold.it/1920x1080"></a>
							<figcaption>'Flex' theme | Wordpress</figcaption>
						</figure>
					</div>
				</div>
			</section>

			<section id="about-page" class="inner cover page-hidden">
				<h1>About</h1>
			</section>

			<!--<section id="contact-page" class="inner cover page-hidden">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<h1 class="page-header text-center">Kapcsolat</h1>
							<form class="form-horizontal" role="form" method="post" action="index.php">
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Név</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="name" name="name" placeholder="Neve" value="<?php echo htmlspecialchars($_POST['name']); ?>">
										<?php echo "<p class='text-danger'>$errName</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
										<?php echo "<p class='text-danger'>$errEmail</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="message" class="col-sm-2 control-label">Message</label>
									<div class="col-sm-10">
										<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
										<?php echo "<p class='text-danger'>$errMessage</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="human" name="human" placeholder="Válasz">
										<?php echo "<p class='text-danger'>$errHuman</p>";?>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<?php echo $result; ?>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>-->

			<section id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" area-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
							<h3 id="contactModalLabel">Kapcsolat</h3>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<form method="post" action="index.php" role="form" class="form-horizontal col-sm-12">
									<div class="form-group">
										<label>Név</label>
										<input class="form-control required" placeholder="Neve" name="name" data-placement="top" data-trigger="manual"
													 data-content="Legalább 3 karakter hosszúnak kell lennie és csak betűket tartalmazhat" type="text">
									</div>
									<div class="form-group">
										<label>Tárgy</label>
										<input class="form-control" placeholder="Tárgy" name="subject2" data-placemont="right" data-trigger="manual"
													 type="text">
									</div>
									<div class="form-group">
										<label>Üzenet</label>
										<textarea class="form-control" placeholder="Your message here.." name="message" rows="4" data-placement="top" data-trigger="manual"></textarea>
									</div>
									<div class="form-group">
										<label>E-Mail</label>
										<input class="form-control email" name="email" placeholder="email@you.com (so that we can contact you)"
												   data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)"
													 type="email">
									</div>
									<div class="form-group"><button id="submit" name="submit" type="submit" value="Send" class="btn btn-success pull-right">Küldés</button> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>
								</form>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Mégse</button>
						</div>
					</div>
				</div>
			</section>

		</div>
			<div class="mastfoot">
				<div class="inner">
					<p>Created with <a href="http://getbootstrap.com">Bootstrap</a>, by Robert Borbely</a>.</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slider-effect.js"></script>
<script src="js/viewport.js"></script>
<script src="js/validator.js"></script>
</body>
</html>
