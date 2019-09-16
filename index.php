<?php
    require_once('autoload.php');
    use Classes\CommandProcessor;

    $commands = array('l','l','l','l','f','f','r','f'); // array of command characters

    $initialCoordinates = [0,0];

    $commandProcessor = new CommandProcessor($initialCoordinates);

    $afterPosition = $commandProcessor->Process($commands);

    echo $afterPosition; // $commandProcessor->getPosition();
?>