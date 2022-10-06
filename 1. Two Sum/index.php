<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

    function twoSum($nums, $target)
    {
        $k = null;
        $x = null;
        $y = null;
        $new_nums = $nums;
        for ($i = 0; $i < count($nums); $i++) {
            $k = $new_nums[$i];
            unset($new_nums[$i]);
            $x = $target - $k;
            if (in_array($x, $new_nums)) {
                $y = array_search($x, $new_nums);
                $k = $i;
                break;
            }
        }
        return [$k, $y];
    }
}

(new Solution())->twoSum([2, 7, 11, 15], 9);
