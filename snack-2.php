<!-- Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto 
e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php
$name = '';
$mail = '';
$age = '';

$negated = '';
$granted = '';

// check se c'è il modulo 
if (isset($_GET['name'])) {

    // recupero name 
    $name = $_GET['name'];

    if (strlen($name) > 3) {
        $granted = 'Accesso riuscito';
    } else {
        $negated = 'Accesso negato';
    }
}

?>

<section>
    <div>
        <form action="./snack-2.php" method="get">
            <label for="name">Insert name</label>
            <input type="text" id="name" name="name">
            <button type="submit">Send it</button>
        </form>
    </div>
    <div>
        <form action="./snack-2.php" method="get">
            <label for="mail">Insert mail</label>
            <input type="text" id="mail" name="mail">
            <button type="submit">Send it</button>
        </form>
    </div>
    <div>
        <form action="./snack-2.php" method="get">
            <label for="age">Insert age</label>
            <input type="text" id="age" name="age">
            <button type="submit">Send it</button>
        </form>
    </div>
    <div>
        <?php echo $negated; ?>
        <?php echo $granted; ?>
    </div>
</section>