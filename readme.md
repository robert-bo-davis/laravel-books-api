## Description

This is an example of a books api using the laravel framework.

## Requirements

* [docker-engine](https://docs.docker.com/engine/installation/)
* [make](https://www.gnu.org/software/make/)

## Quick Start

Run `make` to quickly get a dev environment up and running. This is the equivalent of `make build up logs`. You may also want to run `make seed` to seed some data.

Once the dev environment is running, you will be able to access the [documentation](http://localhost:8000) and the [endpoints](http://localhost:8000/api/books).

## Quick Tests

Run `make quick-test` to run tests against a running dev environment. This **will** create testing data in the running dev environment's db.

## Standalone Tests

Run `make test` to spin up a standalone testing environment. Tests here will not modify your testing environment. It is significantly slower than `quick-test` because of the added overhead of creating and destroying a docker environment

## Make commands

* `make test` - Performs full test in standalone environment.
* `make quick-test` - Performs full test in currently running dev environment.
* `make quick-test-feature` - Performs feature tests in currently running dev environment.
* `make quick-lint` - Performs lint tests in currently running dev environment.
* `make build` - Builds docker image.
* `make up` - Brings dev environment up.
* `make logs` - Streams logs from dev environment.
* `make stop` - Stops running dev environment.
* `make down` - Destroys running dev environment.
* `make shell` - Get a bash prompt on the dev environment.
* `make composer-update` - Runs composer update to update requirements.
* `make seed` - Seeds the database of a running dev environment.
* `make generate-api-docs` - Generates api documentation after updates to api. **This should be run on a fresh dev environment in conjunction with `make seed`.**

## License

laravel-books-api is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
