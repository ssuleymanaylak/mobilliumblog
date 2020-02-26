# Set-up role based access control in Laravel

Run git clone https://github.com/ssuleymanaylak/mobilliumblog.git mobilliumblog

Create a MySQL database for the project

mysql -u root -p, if using Vagrant: mysql -u homestead -psecret

create database lrb;

\q

From the projects root run cp .env.example .env

Configure your .env file

Run composer install from the projects root folder

From the projects root folder run:

php artisan vendor:publish --tag=laravelroles

From the projects root folder run php artisan key:generate

From the projects root folder run php artisan migrate

From the projects root folder run composer dump-autoload

From the projects root folder run php artisan db:seed

Compile the front end assets with npm steps or yarn steps.

Build the Front End Assets with Mix

Using NPM:

From the projects root folder run npm install

From the projects root folder run npm run dev or npm run production

You can watch assets with npm run watch

Using Yarn:

From the projects root folder run yarn install

From the projects root folder run yarn run dev or yarn run production

You can watch assets with yarn run watch
