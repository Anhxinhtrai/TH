<?php

class Queue
{
    private $name = null;
    private $code = null;


    public function isEmpty()
    {
        if ($this->name == null) {
            return true;
        } else {
            return false;
        }

    }

    public function enqueue($value)
    {
        $oldBack = $this->code;
        $this->code = new Node();
        $this->code->value = $value;
        if ($this->isEmpty()) {
            $this->name = $this->code;
        } else {
            $oldBack->next = $this->code;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->name->value;
        $this->name = $this->name->next;
        return $removedValue;
    }
}