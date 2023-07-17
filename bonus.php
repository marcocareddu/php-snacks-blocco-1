<!-- # Bonus
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo. -->

<?php
// Get value from GET
$paragraph = $_GET[trim('paragraph')] ?? '';

// Paragraph flag
$paragraph_flag = false;

// Display class flag
$d_none_class = '';

// Check if paragraph includes periods.
if (str_contains($paragraph, '.')) {
    $paragraph = explode('.', $paragraph);
    $paragraph_flag = true;
    $d_none_class = 'd-none';
}
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
    <title>PHP - Bonus</title>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="mt-3 text-center">

            <h1>PHP SNACK - Bonus</h1>

            <!-- Check flag -->
            <?php if ($paragraph_flag) : ?>
                <div class="my-4">
                    <h1>Risultato: </h1>

                    <!-- Print result in DOM  -->
                    <?php foreach ($paragraph as $phrase) : ?>
                        <p><?= $phrase ?></p>
                    <?php endforeach ?>
                </div>

            <?php endif ?>

            <!-- FORM - Hide after check -->
            <div class="pt-3 <?= $d_none_class ?>">
                <div class="pt-3">

                    <h3 class="mb-5">Inserisci il testo</h3>

                    <!-- Basic Form -->
                    <form>
                        <!-- Input Text -->
                        <div class="mb-5">
                            <label for="paragraph" class="form-label">Paragrafo</label>
                            <textarea type="text" minlength="3" class="form-control" id="paragraph" name="paragraph" placeholder="Inserisci del testo con frasi separate da punti."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Verifica</button>
                    </form>

                </div>
            </div>
        </div>
</body>

</html>