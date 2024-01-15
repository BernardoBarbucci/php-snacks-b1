<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra 
di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte 
le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->

<?php
$partite = array(
    'Olimpia Milano - Cantù | 55-60',
    'Vanoli Basket Cremona - Dolomiti Energia Trentino | 75-90',
    'EA7 Emporio Armani Milano - Virtus Bologna | 92-105',
    'Germani Brescia - Estra Pistoia | 33-66',
    'Happy Casa Brindisi -  Umana Reyer Venezia | 88-67'
);

// var_dump($partite);

// creo un foreach per stampare gli elements degli array 
foreach ($partite as $partita) {
    echo $partita . '<br>';
}

?>