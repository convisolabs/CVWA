<!DOCTYPE html>
<html>
	<head>
		<title>Gladius InfoSec Blog</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="images/favicon.png"/>

	</head>
<body>
	<div id=header>
		<div id="logo">
			<h1>Gladius<span class="white"> InfoSec Blog<span> <h1>
		</div>
		<div id="menu">
			<a href="index.php"><b>Home</b></a>
			<a href="index.php"><b>News</b></a>
			<a href="index.php"><b>Tutorials</b></a>
			<a href="about.php"><b>About</b></a>
		</div>
	</div>
	<img class="absolute" src="images/gladius.png"> 
	<div id="area">
	<?php
		if (!function_exists('str_contains')) {
    			function str_contains(string $haystack, string $needle): bool {
        		return '' === $needle || false !== strpos($haystack, $needle);
    		}
		}
		$category= $_GET['category'];
		if (isset($category)){
    		if (str_contains($category, "'")) {
				if(str_contains($_SERVER["HTTP_USER_AGENT"], "sqlmap")){
					http_response_code(500);
					die();
				}
				if(substr_count($category, "'") % 2 !== 0){
					echo "<br><br>You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '".addslashes($category)." and STATUS = 'Ativo'' at line 1.<br><br>";
				}else{
					echo "<br><br><cite><b>Category:</b></cite><br>" . htmlspecialchars(substr($category, 0, strpos($category,"'"))) . "<br><br>";
				}        		
    		}else{
        		echo "<br><br><cite><b>Category:</b></cite><br>" . htmlspecialchars($category) . "<br><br>";
    		}
		}
	?>
		<div id="posts-area">
			<div class="posts">
				<h2>Exploiting XSS Attacks</h2>
				<span class="post-date">Published on 19 Mar 2021</span>
				<img width="620px" src="images/js.png">
				<p>
					 Vivamus libero sapien, ultrices pellentesque euismod et, ultricies a nunc. Curabitur ut ullamcorper orci. Etiam quis odio mauris. Curabitur a interdum ligula. Fusce nec rhoncus ex. Donec posuere mollis mi ac porttitor. Nam sit amet molestie lorem. Sed iaculis nunc ligula, faucibus tincidunt odio egestas eu. 
				</p>
				<a href="index.php">Keep Reading</a>
			</div>
			<div class="posts">
				<h2>#whoami</h2>
				<span class="post-date">Published on 18 Mar 2021</span>
				<img width="620px" src="images/gladius2.jpg">
				<p>
					 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim bibendum odio, eget rutrum leo volutpat nec. Duis commodo justo vel lectus aliquam, id vehicula erat laoreet. Sed eu libero quam. Duis nec iaculis lorem. Sed suscipit et mi eget varius. Sed a convallis dui.
				</p>
				<a href="/about.php">Keep Reading</a>
			</div>
		</div>
		<div id="side-area">
			<div class="side-content">	
				<form class="example" action="index.php">
 					<input type="text" placeholder="Search.." name="search">
  					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			<br>
			<?php
                if (isset($_GET["search"])) {
                    $bad_regex = "#</*(applet|link|style|script|iframe|frame|frameset|html|body|title|div|p|form)[^>]*>#i";
					$search = str_replace("<", "&lt;", $_GET["search"]);
					$search = str_replace(">", "&gt;", $search);
					$search = urldecode($search);
                    if(preg_match($bad_regex, $search))
                    {
                        echo "error, try again";
                    }
					else {
                        $search = urldecode($search);
                        echo "You searched for: $search <br>";
                    }
                }
            ?>
			</div>
			<div class="side-content">
				<h3>Recent Posts</h3>

				<div class="side-posts">
					<p>Exploiting XSS Attacks</p>
					<a href="index.php">Read More</a>
				</div>
				
				<div class="side-posts" style="border-bottom: none;">
					<p>#whoami</p>
					<a href="/about.php">Read More</a>
				</div>
			</div>
			<div class="side-content">
				<h3>Categories</h3>
				<a href="?category=webhacking">Web Hacking</a><br>
				<a href="?category=mobilehacking">Mobile Hacking</a><br>
				<a href="?category=osint">OSINT</a><br>
				<a href="?category=tools">Tools</a><br>
				<a href="?category=privesc">PrivEsc</a>
				</div>
			</div>
		</div>
		<div id="baseboard">
			<b>All rights reserved</b>
		</div>
	</div>
</body>
 OPAAAA 
