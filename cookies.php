<?php
	if(!isset($_COOKIE['firstvisited']))
	{
		setcookie('firstvisited',time(),time()+60*60*24*365,"/"," ");
	}
?>
<html>
<head>
	<title>First Visited Cookie Page</title>
</head>
<body>
	<h2>First Visited Cookie Page</h2>
	<?php
		if(isset($_COOKIE['firstvisited']))
		{
			$elapsedTime=time()-$_COOKIE['firstvisited'];
			$elapsedTimeMinutes=(int)($elapsedTime/60);
			$elapsedTimeSeconds=$elapsedTime%60;
		
	?>
	<p>You First Visited This Page<?php echo $elapsedTimeMinutes ?>minute<?php echo $elapsedTimeSeconds!=1?"s" :" "?> and <?php echo $elapsedTimeSeconds ?>Second<?php $elapsedTimeSeconds!=1?"s" :" "?>ago</p>
	<?php } else {?>
		<p>Its your first visited Welcome</p>
	<?php } ?>
</body>
</html>