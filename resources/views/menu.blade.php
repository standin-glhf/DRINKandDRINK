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

		<div class="menu-page-top">
			<div class="container">
				<div class="menu-page-top-row">
					<div class="menu-page-top-text">
						МЕНЮ
					</div>
				</div>
			</div>
		</div>

		<div class="menu-page-body">
			<div class="shooters menu-page-section">
				<div class="menu-page-subtitle">SHOOTERS</div>
				<hr class="dividing-line">
				<div class="menu-page-container">
					<div class="menu-page-row">
						<div class="menu-page-dish">B52</div>
						<div class="menu-page-price">60</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">SCOTCH FRUIT</div>
						<div class="menu-page-price">95</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">BLACKBERRY</div>
						<div class="menu-page-price">70</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">JON SNOW</div>
						<div class="menu-page-price">75</div>
					</div>
				</div>
			</div>
			<div class="beer menu-page-section">
				<div class="menu-page-subtitle">BEER 0.5</div>
				<hr class="dividing-line">
				<div class="menu-page-container">
					<div class="menu-page-row">
						<div class="menu-page-dish">WHEAT ALE</div>
						<div class="menu-page-price">40</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">MILK STOUT</div>
						<div class="menu-page-price">50</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">IPA</div>
						<div class="menu-page-price">95</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">DUNKEL</div>
						<div class="menu-page-price">45</div>
					</div>
				</div>
			</div>
		</div>

			<div class="snacks menu-page-section">
				<div class="menu-page-subtitle">SNACKS</div>
				<hr class="dividing-line">
				<div class="menu-page-container">
					<div class="menu-page-row">
						<div class="menu-page-dish">HRINKY</div>
						<div class="menu-page-price">50</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">KABANOSY</div>
						<div class="menu-page-price">75</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">OSELEDETS</div>
						<div class="menu-page-price">80</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">KNEDLI</div>
						<div class="menu-page-price">50</div>
					</div>
					<div class="menu-page-row">
						<div class="menu-page-dish">MEAT BOWL</div>
						<div class="menu-page-price">95</div>
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
