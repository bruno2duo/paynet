# Usar uma imagem base com PHP
FROM php:8.2-fpm

# Instalar dependências do sistema e extensões PHP necessárias para o Laravel
RUN apt-get update && apt-get install -y libpng-dev libjpeg62-turbo-dev libfreetype6-dev zip git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar o diretório de trabalho
WORKDIR /var/www

# Copiar o código da aplicação Laravel para o container
COPY . .

# Instalar as dependências do Laravel usando o Composer
RUN composer install

# Expor a porta 9000, que é a porta do PHP-FPM
EXPOSE 9000

# Comando para rodar o PHP-FPM
CMD ["php-fpm"]
