<?php

namespace Classes;

trait Vehicle {
    /** @var array $orientations contains a list of strings that indicate orientation for the Vehicle */
    protected $orientations = ['North','East','South','West']; // 0 => "North", 1 => "East", 2 => "South", 3 => "West"

    /** @var int $orientation contains a value for the Vehicle's orientation */
    protected $orientation = 0; // By default the vehicle is oriented north

    /** @var int $x contains a value for the Vehicle's position in x */
    protected $x;

    /** @var int $y contains a value for the Vehicle's position in y */
    protected $y;

    public function __construct(array $initialCoordinate = [0,0])
    {
        $this->x = $initialCoordinate[0];
        $this->y = $initialCoordinate[1];
    }

    /**
     * Sets the Vehicle's orientation to left.
     *
     * @param void
     *
     * @return void
     */
    protected function toLeft() 
    {
        // The clock direction is defined:
        // When then orientation reaches the 
        // value 4, the cycle is repeated 
        $this->orientation = ($this->orientation + 3) % 4;
    }

    /**
     * Sets the Vehicle's orientation to right.
     *
     * @param void
     *
     * @return void
     */
    protected function toRight() 
    {
        // The clock direction is defined:
        // When then orientation reaches the 
        // value 4, the cycle is repeated 
        $this->orientation = ($this->orientation + 1) % 4;
    }

    /**
     * Sets the Vehicle's position foward.
     *
     * @param void
     *
     * @return void
     */
    protected function toFoward($step = 1) 
    {
        // this is $this->getOrientation() == 'North'
        if($this->orientation == 0)
            $this->y = $this->y + (1 * $step);

        // this is $this->getOrientation() == 'East'
        elseif($this->orientation == 1)
            $this->x = $this->x + (1 * $step);

        // this is $this->getOrientation() == 'South'
        elseif($this->orientation == 2)
            $this->y = $this->y - (1 * $step);

        // this is $this->getOrientation() == 'West'
        elseif($this->orientation == 3)
            $this->x = $this->x - (1 * $step);
            
    }

    /**
     * Sets the Vehicle's position back.
     *
     * @param void
     *
     * @return void
     */
    protected function toBack() 
    {
        $this->toFoward(-1);
    }
   
    /**
     * Gets the Vehicle's orientation value.
     *
     * @param void
     *
     * @return int
     */
    public function getOrientationValue() 
    {
        return $this->orientation;
    }

    /**
     * Gets the Vehicle's orientation in string representation.
     *
     * @param void
     *
     * @return string
     */
    public function getOrientation() 
    {
        return $this->orientations[$this->orientation];
    }

    /**
     * Gets the Vehicle's position in (x,y) representation.
     *
     * @param void
     *
     * @return string
     */
    public function getPosition()
    {
        return "(".$this->x.",".$this->y.")";
    }
}