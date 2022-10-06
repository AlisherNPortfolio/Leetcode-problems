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
            $countBefore = strlen($s);
            $s = str_replace("()", "", $s);
            $s = str_replace("[]", "", $s);
            $s = str_replace("{}", "", $s);
        } while ($countBefore != strlen($s));
        return strlen($s) == 0;
    }
}
