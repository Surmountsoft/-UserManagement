# This is for user management package

## This is to create custom package for user management.

Install via composer
composer require usoftech/user

Then publish it 
php artisan vendor:publish

Then run migration and seeder
php artisan migrate
php artisan db:seed --class=PermissionsTableSeeder