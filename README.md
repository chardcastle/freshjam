# Calculator

Exploration of calculator solution with callable actions as controllers and a little AJAX.

Uses Slim Framework, AJAX and Docker.

## Installation 

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

## Composer Usage

To run the application in development, you can run these commands 

	cd [project-root]
	php composer.phar start

Run this command in the application directory to run the test suite

	php composer.phar test

## Docker usage

Start solution

    docker-compose up -d

Stop solution

    docker-compose down

That's it!
