<?php 
class Pokemon{
    private $nom;
    private $maxHP;
    private $hp;
    private $attaque;
    private $type;
//set le default

    public function __construct($nom = 'Zarbi', $maxHP= 20,$hp = 20, $attaque=5, $type='normal'){
        $this->nom = $nom;
        $this->maxHP = $maxHP;
        $this->hp = $hp;
        $this->attaque = $attaque;
        $this->type = $type;
    }
    public function getMaxHP(){
        return $this->reserve;
    }
    public function setMaxHP($newHP){
        $this->maxHP = $newHP;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($newNom){
        $this->nom = $newNom;
    }
    public function getHp(){
        return $this->hp;
    }
    public function setHp($newhp){
        $this->hp = $newhp;
    }
    public function getAttaque(){
        return $this->attaque;
    }
    public function setAttaque($newAttaque){
        $this->attaque= $newAttaque;
    }
    public function getType(){
        return $this->type;
    }
    public function setType($newType){
        $this->type = $newType;
    }
    //pour qu'un parametre soit obligatoire, il faut set un argument:
       // public function __construct($patate){
      //  $this->marque = $patate;
    //}
    public function pokedex(){
        echo '<br>Nom du Pokémon: ' . $this->nom;
        echo '<br>Total de PV: ' . $this->maxHP;
        echo '<br>Stat dAttaque: ' . $this->attaque;
        echo '<br>Type: ' . $this->type;
    }
    public function efficace($adversaire){
        $type1 = $this->getType();
        $type2 = $adversaire->getType();

        $attaque = $this->getAttaque();

        if(
            ($type1 == 'Acier' && $type2 == 'Fée') ||
            ($type1 == 'Eau' && $type2 == 'Sol') ||
            ($type1 == 'Sol' && $type2 == 'Acier')
        ){
            $attaque *= 2;
            echo "<br>Attaque super efficace pour " . $this->getNom() . "!";
        } else {
            echo "<br>Attaque normale " . $this->getNom() . ".";
        }

        $this->setAttaque($attaque);
    }

}
?>