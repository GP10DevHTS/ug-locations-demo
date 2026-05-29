# UG Locations Demo

A demo project for [gp10devhts/ug-village-locations](packagist.org/packages/gp10devhts/ug-village-locations)

## Steps used

1. created laravel project
2. installed the package 
    ```bash
   composer require gp10devhts/ug-village-locations
    ```
3. published the migrations and config
    ```bash
    php artisan vendor:publish --tag="ug-village-locations-config"
    php artisan vendor:publish --tag="ug-village-locations-migrations"
    ```
4. created custom model for districts
5. run migrations and seeders
    ```bash
    php artisan migrate
    php artisan db:seed
    php artisan ug-locations:seed
    ```

