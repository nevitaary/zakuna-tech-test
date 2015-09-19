<?php

	include("class_switchNumber.php");

	
	// Post from ajax, so
	if(isset($_POST["n1"]) && isset($_POST["n2"])){
	
		$switch = new SwitchNumber($_POST["n1"],$_POST["n2"]);
		echo "<br /> a is $switch->a <br /><br /> b is $switch->b";
	
	}
	
	
?>
