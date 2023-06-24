<?php
$json_sample = [
    "title" => "Jsonサンプル",
    'itmems' => [
      'リンゴ',
      'みかん'
    ]
    ];

    $json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
    echo $json;
    file_put_contents('json_sample.json', $json);