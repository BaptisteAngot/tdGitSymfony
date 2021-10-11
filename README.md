# TD Symfony

A School Project, to exerce with [Git](https://git-scm.com) and [Symfony](https://symfony.com)

Prerequisites for the proper functioning of the application

    PHP 7.2
    Composer
    Symfony 4.22.0
    MySQL database

## Installation

Get the project :

    git clone : https://github.com/BaptisteAngot/CRM_API.git

Install bundles with composer :

    composer install

Create an .env.local, add your database URL

    DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"

Create your MySQL database with the following commands:

    php bin/console make:migration

    php bin/console doctrine:migrations:migrate

## Start server

Before clone, to start your Symfony server, you need to execute this command in your CLI :

    symfony server:start


## Route

To get a preview of differents routes accessible by this project you can execute this command : 
    
     php bin/console debug:router