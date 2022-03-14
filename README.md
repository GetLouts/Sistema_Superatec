# Sistema de gestion

Prueba tecnica.

## Pre requisitos
_Para levantar el proyecto es necesario contar con_

* npm
* composer

## Configuracion
_Ejecutar los comandos para poner el proyecto a funcionar._

* `composer install` Instalacion de libreria necesarias
* `php artisna key:generate` Crear la clave de la aplicacion
* `php artisan db:seed --class=SuperAdminSeeder` Tener la bd
* `php artisan db:seed --class=TablaPermisosSeeder` Tener la bd
* `php artisan serve` Activar el servidor para pruebas

## Credenciales de prueba

* `Administrador` 
**Correo:**     = admin@admin.com
**Contraseña:** = administrador


## Para hacer Migracion por si se crea una columna nueva
* `php artisan migrate:fresh --seed`