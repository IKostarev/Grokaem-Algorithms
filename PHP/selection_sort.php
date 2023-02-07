<?php

class SelectionSort
{
    public function findSmallest(Array $arr)
    {
        $smallest = $arr[0];
        $smallest_index = 0;

        for ($i = 1; $i <= count($arr); $i++) {
            if ($arr[$i] < $smallest) {
                $smallest = $arr[$i];
                $smallest_index = $i;
            }
        }

        return $smallest_index;
    }

    public function selectionSort(Array $arr)
    {
        $newArr = [];

        for ($i = 1; $i <= count($arr); $i++) {
            $smallest = findSmallest($arr);
            $newArr = array_push(array_pop($smallest));
        }

        return $newArr;
    }
}