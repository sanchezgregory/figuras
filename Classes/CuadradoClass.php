<?php

/**
 * Usando el patrón Factory, se instancia el objeto resultado de manera transparente, de esa manera se reutiliza dicho objeto para mostrar todos los resultados.
 */
class Cuadrado extends Figura
{
    public function calcular($dat)
    {
    	$res = $dat['lado']*$dat['lado'];
    	$dat['area'] = $res;
    	$dat['caractaristicas'] = "Lado: ".$dat['lado'];
    	
        return new Resultado($dat);
    }
}