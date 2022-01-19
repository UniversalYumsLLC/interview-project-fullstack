# Interview Project Fullstack ![Testing status](https://github.com/UniversalYumsLLC/interview-project-fullstack/actions/workflows/php-tests.yml/badge.svg?branch=main)

* Requires PHP: 7.0
* WP requires at least: 5.7
* WP tested up to: 5.7
* WC requires at least: 5.6.0
* WC tested up to: 5.8.0
* Stable tag: 1.0.0
* License: [GPLv3 or later License](http://www.gnu.org/licenses/gpl-3.0.html)

### About this project

The project is to build a dashboard widget in WordPress that allows a shop manager or admin to enter an email address and get back a list of recent orders associated with that email.

The goal of the project is to help us understand how you would approach WooCommerce plugin development and communicate as a developer.

### Getting started

You'll need to have a local development environment set up (Local, Valet, Docker, etc.) with WordPress and WooCommerce installed.

#### 1. Create a WordPress install

```
mkdir woocommerce
cd woocommerce
wp core download
wp config create --dbname={dbname} --dbuser={dbuser} [enter pass if you have one --dbpass={dbpass}]
wp db create
wp core install --url={siteurl} --title={Title} --admin_user=admin --admin_password=admin --admin_email=info@example.com
```

#### 2. Install the plugin files

Fork this plugin into a private repo (so other candidates can't see your work), and then install the fork in your WordPress directory.

```
git clone https://github.com/{username}/interview-project-fullstack wp-content/plugins/interview-project-fullstack
```

#### 3. Installs the test dependencies

```
cd wp-content/plugins/interview-project-fullstack
composer install
```

#### 4. Creates a database for running tests and install core WordPress unit tests

You'll be creating a new database to runs the tests. The contents of the database will be deleted after each run. Use your local database username/password to set up the database.

```
vendor/bin/install-wp-tests.sh {dbname} {dbuser} {dbpass}
```

Example:

```
vendor/bin/install-wp-tests.sh project_fullstack_tests root ''
```

#### 5. Run the tests

You can run the version of phpunit that composer installs to run the:

```
vendor/phpunit/phpunit/phpunit -c phpunit.xml
```

Once the test runs the terminal output how many tests passed/failed. If you have no output, it means the test didn't run properly. In that case, check your PHP logs.

If you have trouble getting PHPUnit set up locally, automated tests also run on GitHub for any PR.

### Automated Tests ![Testing status](https://github.com/UniversalYumsLLC/interview-project-fullstack/actions/workflows/php-tests.yml/badge.svg?branch=main)

Automated tests will be automatically run on your branch whenever a commit to GitHub is pushed to main or in a PR.

### Project instructions

**How to Submit the Project**

If possible, please fork this project into a private repository so that other candidates cannot see your work. Add @devinsays to the repo when it's ready for review.

If that is not possible, just zip up the code when it's complete and send it to our recruiter.

**Functionality**

- Add an input field for email address and a search button to the dashboard widget.
- While the search for orders is running, include a visual indicator so the admin knows the search is in progress.
- Display up to five order results. These should be ordered by date, with the most recent orders first.
- The results should include the order ID (which links to the order edit screen), date order was created, and total amount of order. If there are no results returned, display a message indicating that. Order data can be fetched with an ajax call or using a REST endpoint, whatever you prefer.
- Each time an order is returned by this widget, add or update the meta field "last_lookup" on the order with the current unix timestamp.

**Requirements**

- Search functionality should be accurate.
- Include plenty of code comments and make clear commit messages.
- Include at least two unit tests.

**Other Questions**

Q: Should this be optimized for a large WooCommerce site (i.e 500k+ orders)?
A: No, you can assume this is a smaller site. But please add code comments if there's queries or areas in the code you believe would need to be optimized to work at scale.
