<?php

require __DIR__ . '/assets/templates/movies.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PHP-OOP-1</title>
</head>
<body>
        <header>
            <h1>MOVIES</h1>
        </header>

        <main>
            <div class="movies">
                <?php foreach ($movies as $movie) : ?>
                <div class="moviecard">
                    <span>Titolo: </span> <h3>
                        <?= $movie -> title; ?>
                    </h3>
                    <span>Durata: </span> <h4>
                        <?= $movie -> duration; ?>
                    </h4>
                    <span>Anno di uscita: </span><h4>
                        <?= $movie -> year; ?>
                    </h4>
                    <span>Genere: </span><h4>
                        <?= $movie -> genre; ?>
                    </h4>
                </div>
            </div>
            <?php endforeach; ?>        
        </main>
    
</body>
</html>