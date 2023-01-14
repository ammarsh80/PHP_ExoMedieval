<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/img/styles.css">
    <title>PHP - Exo - Médiéval</title>
</head>

<body>

    <?php
    include_once "Personnage.classe.php";
    include_once "Geurrrier.classe.php";
    include_once "Mage.classe.php";
    include_once "Voleur.classe.php";


    // $guerrier = new Guerrier('500','400','<img src="./assets/img/guerrier.jfif" style="width: 160px">','PaulLeGuerrier');
    // $mage = new Mage('1000','800','<img src="./assets/img/mage.jfif" style="width: 160px">','PatricLeMage');
    // $voleur = new Voleur('300','200','<img src="./assets/img/voleur.jfif" style="width: 160px">','StephanMoiLeVoleur');

    $guerrier = new Guerrier('300', '300', '<img src="./assets/img/guerrier.jpg">', 'Paul-LeGuerrier');
    $mage = new Mage('400', '400', '<img src="./assets/img/mage.jpg">', 'Patric-LeMage');
    $voleur = new Voleur('200', '200', '<img src="./assets/img/voleur.png">', 'Stephan-LeVoleur');

    // $guerrier = new Guerrier();
    ?>
    <section id="container_strart">
        <div id=personnage>

            <strong>
                <?php
                echo  $guerrier->getPseudo() . " a: " . "<br>";
                ?>
            </strong>
            <?php
            echo $guerrier->getMespointVie() . " points de vie, " . "<br>";
            echo $guerrier->getMespointVigeur() . " points de vigeur et " . "<br>";
            echo $guerrier->getMespointForce() . " points de force." . "<br>";
            echo $guerrier->getMonimage();
            echo "<br>";
            ?>
        </div>

        <div id=personnage>
            <strong>
                <?php
                echo  $mage->getPseudo() . " a: " . "<br>";
                ?>
            </strong>
            <?php

            echo $mage->getMespointVie() . " points de vie, " . "<br>";
            echo $mage->getMespointVigeur() . " points de vigeur et " . "<br>";
            echo $mage->getMespointMagie() . " points de magie." . "<br>";
            echo $mage->getMonimage();
            echo "<br>";
            ?>
        </div>
        <div id=personnage>

            <strong>
                <?php
                echo  $voleur->getPseudo() . " a: " . "<br>";
                ?>
            </strong>
            <?php
            echo $voleur->getMespointVie() . " points de vie, " . "<br>";
            echo $voleur->getMespointVigeur() . " points de vigeur et " . "<br>" . "<br>";
            echo $voleur->getMonimage();
            ?>
        </div>

    </section>

    <section id="container_action">

        <?php
        $guerrier->sedeplace();
        $guerrier->sedeplace();
        $guerrier->sedeplace();
        $guerrier->attaque($voleur);
        $mage->fleche($voleur);
        $mage->fleche($voleur);
        $guerrier->attaque($voleur);
        $mage->fleche($guerrier);
        $guerrier->seRepose();
        $mage->fleche($guerrier);
        $guerrier->attaque($mage);
        $guerrier->attaque($mage);
        $mage->attaque($voleur);
        $mage->attaque($voleur);
        $voleur->attaque($mage);

        $mage->fleche($voleur);
        $mage->fleche($voleur);

        $guerrier->sedeplace();
        $guerrier->sedeplace();
        $guerrier->sedeplace();
        $voleur->sedeplace();
        $guerrier->sedeplace();
        $guerrier->sedeplace();
        $guerrier->sedeplace();

        ?>
    </section>
    <hr>
</body>

</html>