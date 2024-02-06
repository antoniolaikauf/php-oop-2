<?php
require_once('prodottosingolo.php');

// classe per gioco
class gioco extends prodottoSingolo
{

    // proprietà specifica per classe gioco
    private $nocivoPerAnimali;
    // aggiunto classe per tipo animale file categoria.php
    private $tipoCategoria;

    public function __construct(
        $nocivoPerAnimali,
        $immagine,
        $prezzo,
        $nome,
        $tipoProdotto,
        categoria $tipoCategoria,
        // proprietà dentro recensione

    ) {
        $this->setnocivoPerAnimali($nocivoPerAnimali);
        $this->settipoCategoria($tipoCategoria);
        // proprietà in classe prodottosingolo
        $this->setimmagine($immagine);
        $this->setprezzo($prezzo);
        $this->setnome($nome);
        $this->setTipoProdotto($tipoProdotto);
    }
    // function per manipolare le proprietà/utilizzarle
    public function getNocivoPerAnimali()
    {

        return $this->nocivoPerAnimali;
    }
    public function setNocivoPerAnimali($nocivoPerAnimali)
    {

        $this->nocivoPerAnimali = $nocivoPerAnimali;
    }
    public function gettipoCategoria()
    {

        return $this->tipoCategoria;
    }
    public function settipoCategoria($tipoCategoria)
    {

        $this->tipoCategoria = $tipoCategoria;
    }
}
