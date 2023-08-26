#
##

```
# Creando proyecto en Laravel 8
composer create-project laravel/laravel:^8.0 API
```


```
# Creando modelo y migración
php artisan make:model Movie --migration
```

## Practicando Seeder

```
php artisan make:seeder MoviesSeeder
php artisan db:seed --class="MoviesSeeder"
```