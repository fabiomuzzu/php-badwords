<?php 
    // recupero i dati paragrafo e parola da index.php con l'utilizzo di GET
    $paragraph=$_GET['paragrafo'];
    $word=$_GET['parola'];
    // utilizzo di str_replace per sostiuire la word con gli asterischi all'interno di paragraph
    $new_paragraph = str_replace($word, '***', $paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-4 ">
                <h2>Testo NON censurato</h2>
            </div>
            <div class="col-12 text-center">
                <div class="fs-5">
                    <!-- utilizzo di echo per stampare a schermo la variabile paragraph -->
                    <?php echo $paragraph ?>
                </div>
                <div class="fs-5 my-2">
                    <!-- utilizzo di strlen per stampare la lunghezza della variabile paragraph -->
                    Lunghezza del paragrafo: <?php echo strlen($paragraph) ?> caratteri
                </div>
            </div>
            <div class="col-12 text-center my-4 ">
                <h2>Testo censurato</h2>
            </div>
            <div class="class-12 text-center">
                <div class="fs-5">
                    <!-- utilizzo di echo per stampare a schermo la variabile new_paragraph -->
                    <?php echo $new_paragraph ?>
                </div>
                <div class="fs-5 my-2">
                    <!-- utilizzo di strlen per stampare la lunghezza della variabile new_paragraph -->
                    Lunghezza del paragrafo: <?php echo strlen($new_paragraph) ?> caratteri
                </div>
            </div>
        </div>
    </div>
</body>
</html>