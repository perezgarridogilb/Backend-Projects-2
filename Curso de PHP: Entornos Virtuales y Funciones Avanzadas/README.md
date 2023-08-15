## Documentación: la biblia de PHP

Leer documentación es MUY importante. Es la documentación quien te dicta cómo funciona el lenguaje y qué cosas incluye como **built-in functions**.

## ¿Qué es PHP Doc?
PHPDoc no es más que un estándar informal que tenemos para documentar código en PHP, de esta forma los editores de código pueden mostrar sugerencias cuando implementemos el código que estamos comentando.

## ¿Qué es PHPDoc?

Es una adaptación de Javadoc y, además de ayudar a los editores de código, también puede ser útil para algunos generadores de documentación como phpDocumentor.

## ¿Para qué sirven los entornos virtuales?
Muchas veces necesitamos trabajar con distintos proyectos que usan diferentes versiones de PHP. Aunque en algunos sistemas operativos en fácil cambiar entre versiones, muchas veces es recomendado utilizar entornos virtuales.

### ¿Qué es un entorno virtual?
Un entorno virtual nos permite encapsular todo lo necesario para que un proyecto pueda funcionar con las versiones que este mismo requiere.
Esto a su vez permite que podamos tener varios proyectos con distintas versiones.

- Vagrant
- Laragon
- Docker

vagrant
mkdir project && cd project
vagrant init ubuntu/trusty64
vagrant up
vagrant ssh
exit

vagrant halt
# En caso de prender
vagrant up

## ¿Qué son los Virtual Hosts?
Es una forma de que varias páginas web puedan funcionar al mismo tiempo en un mismo servidor.

Los podemos definir por direcciones IP o por nombres de dominio.

###

Cuando trabajamos con localhost se pueden configurar para que un nombre de dominio que escribamos en nuestro navegador apunte hacia alguna página web que esté sirviendo Apache desde nuestra computadora.

Para configurar un virtual host tenemos que hacer dos cosas:
1. Decirle a Apache que exponga X página web en tal dominio
2. Decirle al navegador que cuando escribamos X dominio redirija a la web que Apache está exponiendo.

## Constantes en PHP
Las constantes en PHP son case-sensitive, es decir, distinguen entre mayúsculas y minúsculas, pero por convención siempre deben ser declaradas con mayúsculas.

### define() y const
Sabemos que la función nos sirve para definir una costante en PHP, pero también hay otra forma de definirlas. Ambas nos sirven para definir costantes, pero tienen ligeras diferencias.

#### const
- Funciona dentro y fuera de la definición de una clase.
- Define constantes en tiempo de compilación.
- No podemos usarlos dentro de bloques de código.
- Sólo acepta tipos de datos escalares
- Siempre es case sensitive.

#### define()
- Sólo funciona fuera de la definición de una clase
- Define las constantes en tiempo de ejecución
- Sí podemos usarlos dentro de bloques de código
- Acepta cualquier expresión.
- Puedes definir case insensitive pasando "true" en el tercer argumento.

### Constantes predefinidas
PHP tiene integradas por defecto algunas constantes predefinidas que podemos usar. Algunos ejemplos:
- PHP_VERSION
- PHP_OS
- E_ERROR

### Constantes mágicas
Las constantes mágicas son "constantes" cuyos valores sí cambian. Realmente no son constantes, pero se les llama así porque son palabras que hacen referencia a algo que depende del entorno en el que se está ejecutando en script.

La mayoría de estas constantes inician con doble guion bajo. Algunos ejemplos son
- __LINE__
- __FILE__
- __DIR__
- ClassName::class

## Ámbito de las variables
El scope (ó ámbito de las variables) es el contexto en donde una variable es definida. Usualmente, la mayor parte del tiempo una variable tiene un ámbito simple, es decir, está disponible en todo el archivo e incluso en otros archivos donde se haga un require.

### Ámbito local
Cuando empezamos a usar funciones el ámbito de cualquier variable definida dentro de la función pasa a ser un ámbito local.

En otras palabras, esa variable sólo existe dentro de la función.

### La palabra reservada global
Cuando queremos que una variable externa exista dentro de una función sin necesidad de pasarla como parámetro podemos usar la palabra reservada "global".

## Variables superglobales
- Disponibles en todo el scope
Las variables superglobales son variables predefinidas por PHP que están disponibles en cualquier parte del código, incluso sin necesidad de usar la palabra reservada *global*.

Algunos ejemplos son...
```
$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
```

## Redirecciones

### La función header()
- En el modelo cliente/servidor, es común querer enviar información extra (autenticación, control de cookies, etc.) Esto lo podemos hacer con la función header.

### Redirecciones
Uno de los headers que podemos mandar son los redirects, es decir, el servidor le puede responder al navegador: "Oye, redirige al usuario a esta página".

```
header("location: platzi.com");
```

También puedes redirigir a archivos específicos, pero ten cuidado de no generar un bucle de redirecciones, es decir:

```
/* page.php */
header("location: index.php);

/* index.php */
header("location: page.php");
```

### Consideraciones
Los encabezdos siempre deben ser enviados ante de enviar el cuerpo de la petición, es decir, antes de mandar el contenido. 
- Eso quiere decir que, si imprimes HTML o cualquier otra cosa que genere cuerpo, al intentar redirigir con header obtendrás un error (**Siempre al inicio de la petición**).
- Antes del cuerpo.

## Funciones variables
Se ejecutan `$n1()`, revisar ejemplo.

## Parámetros por referencia
### ¿En donde guarda la computadora las variables?
- Cuando se declara una variable, lo que sucede es que se ocupa un lugar en la memoria para guardar el valor de dicha variable. ¿Y cómo sabe PHP qué lugar de memoria se ocupó? Bueno, PHP lo sabe porque guarda la referencia de ese lugar.

