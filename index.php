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
    // classe per gioco
    class gioco extends prodottosingolo
    {

        private $nocivoperanimali;
        // aggiunto classe per tipo animale
        private $tipocategoria;

        public function __construct(
            $nocivoperanimali,
            $immagine,
            $prezzo,
            $nome,
            $tipoProdotto,
            categoria $tipocategoria
        ) {
            $this->setnocivoperanimali($nocivoperanimali);
            $this->setimmagine($immagine);
            $this->setprezzo($prezzo);
            $this->setnome($nome);
            $this->setTipoProdotto($tipoProdotto);
            $this->settipoCategoria($tipocategoria);
        }
        public function getnocivoperanimali()
        {

            return $this->nocivoperanimali;
        }
        public function setnocivoperanimali($nocivoperanimali)
        {

            $this->nocivoperanimali = $nocivoperanimali;
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

    // classe per cibo
    class cibo extends prodottosingolo
    {

        private $tipocibo;
        // aggiunto classe per tipo animale
        private $tipocategoria;

        public function __construct(
            $tipocibo,
            $immagine,
            $prezzo,
            $nome,
            $tipoProdotto,
            categoria $tipocategoria
        ) {
            $this->settipocibo($tipocibo);
            $this->setimmagine($immagine);
            $this->setprezzo($prezzo);
            $this->setnome($nome);
            $this->setTipoProdotto($tipoProdotto);
            $this->settipoCategoria($tipocategoria);
        }
        public function gettipocibo()
        {

            return $this->tipocibo;
        }
        public function settipocibo($tipocibo)
        {

            $this->tipocibo = $tipocibo;
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
    // classe per articoli cuccia
    class cuccia extends prodottosingolo
    {

        private $formacuccia;
        // aggiunto classe per tipo animale
        private $tipocategoria;

        public function __construct(
            $formacuccia,
            $immagine,
            $prezzo,
            $nome,
            $tipoProdotto,
            categoria $tipocategoria
        ) {
            $this->setformacuccia($formacuccia);
            $this->setimmagine($immagine);
            $this->setprezzo($prezzo);
            $this->setnome($nome);
            $this->setTipoProdotto($tipoProdotto);
            $this->settipoCategoria($tipocategoria);
        }
        public function getformacuccia()
        {

            return $this->formacuccia;
        }
        public function setformacuccia($formacuccia)
        {

            $this->formacuccia = $formacuccia;
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
        new gioco('non nocivo per animali', 'immaginiprodotto/palla.jpg', '50 $', 'palla', 'gioco', $categoriacane),
        new cibo('croccantini', 'immaginiprodotto/cibocane.jpg', '20 $', 'croccantini', 'cibo', $categoriacane),
        new cuccia('cuccia rettangolare', 'immaginiprodotto/immaginicucciagatto.jpg', '20 $', 'cuccia per gatti', 'cuccia', $categoriagatto),
        new cuccia('cuccia rettangolare', 'immaginiprodotto/immaginicucciagatto.jpg', '20 $', 'cuccia per cani ', 'cuccia', $categoriacane),
    ];
    // var_dump($categoria);
    // var_dump($ciao);

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