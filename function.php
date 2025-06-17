<?php
//arena
function arena($poke1, $poke2){
    echo '<br><br>Let the battle BEGINS!<br><br>';
    while($poke1->getHp()>0 && $poke2->getHp()>0){
        $status1 = $poke1->getStatus();
        $status2 = $poke2->getStatus();
        if($poke1->getStatus()== 'stun' || $poke2->getStatus()== 'stun'){
            $whoHits = rand(1,4);
        }else{
            $whoHits = rand(1,2);
        }
        if($whoHits==1){
            echo $poke1->getNom() . ' lance une attaque!<br>';
            $poke1->frapper($poke2);
            $poke1->stun($poke2);
        }else{
            echo $poke2->getNom() . ' lance une attaque!<br>';
            $poke2->frapper($poke1);
            $poke2->stun($poke1);
        }
    }
}
?>