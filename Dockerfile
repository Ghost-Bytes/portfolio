#  official PHP image with Apache
FROM php:8.2-apache

# Copy project files to the container
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# This command Start Apache
CMD ["apache2-foreground"]
