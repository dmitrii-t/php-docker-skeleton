default:
    just --list

up:
	docker-compose up -d

rebuild SERVICE:
    docker-compose build {{SERVICE}}
    just up

down:
	docker-compose down

psalm:
    just composer psalm

cs-check:
    just composer cs-check

main-install-composer:
    just composer install --dev

bins-install-all:
    just composer bin csfixer install --dev
    just composer bin depsanalyze install --dev
    just composer bin phpunit install --dev
    just composer bin psalm install --dev

test:
    -just composer test

install-all-composer:
    just main-install-composer
    just bins-install-all

composer +args:
    -docker-compose exec php composer {{args}}