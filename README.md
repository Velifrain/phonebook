<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Телефонная книга

Просмотр на странице списка контактов с данными проживания и телефоном

### как использовать
- скачать или клонировать
- docker-compose up -d --build
- docker-compose exec php composer install
- docker-compose exec php bash
- php artisan migrate создать таблицы в бд
- php artisan db:seed добавить случайные данные в таблицу(если не выполнять, то данные добавляются в ручную)

http://localhost:8086  
навигация по контактам и номерам
- создать контакт
- добавить телефонный номер
