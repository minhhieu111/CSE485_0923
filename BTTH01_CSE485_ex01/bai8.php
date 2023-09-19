<?php
    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
    $longest = '';
    $maxLength = 0;
    $shortest = '';
    $minLength = PHP_INT_MAX;

    for ($i = 0; $i < count($array); $i++) {
        $length = strlen($array[$i]);

        if ($length > $maxLength) {
            $longest = $array[$i];
            $maxLength = $length;
        }

        if ($length < $minLength) {
            $shortest = $array[$i];
            $minLength = $length;
        }
    }

    echo "Chuỗi dài nhất là ".$longest.", có độ dài $maxLength ký tự.<br>";
    echo "Chuỗi ngắn nhất là ".$shortest.", có độ dài $minLength ký tự.";
?>