# Instalacion

Luego de clonar el repositorio

ubicarse en la carpeta donde descargo el codigo

y ejecutar

sudo chmod -R 777 app/var ( para darle todos los permisos a la cache y los logs)

luego por unica vez docker-compose -up

cuando termine el proceso en otra terminal ejecutar

docker exec -ti php-fpm /bin/bash

para ingresar al contenedor de php

una vez dentro ejecutar
 
composer install

Para ingresar colocar en el navegador localhost

usuario : user

pass : User1234

