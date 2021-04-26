<?php
//include_once "CustomException.php";
//function divideNumber($first,$second){
//    if($second==0){
//        throw new CustomException("ko the chia cho so 0");
//    }
//    if($second==1){
//        throw new Exception("chia cho 1 thi chia lam gi ??");
//    }
//    $result = $first/$second ;
//    return $result;
//}
//try{
////    echo divideNumber(9,0);
//    echo divideNumber(9,1);
//}catch (CustomException $exception){
//    echo $exception->getMessageCustom();
//}catch (Exception $exception){
//    echo $exception->getMessage();
//} finally {
//    echo "moi nhap so khac";
//}
error_reporting(E_ERROR);
function myErrorHandler($number,$str,$file,$line){
    echo $number . $str . $file . $line . "abc";
    die();
}
set_error_handler("myErrorHandler");