<?php
namespace App;

class Student
{
    private $id;
    private $name;
    private $dob;
    private $math;
    private $physic;
    private $chemistry;

    public function __construct(
                                $name,
                                $dob,
                                $math,
                                $physic,
                                $chemistry)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->math = $math;
        $this->physic = $physic;
        $this->chemistry = $chemistry;
    }

    public function getId()
    {
        return $this->id;

    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getMath()
    {
        return $this->math;
    }

    public function setMath($math)
    {
        $this->math = $math;
    }

    public function getPhysic()
    {
        return $this->physic;
    }

    public function setPhysic($physic)
    {
        $this->physic = $physic;
    }

    public function getChemistry()
    {
        return $this->chemistry;
    }

    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }

    public function getStudent()
    {
        return ['id' => $this->getId(), 'name' => $this->getName(), 'dob' => $this->getDob(), 'math' => $this->getMath(), 'physic' => $this->getPhysic(), 'chemistry' => $this->getChemistry()];
    }

    public function avg()
    {
        return ($this->math + $this->chemistry + $this->physic) / 3;
    }

}