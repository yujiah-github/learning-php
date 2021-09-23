<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	$content = $_POST['content'];
	?>

	<ul>
		<li>글 내용 : <?= $content?></li>
	</ul>
</body>
</html>