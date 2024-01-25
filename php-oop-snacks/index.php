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
    public $difesa = 0;
    // prendi ed attribuisci l'attacco
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

    // prendi ed attribuisci la difesa
    public function setDefense($scudo)
    {
        if ($scudo > 50) {
            $this->difesa += 70;
        }
    }

    public function getDefense()
    {
        return $this->difesa;
    }
}

$charizard = new Pokemon();
$charizard->setAttack(75);
$charizard->setdefense(55);
echo $charizard->getAttack();
