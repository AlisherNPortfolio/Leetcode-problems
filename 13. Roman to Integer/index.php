<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        $romans = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];

        $result = 0;
        $s = str_split($s);

        for ($i = 0; $i < count($s); $i++) {
            if ($romans[$s[$i]] >= $romans[$s[$i + 1]]) {
                $result += $romans[$s[$i]];
            } else {
                $result += ($romans[$s[$i + 1]] - $romans[$s[$i]]);
                $i++;
            }
        }

        return $result;
    }
}
