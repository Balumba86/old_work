
#
help:
# Выводит список команд make-файла с описанием
#
	sed -nE "s/^([[:alpha:]]*:)/\1/p; s/^(#[[:blank:]]*)([[:graph:]].*)$\/-\ \2/p; s/^#[[:blank:]]*$\//p" Makefile
up:
# Запускает контейнеры
#
	docker-compose up -d

down:
# Останавливает контейнеры
#
	docker-compose down

exec:
# Запускает sh в контейнере php
#
	docker-compose exec php sh

build:
# Собирает контейнеры
#
	docker-compose -f docker-compose-build.yml build
	docker-compose -f docker-compose-build.yml up -d
# 	docker cp builded_php:/var/www/html/vendor ./src/
# 	docker cp builded_php:/var/www/html/node_modules ./src/
	docker-compose -f docker-compose-build.yml down

dev:
# Запускает yarn watch в контейнере для разработки фронтенда
#
	docker-compose exec php yarn watch

prod:
# Запускает yarn production для сборки билда
#
	docker-compose exec php yarn production
