# Documents

* Feito com [Laravel](http://laravel.com)
* Encode: UTF-8
* Docker: http://172.17.0.1:8096

## Laravel

Copie o .env

```sh
$ cp .env.example .env
```

## Composer

Instalar pré-requisitos:
* [Composer](https://getcomposer.org/download/)

## Docker

Instalar pré-requisitos:
* [Docker](https://docs.docker.com/engine/installation/linux/ubuntulinux/)
* [docker-compose](https://docs.docker.com/compose/install/)

Para levantar o container pela primeira vez, basta executar:
```sh
$ ./vendor/bin/sail up
```

Após isso, nas próximas basta usar:
```sh
$ docker-compose up
```

Caso necessário, você pode acessar os containers via SSH:
```sh
$ docker-compose exec laravel.test bash
$ docker-compose exec mysql bash
```
Liberar as permissoes do container:
```sh
$ chmod 0777 -R storage/
$ chmod 0777 -R bootstrap/
```

Migrate:

```sh
$ docker-compose exec laravel.test php artisan migrate
ou
$ ./vendor/bin/sail artisan migrate
```
