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
      <form action="./deleted" method="post">
        <input type="text" name="delete_url" class="inText" id="inText1" placeholder="削除したい短縮URLのキーワードのみ（https://btln.ga/ 以降）を入力して下さい" onblur="coloeSet(this)" onfocus="colorReset(this)" required="">
        <br><br>
        <input type="text" name="key" class="inText" id="inText2" placeholder="短縮URLの削除用キーを入力して下さい" onblur="coloeSet(this)" onfocus="colorReset(this)" required="">
        <br><br>
        <input type="submit" value="削除する！" class="button">
      </form>
      <br>
      <p>※削除したい短縮URLの <b><i>https://btln.ga/</i> 以降のみ</b>を入力して下さい．
        <br>（例： 削除したいURLが <i>https://btln.ga/bitlinker</i> の場合，入力するのは <i>bitlinker</i>）
      </p>
      <p>※削除用キーとは短縮URLの作成時に自動的に発行されたキーのことです．忘れてしまった場合は原則的に削除できません．
        <br>
        どうしても削除したいという方は管理人までご連絡下さい．
      </p>
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