#!/bin/bash

cd /var/www/html
sh /var/script/cakephp-installer.sh
my_app/bin/cake server -H 0.0.0.0
#php -S 0.0.0.0:8000 