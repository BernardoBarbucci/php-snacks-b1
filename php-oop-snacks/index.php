<!-- 
Create una nuova classe che rappresenti un Pokemon 
    e che abbia almeno cinque proprieta,
    tre metodi 
    ed il costruttore.
Microbonus: 
    creo un'altra classe che aggiungo al pokemon per composizione
    che configuri il tipo di pokemon (aria, terra, ecc.) 
-->
<?php

class Pokemon
{
    public $nome;
    public $tipo;
    public $forza;
    public $attacco = 0;
    public $difesa;

    public function setAttack($potenza)
    {
        if ($potenza > 50) {
            $this->attacco += 100;
        }
    }

    public function getAttack()
    {
        return $this->attacco;
    }
}

$charizard = new Pokemon();
$charizard->setAttack(75);
echo $charizard->getAttack();
