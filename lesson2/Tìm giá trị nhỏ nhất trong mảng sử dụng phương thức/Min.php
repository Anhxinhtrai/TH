<?php


class Min
{
    public $arr;

    public function __construct($arr)
    {
        $this->arr =$arr;
    }

    public function getMin()
    {
        $min = $this->arr[0];
        $index = 0;
        for ($i = 1 ; $i < count($this->arr) ; $i ++){
            if($min > $this->arr[$i]){
                $min = $this->arr[$i];
                $index = $i;
            }
        }
        return $index;
    }
}