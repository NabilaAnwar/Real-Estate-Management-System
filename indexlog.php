<?php
	include_once 'headerlog.php';
?>
	<div class="banner">
		<img src="images/hm.jpg" width="100%" height="590px">
	</div>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<section class="main-container">
	<div class="main-wrapper">
		<?php
			if(isset($_SESSION['u_id'])){
				//echo "You are logged in!";
			}
		?>
	</div>
</section>

</body>
</html>

<?php
	include_once 'footerlog.php';
?>