<?php

class Binary_search
{
    public function binary_search(Array $list, $item)
    {
        $low = 0;
        $high = count($list) - 1;

        while ($low <= $high) {
            $mid = ($low + $high) / 2;
            
            if ($list[$mid] == $item) {
                return $mid;
            }

            if ($list[$mid] > $item) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return null;
    }
}