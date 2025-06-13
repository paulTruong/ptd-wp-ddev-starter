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
 
### Note on symlinking ###
Support for symlinks is a little limited. Any changes made to the symlinked files are not updated immediately and will need a `ddev restart` for them to come into effect.

### Warnings ###
If you are using localhost mapped sites in the LocalWP app you may have issues where they clash and have to stop LocalWP before running `ddev start`. Both routes through localhost and will clash.
### Contribution guidelines ###

* Writing tests
* Code review
* Other guidelines

### Useful Commands
- `ddev start` - Starts your app.
- `ddev restart`- Restarts your app. Stops, rebuilds your containers and then starts an app. If you wish to rerun your build steps or you've altered your config you should check out rebuild.
- `ddev describe` - Prints info about your app
- `ddev logs` - Displays logs for your app
- `ddev stop` - Spins down all ddev related containers
- `ddev delete` - Deletes the app and all related data
- `ddev launch` - Launches the app in your default browser
- `ddev mailpit` - Launch Mailpit in your default browser

### Database Setup
- DDEV has some [documentation](https://ddev.readthedocs.io/en/stable/users/usage/database-management/) on database management
- Database info can be found in wp-config-ddev.php

### Other setup
- Has redis installed via the [ddev-redis addon](https://github.com/ddev/ddev-redis)
