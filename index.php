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


?>