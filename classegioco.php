<?php
require_once('prodottosingolo.php');
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
