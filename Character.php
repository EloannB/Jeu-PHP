<?php
class character
{
    // Attributs
    private $_health;
    private $_rage;

    // Méthodes
    public function getHealth()
    {
        return $this->_health;
    }

    public function setHealth(int $health)
    {
        $this->_health = $health;
    }


    public function getRage()
    {
        return $this->_rage;
    }

    public function setRage(int $rage)
    {
        $this->_rage = $rage;
    }

    public function __construct(int $health, int $rage)
    {
       $this->setHealth($health);
       $this->setRage($rage); 
    }
}
