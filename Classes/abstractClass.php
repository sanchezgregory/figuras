<?php 

abstract class Figura
{
    protected abstract function calcular($dat);

    public function newCalc($valores)
    {
        return $this->calcular($valores)->imprimir($valores['figura']);
    }
}