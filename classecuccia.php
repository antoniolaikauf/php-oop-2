<?php
require_once('prodottosingolo.php');
// classe per articoli cuccia
class cuccia extends prodottoSingolo
{

    private $formaCuccia;
    // aggiunto classe per tipo animale
    private $tipoCategoria;

    public function __construct(
        $formaCuccia,
        $immagine,
        $prezzo,
        $nome,
        $tipoProdotto,
        categoria $tipoCategoria
    ) {
        $this->setFormaCuccia($formaCuccia);
        $this->setTipoCategoria($tipoCategoria);
        // proprietà in classe prodottosingolo
        $this->setImmagine($immagine);
        $this->setPrezzo($prezzo);
        $this->setNome($nome);
        $this->setTipoProdotto($tipoProdotto);
    }
    public function getFormaCuccia()
    {

        return $this->formaCuccia;
    }
    public function setFormaCuccia($formaCuccia)
    {

        $this->formaCuccia = $formaCuccia;
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
