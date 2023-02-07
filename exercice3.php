<?php

class SortArray
{
    public function Sort(array $array)
    {
        sort($array);
        foreach ($array as $key => $val) {
            echo "[" . $key . "] => " . $val . "\n";
        }
    }
}


$array = new SortArray();

$array->sort(array(11, -2, 4, 35, 0, 8, -9));
