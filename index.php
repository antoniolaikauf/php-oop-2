<?php
// classe con dentro dei tipi di prodotti
class prodotti
{
    private $cibo;
    private $giochi;
    private $cuccie;

    public function __construct(
        $cibo,
        $giochi,
        $cuccie
    ) {

        $this->setcibo($cibo);
        $this->setgiochi($giochi);
        $this->setcuccie($cuccie);
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
}
$prodotti = new prodotti('carne', 'pupazzo', "cuccia all'aperto");
var_dump($prodotti);
