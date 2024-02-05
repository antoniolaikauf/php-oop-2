<?php
require_once('prodottosingolo.php');


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
