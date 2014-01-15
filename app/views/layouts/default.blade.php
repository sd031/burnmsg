<!DOCTYPE HTML>
<html>
	<head>
		<title>Burnmsg - A self-destructing, encryted message app</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
        <script>
            @if (Request::segment(1))
                var prefix = '../assets/css/style';
            @else
                var prefix = 'assets/css/style';
            @endif
        </script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <noscript>
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        </noscript>
        <!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
    <body class="homepage">
		<!-- Wrapper-->
			<div id="wrapper">
                <header>
                    <h2>Burnmsg</h2>
                </header>

				<!-- Nav -->
                    <nav id="nav">
                        <a href="{{ URL::to('/') }}" class="fa fa-home"><span>Home</span></a>
                        <a href="#message" class="fa fa-envelope active"><span>Message</span></a>
						<a href="#github" class="fa fa-github"><span>Github</span></a>
						<a href="#twitter" class="fa fa-twitter"><span>Twitter</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Message -->
                            <article id="message" class="panel">
                                @yield('content')
							</article>

						<!-- Github -->
                            <article id="github" class="panel">
                                <header>
									<h1>Fork Me on Github</h1>
                                    <a href="https://www.github.com/ezynda3/burnmsg.git" target="_blank">
                                        http://www.github.com/ezynda3/burnmsg.git
                                    </a>
                                </header>
                            </article>

						<!-- Twitter -->
                            <article id="twitter" class="panel">
                                <header>
									<h1>Follow Me on Twitter</h1>
                                    <a href="https://www.twitter.com/edzynda" target="_blank">
                                        http://www.twitter.com/edzynda
                                    </a>
                                </header>
                            </article>


					</div>

				<!-- Footer -->
					<div id="footer">
						<ul class="links">
							<li>&copy; Burnmsg</li>
							<li>Code : <a href="http://edzynda.com/">Ed Zynda</a></li>
							<li>Design : <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

	</body>
</html>
