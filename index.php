
<!DOCTYPE HTML>
<!--
	Overflow by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>I Love Oneplus! # NeverSettle</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>
					<h1>Generate your Oneplus wallpaper!</h1>
					<p>By Febria Roosita Dwi</p>
				</header>
				<footer>
					<a href="#banner" class="button style2 scrolly-middle">I'm Ready!</a>
				</footer>
			</section>

		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Your Photo:</h2>
				</header>
				<form action="generate.php" method="post" enctype="multipart/form-data">>
				<p><input type="file" name="foto" accept="image/*"></p><br/>
				<p><h2>I want to make: </h2><br/>
				<input type="radio" name="ukuran" value="kecil">facebook profile picture 
				<input type="radio" name="ukuran" value="besar">Wallpaper<br/></p><br>
				<p><h2>Choose your style:</h2></p>
				<input type="radio" name="jenis" value="oneplus-red.png"><img src="temp/oneplus-red.png" width=100>
				<input type="radio" name="jenis" value="1-red.png"><img src="temp/1-red.png" width=100>
				<input type="radio" name="jenis" value="1-white.png"><img src="temp/1-white.png" width=100>
				<input type="radio" name="jenis" value="coba.png"><img src="temp/coba.png" width=100>
				<footer>
					<input type="submit" value="Generate!" class="button style2 scrolly">
				</footer>
			</form>
			</section>


		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>