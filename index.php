<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500|Rajdhani:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./slick/slick.css">
	<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
	<style type="text/css">
		.slider {
		    width: 60%;
		    margin: 25px auto;
		}

		.slick-slide {
		  margin: 10px 20px;
		}

		.slick-slide img {
		  width: 100%;
		}

		.slick-prev:before,
		.slick-next:before {
		  color: black;
		}


		.slick-slide {
		  transition: all ease-in-out .3s;
		  opacity: .2;
		}

		.slick-active {
		  opacity: .5;
		}

		.slick-current {
		  opacity: 1;
		}
	</style>		
</head>
<body>
	<div class="profile-page">
		<div class="background">
			<div class="inside-background">
				<header>
					<a href="index.php" class="logo">Logo</a>
					<div class="menu-toggle"></div>
					<nav>
						<ul> 
							<li>
								<a href="index.php" class="home">Home</a>
							</li>
							<li>
								<a href="emp-services.php" class="emp-services">EMP Services</a>
							</li>
							<li>
								<a href="index.php" class="potofolio">Portofolio</a>
							</li>
							<li>
								<a href="contact.php" class="contact">Contact</a>
							</li>
							<li>
								<a href="index.php" class="about">About</a>
							</li>
						</ul>
					</nav>
					<div class="clearfix"></div>
				</header>
				<h1 class="h1-view-page1">Welcome To My Website</h1>
			</div>
			<!-- EMP Services -->
			<div class="under-insdie-background">
				<div class="emp-service">
					<h1 class="h1-emp-services">EMP Services</h1>
					<p class="p-emp-services">The following services that our provide to costumers</p>
					<div class="link-emp-services">
						<div class="images" align="center">
							<img src="images/graphic_design.jpg" class="img-emp-services">
							<img src="images/vector_design.jpg" class="img-emp-services">
							<img src="images/video_editor2.jpg" class="img-emp-services">
							<img src="images/web_developer.jpg" class="img-emp-services">
						</div>
					</div>
					<div class="button-emp" align="center">
						<a href="emp-service.php" class="emp-services-button">EMP Services</a>
					</div>
				</div>
			</div>
			<!-- Portofolio -->
			<div class="portofolio-container">
				<div class="inside-pc">	
					<h1 class="h1-portofolio">Portofolio</h1>
					<div class="image-slider-container" align="center">
					<div class="slider-images" align="center">
					<section class="lazy slider" data-sizes="50vw">
				    	<div>
					       <img src="images/1.jpg">
					    </div>
					    <div>
					      <img src="images/2.jpg">
					    </div>
					    <div>
					      <img src="images/3.jpg">
					    </div>
					    <div>
					       <img src="images/4.jpg">
					    </div>
					    <div>
					      <video width="720" height="480" controls="Playground" class="video">
						      <source src="videos/we-are-dmp-fortis-2018.mp4" type="video/mp4">
						  </video>
					    </div>
					  </section>
					</div>
					<p class="click-here">Click here for more portofolio</p>
					</div>
					<div class="more-p" align="center">
						<a href="portofio.php" class="more-portofolio">Portofolio</a>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  	<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  	<script type="text/javascript">
	    $(document).on('ready', function() {
	      $(".vertical-center-4").slick({
	        dots: true,
	        vertical: true,	
	        centerMode: true,
	        slidesToShow: 4,
	        slidesToScroll: 2
	      });
	      $(".vertical-center-3").slick({
	        dots: true,
	        vertical: true,
	        centerMode: true,
	        slidesToShow: 3,
	        slidesToScroll: 3
	      });
	      $(".vertical-center-2").slick({
	        dots: true,
	        vertical: true,
	        centerMode: true,
	        slidesToShow: 2,
	        slidesToScroll: 2
	      });
	      $(".vertical-center").slick({
	        dots: true,
	        vertical: true,
	        centerMode: true,
	      });
	      $(".vertical").slick({
	        dots: true,
	        vertical: true,
	        slidesToShow: 3,
	        slidesToScroll: 3
	      });
	      $(".regular").slick({
	        dots: true,
	        infinite: true,
	        slidesToShow: 3,
	        slidesToScroll: 3
	      });
	      $(".center").slick({
	        dots: true,
	        infinite: true,
	        centerMode: true,
	        slidesToShow: 5,
	        slidesToScroll: 3
	      });
	      $(".variable").slick({
	        dots: true,
	        infinite: true,
	        variableWidth: true
	      });
	      $(".lazy").slick({
	        lazyLoad: 'ondemand', // ondemand progressive anticipated
	        infinite: true
	      });
	    });
	</script>
</body>
</html>