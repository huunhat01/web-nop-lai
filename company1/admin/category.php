<?php
		include "../database/config.php";
	 	$sql = "select * from users";
	 	$result = mysqli_query($con,$sql);
?>

<div class="infor">
	<table  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
		<tr>
			<th width="50px;">STT</th>
			<th width="100px;">NAME</th>
			<th width="300px;">EMAIL</th>
			<th width="100px;">PHONE</th>
			<th width="100px;">GENDER</th>
			<th width="100px;"><a href="index.php?quanly=add">Thêm</a></th>
		</tr>
	    <?php while ($row = mysqli_fetch_array($result)) {
				# code...
		?> --> -->
			<tr>
				<td><?php echo $row['id']; ?> </td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td>
					<a href="index.php?quanly=edit&id=<?php echo $row['id']; ?>">Sửa</a>
					<a onclick="return window.confirm('Bạn muốn xóa không');" 
					href="index.php?quanly=delete&id=<?php echo $row['id']; ?>">Xóa</a>
			</tr>
		<?php } ?>	
	</table>
</div>