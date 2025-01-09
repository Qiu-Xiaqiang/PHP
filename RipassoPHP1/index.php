<?php
include 'header.php';
?>

<h2>Modulo di Domande sui DBMS</h2>
<form method="post" action="risposte.php">
    <div class="form-section">
        <label for="name">Nome:</label>
        <input type="text" name="name" required><br><br>
    </div>

    <div class="form-section">
        <label for="lastName">Cognome:</label>
        <input type="text" name="lastName" required><br><br>
    </div>

    <div class="form-section">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
    </div>

    <div class="form-section">
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
    </div>

    <div class="form-section">
        <label>Ti piace il DBMS?</label><br>
        <input type="radio" name="dbms" value="No per niente" required> No per niente<br>
        <input type="radio" name="dbms" value="Si troppo "> Si troppo<br>
        <input type="radio" name="dbms" value="Mi piace la banana"> BananaGioooooooooooo<br><br>
    </div>

    <div class="form-section">
        <label>Cos'è un DBMS?</label><br>
        <input type="radio" name="dbms" value="Sistema di gestione di database" required> Sistema di gestione di database<br>
        <input type="radio" name="dbms" value="Documento di memorizzazione dati"> Documento di memorizzazione dati<br>
        <input type="radio" name="dbms" value="Sistema operativo"> Sistema operativo<br><br>
    </div>

    <div class="form-section">
        <label>Seleziona i tipi di DBMS:</label><br>
        <input type="checkbox" name="types[]" value="Relazionale"> Relazionale<br>
        <input type="checkbox" name="types[]" value="Gerarchico"> Gerarchico<br>
        <input type="checkbox" name="types[]" value="Flowgorithm"> Flowgoritmo<br>
        <input type="checkbox" name="types[]" value="Informatica"> Informatica<br>
        <input type="checkbox" name="types[]" value="Reticolare"> Reticolare<br><br>
    </div>

    <div class="form-section">
        <label for="openAnswer">Descrivi cos'è un DBMS:</label><br>
        <textarea name="openAnswer" rows="5" cols="40" placeholder="Scrivi la tua risposta qui..." required></textarea><br><br>
    </div>

    <input type="submit" value="Invia risposte">
</form>

<?php
include 'footer.php';
?>
