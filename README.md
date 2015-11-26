# WP Skeleton

Simply a skeleton repo to start developing WordPress site from. It is based on ideas from https://github.com/markjaquith/WordPress-Skeleton

## Information

WordPress core exists in the `cms` folder, 1 level up from the sites root. This means the `wp-config.php` file is in the root along with a custom content directory for themes, plugins and uploads. The `wp-config.php` file also takes care of local development using a `local-config.php` (example included).

## Usage Instructions

1. Clone the reposity in the root of your website (usually `public_html` or htdocs on an apache server).
2. Edit the name of the `local-config-sample.php` file to `local-config.php` and add the connection details to your local database in that file
3. Add the live site database connection details in the `wp-config.php` file. This should be added starting on line 9. You should also remember to include your salts in this file for security.
4. Vist the domains url locally and you should receive the normal WordPress installation steps after the database connection stage. Install WordPress normally from here.
5. Once logged into the WordPress admin, navigate to Settings and remove /cms from the setting labelled 'Site Address (URL)'
6. Thats it you should be good to go.

Remember that the `/content` folder now works as the usual `/wp-content` folder normally does storing your plugins and themes etc.
