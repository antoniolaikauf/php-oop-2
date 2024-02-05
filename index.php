<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    // importazione dei file 
    require_once('categorie.php');
    require_once('classegioco.php');
    require_once('classecibo.php');
    require_once('classecuccia.php');
    ?>
    <title>card prodotti</title>
</head>

<body>
    <?php
    // array con dentro i rodotti 
    $prodotti = [
        new gioco('non nocivo per animali', 'immaginiprodotto/palla.jpg', '50 $', 'palla', 'gioco', $categoriacane),
        new cibo('croccantini', 'immaginiprodotto/cibocane.jpg', '20 $', 'croccantini', 'cibo', $categoriacane),
        new cuccia('cuccia rettangolare', 'immaginiprodotto/immaginicucciagatto.jpg', '20 $', 'cuccia per gatti', 'cuccia', $categoriagatto),
        new cuccia('cuccia rettangolare', 'immaginiprodotto/immaginicucciagatto.jpg', '20 $', 'cuccia per cani ', 'cuccia', $categoriacane),
    ];
    ?>

    <div class="container">
        <div class="row">
            <!-- ciclo su array di prodotti -->
            <?php foreach ($prodotti as $card) {

            ?>
                <div class="col-6 text-center border">
                    <div class="d-flex justify-content-center align-items-center">
                        <span>tipo articolo:</span>
                        <!-- controlli se esistono le proprietà nella classe -->
                        <?php
                        if (property_exists($card, 'nocivoperanimali')) {
                        ?>
                            <div><?php echo $card->getnocivoperanimali() ?></div>
                        <?php }
                        ?>
                        <?php
                        if (property_exists($card, 'tipocibo')) {
                        ?>
                            <div><?php echo $card->gettipocibo() ?></div>
                        <?php }
                        ?>
                        <?php
                        if (property_exists($card, 'formacuccia')) {
                        ?>
                            <div><?php echo $card->getformacuccia() ?></div>
                        <?php }
                        ?>
                    </div>
                    <div> <?php echo $card->getTipoProdotto() ?></div>
                    <div> articolo per: <?php echo $card->gettipocategoria()->gettipoanimale() ?></div>
                    <div> <?php echo $card->getnome() ?></div>
                    <img style="width: 50%;" src="<?php echo $card->getimmagine(); ?>" alt="immagine prodotto">
                    <div> prezzo articolo: <?php echo $card->getprezzo() ?></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>
<?php if (property_exists($card, 'tipocategoria')) {
    var_dump('cia');
} ?>