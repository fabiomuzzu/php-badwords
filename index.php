<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-3">
                    <h1>Badwords</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="container">
            <!-- Form con due campi, action e method per trasmettere i dati alla dashboard -->
            <form action="dashboard.php" method="GET">
                <div class="row">
                    <div class="col-6 py-3">
                        <div class="col-12 text-center">
                            <label for="control-label">Paragrafo</label>
                        </div>
                        <!-- il parametro name è utilizzato per il passaggio di dati a dashboard.php -->
                        <input class="form-control" name="paragrafo" type="text" placeholder="Paragrafo" required>
                    </div>
                    <div class="col-6 py-3">
                        <div class="col-12 text-center">
                            <label class="text-center" for="control-label">Badword</label>
                        </div>
                        <!-- il parametro name è utilizzato per il passaggio di dati a dashboard.php -->
                        <input class="form-control" name="parola" type="text" placeholder="Badword" required>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-sm btn-success">Invia</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>