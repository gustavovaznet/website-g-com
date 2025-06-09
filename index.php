<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>G.COM Consulting</title>
<!--META TAGS-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Gustavo Vaz">
	<meta name="descryption" content="IT Consulting and Services">
	<meta name="keywords" content="information,technology,consulting,services,project,management,it,application,development">
	<meta name="robots" content="index,follow">
<!--ICON-->
	<link rel="icon" href="img/svg/favicon.svg">
<!--MATERIALIZE CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!--CUSTOM CSS-->
	<link rel="stylesheet" href="css/custom.css">
<!--GOOGLE ICONS-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--FONT AWESOME-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!--PHP CODE-->
<!--SUCCESS MESSAGE-->
<? if( isset($_GET['status']) && $_GET['status'] == 'success' ) { ?>
	<script>alert("Mensagem enviada com sucesso!");</script>
<? } ?>
<!-- ERROR MESSAGE-->
<? if( isset($_GET['status']) && $_GET['status'] == 'error' ) { ?>
	<div class="bg-info pt-2 text-white d-flex justify-content-center">
		<script>alert("Falha ao enviar mensagem, tente novamente!");</script>
	</div>
<? } ?>
<body>
<!--HEADER SECTION - MENU-->
<!--SIDENAV-->
	<header>
		<ul class="sidenav" id="menu-mobile">
					<li><a href="#home" class="sidenav-close white-text">Home</a></li>
					<li><a href="#about" class="sidenav-close white-text">About</a></li>
					<li><a href="#projects" class="sidenav-close white-text">Projects</a></li>
					<li><a href="#services" class="sidenav-close white-text">Services</a></li>	
					<li><a href="#contact" class="sidenav-close white-text">Contact</a></li>
				</ul>
<!--MAIN MENU-->
		<div class="navbar-fixed">
		<nav class="navbar z-depth-0">
			<div class="nav-wrapper container">
				<h2 class="logo-txt">G.COM - Consulting & Services</h2>
				<a href="index.html"><img src="img/svg/logo.svg" alt="G.COM - Consulting & Services" class="logo-img"></a>
				<ul class="menu right hide-on-med-and-down">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#projects">Projects</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<a href="#" class="sidenav-trigger right" data-target="menu-mobile"><i class="material-icons">menu</i></a>				
			</div>
		</nav>
		</div>
	</header>
<!--HOME SECTION-->
	<section class="home block" id="home"> 
		<div class="banner row container">
			<div class="col s12 center">
				<h2 class="white-text">From Idea to Execution <br> Smarter Solutions Start Here</h2>
				<p class="white-text light">We turn vision into reality with strategic technology consulting, project management, and scalable solutions—empowering businesses to innovate, grow, and lead in a digital-first world.</p>
				<a href="#projects" class="btn btn-about btn-large primary-color secondary-color">Know More</a>
				<a href="#contact" class="btn btn-contact btn-large black-text">Contact</a>
			</div>
		</div>
	</section>
<!--ABOUT SECTION-->
	<section class="about block" id="about">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="light standard-title">G.COM Consulting</h2>
			</div>	
			<div class="col s12 l6">
				<p class="light standard-text">We're a dedicated IT consulting partner, specialized in helping businesses and organizations make smart, efficient technology decisions that support their goals. Whether you're looking to streamline operations, improve project management activities, or develop an innovative solution for your day-to-day IT needs, we're here to help. <br><br> We’re agile, responsive, and able to give every client the personal attention they deserve with honest advice, tailored solutions, and a hands-on approach. Our mission is simple: to provide expert IT guidance that’s grounded in real-world needs and delivered with integrity. Let’s work together to make technology work better for you.</p>
			</div>
			<div class="col s12 l6">
				<div class="carousel carousel-slider">
					<a class="carousel-item" href="#">
						<img src="img/banners/banner1.jpg" alt="Institutional Image">
					</a>
					<a class="carousel-item" href="#">
						<img src="img/banners/banner2.jpg" alt="Institutional Image">
					</a>
					<a class="carousel-item" href="#">
						<img src="img/banners/banner3.jpg" alt="Institutional Image">
					</a>
				</div>

			</div>						
		</div>	
<!--STATUTE SECTION-->
		<div class="mvv row primary-color">
			<div class="container">
				<article class="item col s12 m4 center">				
					<span class="icon"><i class="material-icons medium">directions_run</i></span>
					<h4 class="white-text light">Mission</h4>
					<p class="white-text light">To empower businesses with practical, reliable, and personalized solutions. We strive to build lasting partnerships through honest advice, expert service, and a commitment to helping our clients thrive in a fast-changing digital world.</p>
				</article>
				<article class="item col s12 m4 center">				
					<span class="icon"><i class="material-icons medium">visibility</i></span>
					<h4 class="white-text light">Vision</h4>
					<p class="white-text light">To become the go-to IT consulting partner for small businesses seeking trustworthy guidance, smart solutions, and responsive support — making technology less stressful and more impactful for everyone we serve.</p>
				</article>	
				<article class="item col s12 m4 center">				
					<span class="icon"><i class="material-icons medium">grade</i></span>
					<h4 class="white-text light">Core Values</h4>
					<p class="white-text light">We are committed to operating with complete integrity, honesty, transparency, commitment, and quality in everything we do. These principles guide all our business dealings and relationships.</p>
				</article>								
			</div>
		</div>
	</section>
<!--PROJECTS SECTION-->
	<section class="projects block" id="projects">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title white-text light">Some of Our Projects</h2>
				<p class="white-text light standard-text">We've had the privilege of working on a variety of IT projects for businesses across different industries. Each project reflects our hands-on approach, commitment to quality, and focus on delivering real value — not just technical solutions.</p>
			</div>
		</div>
		<div class="row container">
<!--APP1 - CONTENT-->			
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/screens/app1.png" alt="App1" class="materialboxed">
						<a href="#modal-app1" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>Foryou App</h5>
						<p>The language learning app made just Foryou! Find your perfect tutor and start learning today.</p>
					</div>
				</div>
			</article>
<!--APP1 - MODAL-->	
			<div class="modal" id="modal-app1">
				<div class="modal-content">					
					<h5>Foryou App</h5>
					<p class="light">Foryou is the language learning app designed to put you first. Whether you're a beginner or looking to improve your skills, Foryou connects you with experienced language tutors who match your goals, schedule, and learning style. With Foryou, learning is flexible, personal, and effective. Start your journey today and find the perfect tutor to help you speak with confidence!<br><br>
						<img src="img/apps/app-foryou-1.png" width="180px">
						<img src="img/apps/app-foryou-2.png" width="180px">
						<img src="img/apps/app-foryou-3.png" width="180px">
						<img src="img/apps/app-foryou-4.png" width="180px">
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Close</a>
				</div>
			</div>
<!--APP2 - CONTENT-->
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/screens/app2.png" alt="App2" class="materialboxed">
						<a href="#modal-app2" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>Foryou Website</h5>
						<p>This is a website to promote the app Foryou. Find your perfect tutor and start learning a new language today.</p>
					</div>
				</div>
			</article>
<!--APP2 - MODAL-->	
			<div class="modal" id="modal-app2">
				<div class="modal-content">					
					<h5>Foryou Website</h5>
					<p class="light">Foryou is the language learning app designed to put you first. Whether you're a beginner or looking to improve your skills, Foryou connects you with experienced language tutors who match your goals, schedule, and learning style. With Foryou, learning is flexible, personal, and effective. Start your journey today and find the perfect tutor to help you speak with confidence!<br><br>
						<img src="img/apps/website-foryou-1.png" width="750px"><br>
						<img src="img/apps/website-foryou-2.png" width="750px"><br>
						<img src="img/apps/website-foryou-3.png" width="750px"><br>
						<img src="img/apps/website-foryou-4.png" width="750px"><br>
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Close</a>
				</div>
			</div>	
<!--APP3 - CONTENT-->
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/screens/app3.png" alt="App3" class="materialboxed">
						<a href="#modal-app3" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>Help an Angel App</h5>
						<p>Help an Angel is a heartfelt platform that connects kind-hearted people with urgent animal causes.</p>
					</div>
				</div>
			</article>
<!--APP3 - MODAL-->	
			<div class="modal" id="modal-app3">
				<div class="modal-content">					
					<h5>Help an Angel App</h5>
					<p class="light">Help an Angel is a heartfelt platform that connects kind-hearted people with urgent causes — helping save the lives of stray and abandoned animals. Through the app, users can discover real stories from rescuers and animal shelters in need of support, and donate directly to fund medical care, food, shelter, and safe rehoming. Every contribution, big or small, makes a difference. With transparent updates and a simple, secure donation process, Help an Angel empowers everyday people to become heroes for animals in need. Be the reason a stray gets a second chance. Download Help an Angel and make a life-saving impact today.<br><br>
						<img src="img/apps/app-haa-1.png" width="255px">
						<img src="img/apps/app-haa-2.png" width="255px">
						<img src="img/apps/app-haa-3.png" width="255px">
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Close</a>
				</div>
			</div>				
<!--APP4 - CONTENT-->
			<article class="col s12 m6 l3">
				<div class="card">
					<div class="card-image">
						<img src="img/screens/app4.png" alt="App4" class="materialboxed">
						<a href="#modal-asia" class="btn btn-floating halfway-fab primary-color secondary-color modal-trigger"><i class="material-icons">more_horiz</i></a>
					</div>
					<div class="card-content">
						<h5>Leadsales Website</h5>
						<p>Leadsales is a easy-to-use CRM solution designed to help businesses streamline their sales operations.</p>
					</div>
				</div>
			</article>
<!--APP4 - MODAL-->	
			<div class="modal" id="modal-asia">
				<div class="modal-content">					
					<h5>Leadsales Website</h5>
					<p class="light">Leadsales is a powerful, easy-to-use CRM solution designed to help businesses streamline their sales process, manage leads more effectively, and close deals faster. Built with simplicity and performance in mind, Leadsales lets you track every interaction, organize your pipeline, and stay connected with your prospects — all in one intuitive platform.<br><br>
						<img src="img/apps/website-leadsales-1.png" width="750px"><br>
						<img src="img/apps/website-leadsales-2.png" width="750px"><br>
						<img src="img/apps/website-leadsales-3.png" width="750px"><br>
					</p>
				</div>
				<div class="modal-footer">
					<a class="btn primary-color secondary-color modal-action modal-close">Close</a>
				</div>
			</div>	
			</div>			
		</div>
<!--CONTACT FOR INFO-->		
		<div class="row center">
			<a href="#contact" class="btn btn-about btn-large primary-color secondary-color"><i class="material-icons left">phone</i>Get in Touch to See More</a>
		</div>
	</section>
<!--SERVICES SECTION-->
	<section class="services block" id="services">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title white-text">Services</h2>
				<p class="standard-text white-text">We offer a versatile range of services designed to support businesses at every stage of your digital journey.</p>
			</div>
		</div>
		<div class="row container">
<!--SERVICES-1-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/services/services1.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>IT Consulting</h3>
							<p>
								We provide strategic IT consulting to help you make smarter technology decisions. We guide you toward scalable, efficient solutions that fit your business needs.
							</p>
						</div>						
					</div>
				</div>
			</article>
<!--SERVICES-2-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/services/services2.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>Project Management</h3>
							<p>
								On time, on budget, and aligned with your goals. We manage every phase of the process, from planning and coordination to execution and delivery.
							</p>
						</div>						
					</div>
				</div>
			</article>
<!--SERVICES-3-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/services/services3.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>Software Development</h3>
							<p>
								We develop custom software solutions tailored to your business requirements. Whether it’s a web app, website, blog, or landing page, we build reliable, user-friendly software that grows with you.								
							</p>
						</div>						
					</div>
				</div>
			</article>
<!--SERVICES-4-->
			<article class="col s12 l6">
				<div class="card horizontal">
					<div class="card-image card-image-horizontal">
						<img src="img/services/services4.jpg">
					</div>
					<div class="card-stacke">
						<div class="card-content">
							<h3>UX/UI Design</h3>
							<p>
								Great design is about more than just looks — it’s about creating intuitive and engaging user experiences. We offer professional graphic and UI/UX design services that combine creativity with functionality to elevate your brand and digital products.
							</p>
						</div>						
					</div>
				</div>
			</article>
		</div>		
	</section>	
<!--CONTACT SECTION-->
	<section class="contact block" id="contact">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title">Contact</h2>				
			</div>		
<!--CONTACT MAP-->
			<div class="col s12 m6 l4 hide-on-med-only">
				<div class="map transparent">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230483.82327154657!2d-49.45461058382983!3d-25.494714579875225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce35351cdb3dd%3A0x6d2f6ba5bacbe809!2sCuritiba%2C%20PR!5e0!3m2!1spt-BR!2sbr!4v1748198178315!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
<!--CONTACT SOCIAL MEDIA-->		
			<div class="col s12 m6 l4">
				<div class="redes-sociais">
					<h5 class="white-text">Social Media</h5>
					<p class="standard-text white-text">Stay updated and follow us on social media:</p>
					<div class="contact-botoes">
						<a href="#contact" class="btn btn-floating primary-color secondary-color"><i class="fa fa-linkedin"></i></a>
						<a href="#contact" class="btn btn-floating primary-color secondary-color"><i class="fa fa-github"></i></a>
						<a href="#contact" class="btn btn-floating primary-color secondary-color"><i class="fa fa-gitlab"></i></a>
						<a href="#contact" class="btn btn-floating primary-color secondary-color"><i class="fa fa-bitbucket"></i></a>
					</div><br>
					<h5 class="white-text">Contact</h5>
					<p class="standard-text white-text">
						<i class="material-icons left">mail</i>--------------------<br>
						<i class="material-icons left">phone</i>--------------------<br>
						<i class="material-icons left">stay_primary_portrait</i>--------------------
					</p>
				</div>
			</div>
<!--CONTACT US SECTION-->	
			<div class="col s12 m6 l4">
				<div class="contact-us">
					<h5 class="">Send us a message</h5>
					<p class="standard-text">Have questions or suggestions? We'd love to hear from you, your feedback is important to us.</p>
					<form method="post" action="mail/send_mail.php">
						<div class="input-field">
							<input type="text" name="name" id="name">
							<label for="name">Your name</label>
						</div>
						<div class="input-field">
							<input type="email" name="email" id="email">
							<label for="email">Your email</label>
						</div>
						<div class="input-field">
							<input type="text" name="subject" id="subject">
							<label for="subject">Subject</label>
						</div>
						<div class="input-field">
							<textarea id="message"></textarea>
							<label for="message">Message</label>
						</div>
						<button class="btn primary-color secondary-color" type="submit">Send</button>					
					</form>
				</div>
			</div>
		</div>
	</section>
<!--STATEMENTS-->
	<div class="statements primary-color">
		<div class="row container">
			<div class="col s12 center">
				<h2 class="standard-title white-text">Testimonials</h2>
			</div>
<!--STATEMENTS - NUMBER 1-->
			<div class="col s12 m4 center">
				<img src="img/svg/user.svg" class="circle responsive-image">
				<p class="white-text light">"G.COM has been a game-changer for our business. Their team helped us streamline our IT infrastructure and improve our overall efficiency. Professional, responsive, and easy to work with!"</p>
				<h5 class="white-text">Client</h5>
				<p class="white-text">
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
				</p>
			</div>
<!--STATEMENTS - NUMBER 2-->
			<div class="col s12 m4 center">
				<img src="img/svg/user.svg" class="circle responsive-image">
				<p class="white-text light">"From project management to custom software development, G.COM delivered top-quality results every time. Their attention to detail and commitment to our success truly stand out."</p>
				<h5 class="white-text">Client</h5>
				<p class="white-text">
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
				</p>
			</div>
<!--STATEMENTS - NUMBER 3-->
			<div class="col s12 m4 center">
				<img src="img/svg/user.svg" class="circle responsive-image">
				<p class="white-text light">"We loved working with the G.COM! They completely transformed our app’s user experience and branding. Creative, skilled, and always on time — highly recommended."</p>
				<h5 class="white-text">Client</h5>
				<p class="white-text">
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
					<i class="material-icons">star</i>
				</p>
			</div>
		</div>
	</div>
<!--FOOTER SECTION-->
	<footer class="footer">
		<div class="row container">
			<div class="col s12 center">
				<img src="img/svg/logo.svg">
				<p>© <span id="year"></span> G.COM Consulting. All rights reserved.</p>
			</div>
		</div>
	</footer>
<!--JQUERY-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--MATERIALIZE JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--CODE JS-->
	<script>
		$(document).ready(function(){
		//CAROUSEL
			$(".carousel.carousel-slider").carousel({
				fullWidth: true,
				indicators: true
			});
		//AUTOPLAY CAROUSEL
			function autoplay(){
				$(".carousel").carousel("next");
				setTimeout(autoplay,4500);
			}
			autoplay();
		//SIDENAV
			$(".sidenav").sidenav();
		//IMAGE ZOOM EFFECT
			$(".materialboxed").materialbox();
		//MODAL
			$(".modal").modal();
		//TABLE
			$("ul.tabs").tabs();
		});
		//MENU COLOR
		$(window).on("scroll",function(){
			if($(window).scrollTop()>100){
				$(".navbar").addClass("nav-color");
			}else{
				$(".navbar").removeClass("nav-color");
			}
		});
		//YEAR UPDATE
  		document.getElementById("year").textContent = new Date().getFullYear();
	</script>
</body>
</html>
