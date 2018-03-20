<?php
class resultado
{
    private $res, $figura, $caractaristicas;

    public function __construct($dat)
    {
        $this->res = $dat['area'];
        $this->figura = $dat['figura'];
        $this->caractaristicas = $dat['caractaristicas'];
    } 
    public function imprimir()
    {
         return "La figura {$this->figura} tiene las siguientes caractaristicas: {$this->caractaristicas} Superficie = {$this->res}";
    }
}