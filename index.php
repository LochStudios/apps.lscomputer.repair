<?php
  if ($handle = opendir('/var/www/html/apps')) {
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != "..") {
        $thelist .= '<a href="apps/'.$file.'">'.$file.'</a><br>
                    ';
      }
    }
    closedir($handle);
  }
?>
<html>
	<head>
		<title>LSPCR - Apps</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="https://cdn.lochstudios.host/static/logos/lochstudios/favicon.png" type="image/x-icon"/>
    	<link rel="shortcut icon" href="https://cdn.lochstudios.host/static/logos/lochstudios/favicon.png" type="image/x-icon"/>
		<link rel="stylesheet" href="../assets/css/main.css" />
    	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>LS Computer Repair</h1>
								<p>Apps server!<br></p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#info">Information's</a></li>
								<li><a href="#download">Download Now</a></li>
							</ul>
						</nav>
					</header>
				<!-- Main -->
					<div id="main">
						<!-- Intro -->
							<article id="info">
								<h2 class="major">Information</h2>
								<p>This is the apps server for LS Computer Repair, this server holds all the apps that we use on a daily.</p>
							</article>
            
            <!-- Download -->
							<article id="download">
								<h2 class="major">Download!</h2>
                            <p>How To Download: <a href="https://ninite.com/" target="_blank">Ninite</a><br>
                    				Please click what you would like to download.</p>
                            			<p><a href="https://898.tv/6z5phth/" target="_blank">TeamViewer Download</a><br>
						   <?php echo $thelist; ?></p>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Copyright 2020. All Rights Reserved LochStudios!
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
