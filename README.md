# CodeIgniter 4 ADMIN PANEL BOILERPLATE

## What is CodeIgniter?
The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

Boilerplate from 

`https://github.com/agungsugiarto/boilerplate`

## Installation & updates

`https://github.com/coijiryuna/code-admin.git` then `composer update` whenever

there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup
Create Database Setup 

- Migrate
`> php spark migrate`
- Seader
`> php spark db:seed MySeeder `

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Use Management

Role Group

|| id  || name   || description      ||

|| 1   || admin  || Administrator    ||

|| 2   || member || Member           ||

for get name on table role

`on_groups()->name`

will gate name of role

for example 

Role `member`

`$routes->group('member', function ($routes) {
    $routes->group('user', [
        'filter'    => 'permission:back-office',
        'namespace' => 'App\Controllers\Users',
    ], function ($routes) {
        $routes->match(['get', 'post'], 'profile', 'UserController::profile', ['as' => 'user-profile']);
    });
});`

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
