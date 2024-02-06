<?php
// classe per tipo di animale se gatto o cane
class categoria
{
    private $tipoAnimale;
    public function __construct(
        $tipoAnimale
    ) {
        $this->tipoAnimale = $tipoAnimale;
    }

    public function getTipoAnimale()
    {
        return $this->tipoAnimale;
    }
    public function setTipoAnimale($tipoAnimale)
    {
        $this->tipoAnimale = $tipoAnimale;
    }
}

