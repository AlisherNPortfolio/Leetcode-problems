<?php
class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {

        if ($l1->val == 0 && $l2->val == 0 && $l1->next == null && $l2->next == null) {
            return self::createList([0]);
        }

        $memory = 0;
        $result = "";

        while (isset($l1->val) || isset($l2->val)) {
            $sum = (int)($l1->val ?? 0) + (int)($l2->val ?? 0);

            if ($memory > 0) {
                $sum += $memory;
                $memory = 0;
            }

            if ($sum >= 10) {
                $memory = (int)($sum / 10);
            }

            $result .= $sum % 10;

            $l1 = $l1->next;
            $l2 = $l2->next;
        }

        if ($memory > 0) {
            $result .= $memory;
            $memory = null;
        }

        $result = str_split($result);

        return self::createList($result);
    }

    public static function createList($arr)
    {
        $node = null;
        $arr = array_reverse($arr);
        for ($i = 0; $i < count($arr); $i++) {
            $newNode = new ListNode($arr[$i]);
            if ($node) {
                $newNode->next = $node;
            }

            $node = $newNode;
        }

        return $node;
    }
}



$l1 = [0, 8, 8, 8, 8, 2, 9, 3, 1, 1];
$l2 = [0, 9, 1, 5, 5, 5, 1, 1, 6];


$l1 = Solution::createList($l1);
$l2 = Solution::createList($l2);

$solution = new Solution;
$test = $solution->addTwoNumbers($l1, $l2);
