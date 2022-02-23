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
            <img src="./img/done.svg">
        </div>
        <div class="flex_txt">
            <h1>短縮結果</h1>
            <br>

            <?php

            //POST元の判定
            $referer  = $_SERVER['HTTP_REFERER'];
            $host   = parse_url($referer);
            $isRefererCorrect = stristr($host['host'], "bitlinker.usay05.com") ? true : false;

            //URL作成処理関数化
            function shorten()
            {
                $keyword = $_POST['keyword'];

                $ex_url = $_POST['url'];
                $ex_url = @trim($ex_url);
                $ex_url = str_replace('"', "", $ex_url);
                $ex_url = str_replace("'", "", $ex_url);
                $ex_url = str_replace("\n", "", $ex_url);
                $ex_url = str_replace("\r", "", $ex_url);
                $ex_url = str_replace("\0", "", $ex_url);

                $shorten_url = "https://btln.ga/" . $keyword;
                $path = "../shorten/" . @basename($keyword);
                $ex_url_preg = "/^https?:\/\/[\-_!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+\.[\-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+$/u";
                $keyword_preg = "/^[一-龠ぁ-んーァ-ヶー0-9０-９a-zａ-ｚA-ZＡ-Ｚ\-_\.]+$/u";

                //Google Safe Browsing APIでURLが悪意のあるものかどうかを判定
                @$ex_url = $_POST['url'];
                $safe_browsing_api_key = "AIzaSyDcQ_L0dnDH3OAJzzC84Sg4Y9cKJydkYfg";
                $safe_browsing_api_url = "https://safebrowsing.googleapis.com/v4/threatMatches:find?key=" . $safe_browsing_api_key;
                $safe_browsing_api_body = array(
                    "client" => array(
                        "clientId" => "BitLinker",
                        "clientVersion" => "4.0.0"
                    ),
                    "threatInfo" => array(
                        "threatTypes" => array("MALWARE", "SOCIAL_ENGINEERING", "UNWANTED_SOFTWARE", "POTENTIALLY_HARMFUL_APPLICATION"),
                        "platformTypes" => array("ANY_PLATFORM"),
                        "threatEntryTypes" => array("URL"),
                        "threatEntries" => array(
                            array(
                                "url" => $ex_url
                            )
                        )
                    )
                );
                //curlでAPIにPOST
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $safe_browsing_api_url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($safe_browsing_api_body));
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json'
                ));
                $response = curl_exec($ch);
                curl_close($ch);
                //APIのレスポンスをJSON形式で解析
                $response_json = json_decode($response, true);
                //レスポンスの中身を確認
                if (isset($response_json["matches"])) {
                    $isDangerous = true;
                } else {
                    $isDangerous = false;
                }

                //キーワードが使えるか調べる・正規表現で入力文字制限
                if (file_exists($path)) {
                    echo ('<p>https://btln.ga/' . htmlspecialchars($keyword) . 'は使用できません．</p>');
                } elseif ($isDangerous == true) {
                    echo ('<p>' . $ex_url . ' は危険なURLである可能性が高いため，短縮URLを発行できません．</p>');
                } elseif (preg_match($keyword_preg, $keyword) && preg_match($ex_url_preg, $ex_url)) {
                    @mkdir($path);
                    $shorten_url = htmlspecialchars($shorten_url);
                    echo '<p>作成された短縮URLは，' . $shorten_url . 'です．</p><a href="' . $shorten_url . '" target="_blank">' . $shorten_url . '</a><br>';

                    file_put_contents(
                        $path . '/index.php',
                        '<?php header("Location: ' . $ex_url . '", true, 302); ?>' . '<meta name="robots" content="noindex, nofollow">'
                    ) or die("<p>ファイル書き込み時にエラーが発生しました。一定時間を空けてから、再度お試しください。</p>");

                    $bytes = openssl_random_pseudo_bytes(3); // パスワード用の暗号学的に安全な乱数を生成
                    $str = bin2hex($bytes);
                    $str2 = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789?!#%&@'), 0, 12);
                    $rm_key = substr(str_shuffle($str . $str2), 0, -12);

                    $data_directory = '../data/'; //URLデータ保存ディレクトリ
                    $data_file = @basename($keyword) . '.txt'; //URLデータ保存ファイル名
                    $data_path = $data_directory . $data_file; //URLデータパス
                    $ip = $_SERVER['REMOTE_ADDR']; //IPアドレス

                    //URLデータ保存ディレクトリがなければ作成
                    if (!file_exists($data_directory)) {
                        @mkdir($data_directory);
                    }

                    //ファイルデータ書き込み・保存
                    file_put_contents($data_path, $ex_url . "\n" . $shorten_url . "\n" . $rm_key . "\n" . $ip);

                    //削除キー
                    echo ('<p>削除キーは<span id="rm_key">' . $rm_key . '</span>です．</p>');

                    //URLコピーボタン
                    echo ('<br><input id="copyTarget" type="text" value="' . $shorten_url . '" readonly>');
                    echo ('<button onclick="copyToClipboard()">URLをコピー</button>');

                    //削除キーコピーボタン
                    echo ('<br><input id="copyTarget2" type="text" value="' . $rm_key . '" readonly>');
                    echo ('<button onclick="copyToClipboard2()">削除キーをコピー</button>');
                } else {
                    echo ('<p>URLを発行できません．<br>短縮前のURLが正しい形式で入力されているか確認して下さい．<br>「キーワード」に使用できる文字は，半角英数字・全角ひらがな・全角カタカナ・漢字・-（ハイフン）・_（アンダーバー）.(ドット)です．</p>');
                }
            }

            //POST元がbitlinker.usay05.comだったら短縮URLを作成
            if ($isRefererCorrect) {
                shorten();
            } else {
                echo ('<p>' . $referer . 'から短縮URLを作成しようとしています．<a href="https://bitlinker.usay05.com">https://bitlinker.usay05.com</a>から作成してください．</p>');
            }
            ?>

            <!--URLコピーボタン-->
            <script>
                function copyToClipboard() {
                    //コピー対象をJavaScript上で変数として定義する
                    var copyTarget = document.getElementById("copyTarget");

                    //コピー対象のテキストを選択する
                    copyTarget.select();

                    //選択しているテキストをクリップボードにコピーする
                    document.execCommand("Copy");

                    //コピーをお知らせする
                    alert("コピーしました！: " + copyTarget.value);
                }
            </script>

            <!--削除キーコピーボタン-->
            <script>
                function copyToClipboard2() {
                    //コピー対象をJavaScript上で変数として定義する
                    var copyTarget = document.getElementById("copyTarget2");

                    //コピー対象のテキストを選択する
                    copyTarget.select();

                    //選択しているテキストをクリップボードにコピーする
                    document.execCommand("Copy");

                    //コピーをお知らせする
                    alert("コピーしました！: " + copyTarget.value);
                }
            </script>
            <br><br>
            <a href="./delete">URLの削除はこちら</a>
            <br><br>
            <a href=" ./index"><input type="submit" value="戻る" class="button"></a>
        </div>
    </div>

    <hr>

    <div class="flex">
        <div class="flex_txt">
            <h1>「利用者様の声」をお寄せ下さい！</h1>
            <br>
            <p>BitLinkerサイトデザインの変更に伴い，「利用者様の声」ページを新たに作成しています．
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

    <!-- 広告 -->
    <!-- Moons APPS ad start -->
    <script class="moons_apps_ad_banner moons_apps_ad_auto" src="https://apps.moons14.com/ad/js/banner.js"></script>
    <!-- Moons APPS ad end -->

    <hr>

    <!-- フッター -->
    <?php include_once __DIR__ . "/static/footer/footer.php"; ?>
</body>

</html>