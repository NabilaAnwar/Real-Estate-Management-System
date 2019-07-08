<?php

session_start();

if(isset($_POST['submit'])){

	include 'dbh.inc.php';

	$aid=mysqli_real_escape_string($conn, $_POST['ad_aid']);
	$apwd=mysqli_real_escape_string($conn, $_POST['ad_pwd']);
	if(empty($aid) || empty($apwd)){ 
		header("Location:../admin.php?login=empty");
		exit();
	}
	else{
		$sql="SELECT * FROM admin WHERE ad_aid='$aid' OR ad_email='$aid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location:../admin.php?login=error1");
			//alert("error");
			exit();
		}
		else{
			if($row=mysqli_fetch_assoc($result)){
					$_SESSION['a_id']=$row['ad_id'];
					$_SESSION['a_first']=$row['ad_first'];
					$_SESSION['a_last']=$row['ad_last'];
					$_SESSION['a_email']=$row['ad_email'];
					$_SESSION['a_aid']=$row['ad_aid'];
					header("Location:../insert.php?login=success");
					exit();
			}
		}
	}
}
	else{
		header("Location:../admin.php?login=error3");
		//alert("error");
		exit();
}

?>