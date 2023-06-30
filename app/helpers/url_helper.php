<?php 
	// simple page redirect
	function redirect($file)
{
    header("location:" . URLROOT . $file);
}

	
?>