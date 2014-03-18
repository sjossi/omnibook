<html>
	<head>
		<meta http-equiv="content-type" content="text/html"; charset=utf-8>
		<title>Omnibook v0.1</title>
		<link rel="stylesheet" type="text/css" href="omnibook.css">
		<script src="pagedown/Markdown.Converter.js"></script>
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
		<div class=markdown id="md-content">
			<?php 
				$cur = $content->getCurrentFile();
				include "$cur";
			?>
		</div> 
		</div>
		</div>

		<div class=navigation> 
		<?php 
			$content->getNavigation();
			print("<br>");
		?>
		</div>
		</div>

	</div>
	<div class=footer>
		No Copyrights, just stuff
	</div>
	<script src="pagedown/Markdown.Converter.js">
	<script>
		var converter = new Markdown.Converter();
		console.log("yada");
		var pre = document.getElementById('md-content').innerHTML;
		console.log(pre);
		document.getElementById('md-content').innerHTML = converter.makeHtml($pre);
	</script>
</body>
</html>
