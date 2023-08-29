# Curso Básico de Testing con PHP y Laravel

## 
Ejecutar los tests
```
# Recordando cómo crear un proyecto Laravel en su versión 8
composer create-project laravel/laravel:^8.0 phpunit

# Método 1
vendor/bin/phpunit
# Método 2
php artisan test
```
### Convención tests
```
# Método 1
testBasic
# Método 2
test_basic
```

## Unit y Feature
Unit y Feature son dos carpetas importantes dentro de tests
- Unit: Se enfoca en el resultado de un método principalmente
- Feature: Utilizamos este cuando queremos probar algo más amplio
```
# Por defecto son de Feature
php artisan make:test ExampleTest
# Si utilizamos el parámetro --unit se va a la carpeta Unit
php artisan make:test ExampleTest --unit
```

- El archivo (functions.php) lo estamos dando de alta en (composer.json) para que pueda ser utilizada desde cualquier sitio en el entorno
- Actualizamos la llave de autocarga.
```
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Database\\Factories\\": "database/factories/",
            "Database\\Seeders\\": "database/seeders/"
        },
        "files": [
            "app/functions.php"
        ]
    },
```

- Luego ejecutamos el comando para actualizar nuestro entorno
```
composer dump
```

## Mutator & Accessor

### Mutator
Un Mutator transforma un atributo antes de ser almacenado.
### Accessor
Un Accessor transforma un atributo antes de ser presentado.
