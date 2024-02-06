<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js" integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php
    // importazione dei file 
    require_once('categorie.php');
    require_once('classegioco.php');
    require_once('classecibo.php');
    require_once('classecuccia.php');

    $jsonAccount = file_get_contents("account.json");
    $account = json_decode($jsonAccount, true);
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
            <div class="col-12">
                <form>
                    <input type="text" name="name" class="nomeaccount">
                    <input type="text" name="cognome" class="cognomeaccount">
                    <input type="submit" value="iscriviti" class="creazione-account">
                </form>
            </div>
            <!-- ciclo su array di prodotti -->
            <?php foreach ($prodotti as $card) {

            ?>
                <div class="col-6 text-center border">
                    <div class="d-flex justify-content-center align-items-center">
                        <span>tipo articolo:</span>
                        <!-- controlli se esistono le proprietà nella classecibo,classegioco,classecuccia -->
                        <?php
                        if (property_exists($card, 'nocivoPerAnimali')) {
                        ?>
                            <div><?php echo $card->getNocivoPerAnimali() ?></div>
                        <?php }
                        ?>
                        <?php
                        if (property_exists($card, 'tipoCibo')) {
                        ?>
                            <div><?php echo $card->getTipoCibo() ?></div>
                        <?php }
                        ?>
                        <?php
                        if (property_exists($card, 'formaCuccia')) {
                        ?>
                            <div><?php echo $card->getFormaCuccia() ?></div>
                        <?php }
                        ?>
                    </div>
                    <!-- proprieta appartenente a proprietàsingolo -->
                    <div> <?php echo $card->getTipoProdotto() ?></div>
                    <!-- proprietà appartenente a categorie -->
                    <div> articolo per: <?php echo $card->getTipoCategoria()->getTipoAnimale() ?></div>
                    <!-- proprietà appartenente a prodottosingolo -->
                    <div> <?php echo $card->getNome() ?></div>
                    <!-- proprietà appartenente a prodottosingolo -->
                    <img style="width: 50%;" src="<?php echo $card->getImmagine(); ?>" alt="immagine prodotto">
                    <!-- proprietà appartenente a prodottosingolo -->

                    <?php
                    if ($account[0]['registrato']) {

                    ?>
                        <div> prezzo articolo: <?php echo $card->getPrezzo() -  $card->getPrezzo() / 100 * 20;  ?></div>
                    <?php } else {
                    ?>
                        <div> prezzo articolo: <?php echo $card->getPrezzo() ?></div>
                    <?php
                    }
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script>
        // evento click
        let account = document.querySelector('.creazione-account');
        account.addEventListener('click', function(event) {
            event.preventDefault();

            // valore dento input 
            let nome = document.querySelector('.nomeaccount').value
            let cognome = document.querySelector('.cognomeaccount').value
            const params = {
                params: {
                    nome: nome,
                    cognome: cognome,
                }

            };


            // chiamata api
            axios.get('http://localhost/php-oop-2/iscrizione.php', params)
                .then((risposta) => {
                    console.log(risposta.data);
                })
                .catch((error) => {
                    console.error(error);
                });

        })
    </script>
</body>

</html>