<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <main>
        <p>
            <?php
                $testo = "asd";
                echo $testo;
            ?>
        </p>
        <span>Il totale dei caratteri é:</span>
        <span>
            <?php
                echo strlen($testo);
            ?> 
        </span>

    </main>
</body>
</html>