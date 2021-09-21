<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
$table1 = $_GET['table'];
$table2 = $_GET['type'];


if($table == "free")
$board_title = "자유게시판";

elseif($table == "download")
$board_title = "자료실";

elseif($table == "notice")
$board_title = "공지사항";

else
$board_title = "문의 게시판";

?>
<h3>
	<?php

echo ">>".$board_title."|".$type_title;

	?>	
</h3>

</body>
</html>	