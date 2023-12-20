# Use the official PHP 8.3 CLI base image
FROM asia.gcr.io/etos-cloud/etos


# Copy the Laravel application code to the container
COPY . /var/www

# Set the working directory
WORKDIR /var/www

RUN chmod -R 777 /var/www/storage

# Install Laravel dependencies
RUN composer install --no-interaction --no-dev --prefer-dist

# Copy the Supervisor configuration file
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose the default Laravel port
EXPOSE 8000

# Start Supervisor to manage Laravel's queue worker
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
