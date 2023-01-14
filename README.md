# chengkangzai.com

A personal website that serve as a personal profile, blog and a Covid Dashboard for Malaysia.

[![Actions Status](https://github.com/chengkangzai/chengkangzai.com/workflows/CI/badge.svg)](https://github.com/chengkangzai/chengkangzai.com/actions)

## Getting Started

### Requirement

- [Composer](https://getcomposer.org/doc/00-intro.md)
- [PHP8](https://www.php.net/downloads.php#v8.0.11)
- [Node 14](https://nodejs.org/en/download/)

#### Getting the repo
Start by cloning the repository.
```shell
git clone https://github.com/chengkangzai/chengkangzai.com/
```

Go into the repo

```shell
cd chengkangzai.com
```

Copy and Setting up the environment file 
```shell
cp .env.example .env
```
Now you have to fill up the environment file by your IDE/Code Editor

#### Installing Dependencies
In below section, assuming you done setting alias `sail` as `./vendor/bin/sail`
[Click here if you don't now how](https://laravel.com/docs/8.x/sail#configuring-a-bash-alias)

Installing Composer dependencies
```shell
composer install
```
Installing NPM dependencies and build frontend it
```shell
npm install
npm run dev
```
#### Setting up laravel
Generate Application Key 
```shell
php artisan key:generate
```
Now you should set up your enviroment variable especially database variable

Migrate the database and seed the data
```shell
php artisan migrate --seed
```
#### FINALLY
Turn up the Docker
```shell
php artisan serve
```
visit `http://localhost:8000/` to see the website 


## Contributing
Any contribution is welcome
