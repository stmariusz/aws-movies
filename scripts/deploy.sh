#!/usr/bin/env bash

##### Constants


##### Functions


##### Main

composer install
php vendor/bin/doctrine orm:schema-tool:update --force