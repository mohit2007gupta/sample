## Source Cheetah

To configure, run `composer install`

Copy `.env.example` to `.env` and add configuration

Also `sudo chmod 775 -R storage bootstrap/cache` and assign your apache group as the group for these folders

Run `php artisan key:generate`
