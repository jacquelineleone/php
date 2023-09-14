<h1 align="center">Clase #1 📚</h1>

<h2>Empezando con php</h2>
<p>Para inicializar un proyecto con php, debemos generar el directorio y dentro de él un archivo index (index.php).</p>
<p>Luego se corre el comando <b>php -S localhost:port</b> indicando el puerto de nuestra preferencia.</p>
<br />

<h2>Escribiendo nuestra primer línea de código</h2>
<p>El tag para escribir una porción de código en php es:</p>

![sintaxisPhp](https://github.com/jacquelineleone/php/assets/98959433/655b8c15-af7b-44f2-92ee-bd4b03189980)

<p>En este caso utilizamos "echo" para imprimir texto en la página. Otra opción para realizar la función es utilizar "print" en lugar de "echo".</p>
<hr />
<p>En php la concatenación de strings es distinta, no se utiliza el "+", se utiliza el "." como observaremos a continuación:</p>

![sintaxisPhp](https://github.com/jacquelineleone/php/assets/98959433/10913359-3651-4f3b-9cbd-b9ed1d275a64)
<br />

<h2>Variables</h2>
<p>Las variables en php se crean con un $ seguido del nombre que queremos asignar a la variable.</p>

![sintaxisPhp](https://github.com/jacquelineleone/php/assets/98959433/f98e919d-cca7-43c8-ab79-d76898b5fdce)


<p>Esta no es la única forma de hacerlo:</p>

![sintaxisPhp](https://github.com/jacquelineleone/php/assets/98959433/fbd1aa42-26d9-4a7f-a7be-991f90c0e322)

<p>Podemos incluir la variable dentro de un mismo string, sin usar la concatenación (como hicimos en el ejemplo anterior).</p>
<p>Sin embargo, es importante aclarar que si vamos a utilizar variables dentro de un string la única forma de que php lo reconozca es con las comillas dobles, ya que si utilizamos simples no reconocerá a la variable como tal.</p>
<br />

<h2>Condicionales y booleanos</h2>
<p>Funcionan exactamente igual que javascript.</p>
<p>A continuación dejo un ejemplo donde se observa el cambio del valor de la variable según el condicional:</p>

![sintaxisPhp](https://github.com/jacquelineleone/php/assets/98959433/6f590ef9-a66d-4f55-87ed-4dfe04cfd9e7)

<p>Entonces, según si el libro fue o no leído se renderiza el correspondiente mensaje.</p>
<p>Prestar especial atención a la sintaxis esta vez: como puede observarse se reemplazó el "php" por "=". Esto solo es posible cuando queremos que el tag html devuelva <b>SOLAMENTE</b> el valor de una variable. En este caso tampoco es necesario incluir el ; al final.</p>
<br />

<h2>Arrays</h2>
<p>Funcionan igual que javascript.</p>

![sintaxisPhp](https://github.com/jacquelineleone/php/assets/98959433/00bc495f-77c0-47f4-8906-b73d2cb328d9)

<p>En el ejemplo creamos un array de libros bajo el nombre de la variable "books".</p>
<p>Luego creamos una lista, donde por cada libro renderizamos un elemento "li" con su respectivo nombre. Esto es igual a lo que hace el método map de javascript.</p>
<p>Para renderizar porciones de código html más complejas en el foreach, podemos utilizar la siguiente sintaxis:</p>

![sintaxisPhp](https://github.com/jacquelineleone/php/assets/98959433/88e7b40f-07b7-4753-a5a9-dc6afa571c32)
