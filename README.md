# Calculadora Fibonacci PHP 🖩

Este Proyecto es una calculadora Fibonacci. Es capaz de calcular los números de Fibonacci a tiempo real, así que podremos tener la progresión en cualquier momento. 🔢

Los scripts están escritos en PHP plano sin utilizar ningún Framework, para no consumir recursos que pueden ser aprovechado.# 🔥

Para ejecutar el proyecto, debemos clonar en el repositorio en el docroot

git clone git@github.com:fmogro/fibonacci.git .

Una vez clonado, se creara la carpeta fibonacci, dentro de la carpeta fibonacci existen 2 archivos en PHP uno llamado api.php y otro api-json.php ambos reciben los mismos parámetros.

- nombre

- posicion

y debemos abrir en el navegador de preferencia de la siguiente manera:

http://localhost/fibonacci/api.php?posicion=6&nombre=felipe

Obteniendo como respuesta (en texto plano como la solicitada por el cliente):

![Plain text response](https://i.ibb.co/XV97BKQ/img1.png)

Y el siguiente script, recibe únicamente devuelve una respuesta en json que es la adecuada en una Api Rest.

http://localhost/fibonacci/api-json.php?posicion=6&nombre=felipe

Obteniendo una respuesta en Json así

![Respuesta Json](https://i.ibb.co/k8tDHdq/imgcarbon1.png)

Si no se envía ninguno de los 2 parámetros, el API devuelve un error por defecto. Es decir, se deben enviar los dos parámetros requeridos para que el API funcione. En caso que no se envíen, el error es el siguiente.

![Required parameters](https://i.ibb.co/RCj8Wnr/parametrosrequeridos.png)

De manera adicional, se agrego un parámetro llamado **tipo** que es Opcional y para que nos de salida en formato json debemos agregarle tipo=json, este define el formato de salida en el script api.php si con la misma api se desea obtener una respuesta en json de la siguiente manera

    http://localhost/api.php?nombre=felipe&posicion=6&tipo=json

Y además se realiza validación, para que el api soporte el método get y el método post, adjunto captura de Postman.

![Postman screenshot](https://i.ibb.co/XsDbq80/postman.png)
