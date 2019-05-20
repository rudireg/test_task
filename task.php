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


/**
* Проверка баланса строки
**/
public function isBalanced(string $input)
    {
        $pairs = [
           '{' => '}',
           '[' => ']',
           '(' => ')'
        ];
        $opens = [];
        $symbols = str_split($input);
        foreach ($symbols AS $s) {
           if (in_array($s, array_keys($pairs))) {
               $opens[] = $s;
               continue;
           }
           if (empty($opens)) return false;
           $o = array_pop($opens);
           if ($s !== $pairs[$o]) return false;
        };
        return empty($lemmas);
    }
