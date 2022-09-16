# Documents

* Feito com [Laravel](http://laravel.com)
* Encode: UTF-8
* Docker: http://172.17.0.1:8012

## Laravel

Copie o .env

```sh
$ cp .env.example .env
```

## Docker

Instalar pré-requisitos:
* [Docker](https://docs.docker.com/engine/installation/linux/ubuntulinux/)
* [docker-compose](https://docs.docker.com/compose/install/)

Para levantar o container, basta executar:
```sh
$ ./vendor/bin/sail
```

Caso necessário, você pode acessar os containers via SSH:
```sh
$ docker-compose exec laravel.test bash
$ docker-compose exec mysql bash
```
Liberar as permissoes do container:
```sh
$ docker-compose run web chmod 0777 -R
```

Migrate:

```sh
$ docker-compose exec laravel.test php artisan migrate
ou
$ ./vendor/bin/sail artisan migrate
```