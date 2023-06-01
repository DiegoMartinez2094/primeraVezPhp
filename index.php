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

/**METODOS ARRAYS */

/**metodo  array_flip(); intercambia llaves por el contenido de cada una*/

$nombres = array("Diego" => 1, "Fernando" => 2, "Carlos" => 3);
$flipped = array_flip($nombres);
print_r($flipped); //Array ( [1] => Diego [2] => Fernando [3] => Carlos )

/**metodo array_fill(): rellena un array este necesita 3 parametros 1=desde que posicion del array quiere que empiece a rellenar
 * 2=cuantos espacios quiere que rellene y el 3=elcontenido con el que va a rellenar
 */

$fruta = array_fill(5, 6, 'pera');
print_r($fruta);/** Matriz [5] => pera, [6] => pera,  [7] => pera, [8] => pera,  [9] => pera, [10] => pera
*/ 

/* array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada. *////////////////////////////////////////////////////////////


/*array_map(): se define una funcion que va a ser aplicable a cada elemento del array y devolverá un nuevo array con el resultado*/
function cuadrado($n)
{
 return ($n * $n);
}

$a = [1, 2, 3, 4,];
$b = array_map('cuadrado', $a);
print_r($b);/**$b=[1, 4, 9, 16] */

/**array_reduce(): define una funcion para aplicarle a un conjunto de elementos uno tras otro */

function suma($acumulador, $num) /**DEFINIMOS la funcion */
{
 $acumulador += $num;
 return $acumulador;
}

$conjunto= array(1,2,3,4);

$result_sum = array_reduce($conjunto,'suma');
print_r($result_sum);/**result_sum=10*/

/**array_key_exists(): se utiliza solo en arrays asociativos y comprueba si exite un key en especifico retorna TRUE o FALSE */
$nombres2 = array("Diego" => 1, "Fernando" => 2, "Carlos" => 3);
$existKey= array_key_exists("Diego",$nombres2); /** se ingresaprimero la key a buscar seguido del array donde la va a buscar */
print_r($existKey); /**TRUE*/

/**in_array(): comprueba que exista un valor esprecifico en el array y devuelve TRUE o FALSE */

$cities=["Bucaramanga", "Giron", "piedecuesta"];
if (in_array("bucaramanga",$city)){ /**se ingres a primero el elemento a buscar, seguido del array donde lo buscaremos, esta funcion retorna un TRUE o FALSE */
    echo( "si exite la ciudad Bucaramanga en el array");
}

/**array_rand(): Devuelve una o varias claves aleatorias de un array. */
$nombres4 = array("Diego" => 1, "Fernando" => 2, "Carlos" => 3);
$randed = array_rand($nombres4);
print_r($randed); /**devue: "Diego" */

/**array_unique(): Elimina los valores duplicados de un array. */


?>