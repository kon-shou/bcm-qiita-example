#!/bin/bash

sudo service php7.2-fpm start
sudo service nginx start

tail -f /dev/null
