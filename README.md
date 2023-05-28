# Mercadopago SDK V2 PHP - Example for Newbies

Este ejemplo, con los pasos básicos sobre cómo implementar Mercadopago en PHP utilizando el SDK V2 de Mercadopago, es para ayudar a todos aquellos que han descargado el ejemplo que ofrece el sitio de Mercadopago y no les funcionó. Lo cual me pasó y fue muy frustrante. 

Espero que Marcos Galperín no se enoje conmigo al dejarles esta ayuda, pero le escribí al equipo de soporte para desarrolladores de Mercadopago y simplemente me respondieron que revise el código. Así que aquí les dejo un ejemplo muy simple pero concreto, que lo copian y en una hora lo tienen andando.

**IMPORTANTE!!** Detalle que también me llevó a perder más tiempo en las pruebas. No deben estar logueados con su verdadera cuenta de Mercadopago al momento de probar la interface, o cuando pulsen el botón para hacer el pago, la ventana de Mercadopago les va a indicar que no se pueden pagar a ustedes mismos y no les va a mostrar ninguna opción de pago, pero tampoco les va a avisar que una posible causa puede ser esta que les menciono acá. Así que recuerden estar deslogueados. Si necesitan una cuenta de prueba, la crean desde el panel de desarrollador.
A continuación, los pasos:

**Primer paso**<br />
Antes de instalar deberán cumplir con los requisitos previos que pide Mercadopago. Los detalles los encuentran en el siguiente enlace:
https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/requirements

**Segundo paso**<br />
Crear carpeta para nuestro proyecto en el servidor web con PHP, que en este caso la carpeta la llamaremos "mercadopago"

**Tercer paso**<br />
Descargar dentro de la carpeta "mercadopago" los archivos de este ejemplo

**Cuarto paso**<br />
Instalar el Composer para luego poder integrar el Checkout-Pro. El enlace a Composer es https://getcomposer.org/download/ y alcanza con ejecutar las siguientes cuatro líneas.
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php composer-setup.php

php -r "unlink('composer-setup.php');"
```
La explicación de lo que hace cada una de las líneas anteriores es la siguiente:
1) Descarga el instalador. (Recordar hacerlo en la misma carpeta en donde vas a poner los archivos de este ejemplo.)
2) Verifica si el hash del archivo 'composer-setup.php' calculado con el algoritmo de hash SHA-384 es igual al hash de referencia proporcionado.
3) Ejecuta el instalador. (Nos va a aparecer en la misma carpeta un achivo ejecutable llamado composer.phar)
4) Remueve el instalador. (Remueve el archivo composer-setup.php)

**Quinto paso** - Integrar el Checkout-Pro<br />
Para integrar el SDK V2 del Checkout-Pro de Mercadopago, deberás ejecutar la siguiente línea sin salir de la carpeta en donde se encuentra el archivo "composer.phar" Este proceso creará la carpeta "vendor" junto a otros archivos necesarios.
```
php composer.phar requiere "mercadopago/dx-php"
```
Si quieres más detalles, está explicado en el siguiente enlace de Mercadopago:
https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/integrate-checkout-pro

**Sexto paso** - Modificar los archivos con la Clave Token y Clave Pública<br />
Editar los archivos *index.js* y *server.php* y cambiar los datos de Token y Public Key, por las credenciales de tu cuenta Mercadopago. El enlace para obtener más información al respecto de las credenciales, es:<br />
https://www.mercadopago.com.ar/developers/es/docs/checkout-pro/additional-content/credentials
