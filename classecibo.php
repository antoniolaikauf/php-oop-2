<?php
require_once('prodottosingolo.php');

// classe per cibo
class cibo extends prodottoSingolo
{


    // proprietà specifica per classe cibo
    private $tipoCibo;
    // aggiunto classe per tipo animale file categoria.php
    private $tipoCategoria;

    public function __construct(
        $tipoCibo,
        $immagine,
        $prezzo,
        $nome,
        $tipoProdotto,
        categoria $tipoCategoria,
        // proprietà dentro recensione

    ) {
        $this->setTipoCibo($tipoCibo);
        $this->setTipoCategoria($tipoCategoria);
        // proprietà di classe prodotto singolo
        $this->setImmagine($immagine);
        $this->setPrezzo($prezzo);
        $this->setNome($nome);
        $this->setTipoProdotto($tipoProdotto);
    }
    // function per manipolare le proprietà/utilizzarle
    public function getTipoCibo()
    {

        return $this->tipoCibo;
    }
    public function setTipoCibo($tipoCibo)
    {

        $this->tipoCibo = $tipoCibo;
    }

    public function getTipoCategoria()
    {

        return $this->tipoCategoria;
    }
    public function setTipoCategoria($tipoCategoria)
    {

        $this->tipoCategoria = $tipoCategoria;
    }
}
