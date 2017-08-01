<?php

include_once "../desain/sider.php";
include_once "../desain/setcss.php";

echo "<div class=\"main\" style=\"height: 100%;\">";
include_once "../desain/header.php";

$status = "";

echo "<form name=\"rfli\" action=\"#\" method=\"get\">
            <p>
                Status:
                <select name=\"status\">
             	    <option value=\"jomblo\"> Jomblo </option>
            		<option value=\"single\"> Single </option>
            		<option value=\"complicated\"> Complicated </option>
            	</select>

             <button type=\"submit\" name=\"action\" value=\"go\"> Go </button>
             </form>";

if(isset($_GET["status"]))
	{
		$status = $_GET["status"].".php";  
		include($status);
	}

echo "</div>";

?>