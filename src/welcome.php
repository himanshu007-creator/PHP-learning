<?php
session_start();
session_regenerate_id();
if(!$_SESSION["uid"])
{
	header("location:second.php");
}
else{
	echo "Hello ".$_SESSION["uid"];
}
?>