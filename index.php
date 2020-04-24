<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="elraro">

    <title>elraro, cybersecurity consultant</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/main.css">


    <!--[if lt IE 9]><script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar">
					<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="https://www.elraro.eu/">Elraro.eu</a>
			</div>

			<div class="collapse navbar-collapse" id="main-navbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="https://www.elraro.eu/">Home</a></li>
                                        <li><a href="#">return-to-libc</a></li>
                                        <li><a href="https://elraro.eu/.well-known/security.txt">security.txt</a></li>
					<?php /* <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">TitleManager <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="https://github.com/Puharesource/TitleManager">Source code</a></li>
							<li><a href="http://spigotmc.org/resources/titlemanager.1049/">Spigot Page</a></li>
							<li><a href="https://jd.puharesource.io/titlemanager/">JavaDocs</a></li>
							<li><a href="http://puha.io/titlemanager/generator">Animation generator</a></li>
						</ul>
					</li> */ ?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
    
		<div class="text-center">
			<img src="img/me.png" style="height: 300px; width: 300px;">
			<h1>DJ Pon-3</h1>
			<h3>Cybersecurity consultant</h3>
		</div>

		<hr>

		<div class="rows">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<a href="https://www.linkedin.com/in/albertodediosbernaez/" class="btn btn-primary btn-lg btn-block"><i class="fa fa-file-text fa-5x"></i><br>Curriculum vitae</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<a href="https://github.com/elraro" class="btn btn-primary btn-lg btn-block"><i class="fa fa-github fa-5x"></i><br>GitHub</a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<script type="text/javascript" language="javascript">
				<!--
				// Email obfuscator script 2.1 by Tim Williams, University of Arizona
				// Random encryption key feature by Andrew Moulden, Site Engineering Ltd
				// This code is freeware provided these four comment lines remain intact
				// A wizard to generate this code is at http://www.jottings.com/obfuscator/
				{ coded = "VjOkO8@VjOkO8.Vy"
				  key = "94g6JMGYV0CZohs1Pu7l3SFnWEai8dNLbyIjxRQp5BkrUHwftvAq2KemXzcOTD"
				  shift=coded.length
				  link=""
				  for (i=0; i<coded.length; i++) {
					if (key.indexOf(coded.charAt(i))==-1) {
					  ltr = coded.charAt(i)
					  link += (ltr)
					}
					else {     
					  ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
					  link += (key.charAt(ltr))
					}
				  }
				document.write('<a href="mailto:'+link+'" class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope-o fa-5x"></i><br>Contact Me</a>');
				}
				//-->
				</script><noscript><a class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope-o fa-5x"></i><br>You need Javascript on to email me.</a></noscript>
			</div>
		</div>

	</div>

	<!-- JavaScripts
	-------------------------->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>

</body>
<footer class="text-center clearfix">
	<hr>
	<p>Powered by <a href="https://www.debian.org/">Debian</a>, <a href="https://www.apache.org/">Apache</a>, <a href="https://modsecurity.org/">ModSecurity</a> and <a href="https://www.docker.com/">Docker</a></p>
</footer>
</html>
