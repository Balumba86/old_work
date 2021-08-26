## Старт работы

```bash
cp example.env .env
cp src/.env.example src/.env

docker-compose pull
docker-compose build
docker-compose up -d

docker-compose exec php composer install
```

После копирования из шаблана .env Laravel, выполнить команды для миграций и генерации ключей

```
docker-compose exec php php artisan migrate
docker-compose exec php php artisan key:generate
```

## Непосредственно разработка

Доступные порты и сервисы можно посмотреть в файле docker-compose.yml

Для начала работы делаем `docker-compose up -d`, при завершении работы делаем `docker-compose down`.

Необходимое окружение можно поменять в файле `example.env` и `.env` (последний не заливается в git).

Примеры работы с Mosquitto расположены в директории `examples` и присутствуют в docker-compose. Можно смотреть в логи
и переписать их таким образом, чтобы они выступали внешними сервисами для вашего сервиса (т.е. или подписались на ваши
события, которые можно отслеживать в логах, или публиковали какие-то события).

# История изменений
