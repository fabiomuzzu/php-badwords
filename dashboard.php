<?php 
    // recupero i dati paragrafo e parola da index.php con l'utilizzo di GET
    $paragraph=$_GET['paragrafo'];
    $word=$_GET['parola'];
    // utilizzo di str_replace per sostiuire la word con gli asterischi all'interno di paragraph
    $new_paragraph = str_replace($word, '(***)', $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <!-- utilizzo di echo per stampare a schermo la variabile paragraph -->
        <?php echo $paragraph ?>
    </div>
    <div>
        <!-- utilizzo di strlen per stampare la lunghezza della variabile paragraph -->
        Lunghezza del paragrafo: <?php echo strlen($paragraph) ?> caratteri
    </div>
</body>
</html>