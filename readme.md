# personal-bank
Web-based application to mantain control on personal expenses


<h2><b>Configuración </b></h2>

<ul>
<li>Utilizar el archivo <i>.env.example</i> como guía para escribir el archivo<i> .env</i>.</li>
<li>Instalar dependencias con composer install</li>
<li>Crear proyecto <i>composer create-project laravel/laravel personal-bank</i> y ligar a github</li>

<h3><i>Configurar de manera adecuada los permisos de escritura/lectura de las carpetas:</i></h3>
<ul>
<li>app/storage/</li>
<li>app/storage/logs</li>
<li>app/storage/framework/cache</li>
<li>app/storage/framework/sessions</li>
<li>app/storage/framework/views</li>
<li>bootstrap/cache/</li>
</ul>
</ul>
<h2><b>Base de datos</b></h2>
<ul>
<li>Crear la base de datos <i><b>BANK</b></i> en el servidor</li>
<li>Configurar los parámetros de conexión a la base de datos en el archivo .env.</li>
<li>Realizar la migración de las tablas de la base de datos, por ejemplo:</li>
  <ul>
  <li><i>php artisan migrate</i></li>
   </ul>
<li>Sembrar los datos predeterminados en la base de datos, por ejemplo:</li>
  <ul>
  <li><i>php artisan db:seed</i></li>
  </ul>
  </ul>




# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
# BANK-personal
