<?php
class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $target
    * @return Integer[]
    */
    function twoSum($nums, $target) {
        // 哈希表思路：寻找$target - $nums[$i]
        $map = [];
        for ($i = 0; $i < count($nums); $i++) {
            // 当前数字与目标的差
            $diff = $target - $nums[$i];
            if (isset($map[$diff])) {
                return [$map[$diff], $i];
            }
            $map[$nums[$i]] = $i;
        }
    }
}


