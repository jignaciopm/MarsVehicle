<?php

namespace Classes;

class CommandProcessor extends Vehicle {

    public function Process(array $commands = [])
    {
        if(!empty($commands))
        {
            foreach ($commands as $key => $command) 
            {
                if(strtolower($command) == 'l') $this->toLeft();
                elseif(strtolower($command) == 'r') $this->toRight();
                elseif(strtolower($command) == 'f') $this->toFoward();
                elseif(strtolower($command) == 'b') $this->toBack();
            }
        }

        echo "(".$this->x.",".$this->y.")";
    }
}

?>