FROM php:7.0-apache
MAINTAINER Alberto Ramos <ramosalberto@cicese.edu.mx>


COPY www/ /var/www/html/

EXPOSE 80:80

# By default start up apache in the foreground, override with /bin/bash for interative.
CMD /usr/sbin/apache2ctl -D FOREGROUND