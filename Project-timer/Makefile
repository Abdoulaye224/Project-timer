VERSION=1.0
COMMIT_ID=(shell git rev-parse HEAD)
PR0JECT_NAME=Timer
SERVICE_NAME=Script

# Command lines defaults
ENV = dev
CMD = "make", "populate"

.PHONY: start
start:
	docker-compose up --build

.PHONY: stop
stop:
	docker-compose down

.PHONY: migrations
migrations:
	docker-compose exec web php bin/console doctrine:migration:migrate

.PHONY: fixtures
fixtures:
	docker-compose exec web php bin/console doctrine:fixtures:load
	exec yes

.PHONY: containers
containers:
	docker ps