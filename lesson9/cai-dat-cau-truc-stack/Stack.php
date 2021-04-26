<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 3)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!');
        }
    }

    public function pop()
    {
        if ($this->isEmpty()){
            throw new RunTimeException('Stack is empty!');
        }else{
            array_shift($this->stack);
    }

    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}