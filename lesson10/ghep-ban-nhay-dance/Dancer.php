<?php


class Dancer
{
    public $name;
    public $gender;

    public $firstMale = null;
    public $finalMale = null;

    public $firstFemale = null;
    public $finalFemale = null;


    public function maleEmpty()
    {
        if ($this->firstMale == null) {
            return true;
        } else {
            return false;
        }
    }

    public function femaleEmpty()
    {
        if ($this->firstFemale == null) {
            return true;
        } else {
            return false;
        }
    }

    public function add($name, $gender)
    {
        if ($gender == "male") {
            $oldFinalMale = $this->finalMale;
            $this->finalMale = new Node();
            $this->finalMale->value = $name;
            if ($this->maleEmpty()) {
                $this->firstMale = $this->finalMale;
            } else {
                $oldFinalMale->next = $this->finalMale;
            }
        }
        if ($gender == "female") {
            $oldFinalFemale = $this->finalFemale;
            $this->finalFemale = new Node();
            $this->finalFemale->value = $name;
            if ($this->femaleEmpty()) {
                $this->firstFemale = $this->finalFemale;
            } else {
                $oldFinalFemale->next = $this->finalFemale;
            }
        }
    }

    public function get()
    {
        if ($this->maleEmpty()) {
            return "hàng nam đã hết người";
        }

        $removedMale = $this->firstMale->value;
        $this->firstMale = $this->firstMale->next;
        if ($this->femaleEmpty()) {
            return "hàng nữ hết người";
        }
        $removedFemale = $this->firstFemale->value;
        $this->firstFemale = $this->firstFemale->next;

        return $removedMale . "-" . $removedFemale;
    }
}
