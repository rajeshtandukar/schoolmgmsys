# Use the official PHP 7.4 image
FROM php:7.4-cli

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the PHP files into the container
COPY . .

# Expose port 80 (change this if your application uses a different port)
EXPOSE 80

# Specify the entry point for the container
CMD ["php", "-S", "0.0.0.0:80"]
