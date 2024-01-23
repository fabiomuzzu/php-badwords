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
            <div class="row">
                <!-- Form con due campi, action e method per trasmettere i dati alla dashboard -->
                <form action="dashboard.php" method="GET">
                    <div class="col-6 py-3">
                        <label for="control-label">Paragrafo</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-6 py-3">
                        <label for="control-label">Badword</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="col-12">

                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>