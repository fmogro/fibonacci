# Calculadora Fibonacci PHP 🖩

Este Proyecto es una calculadora Fibonacci. Es capaz de calcular los números de Fibonacci a tiempo real, así que podremos tener la progresión en cualquier momento. 🔢

Los scripts están escritos en PHP plano sin utilizar ningún Framework, para no consumir recursos que pueden ser aprovechado.

Para ejecutar el proyecto, debemos clonar en el repositorio en el docroot

    git clone git@github.com:fmogro/fibonacci.git .

Una vez clonado, se creara la carpeta fibonacci, dentro de la carpeta fibonacci existen 2 archivos en PHP uno llamado api.php y otro api-json.php ambos reciben los mismos parámetros.

- nombre

- posicion

y debemos abrir en el navegador de preferencia de la siguiente manera:

    http://localhost/fibonacci/api.php?posicion=6&nombre=felipe

Obteniendo como respuesta (en texto plano como la solicitada por el cliente):

> **Numero: 8 Nombre: felipe**

Y el siguiente script, recibe únicamente devuelve una respuesta en json que es la adecuada en una Api Rest.

    http://localhost/fibonacci/api-json.php?posicion=6&nombre=felipe

Obteniendo una respuesta en Json así

![Respuesta Json](https://i.ibb.co/k8tDHdq/imgcarbon1.png)
