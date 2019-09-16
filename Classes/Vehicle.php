<?php

namespace Classes;

class Vehicle {
    protected $orientations = ['North','East','South','West']; // 0 => "North", 1 => "East", 2 => "South", 3 => "West"
    protected $orientation = 0; // By default the vehicle is oriented north
    protected $x;
    protected $y;

    public function __construct(array $initialCoordinate = [0,0])
    {
        $this->x = $initialCoordinate[0];
        $this->y = $initialCoordinate[1];
    }

    protected function toLeft() 
    {
        /*
            The clock direction is defined:
            When then orientation reaches the 
            value 4, the cycle is repeated 
         */
        $this->orientation = ($this->orientation + 3) % 4;
    }

    protected function toRight() 
    {
        /*
            The clock direction is defined:
            When then orientation reaches the 
            value 4, the cycle is repeated 
         */
        $this->orientation = ($this->orientation + 1) % 4;
    }

    protected function toFoward() 
    {
        // this is $this->getOrientation() == 'N'
        if($this->orientation == 0)
            $this->y++;

        // this is $this->getOrientation() == 'E'
        elseif($this->orientation == 1)
            $this->x++;

        // this is $this->getOrientation() == 'S'
        elseif($this->orientation == 2)
            $this->y--;

        // this is $this->getOrientation() == 'O'
        elseif($this->orientation == 3)
            $this->x++;
            
    }

    public function toBack() 
    {
        // this is $this->getOrientation() == 'N'
        if($this->orientation == 0)
            $this->y--;

        // this is $this->getOrientation() == 'E'
        elseif($this->orientation == 1)
            $this->x--;

        // this is $this->getOrientation() == 'S'
        elseif($this->orientation == 2)
            $this->y++;

        // this is $this->getOrientation() == 'O'
        elseif($this->orientation == 3)
            $this->x--;
    }
   
    public function getOrientationValue() 
    {
        return $this->orientation;
    }

    public function getOrientation() 
    {
        return $this->orientations[$this->orientation];
    }
}