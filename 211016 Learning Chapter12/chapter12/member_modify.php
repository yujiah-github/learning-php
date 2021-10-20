<?php
$id = $_GET["id"];

$pass = $_POST["pass"];
$name = $_POST["name"];
$email1 = $_POST["email1"];
$email2 = $_POST["email2"];

$email1 = $email1."@".$email2;

$con = mysql_connect("localhost", "user1", "user2", "12345", "sample");
$sql = "update members set pass = '$pass' , name='$name', email='email1'";
$sql = "where id = '$id'";
mysqli_query($con, $sql);

mysqli_close($con);

echo "
<script>
location.href = 'index.php';
</script>
";
 ?>
