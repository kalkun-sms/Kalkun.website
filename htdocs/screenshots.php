<?php include_once('header.php'); ?>

<link rel="stylesheet" href="media/css/screenshots_slideshow_gallery.css" type="text/css" media="screen" />

<div id="wrap">
	<div id="shadow"></div>
	<div id="content">

		<h2>Screenshots</h2>
		<h3>Core</h3>
		<!-- Container for the image gallery -->
		<div class="container">
			<!-- Thumbnail images -->
			<div class="row">
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/01-login_th.jpg" style="width:100%" onclick="currentSlide(1)" alt="Login screen">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/02-dashboard_th.jpg" style="width:100%" onclick="currentSlide(2)" alt="Dashboard">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/03-settings_th.jpg" style="width:100%" onclick="currentSlide(3)" alt="General user settings">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/04-compose_th.jpg" style="width:100%" onclick="currentSlide(4)" alt="Compose window with smiley">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/05-compose-autofill_th.jpg" style="width:100%" onclick="currentSlide(5)" alt="Compose window with phonebook search">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/06-messages_th.jpg" style="width:100%" onclick="currentSlide(6)" alt="Message list of personal folder">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/07-filters_th.jpg" style="width:100%" onclick="currentSlide(7)" alt="Filter configuration">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/08-phonebook_th.jpg" style="width:100%" onclick="currentSlide(8)" alt="Phonebook: content">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/09-phonebook_add_th.jpg" style="width:100%" onclick="currentSlide(8)" alt="Phonebook: add contact">
				</div>
				<div class="column_10">
				<img class="demo cursor" src="media/images/2022-03/10-users_th.jpg" style="width:100%" onclick="currentSlide(8)" alt="Users: content">
				</div>
			</div>

			<!-- Image text -->
			<div class="caption-container">
				<p id="caption"></p>
			</div>

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			<!-- Full-width images with number text -->
			<div class="mySlides">
				<div class="numbertext">1 / 10</div>
				<img src="media/images/2022-03/01-login.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">2 / 10</div>
				<img src="media/images/2022-03/02-dashboard.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">3 / 10</div>
				<img src="media/images/2022-03/03-settings.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">4 / 10</div>
				<img src="media/images/2022-03/04-compose.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">5 / 10</div>
				<img src="media/images/2022-03/05-compose-autofill.png" style="width:100%">
			</div>

			<div class="mySlides">
				<div class="numbertext">6 / 10</div>
				<img src="media/images/2022-03/06-messages.png" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext">7 / 10</div>
				<img src="media/images/2022-03/07-filters.png" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext">8 / 10</div>
				<img src="media/images/2022-03/08-phonebook.png" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext">9 / 10</div>
				<img src="media/images/2022-03/09-phonebook_add.png" style="width:100%">
			</div>
			<div class="mySlides">
				<div class="numbertext">10 / 10</div>
				<img src="media/images/2022-03/10-users.png" style="width:100%">
			</div>
		</div>
		<p>&nbsp;</p>
		<h3>Installation assistant</h3>

		<!-- Container for the image gallery -->
		<div class="container">
			<!-- Thumbnail images -->
			<div class="row">
				<div class="column_4">
				<img class="demo2 cursor" src="media/images/2022-03/50-install_th.jpg" style="width:100%" onclick="currentSlide2(1)" alt="Install: Welcome screen">
				</div>
				<div class="column_4">
				<img class="demo2 cursor" src="media/images/2022-03/51-install_th.jpg" style="width:100%" onclick="currentSlide2(2)" alt="Install: Requirements check">
				</div>
				<div class="column_4">
				<img class="demo2 cursor" src="media/images/2022-03/52-install_th.jpg" style="width:100%" onclick="currentSlide2(3)" alt="Install: Database setup">
				</div>
				<div class="column_4">
				<img class="demo2 cursor" src="media/images/2022-03/53-install_th.jpg" style="width:100%" onclick="currentSlide2(4)" alt="Install: Final configuration">
				</div>
			</div>

			<!-- Image text -->
			<div class="caption-container">
				<p id="caption2"></p>
			</div>

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides2(1)">&#10095;</a>

			<!-- Full-width images with number text -->
			<div class="mySlides2">
				<div class="numbertext">1 / 4</div>
				<img src="media/images/2022-03/50-install.png" style="width:100%">
			</div>

			<div class="mySlides2">
				<div class="numbertext">2 / 4</div>
				<img src="media/images/2022-03/51-install.png" style="width:100%">
			</div>

			<div class="mySlides2">
				<div class="numbertext">3 / 4</div>
				<img src="media/images/2022-03/52-install.png" style="width:100%">
			</div>

			<div class="mySlides2">
				<div class="numbertext">4 / 4</div>
				<img src="media/images/2022-03/53-install.png" style="width:100%">
			</div>

		</div>

		<p>&nbsp;</p>
		<h3>Plugins</h3>

		<!-- Container for the image gallery -->
		<div class="container">

			<!-- Thumbnail images -->
			<div class="row">
				<div class="column_5">
				<img class="demo3 cursor" src="media/images/2022-03/40-plugins_th.jpg" style="width:100%" onclick="currentSlide3(1)" alt="Installed plugins list">
				</div>
				<div class="column_5">
				<img class="demo3 cursor" src="media/images/2022-03/41-plugins_th.jpg" style="width:100%" onclick="currentSlide3(2)" alt="Plugin: Server alert">
				</div>
				<div class="column_5">
				<img class="demo3 cursor" src="media/images/2022-03/42-plugins_th.jpg" style="width:100%" onclick="currentSlide3(3)" alt="Plugin: SMS credit: edit package">
				</div>
				<div class="column_5">
				<img class="demo3 cursor" src="media/images/2022-03/43-plugins_th.jpg" style="width:100%" onclick="currentSlide3(4)" alt="Plugin: SMS credit: edit user package">
				</div>
				<div class="column_5">
				<img class="demo3 cursor" src="media/images/2022-03/44-plugins_th.jpg" style="width:100%" onclick="currentSlide3(5)" alt="Plugin: STOP manager">
				</div>
			</div>

			<!-- Image text -->
			<div class="caption-container">
				<p id="caption3"></p>
			</div>

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides3(1)">&#10095;</a>

			<!-- Full-width images with number text -->
			<div class="mySlides3">
				<div class="numbertext">1 / 5</div>
				<img src="media/images/2022-03/40-plugins.png" style="width:100%">
			</div>

			<div class="mySlides3">
				<div class="numbertext">2 / 5</div>
				<img src="media/images/2022-03/41-plugins.png" style="width:100%">
			</div>

			<div class="mySlides3">
				<div class="numbertext">3 / 5</div>
				<img src="media/images/2022-03/42-plugins.png" style="width:100%">
			</div>

			<div class="mySlides3">
				<div class="numbertext">4 / 5</div>
				<img src="media/images/2022-03/43-plugins.png" style="width:100%">
			</div>

			<div class="mySlides3">
				<div class="numbertext">5 / 5</div>
				<img src="media/images/2022-03/44-plugins.png" style="width:100%">
			</div>
		</div>

	</div>

</div>

<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
	showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	showSlides(slideIndex = n);
	}

	function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	var captionText = document.getElementById("caption");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	captionText.innerHTML = dots[slideIndex-1].alt;
	}

	/* SECTION 2 */
	var slideIndex2 = 1;
	showSlides2(slideIndex2);

	// Next/previous controls
	function plusSlides2(n) {
	showSlides2(slideIndex2 += n);
	}

	// Thumbnail image controls
	function currentSlide2(n) {
	showSlides2(slideIndex2 = n);
	}

	function showSlides2(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides2");
	var dots = document.getElementsByClassName("demo2");
	var captionText = document.getElementById("caption2");
	if (n > slides.length) {slideIndex2 = 1}
	if (n < 1) {slideIndex2 = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex2-1].style.display = "block";
	dots[slideIndex2-1].className += " active";
	captionText.innerHTML = dots[slideIndex2-1].alt;
	}

	/* SECTION 3 */
	var slideIndex3 = 1;
	showSlides3(slideIndex3);

	// Next/previous controls
	function plusSlides3(n) {
	showSlides3(slideIndex3 += n);
	}

	// Thumbnail image controls
	function currentSlide3(n) {
	showSlides3(slideIndex3 = n);
	}

	function showSlides3(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides3");
	var dots = document.getElementsByClassName("demo3");
	var captionText = document.getElementById("caption3");
	if (n > slides.length) {slideIndex3 = 1}
	if (n < 1) {slideIndex3 = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex3-1].style.display = "block";
	dots[slideIndex3-1].className += " active";
	captionText.innerHTML = dots[slideIndex3-1].alt;
	}
</script>

<?php include_once('footer.php'); ?>
