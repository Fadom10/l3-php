<?php
# 1 CLASSE VOITURE
class Voiture {

    const NB_ROUES =  4;

    private $couleur;
    private $puissance;
    private $vitesse;


    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @param mixed $puissance
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    /**
     * @param mixed $vitesse
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;
    }
    function getCouleur()
    { return $this->couleur; }

    function getPuissance()
    { return $this->puissance; }

    function getVitesse()
    { return $this->vitesse; }

    function acceler(){
        $this->vitesse ++;
    }

    function ralentir(){
        $this->vitesse --;
    }
}

$voiture = new Voiture();
$voiture->setCouleur("noir");
$voiture->setPuissance("115 Ch");
$voiture->setVitesse(130);

var_dump($voiture);

echo "acceleration".'<br>';
$voiture->acceler();


var_dump($voiture);


echo "ralentir".'<br>';
$voiture->ralentir();


var_dump($voiture);


#2 CLASSE ABSTRAITE PAROLE

abstract class Parole
{
    abstract public function direBonjour();

}

class ParoleFrancais extends Parole{

    public function direBonjour()
    {
        echo "Bonjour !";
    }
}

$paroleFr = new ParoleFrancais();
$paroleFr->direBonjour();
?>