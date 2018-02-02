<?php


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Cakra Satriatama</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<nav class="navbar navbar-expand-sm sticky-top">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#beranda">
								<span class="navbar-toggler-icon"></span>
							</button>
						<div class="collapse navbar-collapse" id="beranda">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#home">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#portfolio">Portfolio</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#kontak">Contact</a>
								</li>
							</ul>	
						</div>
					</nav>
				</div>
				<div class="container" id="home">
					<div class="row">
						<div class="col-sm-8 descrp">
							<h1 class="display-3 jud1">CATRA</h1>
							<h2 class="display-4 jud2">Cakra Satriatama</h2>
						</div>
						<div class="col-sm-4"></div>
					</div>
				</div>
			</div>
			<div class="jumbotron-1 jumbotron-fluid">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1>Selamat Datang di Web Resmi</h1>
							<h1>PKS SMAN 5 Semarang</h1>
							<h1>Cakra Satriatama</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="container" id="about">
				<div class="row tentang">
					<div class="col-sm-6 logo">
						<img src="assets/images/aset1.jpg">
					</div>
					<div class="col-sm-6 urai1">
						<h1>Tentang Catra</h1>
						<br>
						<h5>Catra adalah sebuah organisasi Ekstrakurikuler sekolah yang berada di SMAN 5 Semarang, 
							dibentuk pada tanggal 13 Agustus 1992 dengan nama Hansek/Pertahanan Sekolah,
							dengan dasar yang kita punya, kami mendidik adik adik kami sebagaimana mestinya.</h5>
					</div>
				</div>
			</div>
			<div class="jumbotron-2 jumbotron-fluid" id="portfolio">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 des-2">
							<h3>Korps PKS Cakra Satriatama (Catra) bertujuan mendidik dan membina anggotanya agar menjadi</h3>
							<h5>1. Manusia yang bertakwa kepada Tuhan Yang Maha Esa</h5>
							<h5>2. Manusia yang berkepribadian, berwatak dan berbudi pekerti luhur</h5>
							<h5>3. Rasa memiliki terhadap sekolah di dalam menjaga ketertiban dan keamanannya</h5>
						</div>
					</div>
				</div>
			</div>	
			<div class="container dev">
				<div class="row text-center">
					<div class="col-sm-12 dev-1">
						<h1>Developer</h1>
					</div>
				</div>
				<div class="row profil text-center">
					<div class="col-sm-12">
						<img src="assets/images/profil.jpg" class="rounded-circle greyscale">
						<h4><b>Hafidh Julian Kurniadi</b></h4>
						<p>Frontend Developer</p>
					</div>
				</div>
			</div>
			<div class="jumbotron-3 jumbotron-fluid" id="kontak">
				<div class="container">
					<div class="row join">
						<div class="col-sm-12 text-center">
							<h1><b>Tertarik dengan Cakra Satriatama?</b></h1>
							<h5>Kami akan segera memberitahumu ketika Catra open recruitmen</h5>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 data-1">
							<form class="form-inline section-form-group" action="index.php">
								<input type="text" class="form-control" id="nama" placeholder="Your Name" name="nama">
								<input type="email" class="form-control" id="email" placeholder="Your Email" name="email">
								<button type="submit" class="btn">Kabari saya</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
					<div class="row footer">
						<div class="col-sm-4 text-center">
							<h3>Contact</h3>
							<p class="nomor">+6285225625337</p>
							<p class="email"><a href="">pksSmala@gmail.com</a></p>
						</div>
						<div class="col-sm-4 text-center loc">
							<h3>Location</h3>
							<p><a href="https://www.google.co.id/maps/place/Sekolah+Menengah+Atas+Negeri+5+Semarang/@-6.9802546,110.4109276,17z/data=!3m1!4b1!4m5!3m4!1s0x2e708b4de6c26171:0xd2a194ff5e0811c1!8m2!3d-6.9802546!4d110.4131163?dcr=0"
								class="text-black" target="blank">
								SMAN 5 Semarang</a></p>
						</div>
						<div class="col-sm-4 text-center sosmed text-black">
							<h3>Follow</h3>
							<a href="www.instagram.com/hafidhjulian" target="blank"><i class="fa fa-instagram"></i></a>
							<a href="www.facebook.com" target="blank"><i class="fa fa-facebook-square"></i></a>
							<a href="www.twitter.com" target="blank"><i class="fa fa-twitter"></i></a>
							<a href="www.googleplus.com" target="blank"><i class="fa fa-google-plus-square"></i></a>
							<a href="www.youtube.com" target="blank"><i class="fa fa-youtube-play"></i></a>
							<a href="www.whatsapp.com" target="blank"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
			</div>
	</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
                $(".contactLink").click(function(){
                    if ($("#contactForm").is(":hidden")){
                        $("#contactForm").slideDown("slow");
                    }
                    else{
                        $("#contactForm").slideUp("slow");
                    }
                });
            });
            function closeForm(){
                $("#messageSent").show("slow");
                setTimeout('$("#messageSent").hide();$("#contactForm").slideUp("slow")', 2000);
           }

$(document).ready(function() {
  function filterPath(string) {
    return string
      .replace(/^\//,'')
      .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
      .replace(/\/$/,'');
  }
  $('a[href*=#]').each(function() {
    if ( filterPath(location.pathname) == filterPath(this.pathname)
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;
         $(this).click(function() {
           $('html, body').animate({scrollTop: targetOffset}, 1000);
           var d = document.createElement("div");
        d.style.height = "101%";
        d.style.overflow = "hidden";
        document.body.appendChild(d);
        window.scrollTo(0,scrollToM);
        setTimeout(function() {
        d.parentNode.removeChild(d);
            }, 10);
           return false;
         });
      }
    }
  });
});

</script>
