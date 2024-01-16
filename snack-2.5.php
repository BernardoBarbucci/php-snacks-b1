<?php
// espongo la media di due valori inseriti dall'utente con chiamata GET

if (isset($_GET['firstValue']) && isset($_GET['secondValue'])) {
    $firstValue = floatval(($_GET['firstValue']));
    $secondValue = floatval(($_GET['secondValue']));

    $media = ($firstValue + $secondValue) / 2;
}
