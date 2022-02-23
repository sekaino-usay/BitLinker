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
      <h1>バグ・脆弱性一覧</h1>
      <br>
      <p>発見済のバグ・脆弱性一覧です．解決策等教えていただけるとありがたいです．悪用はしないようお願いします．
        <br>また，新たなバグ・脆弱性を見つけたら，<a href="./bug_report">こちら</a>へ報告して下さい．
      </p>
    </div>
    <div class="flex_img">
      <img src="./img/bug.svg">
    </div>
  </div>
  <li>
    <b>リダイレクトURLの破損</b>：「URL」に"（ダブルクォーテーション）を含むURLを入力すると，"以下のURLがリダイレクトURLに反映されない．
  </li>

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