# Laravel 5 Starter

Laravel 5 Admin Starter Site is a sample application for beginning development with Laravel 5. 

I created this starter app as I needed a simple framework for an internal database-backed Web application.

![Laravel 5 Admin Starter](https://github.com/Imaginarydesign/laravel-5-admin-starter/raw/master/image.png)

## Requirements

- composer
- npm
- bower

## Installation

1. Clone it
2. cd into it
3. `composer install`
4. `php artisan key:generate`
5. `npm install`
6. `bower install`
7. `gulp`

## Usage

1. Create a database
2. Rename .env.example to .env
3. Update database details in .env
4. Update email details in .env
4. run `php artisan migrate`
5. Create a user in database/seeds/UserTableSeeder.php
6. run `php artisan db:seed`

## Features

- Laravel 5
- Twitter Bootstrap 3.x
- AdminLTE (Sass)
- Bower
- Font Awesome
- jQuery
- Laracasts/Flash

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## License

Laravel 5 Admin Starter is licensed under the MIT license. (http://opensource.org/licenses/MIT)