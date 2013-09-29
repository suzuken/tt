PHP_BIN = $(shell which php)

install:
	$(PHP_BIN) composer.phar install

update:
	$(PHP_BIN) composer.phar update

install-composer:
	$(PHP_BIN) -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"

install-dev:
	$(PHP_BIN) composer.phar install --dev

test:
	vendor/bin/phpunit --colors ./t
