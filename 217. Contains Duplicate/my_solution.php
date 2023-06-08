
<?php

class Solution
{
    /**
     * @param int[] $nums
     *
     * @return Boolean
     */
    public function containsDuplicate($nums): bool
    {
        return count($nums) != count(array_unique($nums));
    }
}

$nums = [2, 14, 18, 22, 22];

(new Solution())->containsDuplicate($nums);
