# Use the official WordPress image as the base
FROM wordpress:latest

# Set the working directory in the container
WORKDIR /var/www/html

# Copy custom configuration files if needed
# COPY ./path/to/your/custom/config/file /path/in/container

# Expose port 80 to the outside world
EXPOSE 80

# Command to run Apache server
CMD ["apache2-foreground"] 
