<?php 
    require_once __DIR__ . '/models/Product.php'
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuma-Galli Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>
    <header>
        <h1 class='fw-bold text-center text-uppercase'>Lista</h1>
    </header>

    <main>
        <?php 
            $imgPath='https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fe7.pngegg.com%2Fpngimages%2F470%2F4%2Fpng-clipart-mcdonald-s-chicken-mcnuggets-chicken-nugget-hamburger-chicken-fingers-fast-food-mozza-stick.png&f=1&nofb=1&ipt=7d10905c36034b742a6aeed9b128bbe6cf8fcfcf395306d6b4119cd41c5dd95f&ipo=images
            ';
            $croccantini = new Food('croccantini',5.5,80320890000321,$imgPath,'felix','cat','chicken','11/11/11');
        ?>


        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <img src="<?php echo $croccantini->imgLink ?>" alt="" class='img-fluid'>

                <img src="<?php echo $croccantini->getImage() ?>" alt="" class='img-fluid'>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item text-center">Codice a barre: <?php echo $croccantini->getId() ?></li>
                <li class="list-group-item text-center">Prodotto: <?php echo $croccantini->getName() ?></li>
                <li class="list-group-item text-center">Prezzo <?php echo $croccantini->getPrice() ?>&euro;</li>
            </ul>
        </div>
    </main>
</body>

</html>