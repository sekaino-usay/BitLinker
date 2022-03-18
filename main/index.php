<!DOCTYPE html>
<html>

<head>
  <?php include_once __DIR__ . "/static/head/head.php"; ?>
  <script src="./js/hidden.js"></script>
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
      <p>完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができる，純国産のサービスです．</p>
      <p>SSL（https://~）対応で，全データ日本国内にあるサーバーで厳重に保管されております．</p>
      <p>Google Safe BrowsingによるURLの安全/危険判定機能も付いているため，安心してお使いいただけます！</p>
    </div>
    <div class="flex_img">
      <img src="./img/overview.svg">
    </div>
  </div>

  <hr>

  <div class="flex">
    <div class="flex_img">
      <img src="./img/how_to_use.svg">
    </div>
    <div class="flex_txt">
      <h1>使い方</h1>
      <br>
      <p>短縮前のURL，<i>btln.ga/</i> に続けたいキーワードを入力し，「短縮する！」ボタンを押してください．</p>
      <p>「キーワード」に使用できる文字は，<b>半角英数字・全角ひらがな・全角カタカナ・漢字・-（ハイフン）・_（アンダーバー）.(ドット)</b>です．</p>
    </div>
  </div>

  <hr>

  <div class="flex">
    <div class="flex_txt">
      <h1>バグ・脆弱性</h1>
      <br>
      <p>発見済のバグ・脆弱性一覧は<a href="./bug">こちら</a>です．解決策等教えていただけるとありがたいです．
        <br>また，新たなバグ・脆弱性を見つけたら，<a href="./bug_report">こちら</a>へ報告して下さい．
      </p>
    </div>
    <div class="flex_img">
      <img src="./img/bug_fix.svg">
    </div>
  </div>

  <hr>

  <?php include_once __DIR__ . "/static/shorten_form/shorten_form.php"; ?>

  <hr>

  <!-- 広告 -->
  <!-- Moons APPS ad start -->
  <script class="moons_apps_ad_banner moons_apps_ad_auto" src="https://apps.moons14.com/ad/js/banner.js"></script>
  <!-- Moons APPS ad end -->
  <br>
  <!-- BitLinker Ad Start -->
  <script class="bitlinker_ad" src="https://bitlinker.usay05.com/ad/banner.js"></script>
  <!-- BitLinker Ad End -->

  <hr>

  <!-- フッター -->
  <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>

</html>