<?php
/**funciones de salidas */

echo '<h1> Hola mundo</h1>'; /** para imprimir una o varias cadenas  */

$texto = "mundo";
printf("hola %s",$texto);/**solo imprime una cadena de texto a la vez. %s indica que debe tomar ese lugar la variable */




/**variables y constantes */
  
$texto = "mundo"; /**variable tipo string*/
$edad = 25; /**variable de tipo numerica */
$es_valido= true; /**variable de tipo booleana */

/**declarar una constante numerica */
define("PI", 3.1416);

/**declarar una constante booleana */
define("ES_VALIDO",true);

/**declarar una constante tipo texto */
define("ES_TEXTO", "hola mundo");



/**Tipos de Datos */

$logueado = true; /**Booleano */
$numero = 5; /**Numbero*/
$float = 0.1; /**flotante */
$nombre = "Juan"; /**string*/
$array = []; /**array*/

/**Numeros y Operadores */

$numero1=1;$numero2=2;

/** ARITMETICOS */
$suma=$numero1+$numero2; /**se utiliza el + */
$resta=$numero1-$numero; /**se utiliza el - */
$multiplicacion=$numero1*$numero2; /**se utiliza el * */
$division=$numero1/$numero2; /**se utiliza el / */
$modulo=$numero1%$numero2; /**se utiliza el % es el reciduo de la division*/
$exponenciacion=$numero1**$numero2; /**se utiliza el ** para elevar un numero a una potencia de otro */

/**Asignación */
$asignacion = 5; /** se utiliza el = para signar un valor a una variable o constante */

/** OPERADOR */
if($numero1==0 & $numero2==0) /** operador "Y" */ 
if($numero1==0 | $numero2==0) /** operador "O" */
if($numero1==0 >> $numero2==0) /** operador SHIFT RIGHT */
if($numero1==0 << $numero2==0) /** operador SHIFT LEFT */
if($numero1==0 > $numero2==0) /** operador mayor que  */
if($numero1==0 < $numero2==0) /** operador menor que  */
if($numero1==0 == $numero2==0) /** operador comparacion */

/** -1 si izq es menor
 * 0 si es igual
 * 1 si izq en mayor
  */
var_dump($numero1<=>$numero2);

$texto3 = "Hola mundo";

echo strlen($texto3); /** elimina los espacios */
echo strtoupper($numero3); /** convertir a mayusculas*/
echo strtolower($numero3); /**convertir a minusculas */
echo strpos($texto3,'Hola'); /**verifica si un string existe o no */


/** ARRAYS */

$pc = ['pantalla', 'mouse', 'cpu'];
echo $pc[1];

/**Array asociativo */

$pc1=array(
    "pantalla"=>"samsung",
    "mouse"=>"sony",
    "teclado"=> "logitech"
);

echo $pc1["mouse"]; //**imprime sony*/


/**foreach= para recorrer un array en este clase vamos a imprimirlo con su clave y valor */
foreach($pc as $clave => $valor){
    echo "clave: " . $clave . ",valor: " . $valor;
}

/**buscar elementos en un array */

var_dump(in_array("pantalla",$pc));

/**ordenar elementos de una array */

$paraOrdenar = array(1, 2, 3, 4, 5);
sort($paraOrdenar); /** de menor a mayor */
rsort($paraOrdenar);/**de mayor a menor */

/**ordenar arreglo asociativo */




  





?>