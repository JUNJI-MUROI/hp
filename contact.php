<?php 
$title = 'ご相談・お問い合わせ - 神奈川 ホームページ制作';
require 'header.php'?>
 
 <div class="wrapper contact">
    <h2>CONTACT</h2>
    <h3>ご相談・お問合せ</h3>
    <p>お問い合わせは下記メールフォームからご連絡ください。</p>
  <form action="">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <th>会社名</th>
        <td><input name="会社名" type="text" tabindex="1" accesskey="1"></td>
      </tr>
      <tr>
        <th>お名前</th>
        <td><input name="_お名前" type="text" tabindex="2" accesskey="2" required=""><span class="hissu"> [必須]</span></td>
      </tr>
     
      <tr>
        <th>メールアドレス</th>
        <td><input name="_email" type="text" tabindex="4" accesskey="4" required=""><span class="hissu"> [必須]</span></td>
      </tr>
     
      <tr>
        <th>相談したいサービス</th>
        <td><span class="radio"><input name="相談したいサービス" type="radio" value="課題解決Web制作" checked="">Web制作</span>　<span class="radio"><input name="相談したいサービス" type="radio" value="Webシステム開発">Webシステム開発</span>　<span class="radio"><input name="相談したいサービス" type="radio" value="Web広告の運用">Web広告の運用</span>　<span class="radio"><input name="相談したいサービス" type="radio" value="その他">その他</span></td>
      </tr>

      <tr>
        <th>ご質問やご要望をご記入ください</th>
        <td><textarea name="_お問い合わせ内容" cols="" rows="6" tabindex="5" accesskey="5" required=""></textarea><span class="hissu"> [必須]</span></td>
      </tr>
      
    </tbody></table>
    <input name="" type="submit" value="確認画面に進む" class="dwcf-form">
  </form>
  </div>

<?php require 'footer.php'?>