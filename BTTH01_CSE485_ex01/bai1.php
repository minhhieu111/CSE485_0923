<?php

    $arrs = [2, 5, 6, 9, 2, 5, 6, 12 ,5];

    $tong = 0;
    $tich = 1;
    $hieu =  $arrs[0];
    $thuong = $arrs[0];

    for($i = 0; $i<=8; $i++){
        $tong+= $arrs[$i];
        $tich*= $arrs[$i];
    }
    
    for($i = 1; $i<=8; $i++){
        $hieu-= $arrs[$i];
        $thuong/= $arrs[$i];
    }

    echo 'Tổng các phần tử      = '.implode(' + ', $arrs).' = '. $tong.'<br>';
    echo 'Tích các phần tử      = '.implode(' - ', $arrs).' = '.$tich.'<br>';
    echo 'Hiệu các phần tử      = '.implode(' * ', $arrs).' = '.$hieu.'<br>';
    echo 'Thương các phần tử    = '.implode(' / ', $arrs).' = '.$thuong.'<br>';
?>



