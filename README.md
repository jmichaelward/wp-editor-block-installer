# WP Editor Block Installer
This package supports the development of standalone WordPress editor blocks,
installable as individual Composer packages. To add it to your plugin
or theme's Composer-based project, run:

`composer require jmichaelward/wp-editor-block-installer`

Subsequent to installing this package, any custom packages you require
via Composer with the type of `wordpress-block` will get automatically
installed to the `blocks` directory of your project.

#### Notes

This package is in beta development - not recommended for use in production.
