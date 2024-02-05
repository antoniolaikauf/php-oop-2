<?php
require_once('prodottosingolo.php');
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
