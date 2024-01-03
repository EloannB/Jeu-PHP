<?php

require_once 'Character.php';

class Hero extends Character
{
    //Attributs
    private $_name;
    private $_weaponName;
    private $_weaponDamage;
    private $_shieldName;
    private $_shieldValue;

    //Méthodes

    //Getters
    public function getName()
    {
        return $this->_name;
    }
    public function getWeaponName()
    {
        return $this->_weaponName;
    }
    public function getWeaponDamage()
    {
        return $this->_weaponDamage;
    }
    public function getShieldName()
    {
        return $this->_shieldName;
    }
    public function getShieldValue()
    {
        return $this->_shieldValue;
    }

    //Setters
    public function setName(string $name)
    {
        $this->_name = $name;
    }
    public function setWeaponName(string $weaponName)
    {
        $this->_weaponName = $weaponName;
    }
    public function setWeaponDamage(int $weaponDamage)
    {
        $this->_weaponDamage = $weaponDamage;
    }
    public function setShieldName(string $shieldName)
    {
        $this->_shieldName = $shieldName;
    }
    public function setShieldValue(int $shieldValue)
    {
        $this->_shieldValue = $shieldValue;
    }

    //Magique construct
    public function __construct(int $health, int $rage, string $name, string $weaponName, int $weaponDamage, string $shieldName, int $shieldValue)
    {
        parent::__construct($health, $rage);

        $this->setName($name);
        $this->setWeaponName($weaponName);
        $this->setWeaponDamage($weaponDamage);
        $this->setShieldName($shieldName);
        $this->setShieldValue($shieldValue);
    }

    //Méthode pour afficher les infos du héros
    public function getInfos()
    {
        echo 'Nom : ' . $this->getName() . '<br>';
        echo 'Point de vie : ' . $this->getHealth() . '<br>';
        echo 'Point de rage : ' . $this->getRage() . '<br>';
        echo 'Arme : ' . $this->getWeaponName() . '<br>';
        echo "Dégats de l'arme : " . $this->getWeaponDamage() . '<br>';
        echo 'Nom du bouclier : ' . $this->getShieldName() . '<br>';
        echo 'Valeur du bouclier : ' . $this->getShieldValue() . '<br>';
    }

    // Méthode pour attaquer
    public function beAttacked($attackValue)
    {
        if ($attackValue) {
            $realDamage = $attackValue - $this->getShieldValue();
            $this->setHealth($this->getHealth() - $realDamage);
        }
    }
}
