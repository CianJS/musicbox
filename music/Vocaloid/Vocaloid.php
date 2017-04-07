<html>
	<head>
		<title>Vocaloid</title>
		<meta charset="utf-8">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type='text/javascript' src='/js/jquery.hoverIntent.minified.js'></script>
	<script type='text/javascript' src='/js/jquery.dcmegamenu.1.2.js'></script>
	<script type="text/javascript">
	$(document).ready(function($){
		$('#mega-menu').dcMegaMenu({
			rowItems: '3',
			speed: 'fast'
		});
	});
	</script>

	<style type="text/css">
	audio{
    background: repeat-x 0 -80px;
    width: 100%;
    height: 40px;
    position: relative;
    font: normal 13px Arial, sans-serif;
    margin-bottom: 24px;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="/css/boostrap.re-adjust.css" />
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	</head>
	<body>
<div class="main" style="width:960px;  margin: 0 auto;">
    <?php
    require("../../menu.html");
    ?>

    <?php
    require("./Miku/Miku.php");
    ?>

    <?php
    require("./Luka/Luka.php");
    ?>
</div>
		<!-- ./Megurine Luka.php -->
	</body>
</html>