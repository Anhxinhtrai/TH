<?php

namespace App;

class Student
{
    private $id;
    private $name;
    private $dob;
    private $email;
    private $phone;

    public function __construct(
        $name,
        $dob,
        $email,
        $phone)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->email = $email;
        $this->phone = $phone;
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

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}