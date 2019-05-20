<?php

/**
* Генерация чисел. При условии достаточной памяти
**/
function randUniqueGenerator (): array 
    {
        $min = 20000;
        $max = 2000000;
        $total = 1000 * 1000;
        $result = $temp = array();
        while (sizeof($temp) < $total) {
            $temp[mt_rand($min, $max)] = true;
        };
        $temp = array_keys($temp);
        for ($i=0; $i<1000; $i++) {
            for ($b = 0; $b < 1000; $b++) {
                $result[$i][$b] = array_shift($temp);
            }
        }
        return $result;
    }
