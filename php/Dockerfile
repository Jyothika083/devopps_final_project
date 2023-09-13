# Use the official PHP 8.0 Apache base image
FROM php:8.0-apache

# Install PHP extensions (mysqli, pdo, pdo_mysql)
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli && \
    docker-php-ext-install pdo pdo_mysql

# Create a directory for TCPDF
RUN mkdir /var/www/tcpdf

# Install TCPDF from GitHub
RUN curl -L https://github.com/tecnickcom/TCPDF/archive/master.tar.gz | tar xvz -C /var/www/tcpdf --strip 1


# Install additional packages (if needed)
RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y \
    # Add any additional packages here if needed \
    && rm -rf /var/lib/apt/lists/*  # Cleanup to reduce image size
