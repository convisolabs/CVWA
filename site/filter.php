<?php
	if (!function_exists('str_contains')) {
		function str_contains(string $haystack, string $needle): bool {
		    return '' === $needle || false !== strpos($haystack, $needle);
		}
	}

	$category= $_GET['category'];

	if (isset($category)) {
		if (str_contains($category, "'")) {
			if (str_contains($_SERVER["HTTP_USER_AGENT"], "sqlmap")) {
				http_response_code(500);
				die();
			}

			if (substr_count($category, "'") % 2 !== 0) {
				echo "<br><br>You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '".addslashes($category)." and STATUS = 'Ativo'' at line 1.<br><br>";
			}
						
			else {
				echo "<br><br><cite><b>Category:</b></cite><br>" . htmlspecialchars(substr($category, 0, strpos($category,"'"))) . "<br><br>";
			}        		
		}
					
		else {
			echo "<br><br><cite><b>Category:</b></cite><br>" . htmlspecialchars($category) . "<br><br>";
		}
    }
?>