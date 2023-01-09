<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Bad Words</title>
</head>
<body>
    <main >
        <section class="d-flex justify-content-center align-items-center flex-column">
            <span class="fs-3"> Questo è la stringa da contare: </span>
            <p class="fs-3 text-center text-success fw-bold">
                <?php
                    $testo = "asd";
                    echo $testo;
                ?>
            </p>
            <span class="fs-3">Il totale dei caratteri é:</span>
            <span class="fs-3 fw-bold text-danger">
                <?php
                    echo strlen($testo);
                ?> 
            </span>
        </section>

    </main>
</body>
</html>