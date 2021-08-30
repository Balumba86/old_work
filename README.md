## Старт работы

```bash
cp example.env .env
cp src/.env.example src/.env

make build
make up

docker-compose exec php composer install
docker-compose exec php yarn
```
После успешного выполнения команд, выполнить команды для миграций и генерации ключей

```
docker-compose exec php php artisan migrate
docker-compose exec php php artisan key:generate
```

## Непосредственно разработка
Доступные порты и сервисы можно посмотреть в файле docker-compose.yml

Необходимое окружение можно поменять в файле `example.env` и `.env` (последний не заливается в git).

## Поднятие бэкенда
Для начала работы делаем `make up`, при завершении работы делаем `make down`.

## Поднятие фронтенда
Для запуска слушателя делаем `make dev`

Для боевой сборки фронта (для теста, например) делаем `make prod`

## Точки входа в приложение

### Бэкенд
Точкой входа на сайт служит дериктория `src/public`

В ней содержатся собранные скрипты и стили + иконка сайта

### Фронтенд
Точкой входа скриптов служит `src/resources/js/app.js`

Точкой входа стилей служит `src/resources/sass/app.scss`

Директория `src/resources/views` для фронта целиком не нужна.

В ней есть единственный файл `src/resources/views/welcome.blade.php` который является индексным файлом для сайта.



# История изменений
