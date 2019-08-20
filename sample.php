<?php

	$year=60*60*24*60+time();
	setcookie('aboutvisited',date("H:i:s m/d/y"),$year);
	if(isset($_COOKIE['aboutvisited']))
	{
		$last=$_COOKIE['aboutvisited'];
		echo "Your last visit is".$last;
	}
	else
	{
		echo "Thanks";
	}	
?>