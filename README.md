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

De manera adicional, se creo una alternativa en la carpeta **alternative** para usar únicamente dos archivos **api.php** y un archivo **services/class.php** donde en class se realiza una lógica diferente para la serie Fibonacci y además, se unifica todas las funciones en archivo class para código mejor organizado

    http://localhost/fibonacci/alternative/api.php?posicion=6&nombre=felipe

![Plain text response](https://i.ibb.co/XV97BKQ/img1.png)

Se instalo libreria externa

```markup

php composer.phar require vlucas/phpdotenv

```

La cual me permite leer variables de entorno de archivo **.env**, para así evitar poner credenciales en **producción/desarrollo** sino que cada desarrollador las puede utilizar a su criterio y se dejo el archivo .**env** en .**gitignore**, para que no se vaya al versionamiento y se creo un archivo .**env.example**, que una vez clonado el repositorio se debe copiar y dejar un .**env** para configurar credenciales de mysql.

> \***\*NOTA**: Normalmente no se envía la carpeta **vendor** con su contenido a github/gitlab, sin embargo, se envió para que no

> descarguen composer (en caso de no tenerlo).\*\*

Además se crearon 2 archivos uno llamado **conn.php** y otro **database.php.**

El archivo conn.php contiene credenciales mysql leídas de variables de entorno.

El archivo **database.php** se lo debe ejecutar una vez ya configuradas las credenciales, este archivo, va a verificar si la base de datos no existe, y si no existe la creará y creará las respectivas tablas.

Los demás archivos utilizan la configuración de la variable de entorno, así que no requieren configuración
