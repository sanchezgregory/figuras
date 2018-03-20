<?php
class Triangulo extends Figura
{
    public function calcular($dat)
    {
    	$res = ($dat['base'] * $dat['altura']) / 2;
    	$dat['area'] = $res;
    	$dat['caractaristicas'] = "Base: ".$dat['base']." Altura: ".$dat['altura'];
    	
    	return new Resultado($dat);
    }
}