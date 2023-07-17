<!-- # Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php



?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <title>PHP - Snack 1</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="mt-3 text-center">

            <h1>PHP SNACK - 2</h1>
            <div class="pt-3">
                <div class="pt-3">
                    <h3 class="mb-5">Inserisci i dati richiesti per la verifica</h3>

                    <!-- Basic Form -->
                    <form>

                        <!-- Input Name -->
                        <div class="mb-5">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tuo nome">
                            <div class="form-text">Il nome deve essere più lungo di 3 caratteri</div>
                        </div>

                        <!-- Input Email -->
                        <div class="mb-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua email">
                            <div class="form-text">La mail deve contenere un . ed una @</div>
                        </div>

                        <!-- Input Age -->
                        <div class="mb-5">
                            <label for="age" class="form-label">Età</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="Inserisci la tua età">
                            <div class="form-text">Età deve essere un numero</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Verifica</button>
                    </form>

                </div>
            </div>
        </div>
</body>

</html>