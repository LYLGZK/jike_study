<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if(count($nums) < 2){
            return 1;
        }
        $count = count($nums);
        $i = 0;
        for($j = 1;$j < $count;$j++){
            if($nums[$i] != $nums[$j]){
                $i ++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i + 1;
    }
}