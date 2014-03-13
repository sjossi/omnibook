<html>
	<head>
		<meta http-equiv="content-type" content="text/html"; charset=utf-8>
		<title>Omnibook v0.1</title>
		<link rel="stylesheet" type="text/css" href="omnibook.css">
	</head>
<body>
<?php
	require 'omnibook.php';
?>
	<div class=container>
		<div class=header>
			<div id=title>Omnibook</div></ br>
			<div id=toolbar>Home / 
					Compile / 
					<a href=index.php?dir=doc&file=welcome>
					Welcome File</a>
			</div>
		</div>

		<div class=main>
		<div class=wrapper>
		<div class=content> 
		<div class=markdown>
			<?php 
				$cur = $content->getCurrentFile();
				include "$cur";
			?>
		</div> 
		</div>
		</div>

		<div class=navigation> 
		<?php 
			getNavigation();
		?>
		</div>
		</div>

	</div>
	<div class=footer>
		No Copyrights, just stuff
	</div>
</body>
</html>
