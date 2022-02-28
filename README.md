1.Descarga el archivo de la siguiente dirección: https://github.com/GustavoCulma/biblioteca.git 
2.tener en cuenta que el proyecto está realizado en Laravel 9 y para esto se debe tener instalado PHP 8 y Node JS. (corre en XAMMP)
3.Se debe crear una base de datos llamada biblioteca (vacia)
4.Ejecuta las migraciones con el siguiente comando: php artisan mígrate:fresh –seed     
5.Ejecuta el comando npm install y luego npm run dev 
6.Los dos puntos anteriores son fundamentales que en ellos se encuentran las migraciones necesarias para la base de datos y el 4 punto para que se ejecuten las vistas. 
7.El sistema tiene dos módulos el primero es la parte del cliente donde sin loguearse puede ver: las editoriales, los libros que pertenecen a estas editoriales, la descripción del libro, y la información de las editoriales. Por otro lado, cuando el usuario encontrara una Tabla con la información de los libros y en esta tabla podrá  Crear, editar y eliminar Un libro.
