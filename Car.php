<?php

require_once 'LighteableInterface.php';

class Car extends Vehicle implements LighteableInterface
{

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}