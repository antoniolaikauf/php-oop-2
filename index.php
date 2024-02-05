<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php    // importazione dei file 
    require_once('prodottosingolo.php');
    require_once('categorie.php');
    ?>
    <title>card prodotti</title>
</head>

<body>
    <?php
    // classe per tipo di prodotto
    class prodotti extends prodottosingolo
    {

        private $tipoprodotto;
        // aggiunto classe per tipo animale
        private $tipocategoria;

        public function __construct(
            $tipoprodotto,
            $immagine,
            $prezzo,
            $nome,
            categoria $tipocategoria
        ) {
            $this->settipoprodotto($tipoprodotto);
            $this->setimmagine($immagine);
            $this->setprezzo($prezzo);
            $this->setnome($nome);
            $this->settipoCategoria($tipocategoria);
        }
        public function gettipoprodotto()
        {

            return $this->tipoprodotto;
        }
        public function settipoprodotto($tipoprodotto)
        {

            $this->tipoprodotto = $tipoprodotto;
        }
        public function gettipocategoria()
        {

            return $this->tipocategoria;
        }
        public function settipoCategoria($tipocategoria)
        {

            $this->tipocategoria = $tipocategoria;
        }
    }

    // array con dentro i rodotti 
    $prodotti = [
        new prodotti('giocattolo', 'immaginiprodotto/palla.jpg', '50 $', 'palla', $categoriacane),
        new prodotti('cibo', 'immaginiprodotto/cibocane.jpg', '20 $', 'croccantini', $categoriacane),
        new prodotti('cuccia', 'immaginiprodotto/immaginicucciagatto.jpg', '20 $', 'cuccia per gatti', $categoriagatto),
    ];
    // var_dump($categoria);
    // var_dump($prodotti);

    ?>

    <div class="container">
        <div class="row">
            <!-- ciclo su array di prodotti -->
            <?php foreach ($prodotti as $card) {

            ?>
                <div class="col-6 text-center border">
                    <div class="d-flex justify-content-center align-items-center">
                        <span>tipo articolo:</span>
                        <h1><?php echo $card->gettipoprodotto() ?></h1>
                    </div>
                    <div> articolo per: <?php echo $card->gettipocategoria()->gettipoanimale() ?></div>
                    <div> <?php echo $card->getnome() ?></div>
                    <img style="width: 50%;" src="<?php echo $card->getimmagine(); ?>" alt="Descrizione dell'immagine">
                    <div> prezzo articolo: <?php echo $card->getprezzo() ?></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

</html>