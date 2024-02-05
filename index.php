<?php
// classe con dentro dei tipi di prodotti
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
class prodotti 
{
    private $cibo;
    private $giochi;
    private $cuccie;
    private $categoria;

    public function __construct(
        $cibo,
        $giochi,
        $cuccie,
        $categoria,
    ) {

        $this->setcibo($cibo);
        $this->setgiochi($giochi);
        $this->setcuccie($cuccie);
        $this->setcategoria($categoria);
    }

    // metodi per cambiare le proprietà private
    public function getcibo()
    {

        return $this->cibo;
    }
    public function setcibo($cibo)
    {

        $this->cibo = $cibo;
    }
    public function getgiochi()
    {

        return $this->giochi;
    }
    public function setgiochi($giochi)
    {

        $this->giochi = $giochi;
    }
    public function getcuccie()
    {

        return $this->cuccie;
    }
    public function setcuccie($cuccie)
    {

        $this->cuccie = $cuccie;
    }
    public function getcategoria()
    {

        return $this->categoria;
    }
    public function setcategoria($categoria)
    {

        $this->categoria = $categoria;
    }
}


$prodotti = new prodotti('carne', 'pupazzo', "cuccia all'aperto", 'cane');
$prodotto = new prodottosingolo('immagine', '50 $', 'casagiocattolo');
var_dump($prodotti);
// echo "<br><br>";
// var_dump($prodotto);
