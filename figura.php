<?php 
require_once('Classes/abstractClass.php');
require_once('Classes/CuadradoClass.php');
require_once('Classes/TrianguloClass.php');
require_once('Classes/CirculoClass.php');
require_once('Classes/ResultadoClass.php');


$vec = [
    'base' => $_REQUEST['base'],
    'altura' => $_REQUEST['altura'],
    'lado' => $_REQUEST['lado'],
    'diametro' => $_REQUEST['diametro']
];

// Inicialización de la variable respuesta, la cual será enviada via ajax para presentar en la vista
$respuesta = "";

// Definimos los valores que sean solo positivos para el calculo. Y dependiendo de sus valores se obtiene la figura
// Será triangulo si tiene los valores base y altura, si no tiene alguno, no entra en la condición
if ($_REQUEST['base'] > 0 && $_REQUEST['altura'] > 0) {
    $triangulo = new Triangulo();

    // Se define el indice de la figura para que sea tomada en cuenta y se imprima su nombre
    $vec['figura'] = "Triangulo"; 

    // Se concatena la variable respuesta para mostrar los resultados de cada instanciación de los objetos
    $respuesta .= $triangulo->newCalc($vec)."<p>";
}

// Será cuadrado si tiene el valor lado.
if ($_REQUEST['lado'] > 0) {
    $cuadrado = new Cuadrado();

    // Se define el indice de la figura para que sea tomada en cuenta y se imprima su nombre
    $vec['figura'] = "Cuadrado";

    // Se concatena la variable respuesta para mostrar los resultados de cada instanciación de los objetos
    $respuesta .= $cuadrado->newCalc($vec)."<p>";
}

// Será circulo si tiene el valor diametro.
if ($_REQUEST['diametro'] > 0) {
    $circulo = new Circulo();

    // Se define el indice de la figura para que sea tomada en cuenta y se imprima su nombre
    $vec['figura'] = "Circulo";

    // Se concatena la variable respuesta para mostrar los resultados de cada instanciación de los objetos
    $respuesta .= $circulo->newCalc($vec)."<p>";   
}

// al final, tenemos la variable respuesta con todas las respuestas concatenadas, si es que tiene respuestas, sino, estará vacía.
echo $respuesta;
// Se usa como unico parámetro de entrada, el array con todos los valores para realizar los calculos