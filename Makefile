PHP_BIN = $(shell which php)

install:
	$(PHP_BIN) composer.phar install

update:
	$(PHP_BIN) composer.phar update

install-composer:
	$(PHP_BIN) -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"

install-dev:
	$(PHP_BIN) composer.phar install --dev
	$(PHP_BIN) vendor/bin/testrunner compile -p vendor/autoload.php

test:
	vendor/bin/phpunit --colors -c ./phpunit.xml

request-test:
	vendor/bin/phpunit --colors -c ./phpunit_request.xml

testrunner:
	/bin/sh t/testrunner.sh
