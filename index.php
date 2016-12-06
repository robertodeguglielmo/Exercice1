<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ma Page Web PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	echo ' <h1> Hello World en PHP </h1>';
	$MonNom='Roberto';
	if($MonNom!=''){
		echo 'Mon nom est : "'.$MonNom.'"';
	}else{
		echo 'Je n\'ai pas de nom';
	}
echo '<br>';
	$MonAdresse='';
	if($MonAdresse!=''){
		echo 'Mon adresse est : "'.$MonAdresse.'"';
	}else{
		echo 'Je n\'ai pas d\'adresse';
	}
?>
</body>
</html>