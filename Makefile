build:
	@docker-compose build --no-cache

run:
	@docker-compose up -d
	@docker-sync stop && docker-sync start

prune:
	@docker volume rm app

get-user-web:
	@docker exec docker-prestashop17x-php7-fpm_web_1 id -u web

get-user-prestashop:
	@docker exec docker-prestashop17x-php7-fpm_prestashop_1 id -u php

get-app-logs:
	@docker logs -f app