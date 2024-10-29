# Usa una imagen base de PHP con Apache
FROM php:8.1-apache


# Instala extensiones de PHP necesarias para Moodle y PostgreSQL
RUN apt-get update && \
    apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    libpq-dev \
    libicu-dev \
    libxml2-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pgsql pdo_pgsql zip && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl exif soap zip && \
    apt-get clean && rm -rf /var/lib/apt/lists/*



# Configurar PHP para incrementar max_input_vars
RUN echo "max_input_vars=5000" >> /usr/local/etc/php/php.ini


# Habilita el módulo de Apache para .htaccess
RUN a2enmod rewrite

# Copia el código de tu proyecto Moodle en el contenedor
COPY . /var/www/html

# Ajusta permisos de los directorios de Moodle
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Exponer el puerto 80 para Apache
EXPOSE 80