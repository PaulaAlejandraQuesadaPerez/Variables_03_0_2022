## **<u>GLOSARIO</u>**

**camelCase**
CamelCase es una forma de separar las palabras de una frase poniendo la primera letra de cada palabra en mayúscula y sin espacios. Se usa comúnmente en direcciones URL web, programación y convenciones de nomenclatura de computadoras. Lleva el nombre de los camellos porque las letras mayúsculas se asemejan a las jorobas en la espalda de un camello.

**Estructuras básicas de programación**
Todos software se divide en tres estructuras que, al trabajar en conjunto y correctamente, forman algoritmos e instrucciones básicas para programas complejos:

1. Secuencias: Son series de acciones desarrolladas en un orden específico, ya que se realiza una acción tras otra hasta que todas se hayan llevado a cabo.

   Un claro  ejemplo de esto es la rutina matutina: te levantas, tomas agua, te bañas, desayunas, etc.

2. Condicionales: Este tipo de estructura, en lugar de seguir un orden específico de eventos, realiza una pregunta para determinar el camino a seguir.

3. Ciclo: Así como los condicionales, los ciclos también realizan preguntas. La diferencia es que hacen la misma pregunta una y otra vez hasta que cierta tarea haya sido elaborada.

**Código limpio // Código sucio**
Código limpio: Es una filosofía de desarrollo de software que consiste en aplicar técnicas simples que facilitan la escritura y lectura de un código, volviéndolo más fácil de entender.

Código sucio: Un código sucio es un código que es difícil entender, que al final genera problemas porque se va a estar mucho tiempo leyendo líneas de código e intentando entenderlas. Además, cualquier modificación que se quiera realizar el día de mañana, va a ser más compleja y probablemente se acabe cometiendo errores.

**Pseudolenguaje de programación // Lenguaje de programación**
Pseudocódigo: Es una herramienta de programación que nos permite escribir en palabras el algoritmo ya definido, lo que permitirá su fácil interpretación a la vista de un usuario. Es de gran importancia mencionar, que el pseudocódigo no es un lenguaje de programación que podrá ser interpretado en lenguaje de máquina (para ello se deberá llevar a cabo el desarrollo de este en el lenguaje de programación de nuestra preferencia).

Algoritmo: Es una secuencia ordenada de pasos finitos que serán ejecutados de forma secuencial permitiéndonos llevar a cabo una serie de procesos, con la finalidad de cumplir el objetivo ya bien sea dar una respuesta para solventar una necesidad o tomar alguna decisión a través de medios informáticos, como lo son los programas.

Por lo tanto, un pseudocódigo es una forma de representación gráfica (o textual) del algoritmo.

**Variable**
Una variable es un elemento de datos cuyo valor puede cambiar durante el curso de la ejecución de un programa, se puede entender como un nombre que representa un valor y se utiliza de forma periódica para almacenar diversos tipos de datos, los cuales se utilizarán en las operaciones posteriores de codificación.

**Maneras de escribir las variables en PHP**
Las variables se representan con un signo de dólar seguido por el nombre de la variable. El nombre de la variable es sensible a minúsculas y mayúsculas.Los nombres de variables siguen las mismas reglas que otras etiquetas en PHP. Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado, seguido de cualquier número de letras, números y caracteres de subrayado. 

**Tipos de datos primitivos**
Los tipos de datos establecen el formato en que se va a almacenar, operar e intercambiar información y establecen un contrato entre las diferentes partes de su aplicación ya que define como se interpretará la información que se intercambia entre una parte y otra. En PHP se manejan 10 tipos de datos primitivos:
4 escalares:
* boleanos (boolean)
* enteros (integer)
* punto flotante (float)
* cadena (string)

4 compuestos:
* arreglos (array)
* objetos (object)
* llamada de retorno (callable)
* iteradores (iterator)

2 especiales:
* recurso (resource)
* null

seudotipos:
* mixed
* number
* void
* callable
* array|object
* $…

**Declaración de variables / Inicialización de variables**
Declaración: Para declarar un nombre de variable válido, éste tiene que empezar con una letra (o si no empieza con una letra, tendrá que hacerlo con un carácter de subrayado), seguido de cualquier número de letras, números y caracteres de subrayado, sin espacios. Ejemplos: $4variable, $_4variable, $variable_de_nombre_muy_largo, etc.

Inicialización: Para asignar valor a una variable en PHP utilizaremos un signo de igual seguido del valor a asignar a la variable y punto y coma al final.
PHP también ofrece otra forma de asignar valores a las variables: asignar por referencia. Esto significa que la nueva variable simplemente referencia (en otras palabras, "se convierte en un alias de" ó "apunta a") la variable original. Los cambios a la nueva variable afectan a la original, y viceversa.

**Punto y coma**
El punto y coma se utiliza como un separador de instrucciones, de este modo PHP requiere que las instrucciones terminen en punto y coma al final de cada sentencia. La etiqueta de cierre de un bloque de código de PHP automáticamente implica un punto y coma; no es necesario usar un punto y coma para cerrar la última línea de un bloque de PHP. La etiqueta de cierre del bloque incluirá la nueva línea final inmediata si está presente.

**Palabras reservadas del sistema**
Son instrucciones que se utilizan en PHP para controlar la ejecución de los programas, algunas de ellas son usadas para representar funciones, constantes, etc. Entre las palabras reservadas se encuentran, además de echo, instrucciones como if, for, do, include, return, exit o die. A diferencia de las funciones, en este caso no se necesitan los paréntesis.

Ejemplo:
<?php
echo 'Hello World!';
?>

**Nota: ¿Se deben listar?**

**Operadores**
Un operador es un signo o símbolo que especifica el tipo de cálculo que se realiza en una expresión. Hay operadores matemáticos, de comparación, lógicos y de referencia. Si una expresión contiene más de un operador la ejecución se hará por orden de prioridad.

**Items en las colecciones de datos PHP**
Colección de datos: Las colecciones representan grupos de objetos, denominados elementos. Se pueden encontrar diversos tipos de colecciones, según si sus elementos están ordenados, o si se permite la repetición de elementos o no. 
Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. Este tipo se optimiza para varios usos diferentes; se puede emplear como un array, lista (vector), tabla asociativa (tabla hash - una implementación de un mapa), diccionario, colección, pila, cola, y posiblemente más. Ya que los valores de un array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales.

**echo / var_dump / print_r**
* echo — Muestra una o más cadenas, echo no es realmente una función (es una construcción del lenguaje), por lo que no se requiere el uso de paréntesis con él, echo puede imprimir más de una cadenaseparadas por coma.

* var_dump — Muestra información sobre una variable, proporciona información sobre el tamaño y tipo de datos de la variable y, en el caso de arrays y objetos, de los elementos que la componen. 

* print_r — Imprime información legible para humanos sobre una variable, no da información sobre el tamaño de la variable ni sobre el tipo de datos. Si se le da string, integer o float, el valor en sí mismo será impreso. Si le dan un array, los valores serán presentados en un formato que muestra las claves y los elementos. Una notación similar se utiliza para objects.

* print — Mostrar una cadena, print no es realmente una función (es un constructor de lenguaje) por lo tanto no es necesario usar paréntesis para indicar su lista de argumentos.