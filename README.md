# Laravel Test

## Mission
This repository contains a scaffold of a Laravel Project, with 1 Model called `Url`.

Your goal is to create an API end-point which allows for creating new Urls and provide a shortening service for them.

## Test requirements
* Implement query & mutation in GraphQL for Url model – allowing for create, read and delete of urls.
* If no `slug` have been given one is auto generated. 
* Cover `slug` generation with a unit test.
* On route `/s/<slug>` we should be redirected to corresponding url.

---

## Installation
Please feel free to use any development environment which is most convenient to you.

### Environment requirements
* `PHP ^7.4`
* `MySQL or any compatible server`

### Installation
We have included a [DDEV](https://ddev.readthedocs.io/) (See Useful resources for more info about DDEV) based configuration for the project to get up and running very quickly – if you already have another local development setup jump to next section.

```
ddev start && ddev install
```

The first commands (`ddev start`) boots up the docker containers and adds them to the local routing layer – the second command is a prebundle set of commands that run all commands listed in the next section.

#### Alternative
If you do it your self you will need to run - assuming you have configured your .env file with credentials for MySQL

```
cp .env.example .env
mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache
```
Make sure to adjust your .env file to match your local environments configurations.

```
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
```

## Development

This is a standard Laravel project, with a minimal configuration/changes done to it – you will find the normal User model which can be ignored as we have no expectations that the above require any kind of authentication.

The `Url` model have been added to handle model based actions _hint_ great place to handle the auto-generation of slug.

For testing slug generation you can use
``` 
ddev artisan db:wipe && ddev artisan db:seed
# Or alternative if you are using your own flavor of local environment. 
php artisan db:wipe && php artisan db:seed
```

## Useful resources
* Lighthouse GraphQL package for Laravel
  * [nuwave/lighthouse](https://github.com/nuwave/lighthouse)
  * [Tutorial](https://lighthouse-php.com/tutorial/#what-is-graphql)
  * [Documentation](https://lighthouse-php.com/master/getting-started/installation.html)
* DDEV - Local docker based PHP Development environment
  * [Documentation](https://ddev.readthedocs.io/en/stable/)
  * [Step-debugging setup](https://ddev.readthedocs.io/en/stable/users/step-debugging/)
