<?php

require_once 'Character.php';

class Orc extends Character
{
    //Attributs
    private $_typeOrc;
    private $_damageOrc;

    //Méthodes

    //Getters
    public function getTypeOrc()
    {
        return $this->_typeOrc;
    }
    public function getDamageOrc()
    {
        return $this->_damageOrc;
    }

    //Setters
    public function setTypeOrc(string $typeOrc)
    {
        return $this->_typeOrc = $typeOrc;
    }
    public function setDamageOrc(int $damageOrc)
    {
        return $this->_damageOrc = $damageOrc;
    }

    //Magique construct
    public function __construct(int $health, int $rage, string $typeOrc)
    {
        parent::__construct($health, $rage);

        $this->setTypeOrc($typeOrc);
    }

    //Méthode pour affiche les infos de l'Orc
    public function getInfosOrc()
    {
        echo 'Type : ' . $this->getTypeOrc() . '<br>';
        echo 'Point de vie : ' . $this->getHealth() . '<br>';
        echo 'Point de rage : ' . $this->getRage() . '<br>';
    }

    //Méthode d'attaque
    public function attack()
    {
        $this->setDamageOrc(rand(600, 800));
    }
}
