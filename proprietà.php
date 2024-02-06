<?php
trait attributi
{
    private $immagine;
    private $prezzo;
    private $nome;
    private $tipoProdotto;

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
        // controllo
        if (!is_int($prezzo)) {
            throw new Exception(" $prezzo non è un numero/ stringa , in prezzo ci deve essere un numero");
        }
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
    // funzione per modificare il prezzo
    public function prezzoScontato($prezzo)
    {
        return $prezzo - $prezzo / 100 * 20;
    }
}
