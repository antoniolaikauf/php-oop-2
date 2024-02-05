<?php
require_once('prodottosingolo.php');
// classe per gioco
class gioco extends prodottoSingolo
{

    private $nocivoPerAnimali;
    // aggiunto classe per tipo animale
    private $tipoCategoria;

    public function __construct(
        $nocivoPerAnimali,
        $immagine,
        $prezzo,
        $nome,
        $tipoProdotto,
        categoria $tipoCategoria
    ) {
        $this->setnocivoPerAnimali($nocivoPerAnimali);
        $this->setimmagine($immagine);
        $this->setprezzo($prezzo);
        $this->setnome($nome);
        $this->setTipoProdotto($tipoProdotto);
        $this->settipoCategoria($tipoCategoria);
    }
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
