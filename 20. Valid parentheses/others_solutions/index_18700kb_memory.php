<?php
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        do {
            $s = str_replace(["{}", "[]", "()"], ["", "", ""], $s, $count);
        } while ($count != 0);
        return empty($s);
    }
}
