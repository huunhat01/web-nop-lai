<?php
	include "../database/config.php";
	
	if(isset($_POST['btn_add'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$gender = $_POST['role'];
	  $sql = "select * from users where email = '$email'";
	  $result = mysqli_query($con, $sql);
	  $row = mysqli_num_rows($result);
	  if($row > 0){
		echo '<script>alert("Tài khoản đã tồn tại!"); window.location="add.php";</script>';
	  }else{
		$sql = "insert into users (name, email, password, phone, gender) values('$name', '$email', '$password', '$phone', '$gender')";
		mysqli_query($con, $sql);
		echo '<script>alert("ADD thành công"); window.location="index.php?quanly=category";</script>';
	  }
	}
?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm nội dung</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" placeholder="Name" require></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="text" name ="email" placeholder="Email" require></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password" require></td>
			</tr>

			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" placeholder="Phone" require></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td>
                  <select name="role">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="btn_add" value="ADD" ></td>
			</tr>
		</table>
	</form> 
</div>