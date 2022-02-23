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
      <h1>短縮URLを削除する！</h1>
      <br>
      <?php
      //受け取りデータ
      $keyword = $_POST['delete_url'];
      $key = $_POST['key'];
      $url = 'https://btln.ga/' . $keyword;

      $data_directory = '../data/'; //URLデータが保存してあるディレクトリ
      $data_file = $keyword . '.txt'; //URLデータファイル名
      $data_path = $data_directory . $data_file; //URLデータファイルのパス
      $del_file = '../shorten/' . $keyword . '/index.php';
      $del_directory = '../shorten/' . $keyword;

      //ファイルデータ読み込み
      $data = file($data_path, FILE_IGNORE_NEW_LINES);
      $ex_url_data = $data[0];
      $shorten_url_data = $data[1];
      $key_data = $data[2];

      if (empty($keyword) || empty($key)) {
        echo "<p>削除したいURLのキーワード，削除キーが入力されているか確認して下さい．</p>"; //未入力
      } elseif (!file_exists($data_path)) {
        echo "<p>URLが存在しません．削除したいURLが存在するか，もう一度ご確認ください．</p>"; //ファイルが存在するか確認
      } elseif ($url === $shorten_url_data && $key === $key_data) {
        unlink($del_file);
        rmdir($del_directory);
        unlink($data_path);
        echo "<p>URLは正常に削除されました！またのご利用をお待ちしています！</p>"; //削除
      } else {
        echo "<p>URLが存在しないか，削除キーが違います．</p>";
      }
      ?>
    </div>
    <div class="flex_img">
      <img src="./img/delete.svg">
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