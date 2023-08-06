up:
	docker-compose up -d
down:
	docker-compose down

ps:
	docker-compose ps

app-laravel:
	 docker-compose exec app bash

mysql-laravel:
	 docker-compose exec mysql bash

web-laravel:
	 docker-compose exec web bash

build:
	docker-compose build

up-build:
	docker-compose up -d --build