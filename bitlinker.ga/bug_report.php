<!DOCTYPE html>
<html>

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
  <link rel="shortcut icon" href="./icon.ico">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7363201401295069" crossorigin="anonymous"></script>
  <script data-ad-client="ca-pub-7363201401295069" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="utf-8">
  <title>BitLinker - 登録不要のカスタム短縮URL作成サービス｜Bug Report</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./main.css">
  <link rel="stylesheet" href="./input.css">
  <link rel="stylesheet" href="./submit.css">
  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="./form.css">
  <script type="text/javascript" src="./input.js"></script>
  <!-- OGP設定 -->
  <meta property="og:title" content="BitLinker - 登録不要のカスタム短縮URL作成サービス">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.bitlinker.ga">
  <meta property="og:image" content="https://www.bitlinker.ga/logo.png">
  <meta property="og:site_name" content="BitLinker - 登録不要のカスタム短縮URL作成サービス">
  <meta property="og:description" content="完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができます。SSL（https://~）対応＆全データ日本国内にあるサーバーで厳重に保管されているため、安心してお使いいただけます！">
  <!-- Twitterカード -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@sekaino_usay">
  <meta property="og:url" content="https://www.bitlinker.ga">
  <meta property="og:title" content="BitLinker - 登録不要のカスタム短縮URL作成サービス">
  <meta property="og:description" content="完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができます。SSL（https://~）対応＆全データ日本国内にあるサーバーで厳重に保管されているため、安心してお使いいただけます！">
  <meta property="og:image" content="https://www.bitlinker.ga/logo.png">
  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LdnL_4bAAAAAF_bfxYIKefhX5wgvcdfg6mtd9D7"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute("6LdnL_4bAAAAAF_bfxYIKefhX5wgvcdfg6mtd9D7", {
        action: "sent"
      }).then(function(token) {
        var recaptchaResponse = document.getElementById("recaptchaResponse");
        recaptchaResponse.value = token;
      });
    });
  </script>
</head>

<body>
  <!-- アクセス解析 -->
  <script src="//accaii.com/bitlinker/script.js" async></script>
  <noscript><img src="//accaii.com/bitlinker/script?guid=on"></noscript>
  <br><br>
  <a href="./">
    <img src="./logo.png" width="30%">
  </a>
  <br>
  <!-- ヘッダー広告 -->
  <script type="text/javascript">
    var adstir_vars = {
      ver: "4.0",
      app_id: "MEDIA-2d2036b1",
      ad_spot: 1,
      center: false
    };
  </script>
  <script type="text/javascript" src="https://js.ad-stir.com/js/adstir.js"></script>
  <br>
  <!-- Moons APPS ad start -->
  <script class="moons_apps_ad_banner moons_apps_ad_auto" src="https://apps.moons14.com/ad/js/banner.js"></script>
  <!-- Moons APPS ad end -->
  <br>
  <hr class="line" />
  <br>
  <h2>バグ・脆弱性報告</h2>
  <p>バグ・脆弱性の報告は以下のフォームへお願いします。</p>
  <div id="formWrap">
    <p>下記フォームに必要事項を入力後、送信してください。</p>
    <br>
    <form method="post" action="./bug_report_submitted.php">
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
          <th>報告内容<br /></th>
          <td><textarea name="content" class="inTextArea" required=""></textarea></td>
        </tr>
      </table>
      <br>
      <p>※スパム防止のため、IPアドレスを記録しております。</p>
      <br>
      <!-- reCAPTCHA -->
      <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
      <p align="center">
        <input type="submit" value="　 送信 　" class="button"> <input type="reset" value=" リセット " class="button">
      </p>
    </form>
  </div>
  <br>
  <br>
  <hr class="line" />
  <br><br>
  <form action="https://www.btln.ga/shorten.php" method="post">
    <input type="url" name="url" class="inText" id="inText1" placeholder="短縮したいURLを入力してください" onblur="coloeSet(this)" onfocus="colorReset(this)" required="">
    <br>
    <br>
    <br>
    <input type="text" name="keyword" pattern="^[一-龠ぁ-んーァ-ヶー0-9０-９a-zａ-ｚA-ZＡ-Ｚ\-_\.]+$" title="使用できる文字は、半角英数字・全角ひらがな・全角カタカナ・漢字・-（ハイフン）・_（アンダーバー）.(ドット)です。" class="inText" id="inText2" placeholder="キーワードを入力してください" onblur="coloeSet(this)"
      onfocus="colorReset(this)" required="">
    <br>
    <br>
    <input type="submit" value="短縮する！" class="button">
    <br>
    <br>
  </form>
  <!-- フッター広告 -->
  <script type="text/javascript">
    var adstir_vars = {
      ver: "4.0",
      app_id: "MEDIA-2d2036b1",
      ad_spot: 2,
      center: false
    };
  </script>
  <script type="text/javascript" src="https://js.ad-stir.com/js/adstir.js"></script>
  <br>
  <!-- Moons APPS ad start -->
  <script class="moons_apps_ad_banner moons_apps_ad_auto" src="https://apps.moons14.com/ad/js/banner.js"></script>
  <!-- Moons APPS ad end -->
  <br>
  <!-- フッター -->
  <footer>
    <ul class="footer-menu">
      <br>
      <li><a href="./index.php">ホーム</a> ｜</li>
      <li><a href="./about.php">BitLinkerについて</a> ｜</li>
      <li><a href="./terms.php">利用規約</a> ｜</li>
      <li><a href="./disclaimer.php">免責事項</a> ｜</li>
      <li><a href="./privacy_policy.php">プライバシーポリシー</a> ｜</li>
      <li><a href="./bug_report.php">バグ・脆弱性報告</a> ｜</li>
      <li><a href="./url_report.php">短縮URL報告</a> ｜</li>
      <li><a href="./contact.php">お問い合わせ</a></li>
      <br>
      <p>© 2021 <a href="https://profile.u-say.ga/" target="_blank">U_SAY</a> All Rights Reserved.</p>
      <br>
    </ul>
  </footer>
</body>

</html>
