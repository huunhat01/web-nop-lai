<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	
</head>
<body>
	<div class="wrapper">
		<div class="USERS">
			<div class="users__title"style="display: flex;justify-content: flex-end;align-items: center;">
				<span> <a href="./login.php">Đăng Xuất</a></span>
			</div>
		</div>

		<div class="header">ADMIN USERS</div>
		<div class="main">
			<div class="menu">
				<ul>
					<li><a href="index.php?quanly=category">Danh sách</a></li>
				</ul>
			</div>	
			<div class="content"><?php include "content.php"; ?></div>
		</div>
	</div>
</body>
</html>