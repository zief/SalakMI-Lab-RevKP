<?php

if(isset($_GET["status"]))
	{
		$status = $_GET["status"];  
		include($status);
	}

?>