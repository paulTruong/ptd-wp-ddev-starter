ddev start

ddev wp core download --skip-content

ddev wp core install --url='$DDEV_PRIMARY_URL' --title='Good Site Studios' --admin_user=ptsiteboss --admin_email=paul@paultruong.dev --prompt=admin_password

ddev composer update

# Install composer dependencies including plugins for the project as a whole
ddev composer install

# Change directory in the starter plugin
cd wp-content/plugins/ptd-starter-plugin

# Install composer dependencies in the starter plugin
composer install

# Install npm dependencies in the starter plugin
npm install

# Add redis location for the Redis Object Cache plugin
ddev wp config set WP_REDIS_CLIENT "redis" 
# Launch the WordPress admin dashboard in the browser
ddev launch wp-admin/