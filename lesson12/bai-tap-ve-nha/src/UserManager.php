<?php

class UserManager
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function loadData()
    {
        //đưa dũ liệu json -> mảng.
        $data = file_get_contents($this->filePath);
        return json_decode($data);
    }

    public function saveData($data)
    {
        // lưu dữ liệu mảng -> json.
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    public function register($data)
    {
        $dataFile = $this->loadData();
        array_push($dataFile, $data);
        $this->saveData($dataFile);
    }

    public function checkUser($name,$password)
    {
        $users = $this->loadData();
        foreach ($users as $item){
            if ($name == $item->user){
                if ($password == $item->password){
                    $_SESSION["user"] = $item->user;
                    sleep(1);
                   header("location: noi-dang-nhap.php");
                }else{
                    return "sai mat khau";
                }
            }
        }
        return "tai khoan nay ko ton tai";
    }

    public function checkRegister($user)
    {
     $users = $this->loadData();
     foreach ($users as $item){
         if($user == $item->user){
             return false;
         }
     }
     return true;
    }
}