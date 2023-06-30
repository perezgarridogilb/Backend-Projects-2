# Backend-Projects-2

### Code smell
Hace referencia al mal olor del código. Este concepto no se refiere a errores técnicos, sino a errores de orden y diseño. En este caso el profesor dió el ejemplo de abstracción (para que sea mantenible).

### Código espagueti
Un código espagueti es código que está estructurado mediante if, while, for netamente, todo en un mismo archivo donde solamente buscamos resolver el problema. Cuando creamos código estructurado corremos peligro de crear código espagueti. La OOP nos ayuda evitarlo.

💸 El dinero en esta profesión está en el mantenimiento del código.

Cómo evitar el código espagueti
Resolver el problema
Crea de forma lógica y coherente diferentes métodos que reemplacen tus estructuras de control.
Crea una o varias clases dependiendo el caso.

### 
**Include** => nos permite incluir un archivo dentro de otro. Sino lo encuentra solo genera un warning que permite continuar.
**Require** => lo mismo que include pero más exigente, en caso de fallo producirá un error fatal, no permitirá continuar con el proceso.
**Require_once** => idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye.

15. Iniciando proyecto: PHPUnit y clases heredadas

Estos son los pasos vistos en clase:

Lo primero que hacemos es movernos al directorio donde vamos a trabajar (desde la terminal en Vscode). 
Se debe ejecutar el siguiente comando:

```
composer require --dev phpunit/phpunit
```

