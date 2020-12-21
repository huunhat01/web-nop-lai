<?php
	 $id = $_REQUEST['id'];
	 include "../database/config.php";
	 $sql    = "select * from users where id = $id ";
	 $result = mysqli_query($con,$sql);
	 $row    = mysqli_fetch_assoc($result);

		if(isset($_POST['btn_edit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$phone = $_POST['phone'];
			$gender = $_POST['role'];
			$id = $_POST['id'];
			$sql = "update users set name='$name', email='$email', password='$password', phone='$phone', gender='$gender' WHERE id = $id ";
			mysqli_query($con, $sql);
			echo '<script>alert("EDIT thành công"); window.location="index.php?quanly=category";</script>';
		}
?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">SỬA USER</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Name</td>
				<input type="hidden" name="id" value="<?php echo $row['id'];?>" require>
				<td><input type="text" name="name" placeholder="Name" value="<?php echo $row['name'];?>" require></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="text" name ="email" placeholder="Email" value="<?php echo $row['email'];?>" require></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password" value="<?php echo $row['password'];?>" require></td>
			</tr>

			<tr>
				<td>Phone</td>
				<td><input type="text" name="phone" placeholder="Phone" value="<?php echo $row['phone'];?>" require></td>
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
				<td><input type="submit" name="btn_edit" value="EDIT" ></td>
			</tr>
		</table>
	</form> 
</div>