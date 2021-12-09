<?php

require __DIR__ . "/database.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax-Dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
</head>

<body>
    <header>
        <img class="logo" src="https://loghi-famosi.com/wp-content/uploads/2020/09/Logo-della-Spotify.png" alt="">
    </header>
    <main>
        <div class="d-flex flex-wrap justify-content-center">
                <?php foreach ($database as $data) { ?>
                    <div class="card text-center">
                        <img src="<?php echo "{$data["poster"]}"; ?>" alt="">
                        <h3><?php echo "{$data["title"]}"; ?></h3>
                        <p><?php echo "{$data["author"]}"; ?></p>
                        <p><?php echo "{$data["year"]}"; ?></p>
                    </div>
                <?php } ?>
        </div>
    </main>
    <footer></footer>
</body>

</html>