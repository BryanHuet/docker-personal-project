FROM debian:bookworm

ENV APACHE_RUN_USER=www-data
ENV APACHE_RUN_GROUP=www-data
ENV APACHE_LOG_DIR=/var/log/apache2
ENV APACHE_RUN_DIR=/var/run/apache2
ENV APACHE_LOCK_DIR=/var/lock/apache2
ENV APACHE_PID_FILE=/var/run/apache2/apache2.pid

RUN apt-get update && \
    apt-get install -y \
        supervisor \
		apache2 \
        php \
        libapache2-mod-php \
        php-mysql \
        php-sqlite3\
        php-intl \
        php-zip \
        php-json \
        php-mbstring \
        php-xml \
        php-curl \
        unzip \
        php-zip \
		curl \
        w3m \
        net-tools \
        nano \
		ca-certificates && \
	apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /var/cache/apt/archive/*.deb

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configure apache
RUN a2enmod rewrite headers
RUN chown -R www-data:www-data /var/www/html
RUN chown -R www-data:www-data /var/log
RUN chown -R www-data:www-data /var/run/apache2

COPY eruditio/apache/custom-apache.conf /etc/apache2/sites-available/000-default.conf
COPY eruditio/apache/apache2.conf /etc/apache2/apache2.conf

# Copy the Supervisord config file
COPY eruditio/supervisord/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Create necessary directories
RUN mkdir -p ${APACHE_RUN_DIR} ${APACHE_LOCK_DIR} ${APACHE_LOG_DIR}

STOPSIGNAL SIGWINCH
EXPOSE 8080

WORKDIR /var/www/html

CMD ["/usr/bin/supervisord"]
