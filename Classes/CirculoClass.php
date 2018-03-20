<?php
class Circulo extends Figura
{
    public function calcular($dat)
    {
    	$radio = $dat['diametro']/2;
    	$radio2 = $radio * $radio;
    	$res = 3.14 * $radio2;
    	$dat['area'] = $res;
    	$dat['caractaristicas'] = "Radio: ".$radio;
    	
        return new Resultado($dat);
    }
}