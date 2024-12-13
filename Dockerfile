# Use uma imagem base compatível com PHP 7.3 ou 8.0
FROM php:7.3-fpm

# Instala dependências do sistema necessárias para o Laravel
RUN apt-get update && apt-get install -y \
    nginx \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install zip pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala o Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto para o contêiner
COPY . .

# Ajusta permissões para o Laravel
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Otimiza para produção
RUN composer install --no-dev --optimize-autoloader \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Expõe a porta padrão do Nginx
EXPOSE 80

# Copia uma configuração básica para o Nginx
COPY docker/nginx.conf /etc/nginx/conf.d/default.conf

# Define o comando de inicialização do contêiner
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
