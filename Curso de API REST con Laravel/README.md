## Creando API

##
Esta linea crear el proyecto con composer
´composer create-project laravel/lara
vel API´

Esta linea nos permite crear, controlador, migración y factory
´php artisan make:model Post -cmf´

## Términos (API)

## Métodos

- GET
- POST
- PUT (Completamente) / PATCH (Parcial)
- DELETE

### Estados 
- La 100 - Para informar

### 2xx - Success
- 200 - OK
- 201 - Created
- 204 - No content


### 4xx - Bad request
- 401 - Unauthorized
- 403 - Forbidden
- 404 - Not found

### 4xx - Redirection
- 301 - Moved permanently

### 5xx - Server errors
- 500 - Internal server error

### Enpoints

#### Vínculo
- http://laravel-api.test/api/v2/posts
- http://laravel-api.test/api/v2/posts/1

## Versión 1: planificación y configuración inicial

- Configuración
- Recurso
- Colección

###

`php artisan make:controller Api/V1/PostController --api --model=Post`

- --api: Se crean cinco métodos posibles

- --model=: Con el modelo que ya existe, en este caso

`php artisan route:list`

### Endpoint

- `http://0.0.0.0:8000/api/v1/posts/1`

## Versión 1: recurso

###

- Crea la clase que nos dará mejor apariencia: `php artisan make:resource V1/PostResource`