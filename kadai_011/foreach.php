<?php
$datas = [
    '名前'=>'玉ねぎ',
    '値段'=>200,
    '産地'=>'北海道'
    ];

foreach ($datas as $key => $data) {
    echo "{$key} : {$data} <br>";
}
?>