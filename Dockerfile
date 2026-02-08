# Utilizamos una imagen oficial de PHP 8.1 como imagen base
FROM php:8.4-apache

# Instalamos los paquetes necesarios
RUN apt-get update && apt-get upgrade -y && apt-get install -y \
    libpq-dev \
    git \
    curl \
    vim \
    unzip \
    libicu-dev \
    && rm -rf /var/lib/apt/lists/*

# Configuramos los m  dulos de PHP
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

# Instalamos y habilitamos Xdebug
#RUN pecl install xdebug \
   # && docker-php-ext-enable xdebug


# Habilita mod_rewrite
RUN a2enmod rewrite

# Establecemos la ra  z web de Apache en el directorio p  blico del proyecto
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Copiamos nuestra aplicaci  n a la carpeta de trabajo del contenedor
COPY . /var/www/html/
COPY web/apache2.conf /etc/apache2/apache2.conf
COPY ./config/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

# Establecemos la carpeta de trabajo
WORKDIR /var/www/html/

# Ejecutamos los comandos necesarios para instalar las dependencias de PHP y ejecutar nuestro proyecto
# Instalar composer de forma global
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Ejecutar la instalación
RUN composer install --no-interaction --optimize-autoloader \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html/var
    
# Copiamos configuraci   n de Xdebug
COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
# Instalamos y habilitamos Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Activamos modulo SSL
RUN a2enmod ssl

# Activamos el SSL y desactivamos el otro
RUN a2dissite 000-default && a2ensite default-ssl

# Exponemos el puerto 80 para el tr  fico HTTP
EXPOSE 80:443

# Iniciamos el servidor Apache en primer plano
CMD ["apache2-foreground"]