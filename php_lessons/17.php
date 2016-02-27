<?php

//組み込み関数

$x = 5.6;
// echo ceil($x);//切り上げ
// echo floor($x);//切り捨て
// echo round($x);//四捨五入
// echo rand(1,10);

$s1 = "hello";
$s2 = "ねこ";

// echo strlen($s1);//文字数数える
// echo mb_strlen($s2);//日本語文字数
// printf("%s - %s - %.3f", $s1, $s2, $x);

$colors = ["red","blue","pink"];
echo count($colors);
echo implode("@", $colors);
