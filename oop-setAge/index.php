<?php

// Parte 1:
// Creare un nuovo oggetto Persona con un metodo setAge() che cambia il valore della proprieta' age
// della classe Persona, che accetti esclusivamente un numero intero. 
// Se il numero inserito come argomento non dovesse essere un numero intero: allora lanciare un'eccezione!

// Parte 2:
// Includendo con try e catch una chiamata a setAge con una stringa come argomento, 
// catturare l'eccezione e invece di emettere un errore bloccante, scrivere in pagina il messaggio di errore.

class Persona
{
    public $age;

    public function setAge($ageInfo)
    {
        // lancia l'exception
        if (is_int($ageInfo)) {
            throw new Exception('inserisci un numero intero!');
        }
        $this->age = $ageInfo;
    }
}

$person = new Persona();

// form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // check se age èstato inviato
        $newAge = $_POST['age'];
        $person->setAge((int)$newAge);
        // stampa
        echo 'Età inserita correttamente:' . $person->age;
    } else {
        throw new Exception('Non hai inserito nulla o la tua età non è stata presa correttamente!');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>age check</title>
</head>

<body>

    <form action="" method="post">
        <label for="age">Inserisci l'età come numero intero:</label>
        <input type="text" name="age" id="age">
        <input type="submit" value="Invia">
    </form>

</body>

</html>