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
      <img src="./img/review.svg">
    </div>
    <div class="flex_txt">
      <h1>利用者様の声</h1>
      <br>
      <blockquote>
        <p>Herokuのドメイン，ダサいから隠すのにはもってこいじゃないか！（大彗星 さん）</p>
      </blockquote>

      <blockquote>
        <p>クリック一回で短縮URLを作成でき，便利です！
          <br>
          また，他のサービスでは短縮できない1000文字を超えるようなURLも短縮できるので利便性が高く，何度も利用させて頂いています．（ActiveTK. さん）
        </p>
      </blockquote>

      <blockquote>
        <p>日本人の学生が作成・運営している，純国産サービスなので，安心して利用できています！
          <br>
          また，最近新しくなったサイトデザインもカッコ良くて気に入っています！（Knu さん）
        </p>
      </blockquote>

      <blockquote>
        <p>Androidのホーム画面にショートカットURLを置いて，アプリのように使ってます．たいへん便利♪（desertsowl さん）
        </p>
      </blockquote>

    </div>
  </div>

  <hr>

  <div class="flex">
    <div class="flex_txt">
      <h1>「利用者様の声」をお寄せ下さい！</h1>
      <br>
      <p>BitLinkerサイトデザインの変更に伴い，「利用者様の声」ページを新たに作成しました．
        <br>そこで，実際に使用して頂いている方からコメントを募集しております．
        <br>以下のフォーム（Googleフォームに飛びます）へ是非，コメントをお寄せ下さい！
        <br>ご協力，よろしくお願いします！
      </p>
      <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSfBwZ-GHi1mQDMgaxXdH_HRsQY6riuJ_sc_JXfE2mWPPxiW2A/viewform?usp=sf_link" target="_blank">「利用者様の声」募集フォーム</a></p>
    </div>
    <div class="flex_img">
      <img src="./img/notify.svg">
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