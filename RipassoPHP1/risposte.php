<?php

include 'header.php';
include 'functions.php';  // Funzioni per il calcolo delle risposte

// Recupera i dati inviati dal form
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$dbms = $_POST['dbms'];
$Banana=$_POST['Banana'];
$types = $_POST['types'] ?? [];
$openAnswer = $_POST['openAnswer'];

// Risposte corrette
$correctBananaAnswer = 'Mi piace la banana';
$correctDBMS = 'Sistema di gestione di database';
$correctTypes = ['Relazionale', 'Gerarchico', 'Reticolare'];

// Funzione di analisi per la risposta aperta
$analysis = AnalizzaRisposte($openAnswer);
?>

<h2>Risposte Utente</h2>

<p><strong>Nome:</strong> <?= htmlspecialchars($name) ?> <strong>Cognome:</strong> <?= htmlspecialchars($lastName) ?> <strong>Email:</strong> <?= htmlspecialchars($email) ?></p>

<div class="form-section">
    <label>Ti piace il DBMS?</label><br>
    <?php
    if ($Banana == $correctBananaAnswer) {
        echo "<span class='correct'>✔ Risposta corretta!</span>";
    } else {
        echo "<span class='incorrect'>✘ Risposta errata!</span>";
    }
    ?>
</div>
<div class="form-section">
    <label>Cos'è un DBMS?</label><br>
    <?php
    if ($dbms == $correctDBMS) {
        echo "<span class='correct'>✔ Risposta corretta!</span>";
    } else {
        echo "<span class='incorrect'>✘ Risposta errata!</span>";
    }
    ?>
</div>

<div class="form-section">
    <label>Seleziona i tipi di DBMS:</label><br>
    <?php
    $correctAnswer = true;
    foreach ($correctTypes as $type) {
        if (!in_array($type, $types)) {
            $correctAnswer = false;
            break;
        }
    }

    if ($correctAnswer) {
        echo "<span class='correct'>✔ Risposta corretta!</span>";
    } else {
        echo "<span class='incorrect'>✘ Risposta errata!</span>";
    }
    ?>
</div>

<div class="form-section">
    <label>Descrivi cos'è un DBMS:</label><br>
    <p><?= nl2br(htmlspecialchars($openAnswer)) ?></p>
    <h3>Analisi della risposta:</h3>
    <?php
    echo "Numero di parole: " . $analysis['wordCount'] . "<br>";
    echo "Consonanti: " . $analysis['consonants'] . "<br>";
    echo "Vocali: " . $analysis['vowels'] . "<br>";
    echo "Caratteri numerici: " . $analysis['numbers'] . "<br>";
    ?>
</div>

<?php
include 'footer.php';
?>
