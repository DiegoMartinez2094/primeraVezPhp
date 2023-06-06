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

$paraOrdenar = [1, 2, 3, 4, 5];
sort($paraOrdenar); /** de menor a mayor */
rsort($paraOrdenar);/**de mayor a menor */





/**METODOS ARRAYS */

/**metodo  array_flip(); intercambia llaves por el contenido de cada una*/

$nombres = ["Diego" => 1, "Fernando" => 2, "Carlos" => 3];
$flipped = array_flip($nombres);
print_r($flipped); //Array ( [1] => Diego [2] => Fernando [3] => Carlos )

/**metodo array_fill(): rellena un array este necesita 3 parametros 1=desde que posicion del array quiere que empiece a rellenar
 * 2=cuantos espacios quiere que rellene y el 3=elcontenido con el que va a rellenar*/
$fruta = array_fill(5, 6, 'pera');
print_r($fruta);/** Matriz [5] => pera, [6] => pera,  [7] => pera, [8] => pera,  [9] => pera, [10] => pera
*/ 

/* array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada. *////////////////////////////////////////////////////////////
function impar($var)
{ return $var & 1;}// Retorna siempre que el número entero sea impar   
function par($var)
{return !($var & 1);}// Retorna siempre que el número entero sea par
$arr1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arr2 = [6, 7, 8, 9, 10, 11, 12];
echo "Impar :\n";
print_r(array_filter($arr1, "impar"));
echo "Par:\n";
print_r(array_filter($arr2, "par"));
/**Impar : Array ( [a] => 1 [c] => 3 [e] => 5 ) Par: Array ( [0] => 6 [2] => 8 [4] => 10 [6] => 12 ) */


/*array_map(): se define una funcion que va a ser aplicable a cada elemento del array y devolverá un nuevo array con el resultado*/
function cuadrado($n)
{return ($n * $n);}
$a = [1, 2, 3, 4,];
print_r(array_map('cuadrado', $a));/**$b=[1, 4, 9, 16] */

/**array_reduce(): define una funcion para aplicarle a un conjunto de elementos uno tras otro */
function suma($acumulador, $num) /**DEFINIMOS la funcion */
{$acumulador += $num;
 return $acumulador;}
$conjunto= [1,2,3,4];
print_r(array_reduce($conjunto,'suma'));/**result_sum=10*/

/**array_key_exists(): se utiliza solo en arrays asociativos y comprueba si exite un key en especifico retorna TRUE o FALSE */
$nombres2 = ["Diego" => 1, "Fernando" => 2, "Carlos" => 3];
$existKey= array_key_exists("Diego",$nombres2); /** se ingresaprimero la key a buscar seguido del array donde la va a buscar */
print_r($existKey); /**TRUE*/

/**in_array(): comprueba que exista un valor esprecifico en el array y devuelve TRUE o FALSE */
$cities=["Bucaramanga", "Giron", "piedecuesta"];
if (in_array("bucaramanga",$city)){ /**se ingres a primero el elemento a buscar, seguido del array donde lo buscaremos, esta funcion retorna un TRUE o FALSE */
    echo( "si exite la ciudad Bucaramanga en el array");}

/**array_rand(): Devuelve una o varias claves aleatorias de un array. */
$nombres4 = ["Diego" => 1, "Fernando" => 2, "Carlos" => 3];
print_r(array_rand($nombres4)); /**devue: "Diego" */

/**array_unique(): Elimina los valores duplicados de un array. */
$letras=["a","b","c","a","c","a"];
print_r(array_unique($letras));/**en este caso imprimirá: Matriz ([0] => a [2] => b [3] => c ) */

/**array_intersect():se utiliza para intersectar dos o más arrays y devuelve los valores que tienen en común */
$array1 = [2, 4, 6, 8, 10, 12];
$array2 = [1, 2, 3, 4, 5, 6];
print_r(array_intersect($array1, $array2)); /**imprime: Matriz ( [0] => 2 [1] => 4 [2] => 6 ) */ 

/**array_diff(): a difirencia del anteior (intersect) el diff devuelve los valores del primer array que no están en los otros arrays */
$array3 = [2, 4, 6, 8, 10, 12];
$array4 = [1, 2, 3, 4, 5, 6];
print_r(array_diff($array3, $array4)); /**imprime: Matriz ([3] => 8  [4] => 10  [5] => 12) */

/**array_push(): Agrega  elementos al final de un array. */
$array5 = [1, 2, 3, 4, 5, 6];
array_push($array5, 7, 8); 
print_r($array5);/**imprime: [1, 2, 3, 4, 5, 6, 7] */

/**array_pop():  elimina el elemento en ultima posicion */
$array6 = [1, 2, 3, 4, 5, 6];
array_pop($array6);
print_r($array6); /**imprime: [1, 2, 3, 4, 5,]  sin el 6*/

/**array_reverse(): inviert el orden de los elementos en un array, el ultimo de primero... */

$array7 = [1, 2, 3, 4, 5, 6];
$array8 = array_reverse($array7);
print_r($array8); /**imprime: [6, 5, 4, 3, 2, 1] */

/**array_sum(): solo para arrays numericos, devuelve la suma de sus elementos */
$array9 = [1, 2, 3, 4,];
print_r( array_sum($array9)); /**imprime: 10 */

/**array_product(): solo para arrays numericos, devuelve su producto */
$array11 = [1, 2, 3, 4,];
print_r(array_product($array11)); /**imprime: 24 */

/**array_chunk(): Divide un array en las partes que quieras fragmentos más pequeños. */
$array12=[1, 2, 3, 4, 5];
$array13 = array_chunk($array12, 3); /**ingresamos el array a dividir, seguido de la cantidad de elementos que tendrá cada division */
print_r($array13); /**imprime:Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 )         [1] => Array ( [0] => 4 [1] => 5 ) )  */

/**array_keys(): solo para arrays asociativos, devuelve todas las llaves del array*/
$autos = [1 => "BMW", 2 => "AUDI", 3 => "Mercedes"];
print_r(array_keys($autos)); /**Devuelve: Array ( [0] => 1 [1] => 2 [2] => 3 ) solo las keys */

/**array_values(): solo para arrays asociativos Devuelve todos los valores de un array. */
$motos = [1 => "kawazaki", 2 => "Yamaha", 3 => "Honda"];
print_r(array_values($motos)); /**imprime: Array ( [0] => kawazaki [1] => Yamaha [2] => Honda ) */

/**array_walk(): Aplica una función de devolución de llamada a cada elemento de un array. */

$lenguajes=[1=>"PHP", 2=>"JAVA", 3=>"JS", 4=>"PYTHON"];
function mostrar($elemento2, $clave) /**Funcion que imprime la key y su respectivo contenido en cada elemento del array */
{ echo "$clave. $elemento2<br />\n";}
array_walk($lenguajes, 'mostrar'); /**pasamos el array, con la funcion que vamos a aplicarle 
Muestra: 
1. PHP
2. JAVA
3. JS
4. PYTHON */ 

/**Isset() verifica si una variable tiene un valor definido, de ser así devuelve True si existe o False si no está definido o es null */
$nombre="Diego";
 if (isset($nombre)) {
   print_r($nombre);
 } else {
   print_r(false);
 }

 /**empy() a diferencia de Isset esta funcion devuelve True si la variable esta vacia si queremos que actue como Isset le ponemos un ! al principio */
 $nombre="";
 if (empty($nombre)) {
   print_r(true);
 } else {
   print_r(false);
 }

 /**ESTRUCTURAS DE CONTROL */

 /**if este ciclo se cumple mientras que la condicion que tiene sea TRUE*/
 $a=1;
 if($a<5){ //se traduce: si $a es menor a 5 haga:..., 
    echo"la variable es menor a 5";
 }
 else if ($a=5){//se traduce a sino, haga..
    echo"la variable es menor a 5";
 }
 else{//por ultimo si las condiciones anteriores no se confirmaron entonces haga... esta ultima no necesita condicion
     echo"la variable es menor a 5";
  }


  /**Swith permite ejectar varios bloques de codigo dependiendo el valor de una variable*/
  
  /**en este caso dependiendo el valor de la variable numero, me va a imprimir su valor en dado caso */
  $numero=1;

  switch($numero){
    case 1:
      echo "1";
      break;
    case 2:
      echo "2";
      break;
    case 3:
      echo "3";
      break;
    case 4:
      echo "4";
      break;
    default:
      echo "default";
  }

  /**Estructuras Repetitivas */
  
  /**Bucle While: en este ciclo necesitamos de una variable iniciadora para que entre a hacer el ciclo*/
  $años=0;
  while($años<=18){
      $años++; //**quiere decir que mientras el contador de años sea menor a 18 el ciclo se recorrerá */
    echo"menor de edad";  
    }

    /**Do While: para este caso primero se realiza una operacion y luego verifica para saber si continua en el ciclo o se sale */
    $a=0;
    do{
      $a++; //**quiere decir que mientras el contador de años sea menor a 18 el ciclo se recorrerá */
    }while($a<=18);

   /**For each  este bucle itera sobre arrays una funcion especifica*/
   $animales =["perro", "gato", "ave"];
   foreach($animales as $animal):
      echo $animal; //**este bucle nos mostrará los elementos del array uno a uno */
   endforeach;

//*FUNCIONES*//

//**Las funciones se usan para encapsular unbloque de codigo el cual puede ser llamado y utilizado en calquier parte del codigo */

/**funciones que no retornan valor void */
declare(strict_types=1); //strict_types lo utilizamos para indicar que el codigo va a tener una estructura definida por el programador 
function sumar (int $numero1 =0, array $numero2 ):void {//por eso indicamos antes de cada variable, que tipo de variable es: int, string, array etc...
  /**el void indica que es una funcion sin retorno  */  
  echo $numero1 + $numero2;
    }
sumar(10, []);

/**funciones que retornan valor: para estas funciones utilizamos la parabra RETURN para indicar que retorna un dato*/
 function sum(int $a, int $b):int{
     return $a+$b;
   }
   sum(2,4); //llamamos a la funcion suma y le pasamos dos argumentos 
   //parametro: nombre de una variable
   //argumento: el valor de la variable

?>