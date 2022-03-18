<hr id="bigdiv">

<div class="flex" id="shorten_form">
  <div class="flex_img">
    <img src="./img/shorten.svg">
  </div>
  <div class="flex_txt">
    <h1>URLを短縮する！</h1>
    <br>
    <form action="./shorten" method="post">
      <p>短縮したいURLを入力してください</p>
      <input type="url" name="url" class="inText" id="inText1" placeholder="短縮したいURLを入力してください" onblur="coloeSet(this)" onfocus="colorReset(this)" required="">
      <br><br>
      <p>キーワードを入力してください</p>
      <input type="text" name="keyword" pattern="^[一-龠ぁ-んーァ-ヶー0-9０-９a-zａ-ｚA-ZＡ-Ｚ\-_\.]+$" title="使用できる文字は，半角英数字・全角ひらがな・全角カタカナ・漢字・-（ハイフン）・_（アンダーバー）.(ドット)です．" class="inText" id="inText2" placeholder="キーワードを入力してください" onblur="coloeSet(this)" onfocus="colorReset(this)" required="">
      <br><br>
      <input type="submit" value="短縮する！" class="button">
    </form>
    <br>
    <p>※「短縮する！」ボタンを押した時点で，<a href="./terms">利用規約</a>, <a href="./disclaimer">免責事項</a>, <a href="./privacy_policy">プライバシーポリシー</a>に同意したものとみなします．</p>
  </div>
</div>