<?php
//arena
function arena($poke1, $poke2){
    echo '<br><br>Let the battle BEGINS!<br><br>';
    while($poke1->getHp()>0 && $poke2->getHp()>0){
        $whoHits = rand(1,2);
        echo '<br>';
        if($whoHits==1){
            echo $poke1->getNom() . ' lance une attaque!<br>';
            $poke1->frapper($poke2);
        }else{
            echo $poke2->getNom() . ' lance une attaque!<br>';
            $poke2->frapper($poke1);
        }
    }
}
?>