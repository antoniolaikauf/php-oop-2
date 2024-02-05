<?php
// classe per tipo di animale se gatto o cane
class categoria
{
    private $tipoanimale;
    public function __construct(
        $tipoanimale
    ) {
        $this->tipoanimale = $tipoanimale;
    }

    public function gettipoanimale()
    {
        return $this->tipoanimale;
    }
    public function settipoanimale($tipoanimale)
    {
        $this->tipoanimale = $tipoanimale;
    }
}

// due tipi di categoria di animale 
$categoriagatto = new categoria('gatto');
$categoriacane = new categoria('cane');
