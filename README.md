# Laravel Test

## Mission
This repository contains a scaffold of a Laravel Project, with 1 Model called `Url`.

Your goal is to create an API end-point which allows for creating new Urls and provide a shortening service for them.
## Test requirements
* Should be possible via HTTP based API to create, read, delete Url models.
* If no `slug` have been given one is auto generated. 
* User requests route `/s/<slug>` the user should be redirected to url.

---

## Installation
Please feel free to use any development environment which is most convenient to you.
### Environment requirements
* `PHP ^7.4`
* `MySQL or any compatible server`

### Installation
We have included a DDEV based configuration for the project, so if you already use a simple:
```
ddev start && ddev install
```
will get you up and running with a local environment.

#### Alternative
If you do it your self you will need to run (assuming you have configured your .env file with credentials for MySQL):
```
composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
```

## Development



## Used packages
* GraphQL package included
  * [nuwave/lighthouse](https://github.com/nuwave/lighthouse)
  * [Tutorial](https://lighthouse-php.com/tutorial/#what-is-graphql)
  * [Documentation](https://lighthouse-php.com/master/getting-started/installation.html)

