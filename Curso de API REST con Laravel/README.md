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

### Modificar los datos de manera virtual sin modificar lo que realmente tenemos en la Base de Datos

- Crea la clase que nos dará **mejor apariencia**: `php artisan make:resource V1/PostResource`
    - Es mejor versionarlo

- En vez de usar un recurso específico usamos todos los Posts

```
Route::apiResource('v1/posts', App\Http\Controllers\Api\V1\PostController::class)
->only(['index','show']);
```

- Al trabajar directamente con laravel nos dice cuál es el estandar correcto para trabajar (se había hecho mención a los estilos correspondientes del paginado desde la llave meta)

- Podemos retornar los datos sin pasar por este formato `return PostResource::collection(Post::latest()->paginate());`, sin embargo, nos interesa que se envíen los campos que se han definido, no `Post::latest()->paginate();`
 - Si se quiere una configuración adicional lo que tenemos que hacer es crear otro recurso con otra configuración, pero por el momento la necesidad exigida por el cliente requiere que en la colección veamos los mismos datos que cuando vemos un recurso individual
