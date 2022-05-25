<?php
	if (isset($_GET["search"])) {
		$regex = "#</*(applet|link|style|script|iframe|frame|frameset|html|body|title|div|p|form|br)[^>]*>#i";
	    
        $search = str_replace("<", "&lt;", $_GET["search"]);
		$search = str_replace(">", "&gt;", $search);
		$search = urldecode($search);
						
        if(preg_match($regex, $search)) {
				echo "error, try again";
		}
	    
        else {
			$search = urldecode($search);
				echo "You searched for: $search";
		}
    }
?>