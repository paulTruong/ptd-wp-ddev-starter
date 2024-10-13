# README #

This README aims to document whatever steps are necessary to get your application up and running.  Please add to it if you discover anything new.

### Before you start ###
DDEV uses Docker under the hood so you need to download and install Docker. Once that's done [install DDEV](https://ddev.com/get-started/).

### How do I get set up? ###
* Summary of set up
  1. Open .ddev/config.yml and update the `name` field to your project name
  2. Run the start.sh script with `zsh start.sh` or `./start.sh` after granting execute permissions with `chmod +x start.sh`
  3. You only need to run start.sh once. After that you can run `ddev start` to start your app when you need it.
  4. If you want to [import a db dump](https://ddev.readthedocs.io/en/stable/users/usage/database-management/#database-imports) you can use `ddev import-db --file=path-to-sql-file`
  5. If you want to symlink ODM Core then you need to do two things.
    1. Symlink into the DDEV homeadditions folder: ln -s `absolute/path/to/odm-core-plugin absolute/path/to/.ddev/homeadditions/odm-core-plugin`. This will expose the symlink to the home directory of the Docker container created by DDEV
    2. Start the environment then SSH into the container using `ddev ssh`.
    3. Symlink the symlink in the home directory to the plugins folder on the docker container `ln -s ~/odm-core-plugin/ /var/www/html/www/wp-content/plugins/odm-core-plugin`. (TODO automate this on first start).

### Note on symlinking ###
Support for symlinks is a little limited. Any changes made to the symlinked files are not updated immediately and will need a `ddev restart` for them to come into effect.

### Warnings ###
If you are using localhost mapped sites in the LocalWP app you may have issues where they clash and have to stop LocalWP before running `ddev start`. Both routes through localhost and will clash.
### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Who do I talk to? ###

* simonwj@oxforddigitalmarketing.co.uk

### Useful Commands
- `ddev start` - Starts your app.
- `ddev restart`- Restarts your app. Stops, rebuilds your containers and then starts an app. If you wish to rerun your build steps or you've altered your config you should check out rebuild.
- `ddev describe` - Prints info about your app
- `ddev logs` - Displays logs for your app
- `ddev stop` - Spins down all ddev related containers
- `ddev delete` - Deletes the app and all related data
- `ddev launch` - Launches the app in your default browser
- `ddev mailpit` - Launch Mailpit in your default browser

### How to run tests ###
Tests are run using [Codeception](https://codeception.com/). Everything should work out of the box after you run composer update. Tests are run within the odm-core-etools plugin folder. To run test do the following:
  1. Start the local environment with `ddev start` 
  2. SSH into the container with `ddev ssh` 
  3. Change directory into the etools plugin folder with `cd www/wp-content/plugins/odm-core-etools/`
  4. Run the tests with `php vendor/bin/codecept run/`

### Database Setup
- DDEV has some [documentation](https://ddev.readthedocs.io/en/stable/users/usage/database-management/) on database management
- Database info can be found in wp-config-ddev.php

### Other setup
- Set a symlink to odm-core-plugin directory in the plugins folder of the WordPress install by typing `ln -s /Users/simonwj/Local Sites/odm-core/app/public/wp-content/plugins/odm-core-plugin /Users/simonwj/lando/es-alternative-equivalent/lando/www/wp-content/plugins/odm-core-plugin` in the terminal
- Has redis installed via the [ddev-redis addon](https://github.com/ddev/ddev-redis)
