
<?php
	require "./database/config.php";
	if (isset($_POST["btn_submit"])) {
		$email = $_POST["email"];
		$password = $_POST["password"];

		// if ($email == "" || $password ==""){
		// 	echo "Vui lòng nhập đầy đủ thông tin!";
		// }else{
			$sql = "select * from users where email = '$email' and password = '$password' ";

			$result = mysqli_query($con,$sql);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows==0) {
				echo '<script>alert("Tài khoản hoặc mật khẩu không đúng!"); window.location="login.php";</script>';
			}else{
            	echo '<script>alert("Đăng nhập thành công!"); window.location="./admin/index.php";</script>';
			}
	// 	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	
</head>
<body>
	<div class="login-page">
	  	<div class="form">
		      <form class="login-form" method="POST" action="login.php">
		      <input type="text" name="email" placeholder="Email" required/>
		      <input type="password" name="password" placeholder="Mật khẩu" required/>
		      <button name="btn_submit">Login</button>
		      <!-- <p><a href="user.php">Create an account</a></p></br> -->
		      <!-- <p><a href="../home.php">Thoát</a></p> -->
		    </form>
	  	</div>
	</div>
</body>
</html>