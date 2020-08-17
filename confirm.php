<?php 
$title = '確認画面 - 神奈川 ホームページ制作';
$name = isset( $_POST[ 'name' ] ) ? $_POST[ 'name' ] : NULL;
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : NULL;
$subject = isset( $_POST[ 'subject' ] ) ? $_POST[ 'subject' ] : NULL;
$body = isset( $_POST[ 'body' ] ) ? $_POST[ 'body' ] : NULL;
$company = isset( $_POST[ 'company' ] ) ? $_POST[ 'company' ] : NULL;
$service = isset( $_POST[ '相談したいサービス' ] ) ? $_POST[ '相談したいサービス' ] : NULL;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?=$title?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="沖縄,ホームページ制作,web広告,webデザイン,那覇,ダーウィン,darwin"/>
    <meta name="description" content="企業のビジネス課題をIT・Webで解決。700社以上の制作実績。創業17年。官公庁から中小企業まで幅広い業種のWeb制作の実績。"/>
    <!-- Google Tag Manager -->
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="image/home-icon.png" type="image/png">

</head>

<body>
  <div id="head">
   <h1>CONTACT - postmail</h1>
  </div>
<div id="body">
<h2>お問い合わせフォーム &gt; 確認画面</h2>
<ul>
<li>以下の内容でよろしければ「送信する」ボタンを押して下さい。</li>
</ul>
<div id="form-tbl">
<table id="form">

<tbody><tr>
  <th>会社名</th>
  <td><?=$company?></td>
</tr>

<tr>
  <th>お名前</th>
  <td><?=$name?></td>
</tr>

<tr>
  <th>メールアドレス</th>
  <td><?=$email?></td>
</tr>

<tr>
  <th>相談したいサービス</th>
  <td><?=$service?></td>
</tr> 

<tr>
  <th>お問い合わせ内容</th>
  <td><?=$body?></td>
</tr>

<!-- <tr>
  <th>個人情報保護方針の同意</th>
  <td>ok</td>
</tr> -->

</tbody></table>

<script type="text/javascript">
      var submitted = false;
      var currentURL = window.location.href;
    </script>
    
    <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='thanks.html';}"></iframe>

    <form action="https://docs.google.com/forms/u/3/d/e/1FAIpQLSdsCNIBURdkPGpJAeqN_WbyoJ7RmKImTuPsP-YACgynZL202A/formResponse" target="hidden_iframe" onsubmit="submitted=true;">
      <input type="hidden" name="entry.1923065908" value="<?=$company?>">
      <input type="hidden" name="entry.289745675" value="<?=$name?>">
      <input type="hidden" name="entry.1541720662" value="<?=$email?>">
      <input type="hidden" name="entry.1794318570" value="<?=$body?>">
      
    

    
      
      
      <script src="js/main.js"></script>
      <script src="script.js"></script>

<p class="btn">
	<input type="button" value="< 前に戻る" onclick="history.back()">
	<input type="submit" value="送信する >">
</p>
</form>
</div>
</div>
</body>

