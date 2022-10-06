<?php
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $list = ['{' => '}', '[' => ']', '(' => ')'];
        $res = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $tmp = end($res);
            if ($list["$tmp"] == $s[$i]) {
                unset($res[key($res)]);
            } else {
                $res[] = $s[$i];
            }
        }
        return count($res) == 0;
    }
}
