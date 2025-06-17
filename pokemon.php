<?php 
class Pokemon{
    private $nom;
    private $maxHP;
    private $hp;
    private $attaque;
    private $type;
//set le default

    public function __construct($nom = 'Zarbi', $maxHP = '20', $hp = $maxHP, $attaque=5, $type='normal'){
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
}
?>