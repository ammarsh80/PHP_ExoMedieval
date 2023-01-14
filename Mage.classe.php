<?php

include_once "Personnage.classe.php";

// création du Mage ////////////////////////////////////////////////////

class Mage extends Personnage
{
    public function __construct($mesPointVie, $mespointVigeur, $Monimage, $pseudo)
   
    {
      parent::__construct($mesPointVie, $mespointVigeur, $Monimage, $pseudo);
      $this ->setMespointMagie(400); 
    }
    public function getMesPointVie()
    {
        return  $this->mesPointVie;
    }
    public function getMespointVigeur()
    {
        return  $this->mespointVigeur;
    }
    public function getMonimage()
    {
        return  $this->Monimage;
    }
    public function getPseudo()
    {
        return  $this->pseudo;
    }
   


    private int $MespointMagie;


    /**
     * Get the value of MespointMagie
     */
    public function getMespointMagie(): int
    {
        
        return $this->MespointMagie;
    }

    /**
     * Set the value of MespointMagie
     */
    public function setMespointMagie(int $MespointMagie): self
    {
        $this->MespointMagie = $MespointMagie;

        return $this;
    }
    public function fleche($cible)
    {
        if ($cible->mesPointVie===0){
            echo $cible->pseudo . " est MORT car il vient d'être ciblé par " . $this->pseudo . " et n'a maintenant que " . $cible->mesPointVie . " points de vie. ";
            echo "<hr>";
        }
        elseif( $this->MespointMagie===0){
            echo $this->pseudo . " ne peut pas cibler parce que son compte de points de magie est égal à " . $this->MespointMagie . ".";
            echo "<hr>";

        }else
        $cible->mesPointVie -= 50;
        $this->MespointMagie -= 50;
        $this->mespointVigeur += 50;
        echo $cible->pseudo ." a été ciblé par la baguette magique du ".$this->pseudo ." et a maintenant ". $cible->mesPointVie ." point de vie, "."<br>";
        echo $this->pseudo .", lui, a maintenant " . $this->MespointMagie ." point de magie et ".$this->mespointVigeur." points de vigeur."."<br>";
        echo "<hr>";

        return $this;
    }
    
}