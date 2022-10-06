<?php
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $definer = [
            "(" => [
                "part" => ")",
                "close" => false
            ],
            ")" => [
                "part" => "(",
                "close" => true
            ],
            "{" => [
                "part" => "}",
                "close" => false
            ],
            "}" => [
                "part" => "{",
                "close" => true
            ],
            "[" => [
                "part" => "]",
                "close" => false
            ],
            "]" => [
                "part" => "[",
                "close" => true
            ]
        ];

        $p = str_split($s);
        $stack = [];

        for ($i = 0; $i < count($p); $i++) {

            if ($i == 0) {
                $stack[] = $p[$i];
            } elseif ($stack[count($stack) - 1] == $definer[$p[$i]]['part'] && $definer[$p[$i]]['close']) {
                array_pop($stack);
            } else {
                array_push($stack, $p[$i]);
            }
        }

        return count($stack) == 0;
    }
}
