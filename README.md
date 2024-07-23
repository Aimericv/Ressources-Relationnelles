# RESSOURCES RELATIONNELLES

## WHAT IS RESSOURCES RELATIONNELLES ?

Ressources Relationnelles is a student project for an Application Designer and Developer at the CESI school in La Rochelle. The site is a fictitious project with the Ministry of Health and aims to connect different French citizens.

## INSTALL DEPENDENCIES

:information_source: <b>You must have a server that run a php project like [MAMP](https://www.mamp.info/en/downloads/), [XAMPP](https://www.apachefriends.org/fr/index.html) ou [WAMP](https://www.wampserver.com).</b> :information_source:
:information_source: <b>You must have a PHP version equal to or greater than 8.2</b> :information_source:

* [Download Docker](https://docs.docker.com/get-docker/)
* [Download Git](https://git-scm.com/downloads)
* [Download Symfony CLI](https://symfony.com/download) for use `symfony` command
* [Download Composer](https://getcomposer.org/) for use `composer` command

## INSTALL PROJECT

* Clone project with this command :
  ```sh
  git clone https://github.com/Aimericv/Ressources-Relationnelles.git
  ```
* Go to the project directory :
  ```sh
  cd Ressources-Relationnelles
  ```
* Install symfony dependencies :
  ```sh
  composer install
  ```
* Update symfony dependencies :
  ```sh
  composer update
  ```
* Start the server with the following command :
  ```sh
  symfony server:start
  ```
* Stop the server with the following command :
  ```sh
  symfony server:stop
  ```
* Run the Docker container :
  ```sh
  docker build
  ```

## MIGRATE DATA TO THE DOCKER'S CONTAINER

* Migrate Table
  ```sh
  symfony console make:migration
  ```
  ```sh
  symfony console doctrine:migrations:migrate
  ```
* Copy `data.sql` file to Docker container :
  ```sh
  docker cp data.sql ressources-relationnelles-database-1:/data.sql
  ```
* Run an interactive Bash session in Docker container :
  ```sh
  docker exec -it ressources-relationnelles-database-1 bash
  ```
* Install `MySQL` command
  ```sh
  apt-get update
  ```
  ```sh
  apt-get install mysql-client -y
  ```
* Import MySQL database from `data.sql` file :
  ```sh
  mysql -u root -p ressource < /data.sql
  ```
* Set database URL :
  ```sh
  DATABASE_URL="mysql://root:password@localhost:60574/ressource"
  ```

## IMPORT GRAFANA'S DATA

You will need to log in to [Grafana](http://localhost:3001/) with the following identifiers : 
* `Identifier`
  ```sh
  admin
  ```
* `Password`
  ```sh
  admin
  ```

You can create another user or skip this step.
Go to the `Dashboard`, `Create dashboard` and `Import dashboard` page. There are three graphics to import:
```sh
893
```
```sh
10431
```
```sh
14031
```

## TESTS

* For run the test with PhpUnit :
  ```sh
  php bin/phpunit
  ```
* For run the test with Github Action :
  ```sh
  git add .
  ```
  ```sh
  git commit -m "commit title"
  ```
  ```sh
  git push
  ```
