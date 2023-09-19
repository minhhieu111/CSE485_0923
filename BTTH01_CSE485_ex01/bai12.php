<?php
    $num = [
        'key1' => 12,
        'key2' => 30,
        'key3' => 4,
        'key4' => -123,
        'key5' => 1234,
        'key6' => -12565,
    ];
    echo 'Phần tử đầu tiên '. $num['key1'] ."<br>";
    echo 'Phần tử cuối cùng '. $num['key6'] ."<br>";
    echo 'Số lớn nhất '. max($num) ."<br>";
    echo 'Số lớn nhất '. min($num) ."<br>";
    echo 'Tổng mảng '.array_sum($num).'<br>';
    sort($num);
    echo var_export($num) .'<br>';
    rsort($num);
    echo var_export($num) .'<br>'; 
    ksort($num);
    echo var_export($num) .'<br>';
    krsort($num);
    echo var_export($num) .'<br>';

?>       