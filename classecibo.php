<?php
require_once('prodottosingolo.php');


// classe per cibo
class cibo extends prodottoSingolo
{

    private $tipoCibo;
    // aggiunto classe per tipo animale
    private $tipoCategoria;

    public function __construct(
        $tipoCibo,
        $immagine,
        $prezzo,
        $nome,
        $tipoProdotto,
        categoria $tipoCategoria
    ) {
        $this->setTipoCibo($tipoCibo);
        $this->setImmagine($immagine);
        $this->setPrezzo($prezzo);
        $this->setNome($nome);
        $this->setTipoProdotto($tipoProdotto);
        $this->setTipoCategoria($tipoCategoria);
    }
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
