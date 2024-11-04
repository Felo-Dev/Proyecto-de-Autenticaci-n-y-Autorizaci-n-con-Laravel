<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/your-repo/actions"><img src="https://github.com/your-repo/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/your-package"><img src="https://img.shields.io/packagist/dt/your-package" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/your-package"><img src="https://img.shields.io/packagist/v/your-package" alt="Latest Stable Version"></a>
    <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-blue" alt="License"></a>
</p>

## Proyecto de Autenticación y Autorización con Laravel

### Introducción

Este proyecto es un ejemplo de cómo implementar autenticación y autorización en una aplicación web utilizando Laravel. Incluye la configuración de rutas, middleware, excepciones y autenticación para proteger las rutas y recursos de la aplicación.

### Requisitos

- Laravel 8.x
- PHP 7.4 o superior
- Base de datos MySQL o PostgreSQL

### Instalación

1. Clona el repositorio en tu máquina local utilizando el comando:
   ```bash
   git clone https://github.com/your-repo/your-project.git](https://github.com/Felo-Dev/app)
Instala las dependencias del proyecto:

composer install

Ejecuta las migraciones para crear las tablas en la base de datos: 
php artisan migrate
Configuración

    Las rutas de la aplicación web se encuentran en routes/web.php.
    Las rutas de la API se encuentran en routes/api.php.
    La configuración de middleware y excepciones está en app/Http/Kernel.php.
    El middleware para omitir CSRF en la API está en app/Http/Middleware/ExcludeCsrfMiddleware.php.
    La configuración de autenticación está en config/auth.php.

Autenticación

    La autenticación se realiza utilizando el paquete laravel/sanctum.
    La configuración de autenticación se encuentra en el archivo config/auth.php.
    La autenticación se utiliza para proteger las rutas y recursos de la aplicación.

Autorización

    La autorización también se realiza mediante laravel/sanctum.
    La configuración de autorización se encuentra en config/auth.php.
    La autorización se utiliza para proteger las rutas y recursos de la aplicación.

Middleware

    El middleware ExcludeCsrfMiddleware se utiliza para omitir CSRF en la API.
    Está configurado en app/Http/Kernel.php.

Excepciones

    Las excepciones se configuran en app/Http/Kernel.php.
    Estas se utilizan para manejar errores y excepciones en la aplicación.

Rutas

    La ruta / es la ruta principal de la aplicación web.
    La ruta /test es una ruta de prueba para la aplicación web.
    La ruta /api/test es una ruta de prueba para la API.

Ejemplo de uso

    Para acceder a la aplicación web, ingresa a la ruta / en tu navegador.
    Para acceder a la API, ingresa a la ruta /api/test en tu navegador.
    Para autenticarte, ingresa a la ruta /login en tu navegador y proporciona tus credenciales.

Conclusión

Este proyecto es un ejemplo de cómo implementar autenticación y autorización en una aplicación web utilizando Laravel. Incluye la configuración de rutas, middleware, excepciones y autenticación para proteger las rutas y recursos de la aplicación.
