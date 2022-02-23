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
      <h1>サービス内容</h1>
      <br>
      <p>完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができる，純国産のサービスです．
        <br>短縮URLは，通常の形式（http://~）はもちろん，SSL（https://~）, World Wide Web（http(s)://www.~）に対応しています．
        <br>全データ日本国内にあるサーバーで厳重に保管されています．
        <br>Google Safe BrowsingによるURLの安全/危険判定機能も付いているため，安心してお使いいただけます！
      </p>
    </div>
    <div class="flex_img">
      <img src="./img/overview.svg">
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