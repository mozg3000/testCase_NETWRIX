init: up install permissions migrations-up
up:
	docker-compose up -d
install:
	docker-compose run php composer install
permissions:
	docker-compose run php chmod -R 777 runtime web models
migrations-up:
	docker-compose run php php yii migrate