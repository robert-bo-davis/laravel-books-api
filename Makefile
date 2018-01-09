.PHONY: test build run push

IMAGE_BASE = robert-bo-davis
IMAGE = laravel-books-example
MY_PWD := $(shell pwd)

all: build up logs

test:
	# We run this entire block as a single bash command so that we
	# can cleanup on errors. We capture the exit code from the test
	# container, run `docker-compose down` to cleanup the test
	# environment, then we exit with the exit code from the container.
	BOOK_NETWORK=books_test BOOK_PORT=8001 docker-compose -p laravelbooksapitest up -d; \
	docker run -i --rm \
		--net laravelbooksapitest_books_test \
		-v ${MY_PWD}/.:/app \
		-e DB_CONNECTION=mysql \
		-e DB_HOST=mysql \
		-e DB_PORT=3306 \
		-e DB_DATABASE=books \
		-e DB_USERNAME=books \
		-e DB_PASSWORD=change_me \
		$(IMAGE_BASE)/$(IMAGE) composer test; \
	status=$$?; \
	BOOK_NETWORK=books_test BOOK_PORT=8001 docker-compose -p laravelbooksapitest down; \
	exit $$status;

quick-test:
	docker-compose exec web composer test

quick-test-feature:
	docker-compose exec web composer test-feature

quick-lint:
	docker-compose exec web composer lint

build:
	docker build -t $(IMAGE_BASE)/$(IMAGE) .

up:
	docker-compose up -d

logs:
	docker-compose logs -f

stop:
	docker-compose stop

down:
	docker-compose down

shell:
	docker-compose exec web bash

composer-update:
	docker-compose exec web composer update --no-interaction

seed:
	docker-compose exec web php artisan db:seed

generate-api-docs:
	docker-compose exec web php artisan api:generate --force --noResponseCalls --noPostmanCollection --routePrefix="api/*" --bindings="author,1|book,4|edition,5"
