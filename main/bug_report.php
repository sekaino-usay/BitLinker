<!DOCTYPE html>
<html>

<head>
  <?php include_once __DIR__ . "/static/head/head.php"; ?>
</head>

<body>
  <!-- アクセス解析 -->
  <script src="https://accaii.com/bitlinker/script.js" async></script>
  <noscript><img src="https://accaii.com/bitlinker/script?guid=on"></noscript>

  <!-- ナビゲーション -->
  <?php include __DIR__ . "/static/header/header.php"; ?>

  <!-- コンテンツ -->
  <div class="flex">
    <div class="flex_txt">
      <h1>バグ・脆弱性報告</h1>
      <br>
      <p>発見済のバグ・脆弱性一覧は<a href="./bug">こちら</a>です．解決策等教えていただけるとありがたいです．</p>
      <p>バグ・脆弱性等が無いよう，サービスの開発には万全を期しておりますが，万が一新たなバグ・脆弱性を見つけたら，以下のフォームへ報告して下さい．</p>
      <div id="formWrap">
        <form method="post" action="./bug_report_submitted">
          <table class="formTable">
            <tr>
              <th>お名前</th>
              <td><input class="inTextReport" type="text" name="name" required=""></td>
            </tr>
            <tr>
              <th>メールアドレス</th>
              <td><input class="inTextReport" type="email" name="email" required=""></td>
            </tr>
            <tr>
              <th>報告内容<br /></th>
              <td><textarea name="content" class="inTextArea" required=""></textarea></td>
            </tr>
          </table>
          <br>
          <p>※スパム防止のため，IPアドレスを記録しております．</p>
          <!-- reCAPTCHA -->
          <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
          <p align="center">
            <input type="submit" value="　 送信 　" class="button"> <input type="reset" value=" クリア " class="button">
          </p>
        </form>
      </div>
    </div>
    <div class="flex_img">
      <img src="./img/bug_fix.svg">
    </div>
  </div>

  <hr>

  <?php include_once __DIR__ . "/static/shorten_form/shorten_form.php"; ?>

  <!-- 広告 -->
  <!-- Moons APPS ad start -->
  <script class="moons_apps_ad_banner moons_apps_ad_auto" src="https://apps.moons14.com/ad/js/banner.js"></script>
  <!-- Moons APPS ad end -->

  <hr>

  <!-- フッター -->
  <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>

</html>