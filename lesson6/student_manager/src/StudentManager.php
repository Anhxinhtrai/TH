<?php

namespace App;

class StudentManager
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function getStudentByIndex($index): Student
    {
        $dataFile = $this->loadData();
        $item = $dataFile[$index];
        $student = new Student(
            $item->name,
            $item->dob,
            $item->math,
            $item->physic,
            $item->chemistry);
        $student->setId($item->id);
        return $student;

    }

    public function loadData()
    {
        //đưa dũ liệu json -> mảng.
        $data = file_get_contents($this->filePath);
        return json_decode($data);
    }

    public function saveData($data) // lưu dữ liệu mảng -> json.
    {

        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    public function add($data)
    {

        $dataFile = $this->loadData();
        $lastUser = $dataFile[count($dataFile) - 1];
        $data["id"] = $lastUser->id + 1; //
        array_push($dataFile, $data);
        $this->saveData($dataFile);
    }

    public function lastId()
    {
        $dataFile = $this->loadData();
        $lastStudent = $dataFile[count($dataFile) - 1];
        return $lastStudent->id + 1;
    }

    public function getAll(): array
    {
        $data = $this->loadData();
        $students = [];

        foreach ($data as $item) {
            $student = new Student(
                $item->name,
                $item->dob,
                $item->math,
                $item->physic,
                $item->chemistry);
            $student->setId($item->id);
            array_push($students, $student);

        }
        return $students;
    }

    function remove($index)
    {
        $dataFile = $this->loadData();
        array_splice($dataFile, $index, 1);
        $this->saveData($dataFile);
    }

    public function edit($index, $student)
    {
        $data = $this->loadData();
        $data[$index] = $student;
        $this->saveData($data);
    }
}