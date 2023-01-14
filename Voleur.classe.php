<?php

include_once "Personnage.classe.php";

// création du Voleur ////////////////////////////////////////////////////

class Voleur extends Personnage
{
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
    public function getpseudo()
    {
        return  $this->pseudo;
    }
}