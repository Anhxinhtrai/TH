<?php


class MyList
{
    private $size;
    private $element;

    public function __construct($size,
                                $element = [])
    {
        $this->size = $size;
        $this->element = $element;
    }

    public function insert($index, $obj)
    {
        array_splice($this->element, $index, 0, $obj);
    }

    public function add($obj)
    {
        array_push($this->element, $obj);
    }

    public function remove($index)
    {
        array_splice($this->element, $index, 1);
    }

    public function get($index)
    {
        return $this->element[$index];
    }

    public function addAll($arr)
    {

    }

    public function indexOf($obj)
    {

    }

    public function sort()
    {
        $element = $this->element;
        $arr = [];



        return $this->element = $arr;
    }

    public function reset()
    {
        return $this->element = [];
    }


    public function isEmply()
    {
        if ($this->element == '') {
            return true;
        } else {
            return false;
        }
    }

    public function size()
    {
        return count($this->element);
    }
}