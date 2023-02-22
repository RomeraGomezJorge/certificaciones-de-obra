# Instalacion

1 ) Clonar el repositorio

    git clone https://github.com/RomeraGomezJorge/certificaciones-de-obra.git

2 ) Ubicarse en la carpeta (certificaciones-de-obra) donde descargo el codigo

    cd certificaciones-de-obra

3 ) Una vez dentro de la carpeta certificaciones-de-obra ejecutar lo 
   siguiente  para darle todos los permisos a la cache y los logs

    sudo chmod -R 777 app/var

4 ) Luego por unica vez ejecutar para descargar los imagenes  y generar
   los containers  de docker (Si tira error ejecutar como admin con sudo)
 
      docker-compose up

5 ) Cuando termine el proceso ( docker-compose up ) abrir otra terminal 
   ubicarse en la carpeta certificaciones-de-obra y ejecutar lo siguiente
   para comprobar que todos los contenedores estan corriendo con estado Up y ninguno fallo
   
    docker-compose ps
   
6 ) Ingresar al contenedor de php

    docker exec -ti php-fpm /bin/bash

7 ) Una vez dentro ejecutar lo siguiente para instalar todas las 
   dependencias del proyecto

    composer install
    
8 ) Sino hubo errores instalando las dependecias en el navegador
   ingresar la siguiente url
    
    http://localhost/

9 ) Al ingresar la url deberia aparecer la pantalla de 
   login, utilizar estos datos
   
    usuario : user
    pass    : User1234

