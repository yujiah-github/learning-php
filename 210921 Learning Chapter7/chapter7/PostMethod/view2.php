<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	$id = $_POST['id'];
	$pass = $_POST['pass'];
	?>

	<ul>
		<li>아이디 : <?= $id?></li>
		<li>비밀번호 : <?= $pass?></li>
	</ul>
</body>
</html>