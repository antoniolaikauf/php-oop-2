<?php

// caratteristiche prodotto singolo
class prodottosingolo
{
    // proprietà
    private $immagine;
    private $prezzo;
    private $nome;
    private $tipoProdotto;
    // prese delle proprietà
    public function __construct(
        $immagine,
        $prezzo,
        $nome,
        $tipoProdotto
    ) {
        $this->setimmagine($immagine);
        $this->setprezzo($prezzo);
        $this->setnome($nome);
        $this->setTipoProdotto($tipoProdotto);
    }
    // rese proprietà pubbliche in modo che si possano manipolare e prendere
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
    public function getTipoProdotto()
    {

        return $this->tipoProdotto;
    }
    public function setTipoProdotto($tipoProdotto)
    {

        $this->tipoProdotto = $tipoProdotto;
    }
}
