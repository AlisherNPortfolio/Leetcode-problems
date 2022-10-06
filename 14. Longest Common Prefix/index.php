<?php
class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $arrayLength = count($strs);
        $str = $strs[0];

        if ($arrayLength === 1) {
            return $str;
        }

        $count = strlen($strs[0]);
        $result = [];



        for ($i = 1; $i <= $count; $i++) {
            $j = 1;
            $cutter = -1 * $i;
            $result = [];

            while ($j < $arrayLength) {
                $hasElement = strpos($strs[$j++], $str) === 0;
                array_push($result, $hasElement);
            }

            if (!in_array(false, $result)) {
                $result = $str;
                break;
            }

            $str = substr($strs[0], 0, $cutter);
        }

        return !is_array($result) ? $result : "";
    }
}
