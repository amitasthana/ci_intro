<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php $title = "about section";
				 echo $title; ?></title>

	
</head>
<body>
<div id="container">
	<h1><a href="../../index.php/site/home">home</a> || <a href="../../index.php/site/about">about</a> </h1>
	<h1>Welcome to Codeiginiter</h1>
		<h2>Add</h2>
		<p><?php echo $var1."+".$var2."=".$addTotal; ?></p>
		<h2>Sub</h2>
		<p><?php echo $var1."-".$var2."=".$subTotal; ?></p>
	</div>

</body>
</html>