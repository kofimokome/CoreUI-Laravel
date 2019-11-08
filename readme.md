<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

[![@coreui coreui](https://img.shields.io/badge/@coreui%20-coreui-lightgrey.svg?style=flat-square)](https://github.com/coreui/coreui)
[![npm package][npm-coreui-badge]][npm-coreui]
[![NPM downloads][npm-coreui-download]][npm-coreui]    

[npm-coreui]: https://www.npmjs.com/package/@coreui/coreui
[npm-coreui-badge]: https://img.shields.io/npm/v/@coreui/coreui.png?style=flat-square
[npm-coreui-download]: https://img.shields.io/npm/dm/@coreui/coreui.svg?style=flat-square
[![Bootstrap Admin Template](https://coreui.io/assets/img/example-coureui.jpg)](https://coreui.io/)
## About CoreUI

CoreUI is an Open Source Bootstrap Admin Template. But CoreUI is not just another Admin Template. It goes way beyond hitherto admin templates thanks to transparent code and file structure. And if that's not enough, let’s just add that CoreUI consists bunch of unique features and over 1000 high quality icons.

CoreUI is based on Bootstrap 4 and offers 6 versions: HTML5 AJAX, HTML5, Angular, React.js & Vue.js, Laravel.

CoreUI is meant to be the UX game changer. Pure & transparent code is devoid of redundant components, so the app is light enough to offer ultimate user experience. This means mobile devices also, where the navigation is just as easy and intuitive as on a desktop or laptop. The CoreUI Layout API lets you customize your project for almost any device – be it Mobile, Web or WebApp – CoreUI covers them all!


## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
Copyright 2019 creativeLabs Łukasz Holeczek. Code released under the MIT license. There is only one limitation you can't can’t re-distribute the CoreUI as stock. You can’t do this if you modify the CoreUI. In past we faced some problems with persons who tried to sell CoreUI based templates.

## Installation
1. Clone or download this repository
2. Run `composer install` and `npm install`
3. Then run `npm run dev` to compile sass and javascript files
4. Finally, serve the app using `php artisan serve`

## Docker Configuration
If you intend to use Docker, you will need to :
1. create a `.env` file from `.env.example`
2. Open `docker-compose.yml` and set the database name and password same as the username and password in the `.env` file.
3. Every other configuration can be left unchanged