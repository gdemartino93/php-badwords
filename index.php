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
            <span>primo esercizio</span>
            <span class="fs-3"> Questo è la stringa da contare: </span>
            <p class="fs-3 text-center text-success fw-bold">
                <?php
                    $text = "Questo è un testo lungo da controllare se contiene la parola da censurare";
                    echo $text;
                ?>
            </p>
            <span class="fs-3">Il totale dei caratteri é:</span>
            <span class="fs-3 fw-bold text-info">
                <?php
                echo strlen($text);
                ?> 
            </span>
        </section>
        <section class="d-flex justify-content-center align-items-center flex-column my-5">
            <span>Secondo esercizio</span>
            <span class="fs-3 text-center text-success fw-bold">
                <?php
                echo $text;
                //Ottenre parola da censurare dalla scimmia
                $toCensor = $_GET["toCensor"]
                ?>
            </span>
            <span class="fs-3"> Risultato: </span>
            <span class="fs-3 fw-bold text-info">
                <?php
                //verificare se la parola ottenuta dalla scimmia è presente nel testo della variabile text
                    if (str_contains($text ,$toCensor)){
                    echo "La parola " . '"' .  $toCensor . '"' . " è presente all'interno del testo" ;
                    }else{
                    echo "La parola " . "'" . $toCensor . "'" . " NON è presente all'interno del testo" ;
                    }
                ?>
            </span>
            <p>
                
            </p>

        </section>

    </main>
</body>
</html>