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
    <div class="flex_img">
      <img src="./img/develop.svg">
    </div>
    <div class="flex_txt">
      <h1>BitLinker Adsense</h1>
      <br>
      <p>BitLinker AdsenseはBitLinker, 及び U_SAYが運営するサービスの最新情報・広告を配信します．
        <br>ご自身のWebサイト等に貼っていただけると非常にありがたいです．
        <br>本広告は非営利目的のバナー広告です．
      </p>
      <textarea class="form-control row-5" onfocus="this.select();" spellcheck="false">&lt;!-- BitLinker Adsense--&gt;
&lt;script class="bitlinker_ad" src="https://bitlinker.usay05.com/ad/banner.js"&gt;&lt;/script&gt;</textarea>
      <br>
      <p>このような広告が表示されます．</p>
      <script class="bitlinker_ad" src="https://bitlinker.usay05.com/ad/banner.js"></script>
    </div>
  </div>

  <hr>

  <div class="flex">
    <div class="flex_txt">
      <h1>一緒に開発する</h1>
      <br>
      <p>BitLinkerを一緒に開発してくれるメンバーを探しています！
        <br>応募資格は，「HTML・CSS，PHPがある程度分かる人，やる気がある人」です．
        <br>興味がある方は，以下のURLから，Discordサーバーまでお越しください！<i>F12</i>
        <script type="text/javascript">
          console.log("一緒にBitLinkerを開発しよう！ → https://discord.gg/ZxWKCYyaPM")
        </script>
        <!-- https://discord.gg/ZxWKCYyaPM -->
      </p>
    </div>
    <div class="flex_img">
      <img src="./img/join_us.svg">
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