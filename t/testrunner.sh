#!/bin/sh

DIR=`pwd`;

/usr/bin/php ${DIR}/vendor/bin/testrunner phpunit --phpunit-config ${DIR}/phpunit.xml -p ${DIR}/vendor/autoload.php --ansi -a ${DIR}/t -w ${DIR}/lib
