<!-- 생략 -->
<link rel="stylesheet" type="text/css" href=".css/common.css">
<link rel="stylesheet" type="text/css" href=".css/login.css">
<script type="text/javascript" src="./js/login.js"></script>
<!-- 생략-->
<div id="login_box">
  <div id="login_title">
    <span>로그인<span>
    </div>
    <div id="login_form">
      <form name="login_form" method="post" action="login.php">
        <ul>
          <li><input type="text" name="id" placeholder="아이디"></li>
          <li><input type="password" id="pass" name="pass"
            placeholder="비밀번호" ></li>
          </ul>
          <div id="login_btn">
            <a href="#"><img src=".img/login.png" onclick="check_input()"></a>
          </div>
        </form>
      </div><!-- login_form-->
    </div><!-- login_box-->
    <!--생략-->
