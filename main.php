<?php

require_once('class/CommandProcessor.php');
//use MarsVehicle\CommandProcessor;

$commands = array('l','l','l','l','f','f','r','f'); // array of command characters

$initialCoordinates = [0,0];

$commandProcessor = new CommandProcessor($initialCoordinates);

$afterPosition = $commandProcessor->Process($commands);
?>