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


?>