<?php
abstract class Personnage
{
    public int $mesPointVie;
    public int $mespointVigeur;

    public $Monimage;
    public $pseudo;

    public function __construct($mesPointVie, $mespointVigeur, $Monimage, $pseudo)
    {
        $this->mesPointVie = $mesPointVie;
        $this->mespointVigeur = $mespointVigeur;
        $this->Monimage = $Monimage;
        $this->pseudo = $pseudo;
    }
    public function attaque($proie)
    {
        if ($proie->mesPointVie === 0) {
            echo $proie->pseudo . " est MORT car il vient d'être attaqué par " . $this->pseudo . " et n'a maintenant que " . $proie->mesPointVie . " points de vie. ";
            echo "<hr>";
        } elseif ($this->mesPointVie ===0){
            echo $this->pseudo . " ne peut pas attaquer parce que son compte de points de vie est égal à " . $this->mesPointVie . ".";

        } 
        else {
            $proie->mesPointVie -= 50;
            $this->mesPointVie += 50;
            echo $proie->pseudo . " vient d'être attaqué par " . $this->pseudo . " et a maintenant " . $proie->mesPointVie . " points de vie. " . "<br>";
            echo $this->pseudo . ", lui, a maintenant " . $this->mesPointVie . " points de vie. " . "<br>";
            echo "<hr>";
            return $this;
        }
    }

    public function seDeplace()
    {
        if ($this->mespointVigeur === 0) {
            echo $this->pseudo . " ne peut pas se déplacer et a besoin de se reposer, parce que son compte de points de vigeur est égal à " . $this->mespointVigeur . ".";
            echo "<hr>";
        } else {
            $this->mespointVigeur -= 50;
            echo $this->pseudo . " s'est déplacé une case et a maintenant " . $this->mespointVigeur . " points de vigeur." . "<br>";
            echo "<hr>";
        }
    }

    public function seRepose()
    {
        $this->mespointVigeur += 50;
        echo $this->pseudo . " s'est reposé une minute et a maintenant " . $this->mespointVigeur  . " points de vigeur." . "<br>";
        echo "<hr>";
        return;
    }

    /**
     * Get the value of getMesPointVie
     */
    public function getMesPointVie()
    {
        return $this->mesPointVie;
    }

    /**
     * Set the value of mesPointVie
     */
    public function setMesPointVie($mesPointVie): self
    {
        $this->mesPointVie = $mesPointVie;

        return $this;
    }

    /**
     * Get the value of mespointVigeur
     */
    public function getMespointVigeur()
    {
        return $this->mespointVigeur;
    }


    /**
     * Set the value of mespointVigeur
     */
    public function setMespointVigeur($mespointVigeur): self
    {
        $this->mespointVigeur = $mespointVigeur;

        return $this;
    }

    /**
     * Get the value of Monimage
     */
    public function getMonimage()
    {
        return $this->Monimage;
    }

    /**
     * Set the value of Monimage
     */
    public function setMonimage($Monimage): self
    {
        $this->Monimage = $Monimage;

        return $this;
    }

    /**
     * Get the value of pseudo
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     */
    public function setPseudo($pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
