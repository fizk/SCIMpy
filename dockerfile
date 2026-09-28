FROM php:8.6.0RC2-apache-bookworm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip \
    && apt-get install -y openjdk-17-jdk \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Set up environment variables
ENV JAVA_HOME=/usr/lib/jvm/java-17-openjdk-amd64
ENV PATH=$PATH:$JAVA_HOME/bin

RUN echo "<VirtualHost *:80> \n\
     ServerAdmin webmaster@localhost \n\
     DocumentRoot /app/html \n\
     # ErrorLog \${APACHE_LOG_DIR}/error.log \n\
     ErrorLog /dev/null \n\
     # CustomLog \${APACHE_LOG_DIR}/access.log combined \n\
     CustomLog /dev/null combined \n \
     <Directory /app/html/> \n\
         Options Indexes FollowSymLinks \n\
         AllowOverride None \n\
         Require all granted \n\n\
         \
         RewriteEngine on \n\
         RewriteCond %{REQUEST_FILENAME} !-d \n\
         RewriteCond %{REQUEST_FILENAME} !-f \n\
         RewriteRule . index.php [L] \n\
     </Directory> \n\
 </VirtualHost>" > /etc/apache2/sites-available/000-default.conf;

RUN a2enmod rewrite;

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app