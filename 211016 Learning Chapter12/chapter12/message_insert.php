<meta charset="utf-8">
<?php
$send_id = $GET["send_id"];
$rv_id = $_POST['re_id'];
$subject = $_POST['subject'];
$content = $_POST['content'];
$subject = htmlspecialchars($subject, ENT_QUOTES);
$content = htmlspecialchars($content, ENT_QUOTES);
$regist_day = date("Y-m-d (H:i)");

if(!send_id){
  echo ("
  <script>
  alert('로그인 후 이용해주세요!');
  history.go(-1)
  </script>
  ");
  exit;
}
$con = mysqli_connect("localhost", "user1", "12345", "sample");
$sql = "select * from members where id='$rv_id'";
$result = mysqli_query($con, $sql);
$num_record = mysqli_num_rows($result);

if($num_record)
{
  $sql = "insert into message(send_id, rv_id, subject, content, regist_day)";
  $sql = "values('$send_id', '$rv_id', '$subject', '$content', '$regist_day')";
  mysqli_quer($con, $sql);
} else{
  echo ("
<script>
alert('수신 아이디가 잘못 되었습니다!');
history.go(-1)
</script>
  ");
  exit;
}

mysqli_close($con);

echo "
<script>
locantion.href = 'message_box.php?mode=send';
</script>
";
?>












 ?>
