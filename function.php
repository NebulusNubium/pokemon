<?php
//arena
function arena($poke1, $poke2){
    $poke1->efficace($poke2);
    $poke2->efficace($poke1);
    while($poke1->getHp()>0 && $poke2->getHp()>0){
        if(rand(1,2)==1){
            $degat= $poke1->getAttaque();
            if(rand(1,5)==5){
                echo '<br>Coup Critique! Bravo ' . $poke1->getNom();
                $degat *=2;
            }
            $poke2->setHp($poke2->getHp()-$degat);
            echo '<br>' . $poke1->getNom() .' Attaque! Il reste ' . $poke2->getHp() . 'PV à ' . $poke2->getNom();
        }else{
            $degat= $poke2->getAttaque();
            if(rand(1,5)==5){
                echo '<br>Coup Critique! Bravo ' . $poke2->getNom();
                $degat *=2;
            }
            $poke1->setHp($poke1->getHp()-$degat);
            echo '<br>' . $poke2->getNom() .' Attaque! Il reste ' . $poke1->getHp() . 'PV à ' . $poke1->getNom();
        }
    }
}
?>