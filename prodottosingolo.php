<?php

// caratteristiche prodotto singolo
class prodottoSingolo
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
        $this->seTimmagine($immagine);
        $this->setPrezzo($prezzo);
        $this->setNome($nome);
        $this->setTipoProdotto($tipoProdotto);
    }
    // rese proprietà pubbliche in modo che si possano manipolare e prendere
    public function getImmagine()
    {

        return $this->immagine;
    }
    public function setImmagine($immagine)
    {

        $this->immagine = $immagine;
    }
    public function getPrezzo()
    {

        return $this->prezzo;
    }
    public function setPrezzo($prezzo)
    {

        $this->prezzo = $prezzo;
    }
    public function getNome()
    {

        return $this->nome;
    }
    public function setNome($nome)
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
