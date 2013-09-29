PHP_BIN = $(shell which php)

install:
	php composer.phar install

install-composer:
	$(PHP_BIN) -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"

install-dev:
	php composer.phar install --dev
