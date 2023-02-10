<?php

class Recursion
{
    public function look_for_key(Array $box)
    {
        for($item = 0; $item <= count($box); $item++) {
            if ($this->is_a_box) {
                look_for_key($item);
            } else if ($this->is_a_key) {
                echo "You found key!";
            }
        }
    }
}