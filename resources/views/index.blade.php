@extends('layouts.app')

<!DOCTYPE html>
<html lang="uk">

<head>
	<title>DRINK&amp;DRINK</title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<!-- Header -->
		<div class="pad">
			<header>
				<div class="container">
					<div class="header-row">
						<a href="index" class="logo">
						DRINK<br>&nbsp;&nbsp;&amp;DRINK
						</a>
						<nav class="header-menu">
							<div class="nav-toggle"><span></span></div>
							<ul class="header-list">
								<li><a href="menu" class="header-link">МЕНЮ</a></li>
								<li><a href="index#DJs" class="header-link">DJs</a></li>
								<li><a href="about-us" class="header-link">ПРО НАС</a></li>
								<li><a href="index#contacts" class="header-link">КОНТАКТИ</a></li>
							</ul>
						</nav>
					</div>	
				</div>
			</header>
		</div>

		@section('messages')
            @parent
        @endsection

		<!-- Top of the landing -->
		<div class="landing-top">
			<div class="container">
				<div class="landing-top-row">
					<div class="landing-top-text-body">
						<div class="landing-top-text">
							НАЙКРАЩИЙ БАР ЗА ОСТАННЮ ТИСЯЧУ РОКІВ
						</div>
						<div id=DJs class="landing-top-button-body"> <!-- id is for inner-page #navigation -->
							<a href="menu" class="landing-top-button">
								<span class="button-text">МЕНЮ</span>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- DJs -->
		<div class='DJs'>
			<div class="container">
						<div class="DJs-bar-title-row">
							<div class="DJs-bar-title">НАШІ DJs</div>
						</div>

						<div class="DJs-body">

							<div class="DJs-item">
								<div class="DJs-bar-subtitle-row">
									<div class="DJs-bar-subtitle">DJ ALOK</div>
								</div>
								<img src="img/DJ-Alok.png" alt="DJ Alok">
							</div>

							<div class="DJs-item">
								<div class="DJs-bar-subtitle-row">
									<div class="DJs-bar-subtitle">DJ SOLOMUN</div>
								</div>
								<img src="img/DJ-Solomun.png" alt="DJ Solomun">
							</div>

						</div>

			</div>
		</div>

		<!-- Contacts -->
		<div id="contacts" class="contacts">
			<div class="container">
			
				<div class="contacts-title-row">
					<div class="contacts-title">КОНТАКТИ</div>
				</div>

				<div class="contacts-body-row">
					
					<div class="contacts-column">
						<div class="contacts-fb">
							<a href="https://www.facebook.com"><img src="img/contacts-fb.png" alt="facebook logo"></a>
						</div>
						<div class="contacts-insta">
							<a href="https://www.instagram.com"><img src="img/contacts-insta.png" alt="instagram logo"></a>
						</div>
					</div>

						<div class="contacts-column">
							<div class="contacts-map-row">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2612.757655687615!2d33.426704651603444!3d49.09124537920961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d752ff7584d4e9%3A0xd2697822a23dd7fc!2z0L_RgNC-0YHQv9C10LrRgiDQodCy0L7QsdC-0LTQuCwgNTUsINCa0YDQtdC80LXQvdGH0YPQuiwg0J_QvtC70YLQsNCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDM5NjAw!5e0!3m2!1suk!2sua!4v1619304396407!5m2!1suk!2sua" width="422" height="422" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>

						<div class="contacts-column">
							<div class="contacts-phone">
								<div class="contacts-phone-title">ТЕЛЕФОН</div>
								<div class="contacts-phone-body">
									<div class="phone-img-container">
										<img src="img/contacts-phone.png" alt="phone logo">
									</div>
									<div class="contacts-phone-text">+38 (045) 661-52-87</div>
								</div>
							</div>
							<div class="contacts-address">
								<div class="contacts-address-title">АДРЕСА</div>
								<div class="contacts-address-body">
									<div class="contacts-address-text">пр. Свободи, 55, Кременчук</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>

        @section('footer')
            @parent
        @endsection

	</div>
	@section('scripts')
        @parent
    @endsection
</body>
</html>