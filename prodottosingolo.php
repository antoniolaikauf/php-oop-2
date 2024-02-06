<?php
require_once('proprietà.php');
// caratteristiche prodotto singolo
class prodottoSingolo
{
    use attributi;
    // proprietà

    public function __construct(
        $immagine,
        $prezzo,
        $nome,
        $tipoProdotto,
    ) {
        $this->seTimmagine($immagine);
        $this->setPrezzo($prezzo);
        $this->setNome($nome);
        $this->setTipoProdotto($tipoProdotto);
    }
}
