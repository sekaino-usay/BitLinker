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
      <h1>免責事項</h1>
      <br>
      <p>開発途中であるため，予告なくサービスの終了・短縮URLの利用停止を行う可能性があります．ご了承ください．
        <br>
        また，システムの脆弱性等が発見される可能性もあります．早期発見・早期修正をするよう心がけますが，万が一脆弱性等を発見した場合は，<a href="./bug_report">バグ・脆弱性報告フォーム</a>へお知らせください．
        <br>
        本サービスを利用する上で生じた障害・損失について，一切責任を負いません．
      </p>
    </div>
    <div class="flex_img">
      <img src="./img/disclaimer.svg">
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