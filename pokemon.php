<?php 
class Pokemon{
    private $nom;
    private $maxHP;
    private $hp;
    private $attaque;
    private $type;
    private $status;
//set le default

    public function __construct($nom = 'Zarbi', $maxHP= 20,$hp = 20, $attaque=5, $type='normal'){
        $this->nom = $nom;
        $this->maxHP = $maxHP;
        $this->hp = $hp;
        $this->attaque = $attaque;
        $this->type = $type;
    }
    public function getMaxHP(){
        return $this->maxHP;
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
    public function getStatus(){
    return $this->status;
}
    public function setStatus($status){
        $this->status = $status;
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
    
    public function recevoirDegats($pvRestant){
        $this->setHp($pvRestant);
        if($pvRestant>0){
            echo "PV Restant: " . $pvRestant . "à " . $this->getNom() . '<br>';
        }else{
            echo $this->getNom() . ' est K.O.! <br> <br>';
        }
    }
    
    public function stun($cible){
        $attakerType = $this->getType();
        $cibleType = $cible->getType();

        //CONDITION POUR STUN 
        if (($attakerType == 'Acier'      && rand(1,10)>7) ||
            ($attakerType == 'Fée'      && rand(1,10)>7) ||
            ($attakerType == 'Sol'   && rand(1,10)>7)
        ) {
            $cible->setStatus('stun');
            echo $cible->getNom() . ' is stunned!**************<br>';
            }
        } 

    public function frapper($cible){
        $attakerType = $this->getType();
        $cibleType = $cible->getType();

        //CONDITION POUR RENDRE L'ATTAQUE PLUS PUISSANTE EN FONCTION DES FAIBLESSES
        if (($attakerType == 'Acier'      && $cibleType == 'Fée') ||
            ($attakerType == 'Sol'      && $cibleType == 'Acier') ||
            ($attakerType == 'Eau'   && $cibleType == 'Sol')
        ) {
            $dégat = $this->getAttaque()*2 + rand(1, 10);
            echo ' Attaque efficace ';
        }else{
            //Les dégats
            $dégat = $this->getAttaque() + rand(1, 10);
            echo ' Attaque normale ';
        }
        //critique:
        if(rand(1,10)>9){
            $dégat *=2;
            echo 'Coup Critique!**<br>';
        }
        $pvCible = $cible->getHp();
        // LA CIBLE RECOIS DES DEGATS
        $cible->recevoirDegats($pvCible - $dégat);
    }
}
?>