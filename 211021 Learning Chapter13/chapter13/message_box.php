<!-- 생략 -->
<section>
  <div id="main_img_bar">
    <img src="./img/main_img.png">
  </div>
  <div id="message_box">
    <h3>
      <?php
      if (isset($_GET["page"]))
      $page = $_GET["page"];
      else
      $page = 1;
      $mode = $_GET["mode"];
      if($mode=="send")
      echo "송신 쪽지함 > 목록 보기";
      else
      echo "수신 쪽지함 > 목록 보기";
      ?>
    </h3>
    <ul id="message">
      <li>
        <span class="col1">번호</span>
        <span class="col2">제목</span>
        <span class="col3">
          <?php
          if ($mode == "send")
          echo "받은이";
          else
          echo "보낸이";
           ?>
         </span>
         <span class="col4">등록일</span>
       </li>
       <?php
