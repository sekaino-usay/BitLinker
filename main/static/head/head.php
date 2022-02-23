<?php

include __DIR__ . "./../functions/logger.php";
logging();

?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス</title>
<link rel="shortcut icon" href="./img/icon.ico">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<!-- CSS -->
<link rel="stylesheet" href="./css/main.css">
<link rel="stylesheet" href="./css/input.css">
<link rel="stylesheet" href="./css/submit.css">
<link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/form.css">
<link rel="stylesheet" href="./css/review.css">
<link rel="stylesheet" href="./css/recaptcha.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JavaScript -->
<script type="text/javascript" src="./js/input.js"></script>
<script type="text/javascript" src="./js/main-ui.js"></script>
<script type="text/javascript" src="./js/backfade.js"></script>
<script type="text/javascript" src="./js/target-blank.js"></script>
<!-- Googleフォント -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
<!-- Googleアドセンス -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7363201401295069" crossorigin="anonymous"></script>
<script data-ad-client="ca-pub-7363201401295069" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- OGP設定 -->
<meta property="og:title" content="BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bitlinker.usay05.com">
<meta property="og:image" content="https://bitlinker.usay05.com/img/ogp_1200x630.png">
<meta property="og:site_name" content="BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス">
<meta property="og:description" content="完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができます．SSL（https://~）対応＆全データ日本国内にあるサーバーで厳重に保管されているため，安心してお使いいただけます！">
<!-- Twitterカード -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@BitLinker_jp">
<meta name="twitter:url" content="https://bitlinker.usay05.com">
<meta name="twitter:domain" content="bitlinker.usay05.com">
<meta name="twitter:title" content="BitLinker - 登録不要・純国産のカスタム短縮URL作成サービス">
<meta name="twitter:description" content="完全無料＆登録不要で btln.ga/ から始まるカスタム短縮URLを作成することができます．SSL（https://~）対応＆全データ日本国内にあるサーバーで厳重に保管されているため，安心してお使いいただけます！">
<meta name="twitter:image" content="https://bitlinker.usay05.com/img/ogp_1200x630.png">
<!-- Ko-fi support -->
<script src='https://storage.ko-fi.com/cdn/scripts/overlay-widget.js'></script>
<script>
  kofiWidgetOverlay.draw('sekaino_usay', {
    'type': 'floating-chat',
    'floating-chat.donateButton.text': 'Support Me',
    'floating-chat.donateButton.background-color': '#83cc97',
    'floating-chat.donateButton.text-color': '#fff'
  });
</script>
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