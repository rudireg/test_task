<?php

/**
* Генерация чисел. При условии достаточной памяти
**/
function randUniqueGenerator (): array
    {
        $min = 20000;
        $max = 2000000;
        $total = 1000 * 1000;
        $temp = array();
        while (sizeof($temp) < $total) {
            $temp[mt_rand($min, $max)] = true;
        };
        return array_chunk(array_keys($temp),1000);
    }
