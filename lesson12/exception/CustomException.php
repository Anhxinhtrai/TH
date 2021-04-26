<?php


class CustomException extends Exception
{
    public function getMessageCustom()
    {
        return $this->getMessage(). "<br>";
}
}