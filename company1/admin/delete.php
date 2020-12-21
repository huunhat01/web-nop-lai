<?php
		include "../database/config.php";
		$sql = "delete from users where id = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('location:index.php?quanly=category');

?>