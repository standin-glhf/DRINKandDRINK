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

			<!-- Body -->
			<div class="about-us-body">
				<div class="container about-us-row">
				<div class="about-us-title">ПРО НАС</div>
					<p class="about-us-text">
						DRINK&DRINK пропонує справжні та незабутні враження для відвідувачів. Ми відкрилися в Кременчуці у 2021 році. У нашому барі ви зможете насолодитися найкращою атмосферою. DRINK&DRINK — те, що вам потрібно, незалежно від вашого настрою. У нас є різноманітні сорти крафтового пива. Ми знаходимось у географічному центрі міста, тож дістатися сюди вам буде зручно звідусіль. Комфорт клієнта та його вдоволеність візитом — наші найвищі пріоритети!
					</p>
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
