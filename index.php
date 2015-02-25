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
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {*/
	if (mail ($to, $subject, $body, $from)) {
		$result='<div id="#alert" class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div id="#alert" class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
//}
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
	<link rel="icon" href="favicons.ico">
	<title>Code Bandit | Reference Template</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/cover.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/hover-min.css">

</head>
<body>

<div id="first" class="site-wrapper">
	<div class="site-wrapper-inner">
		<div class="cover-container">
			<div class="masthead clearfix">
				<div class="inner">
					<a href="index.php"><img src="img/CodeBandit_logo.png" alt="codebandit_logo" class="masthead-brand"/></a>
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
						<?php echo $result ?>
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
				<div class="container">
						<div id="about-header" class="row">
							<!--<div class="col-md-3 parent social">
								<a class="child" href="http://www.facebook.com/borbely.robert" target="_blank"><i class="fa fa-facebook-official fa-4x hvr-grow-rotate"></i></a>
							</div>-->
							<div class="col-md-12 social">
								<img class="img-circle profile" src="http://placehold.it/350x350" alt="profile_picture" />
							</div>
							<!--<div class="col-md-3 parent social">
								<a class="child" href="https://github.com/RobertBorbely" target="_blank"><i class="fa fa-github-square fa-4x hvr-grow-rotate"></i></a>
							</div>-->
						</div>
						<div id="about-content" class="col-sm-12">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem lorem, tempor quis erat non,
								 tristique tristique justo. Curabitur sed augue leo. Integer eu sagittis mi. Maecenas convallis elit
								id purus gravida elementum. Phasellus tincidunt vitae turpis vel gravida. Suspendisse euismod eget nisi
								 sed malesuada. Phasellus fringilla, dui in commodo tempor, felis sapien vestibulum nulla, ac lacinia nisi
								 ipsum eget ante. Praesent viverra posuere faucibus. Nam eget blandit risus.
							</p>
						</div>
						<div id="about-footer" class="row">
							<div class="col-md-4">
								<img class="" src="http://placehold.it/300x200" alt="design_work"/>
								<h3 class="text-center">Heading</h3>
								<p class="text-center">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem lorem, tempor quis erat non,
										tristique tristique justo. Curabitur sed augue leo. Integer eu
								</p>
							</div>
							<div class="col-md-4">
								<img class="" src="http://placehold.it/300x200" alt="coding" />
								<h3 class="text-center">Heading</h3>
								<p class="text-center">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem lorem, tempor quis erat non,
										tristique tristique justo. Curabitur sed augue leo. Integer eu
								</p>
							</div>
							<div class="col-md-4">
								<img class="" src="http://placehold.it/300x200" alt="whatever" />
								<h3 class="text-center">Heading</h3>
								<p class="text-center">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem lorem, tempor quis erat non,
										tristique tristique justo. Curabitur sed augue leo. Integer eu
								</p>
							</div>
						</div>
				</div>
			</section>

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
										<textarea class="form-control" placeholder="Üzeneted..." name="message" rows="4" data-placement="top" data-trigger="manual"></textarea>
									</div>
									<div class="form-group">
										<label>E-Mail</label>
										<input class="form-control email" name="email" placeholder="test@elek.hu"
												   data-placement="top" data-trigger="manual" data-content="Érvényes e-mail címnek kell lennie !"
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
