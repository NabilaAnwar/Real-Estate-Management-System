<?php

session_start();

if(isset($_POST['submit'])){

	include 'dbh.inc.php';

	$uid=mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);

	if(empty($uid) || empty($pwd)){ 
		header("Location:../home.php?login=empty");
		//alert("error");
		exit();
	}
	else{
		$sql="SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location:../home.php?login=error");
			//alert("error");
			exit();
		}
		else{
			if($row=mysqli_fetch_assoc($result)){
				$hashedPwdCheck=password_verify($pwd,$row['user_pwd']);
				if($hashedPwdCheck==false){
					header("Location:../home.php?login=error");
					//echo alert("error");
					exit();
				}
				elseif($hashedPwdCheck==true){
					$_SESSION['u_id']=$row['user_id'];
					$_SESSION['u_first']=$row['user_first'];
					$_SESSION['u_last']=$row['user_last'];
					$_SESSION['u_email']=$row['user_email'];
					$_SESSION['u_uid']=$row['user_uid'];
					header("Location:../main.php?login=success");
					exit();
				}
			}
		}
	}
}
	else{
		header("Location:../home.php?login=error");
		//alert("error");
		exit();
}

?>