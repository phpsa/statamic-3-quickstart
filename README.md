<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center"><img src="https://statamic.com/assets/branding/Statamic-Logo+Wordmark-Rad.svg" width="400" alt="Statamic Logo" /></p>

## About Laravel 7

[Laravel](https://laravel.com) is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. [Laravel](https://laravel.com) takes the pain out of development by easing common tasks used in many web projects. [Laravel](https://laravel.com) is accessible, powerful, and provides tools required for large, robust applications.

## About Statamic 3

[Statamic 3](https://statamic.dev) is the very latest and greatest version of Statamic, a uniquely powerful CMS built on [Laravel](https://laravel.com) and designed to make building and managing bespoke websites radically efficient and enjoyable.

## About Tailwind CSS

[Tailwind CSS](https://tailwindcss.com/) is a highly customizable, low-level CSS framework that gives you all of the building blocks you need to build bespoke designs without any annoying opinionated styles you have to fight to override.

## This starter uses the following in addition to the above:

-   https://github.com/laravel-frontend-presets/tailwindcss
-   seomatic https://statamic.com/addons/cnj/seotamic
-   [Docksal](https://docksal.io/) (optional)
    -   docksal artisan addon (`fin addon install artisan -g`) for a global install

## Installation Options:

### Use as tempalate:

-- using the use this template button to clone into your own repo, checkout and follow installation instructions below

### Checkout

```bash
git clone https://github.com/phpsa/statamic-3-quickstart.git yoursite
cd yoursite
rm -rf .git
cp .env.example .env
```

setup your env variables (database etc)

if using docksal you can then run

```bash
fin init
fin exec php artisan key:generate
fin exec php artisan migrate
fin exec php please make:user
yarn
```

Else

```bash
composer install
php artisan key:generate
php artisan migrate
php please make:user
yarn
```

You should be good to go now
