<?php
	session_start();

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link ref="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main">
			<div class="login">
				
				<img src="images/hm.jpg" width="100%" height="300px">
				<br><br><br>

				<?php
						echo '<form action="include/admin_login.inc.php" method="POST">
							<input type="text" name="ad_aid" placeholder="Username/e-mail"/>
							<input type="password" name="ad_pwd" placeholder="password"/>
							<button type="submit" name="submit">Login</button>
							</form>';
				?>

			</div>
			
		</div>
	</nav>
</header>