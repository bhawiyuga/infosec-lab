<?php
include 'config.php';
ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
	<div id="header-wrapper-article">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">HackNews!</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="active"><a href="index.php" accesskey="1" title="">Homepage</a></li>
					<li><a href="article.php" accesskey="2" title="">Article</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="wrapper">
		<div id="three-column" class="container">
			<div class="title">
				<h2>Login</h2>
				<span class="byline">Admin's flag for you</span>
			</div>
			<div class="boxA">
				<p></p>
				<a></a>
			</div>
			<div class="boxB">
				<form method="post" action="flag.php">
					<label for="username">Username:</label>
					<input type="text" name="username" id="username" required>
					<br>
					<br>
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" required>
					<br>
					<br>
					<input type="submit" value="Login">
				</form>
				<?php
				error_reporting(0);
				// Get the username and password from the form
				$username = $_POST['username'];
				$password = $_POST['password'];

				// Check if the username and password are correct
				if ($username === "adminflag" && $password === "PrakKI2023FilkomUB") {
					// If the login is successful, redirect to the homepage
					header("Location: Congratss-Th1s-Fl4G-4Y0u-M4558r000-dvkCC821kXv.php");
					exit();
				} else {
					// If the login is unsuccessful, display an error message
				}
				?>

			</div>
			<div class="boxC">
				<p></p>
				<a></a>
			</div>
		</div>
	</div>
	<div id="copyright" class="container">
		<p>&copy; AcRtf Team. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
	</div>
</body>

</html>