<?php
$lenguajes=[1=>"PHP", 2=>"JAVA", 3=>"JS", 4=>"PYTHON"];
function mostrar($elemento2, $clave) /**Funcion que imprime la key y su respectivo contenido en cada elemento del array */
{ echo "$clave. $elemento2<br />\n";}
array_walk($lenguajes, 'mostrar'); /**pasamos el array, con la funcion que vamos a aplicarle 
Muestra: 
1. PHP
2. JAVA
3. JS
4. PYTHON */ 

?>