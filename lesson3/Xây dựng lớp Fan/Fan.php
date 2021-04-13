<?php


class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;

    private $speed;
    private $on;
    private $radius;
    private $color;
        public function __construct($speed,$on,$radius,$color)
        {
            $this->speed = self::SLOW;
            $this->on = false;
            $this->radius = 5;
            $this->color = "blue";
        }

    public function getSpeed()
    {
        return $this->speed;
    }
public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    public function getOn()
    {
        return $this->on;
    }
    public function setOn($on)
    {
        $this->on = $on;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function __toString()
    {
        if ($this->on = true){
            return "Fan is on" . "Speed : " . $this->speed . "Radius : " . $this->radius . " color : " . $this->color;
        }else{
            return "Fan is off" . "Speed : " . $this->speed . "Radius : " . $this->radius . " color : " . $this->color;

        }
    }

}