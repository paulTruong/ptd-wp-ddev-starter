ddev start

ddev wp core download --skip-content

ddev wp core install --url='$DDEV_PRIMARY_URL' --title='eTools' --admin_user=admin --admin_email=admin@example.com --prompt=admin_password

ddev composer update

ddev composer install

# Add redis location for the Redis Object Cache plugin
ddev wp config set WP_REDIS_CLIENT "redis" 
# Launch the WordPress admin dashboard in the browser
ddev launch wp-admin/