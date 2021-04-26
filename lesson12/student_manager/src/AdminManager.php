<?php


namespace App;


class AdminManager
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
    public function saveData($data) // lưu dữ liệu mảng -> json.
    {

        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    public function register($data)
    {

        $dataFile = $this->loadData();
        array_push($dataFile, $data);
        $this->saveData($dataFile);
    }

    public function checkRegister($name)
    {
        $users = $this->loadData();
        foreach ($users as $item){
            if($name == $item->name){
                return false;
            }
        }
        return true;
    }
    public function checkLogin($name,$password)
    {
        $users = $this->loadData();
        foreach ($users as $item){
            if ($name == $item->name){
                if ($password == $item->password){
                    $_SESSION["name"] = $item->name;
                    header('location: index.php');
                }else{
                    return "sai mật khẩu";
                }
            }
        }
        return "Tài khoản của bạn chưa đăng kí";
    }
}