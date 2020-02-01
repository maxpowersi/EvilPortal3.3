<?php 

	$showtarget = false;
	if (isset($_GET["target"]))
	{
		$target = $_GET["target"];
		$showtarget = true;
	}
?>
<html>
<head>
	<title>Success connection!</title> </head>
<body>
	<h1>Now you are connected to internet!</h1>
	<?php if ($showtarget)  {?>
		<h3>Click here to continue to <a href="<?php echo $target ?>"><?php echo $target ?></a> </h3>
	<?php }?>
</body>
</html>