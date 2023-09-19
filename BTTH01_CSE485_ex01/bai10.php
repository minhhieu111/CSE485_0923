<?php
    $arrs = ['1','b','c','d'];


    for($i=0;$i<count($arrs);$i++)
    {
        $arrs[$i] = strtoupper($arrs[$i]);
    }
    print_r($arrs);
    echo "<br>";
?>

<?php
    $arrs = ['a', 0, 'null', 'false'];


    for($i=0;$i<count($arrs);$i++)
    {
        $arrs[$i] = strtoupper($arrs[$i]);
    }
    print_r($arrs)
?>