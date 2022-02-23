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
  <?php include_once __DIR__ . "/static/header/header.php"; ?>

  <!-- コンテンツ -->
  <div class="flex">
    <div class="flex_txt">
      <h1>短縮URL報告</h1>
      <br>
      <p>違法性・危険性の高いと思われる短縮URL，不適切だと思われる短縮URL等の報告は以下のフォームへお願いします．</p>
      <div id="formWrap">
        <form method="post" action="./url_report_submitted">
          <table class="formTable">
            <tr>
              <th>URL</th>
              <td><input class="inTextReport" type="url" name="url" required=""></td>
            </tr>
            <tr>
              <th>報告理由<br /></th>
              <td><textarea name="reason" class="inTextArea" required=""></textarea></td>
            </tr>
          </table>
          <br>
          <p>※スパム防止のため，IPアドレスを記録しております．</p>
          <br>
          <!-- reCAPTCHA -->
          <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
          <p align="center">
            <input type="submit" value="　 送信 　" class="button"> <input type="reset" value=" リセット " class="button">
          </p>
        </form>
      </div>
    </div>
    <div class="flex_img">
      <img src="./img/url_report.svg">
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