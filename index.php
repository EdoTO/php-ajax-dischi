<?php 
    include __DIR__.'/db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php dischi</title>
</head>
<body>

    <main>

        <section>

            <figure>
                <img class="logo" src="spotify.png" alt="">
            </figure>

            <div class="container">
                <div class="cd-wrapper">
                    <?php 
                    
                        foreach($dischi as $disc):

                    ?>

                    <div class="card">
                        <figure class="card-thumb">
                            <img src="<?=$disc['poster']?>" alt="">
                        </figure>

                        <div class="card-info">
                            <h3><?= $disc['title'] ?></h3>
                            <p><?= $disc['author']?></p>
                            <p><?= $disc['year']?></p>
                        </div>
                    </div>

                    <?php

                        endforeach;
                    ?>
                </div>
            </div>
        </section>

    </main>

</body>
</html>