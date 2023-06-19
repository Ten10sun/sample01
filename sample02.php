<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample01</title>
</head>

<body>
  <?php
  $today = new DateTime();
  $today->setTimezone(new DateTimeZone('Asia/Tokyo'));
  echo '現在は' . $today->format('G時 i分 s秒') . 'です' . '<br>';

  date_default_timezone_set('Asia/Tokyo');
  echo 'now', date('G時 i分 s秒') . 'だよ' , "\n";

  $today = new DateTime();
  echo '現在は' . $today->format('G時 i分 s秒') . 'です' . '<br>';

  $hello = 'こんにちは';
  echo '$hello';
  echo "$hello" . '<br>';
  
  $week_name = ['日', '月','火','水','木','金','土',];

  $week = date('w');
  echo "今日は$week_name[$week]曜日です";

  $fruits = [
    'apple' => 'リンゴ', 
    'grapes' => 'ブドウ', 
    'lemon' => 'レモン', 
    'tomato' => 'トマト', 
    'peach' => '桃'
    ]
  ?>

<dl>
  <?php foreach ($fruits as $english => $japanese): ?>
  <dt><?php echo $english; ?></dt>
  <dd><?php echo $japanese; ?></dd>
<?php endforeach; ?>
</dl>

<?php 
$time = date('G');

if ($time < 18): ?>
  <p>※営業時間外です</p>
<?php else: ?>
  <p>ようこそ</p>
<?php endif; ?>

3000円から１００円引きは、
<?php echo round(100/3000 * 100, 2); ?>％引きです。

</body>

</html>