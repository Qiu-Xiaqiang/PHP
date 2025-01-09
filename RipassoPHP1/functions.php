<?php

// Funzione per analizzare la risposta aperta
function AnalizzaRisposte($answer) {
    // Conta le parole
    $wordCount = str_word_count($answer);

    // Inizializzo i contatori per consonanti, vocali e numeri
    $consonants = 0;
    $vowels = 0;
    $numbers = 0;

    // Ciclo su ogni carattere della risposta
    foreach (str_split($answer) as $char) {
        // Verifica se è una consonante
        if (preg_match('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $char)) {
            $consonants++;
        }
        // Verifica se è una vocale
        elseif (preg_match('/[aeiouAEIOU]/', $char)) {
            $vowels++;
        }
        // Verifica se è un numero
        elseif (is_numeric($char)) {
            $numbers++;
        }
    }

    // Ritorno i risultati in un array
    return [
        'wordCount' => $wordCount,
        'consonants' => $consonants,
        'vowels' => $vowels,
        'numbers' => $numbers
    ];
}
?>
