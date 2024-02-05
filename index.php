<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>card prodotti</title>
</head>

<body>
    <?php

    // caratteristiche prodotto singolo
    class prodottosingolo
    {
        private $immagine;
        private $prezzo;
        private $nome;

        public function __construct(
            $immagine,
            $prezzo,
            $nome
        ) {
            $this->setimmagine($immagine);
            $this->setprezzo($prezzo);
            $this->setnome($nome);
        }
        public function getimmagine()
        {

            return $this->immagine;
        }
        public function setimmagine($immagine)
        {

            $this->immagine = $immagine;
        }
        public function getprezzo()
        {

            return $this->prezzo;
        }
        public function setprezzo($prezzo)
        {

            $this->prezzo = $prezzo;
        }
        public function getnome()
        {

            return $this->nome;
        }
        public function setnome($nome)
        {

            $this->nome = $nome;
        }
    }
    // classe per tipo di prodotto
    class prodotti extends prodottosingolo
    {

        private $tipoprodotto;
        // aggiunto classe 
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
        public function gettipoCategoria()
        {

            return $this->tipocategoria;
        }
        public function settipoCategoria($tipocategoria)
        {

            $this->tipocategoria = $tipocategoria;
        }
    }
    // classe per tipo di animale se gatto o cane
    class categoria
    {
        private $tipoanimale;
        public function __construct(
            $tipoanimale
        ) {
            $this->tipoanimale = $tipoanimale;
        }

        public function gettipoanimale()
        {
            return $this->tipoanimale;
        }
        public function settipoanimale($tipoanimale)
        {
            $this->tipoanimale = $tipoanimale;
        }
    }


    $categoria = new categoria('gatto');
    $prodotti = new prodotti('pupazzo', 'immagine', '50 $', 'casagiocattolo', $categoria);
    // $prodotto = new prodottosingolo('immagine', '50 $', 'casagiocattolo');
    // var_dump($categoria);
    // var_dump($prodotti);
    ?>

</body>

</html>