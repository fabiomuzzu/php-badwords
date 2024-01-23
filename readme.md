Ciao ragazzi,
Esercizio di oggi: PHP Badwords
nome repo: php-badwords

Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

Svolgimento:
- Creare scaffolding con i 2 file index.php e dashboard.php
- Implementare bootstrap nell'index.php
- Creare in index.php una form con 2 campi: un paragrafo e una parola da censurare
- Inserire i campi action="dashboard.php" e method="GET" nella form per poterla inoltrare alla dashboard.php
- Inserire il tag name="paragrafo" e name="parola" nell'input per poterlo poi recuperare nella dashboard
- Recuperare i parametri GET sulla dashboard all'interno del tag <?PHP ?> utilizzando le variabili $paragraph=$_GET['paragrafo'] e $word=$_GET['parola']
- Utilizzare nella dashboard <?PHP echo $paragraph ?> per stampare a schermo
- Utilizzare nella dashboard <?PHP echo strlen($paragraph) ?> per stampare la lunghezza della variabile
- Nella dashboard in <?PHP creare una nuova variabile $new_paragraph = str_replace($word, '(***)', $paragraph) per sostituire gli asterischi con la parola da censurare
- Riutilizzare echo e strlen su $new_paragraph per stampare nuovamente a schermo.
