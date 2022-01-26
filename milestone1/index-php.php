<?php 
   require __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img class="logo" src="./img/spotify-logo.png" alt="">
    </header>

    <main>
        <div class="my_container">
            <?php foreach($database as $posts) {?>
                <div class="card">
                    <img src=<?php echo $posts['poster'] ?> alt="">
                    <h2> <?php echo $posts['title']?> </h2>
                    <h4> <?php echo $posts['author']?> </h4>
                    <h4> <?php echo $posts['year']?> </h4>
                </div>
            <?php }?>    
        </div>
    </main>
    
</body>
</html>


<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente
 i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->