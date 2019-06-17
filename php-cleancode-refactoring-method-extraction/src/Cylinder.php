<?php


class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea=$this->getBaseArea($radius);
        $perimeter=$this->getPerimeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
    public function getBaseArea($radius){
        $baseArea=pi()*$radius**2;
        return $baseArea;
    }
    public function getPerimeter($radius){
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}