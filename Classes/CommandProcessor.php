<?php

namespace Classes;

class CommandProcessor {

    use Vehicle;

    /**
     * Run commands for the Vehicle.
     *
     * @param array $commands is a list of characters 'l','r','f','b'
     *
     * @return string Vehicle's position in (x,y) representation
     */
    public function Process(array $commands = [])
    {
        if(!empty($commands))
        {
            foreach ($commands as $command) 
            {
                if(strtolower($command) == 'l') $this->toLeft();
                elseif(strtolower($command) == 'r') $this->toRight();
                elseif(strtolower($command) == 'f') $this->toFoward();
                elseif(strtolower($command) == 'b') $this->toBack();
            }
        }

        return "(".$this->x.",".$this->y.")";
    }
}

?>