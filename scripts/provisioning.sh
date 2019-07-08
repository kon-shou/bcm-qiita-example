#!/usr/bin/env bash

function package_install() {
  env DEBIAN_FRONTEND=noninteractive apt install -y $1
}

apt-get update -y

package_install php-fpm
package_install php-mysql
package_install php-imagick
package_install php-gd
package_install php-curl
package_install php-mbstring
package_install php-bcmath
package_install php-xml
package_install php-zip
package_install php-redis
package_install php-intl
package_install nginx
package_install composer

package_install mysql-client

package_install zip
package_install unzip
package_install jq
package_install git
package_install jq
package_install vim
package_install curl
