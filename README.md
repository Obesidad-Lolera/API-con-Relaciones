Crear tablas: `php artisan migrate`
Cargar datos en la tabla: `php artisan db:seed`
Correr pruebas: `php artisan test`

Ejecutar todos a la vez (para tener datos frescos para testear): `php artisan migrate:refresh && php artisan db:seed && php artisan test`