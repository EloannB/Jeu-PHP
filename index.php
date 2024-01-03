<?php
require_once 'Character.php';
require_once 'Hero.php';
require_once 'Orc.php';

$hero = new Hero(1000, 0, 'Link', 'Master Sword', 250, 'Bouclier Hylien', 450);
$orc = new Orc(1000, 0, 'Orc');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <h1>Combat Game</h1>

    <div class="character-info">
        <h2>Présentation Héros :</h2>
        <?php
        $hero->getInfos();
        ?>
    </div>

    <div class="character-info">
        <h2>Présentation Méchants :</h2>
        <?php
        $orc->getInfosOrc();
        ?>
    </div>

    <div class="combat-log">
        <h2>Le Combat :</h2>
        <?php

        $orcDamage = 0;

        while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {
            // Hero attaque
            $heroAttack = $hero->getWeaponDamage();

            echo "{$hero->getName()} attaque de $heroAttack.<br>";

            $orc->setHealth($orc->getHealth() - $heroAttack);
            echo "{$orc->getTypeOrc()} reçoit $heroAttack de dégâts : Il lui reste {$orc->getHealth()} pts de vie.<br>";

            // Orc attaque
            $orc->attack();
            $orcAttack = $orc->getDamageOrc();

            echo "{$orc->getTypeOrc()} attaque de $orcAttack.<br>";

            $hero->beAttacked($orcAttack);

            echo "{$hero->getName()} reçoit $orcAttack de dégâts : Il lui reste " . max(0, $hero->getHealth()) . " pts de vie.<br>";

            //Condition si plus de vie 
            if ($hero->getHealth() <= 0) {
                echo '<div class="message defeat-message">GAME OVER! ' . $hero->getName() . ' a perdu contre ' . $orc->getTypeOrc() . '.</div>';
                break;
            }

            if ($orc->getHealth() <= 0) {
                echo '<div class="message victory-message">VICTOIRE! ' . $hero->getName() . ' a vaincu ' . $orc->getTypeOrc() . '.</div>';
                break;
            } 
            echo "<hr>";
        }
        ?>
    </div>

    <div class="combat-actions">
        <a href="index.php">
            <button class="attack-btn">Nouveau Combat</button>
        </a>
        
    </div>

</body>

</html>