# Proyecto Menus

## Descripción
Este proyecto de Laravel demuestra el uso del sistema de plantillas Blade para crear una estructura con una vista principal y tres vistas secundarias que conforman un sistema de menú básico.

## Requisitos
- Laravel
- PHP
- Composer

## Instalación
1. Clona el repositorio.
2. Ejecuta `composer install` para instalar las dependencias.
3. Configura el archivo `.env` con los ajustes necesarios para la base de datos y el entorno.
4. Ejecuta `php artisan serve` para iniciar el servidor de desarrollo.

## Funcionalidades
- Vista principal con un menú de navegación y un pie de página.
- Tres secciones (Home, Photos, Contact) con el elemento del menú activo resaltado.
- Cada sección muestra contenido único y relevante para la opción seleccionada en el menú.

## Estructura del Proyecto
- `resources/views/layouts/app.blade.php`: Plantilla principal que contiene el menú y el pie de página.
- `resources/views/home.blade.php`: Vista de inicio (Home).
- `resources/views/photos.blade.php`: Vista de fotos (Photos).
- `resources/views/contact.blade.php`: Vista de contacto (Contact).

## Autor
Actividad realizada por Alejandro Andre Gonzalez Flores.
