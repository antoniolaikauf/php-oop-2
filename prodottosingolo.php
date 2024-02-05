<?php

// caratteristiche prodotto singolo
class prodottosingolo
{
    private $immagine;
    private $prezzo;
    private $nome;

    public function __construct(
        $immagine,
        $prezzo,
        $nome
    ) {
        $this->setimmagine($immagine);
        $this->setprezzo($prezzo);
        $this->setnome($nome);
    }
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
}
