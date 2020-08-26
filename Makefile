VERSION=1.0
COMMIT_ID=(shell git rev-parse HEAD)
PR0JECT_NAME=Timer_Project_Ipssi_2020
SERVICE_NAME=Script

# Command lines defaults
ENV = dev
CMD = "make", "populate"

.PHONY: start
start:
	@echo "Vous lancez l'application en installant aussi les dependances"
	@echo "!!! cela peut durer quelques minutes..."
	docker-compose up --build
	@echo "L'application est dorénavant accessible à l'adresse http://localhost:8000 !"

.PHONY: stop
stop:
	docker-compose down
	@echo "L'application s'est bien arretee"

.PHONY: migrations
migrations:
	@echo "Mise en place de la base de donnees..."
	docker-compose exec web php bin/console doctrine:migration:migrate "--no-interaction"
	@echo "La base de donness est prete, vous pouvez à présent creer des donnees"
	@echo "OU generer des jeux de donnees"

.PHONY: fixtures
fixtures: ##Mise en place des jeux de données
	@echo "Mise en place des jeux de données..."
	docker-compose exec web php bin/console doctrine:fixtures:load  "--no-interaction"
	@echo "Bravo !!! vous avez cree des jeux de donnees"

.PHONY: commit
commit:
	git add Makefile
	git commit -m "edit Makefile"
	git push origin develop

.PHONY: containers
containers:
	docker ps