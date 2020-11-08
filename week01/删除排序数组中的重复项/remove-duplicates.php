<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        // 使用PHP内置的数组函数 删除重复元素
        // $nums = array_keys(array_flip($nums));
        // return count($nums);


        // 双指针解法
        $length = count($nums);
        if ($nums == null || $length == 0) {
            return 0;
        }

        $p = 0;
        $q = 1;
        while ($q < $length) {
            if ($nums[$p] != $nums[$q]) {
                if ($q - $p > 1) {
                    $nums[$p+1] = $nums[$q];
                }
                $p++;
            }
            $q++;
        }
        return $p+1;
    }
}
