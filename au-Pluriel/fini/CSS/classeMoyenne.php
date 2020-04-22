<?php
class Moyenne
{
private $note1 ;
private $note2 ;
private $note3;
private $cof1;
private $cof2;
private $cof3;
private $moy;

public function __construct($note1,$note2,$note3,$cof1,$cof2,$cof3,$moy)
{
parent::__construct($prix_vehicule); //On appelle le constructeur de la classe Vehicule en lui fournissant le prix
$this->note1 = $note1;
$this->note2 = $note2;
$this->note3 = $note3;
$this->cof1 = $cof1;
$this->cof2 = $cof2;
$this->cof3 = $cof3;
$this->moy = $moy;
}
    public function calcule_Moy()
    {
        $somme_cof= $this->cof1 + $this->cof2 + $this->cof3 ;
        $this->moy =  ( ($this->note1 * $this->cof1) + ($this->note2 * $this->cof2) + ($this->note3 * $this->cof3) ) / $somme_cof ;  
        return  $moy ;

    }
}
?>