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
      <h1>お問い合わせ</h1>
      <br>
      <p>お問い合わせは以下のフォームへお願いします．
        <br>必要事項を入力後，送信してください．
      </p>
      <div id="formWrap">
        <form method="post" action="./contact_submitted">
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
              <th>お問い合わせ内容<br /></th>
              <td><textarea name="content" class="inTextArea" required=""></textarea></td>
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
      <img src="./img/contact.svg">
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