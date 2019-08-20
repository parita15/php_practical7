<?php
  $itm=60*60*24*60+time();
  setcookie('lastvisit',date("G:i:s m/d/y"),$itm);
  if(isset($_COOKIE['lastvisit']))
  {
    $visit=$_COOKIE['lastvisit'];
    echo "Your last visited date : ".$visit;
  }
  else
  {
    echo "no cookie";
  }
  ?>