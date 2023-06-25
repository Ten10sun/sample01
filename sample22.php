<?php
$age = '２３';
$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
  echo $age . '才です';
} else {
  echo '※　数字入力';
}