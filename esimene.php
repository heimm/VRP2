<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Esimene HTML!</title>
	<link rel="stylesheet" type="text/css" href="stiil.css">
	<script src="myscript.js"></script>
	</head>
	
</head>
<body onload="startTime()">

<div id="txt"></div>

<h1>HTML pealkiri</h1>
<p>Võrgurakendused I</p>
<?php
	//See siin on PHP kood...
	include("counter.php");
	include("mysql.php");
	?>
  <p></p><img src="pilt.jpg" alt="HTML pilt" /></p>
<p> See on pilt sõnast HTML :)</p>


</body>
</html>