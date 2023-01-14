<?php

include_once "Personnage.classe.php";

// création du Guerrier ////////////////////////////////////////////////////
class Guerrier extends Personnage
{
    public function __construct($mesPointVie, $mespointVigeur, $Monimage, $pseudo)
   
    {
      parent::__construct($mesPointVie, $mespointVigeur, $Monimage, $pseudo);
      $this ->setMespointForce(300); 
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
    private int $MespointForce;



    /**
     * Get the value of MespointForce
     */
    public function getMespointForce(): int
    {
        return $this->MespointForce;
    }

    /**
     * Set the value of MespointForce
     */
    public function setMespointForce(int $MespointForce): self
    {
        $this->MespointForce = $MespointForce;

        return $this;
    }
}