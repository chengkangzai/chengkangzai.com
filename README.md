# chengkangzai.com

A personal website that serve as a personal profile, blog and a Covid Dashboard for Malaysia.

## Getting Started

### Requirement 
- [Composer](https://getcomposer.org/doc/00-intro.md) 
- [PHP8](https://www.php.net/downloads.php#v8.0.11)
- [Node 14](https://nodejs.org/en/download/)
- [Docker](https://www.docker.com/get-started)

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
sail composer install
```
Installing NPM dependencies and build it
```shell
sail npm install
sail npm run dev
```
#### Setting up laravel
Generate Application Key 
```shell
sail php artisan key:generate
```
Migrate the database and seed the data
```shell
sail php artisan migrate --seed
```
#### FINALLY
Turn up the Docker
```shell
sail up
```
visit `http://localhost/` to see the website 

#### Turn off the docker
```shell
sail down 
```

## Contributing
Any contribution is welcome
