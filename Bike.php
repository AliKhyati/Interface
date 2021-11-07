<?php

class Bike extends Vehicle implements LighteableInterface
{
    private int $currentSpeed = 8;

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }


    public function switchOn()
    {
        return $this->currentSpeed >= 10 ? true : false ;

        }

    public function switchOff()
    {
        return false;
        }
}