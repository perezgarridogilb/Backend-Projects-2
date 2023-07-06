# Curso

##

- **A tí**
Cuando retomes un proyecto después de un tiempo.

- **A tus compañeros**
A cualquiera que deba *modificar* después de tí.

- **A tu cliente**
Si bien nunca lo sabrá, su negocio estará mejor atendido

**En resúmen**
El código bien escrito beneficia a todos los involucrados en el proyecto.

## Ejes que hacen a la calidad del código

- Existen:
    - Características externas
    - Características internas

- Nos centraremos en las características internas
   - Características internas
    - Legibilidad
        - Qué tan fácil es interpretar **lo que el código dice**.
    - Mantenibilidad
        - Cuánto esfuerzo supondrá **adaptar el código a nuevos requerimientos**.
    - Testeabilidad
        - Cuánto esfuerzo supondrá **realizar pruebas sobre este código**.

## Código prolijo

### Antes

<img width="1280" alt="Captura de Pantalla 2023-06-30 a la(s) 2 41 11 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/6f48e5e2-fb8f-4bc1-8ad1-1de5d006ed42">

### Después

<img width="1280" alt="Captura de Pantalla 2023-06-30 a la(s) 2 41 30 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/0c0c9a70-09f7-4865-961d-d048a618ce38">

**Recuerda**
- El código **fuente** se escribe para **humanos**.

### La última tiene llaves únicamente
Evidencia la falta de un estándar de codificación
<img width="1280" alt="Captura de Pantalla 2023-06-30 a la(s) 2 46 29 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/4ae7f3d1-9043-4d9b-a297-7d8f48d5c1d1">

### Estándar de codificación
- Genera código claro y consistente
- Evita que pierdas tiempo en decisiones triviales

### Algunos tips
- **Define un estándar de codificación**
Piénsalo una vez y déjalo por escrito.

- **Respétalo**
Haz un esfuerzo por adherir al estándar durante tu día a día.

- **Apoyáte en algún linter**
Esta sencilla herramienta te ayudará a incorporar buenas prácticas.

## Identificadores mnemotécnicos, específicos y precisos
### Problemas difíciles
- Invalidar cachés
- Nombrar cosas

### Identificadores
- Variables
- Funciones
- Clases
- Módulos
- Componentes
- Etc.

### Recuerda
- **Atención a los identificadores** que creas.

## Código reutilizable
Al tener una fución encapsulada nos olvidamos del modo de normalizar y pasamos a a una operación que empieza a tener sentido dentro del universo de nuestra aplicación (pasamos a tener al concepto más abstracto).
- No conviene copiar y ègar solamente.
- Prevenir bugs.
- Corregirlos eficazmente.

## Código organizado
El código organizado se refiere a cómo tenemos distribuido nuestros archivos en la raíz (root) del proyecto. A mayor organización, mayor entendimiento del código.

**Aporte**:

Cuando hablamos de código organizado nos referimos a cómo está el código distribuido en nuestro sistema de archivos. Esto significa que necesitas organizar el código y que según cómo se llame el archivo, este adentro debe contener únicamente lo que su nombre indica.

Quiere decir, que agruparemos archivos que tengan un contenido similar en directorios.

 *Esto se trata de convención, no una imposición.*

- /public
- /src
- /tests
- /vendor

## Evitar el hardcoding
El hardcoding es la práctica de escribir valores literales en lugar de identificadores. No debe de usarse, ya que si el día de mañana debemos cambiar los valores eso significa que debemos cambiar el código en los lugares que esté ese valor estático por completo y luego mandar a producción, cuándo podríamos hacer el cambio más orgánico en una variable que afecte a todos los lugares que es llamada.

### Ejemplo IVA 21%

![Captura de Pantalla 2023-07-03 a la(s) 3 17 00 p m](https://github.com/perezgarridogilb/Backend-projects/assets/56992179/02047dea-3217-4032-9b2e-5fd132762d72)

- Después de la modificación (en un sólo lugar).

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 3 18 03 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/c6dfc6c7-2a44-4592-8d86-13d9f83e9288">

- Después de la modificación (para externalizar el valor del iva hacia algún archivo de configuración).

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 3 19 00 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/283db62e-4abc-43c0-bb4c-f4e2943a9a80">

- Otro problema del hardcoding es que oculta información. 

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 3 21 24 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/f4cf275c-2b85-4518-bd34-9b6c560ba722">

- Mejor manera de escribirlo, levantar un poco el nivel de abstracción. 

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 3 21 37 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/71a09361-307a-4a17-8bb6-70b2030f0875">

## Evitar efectos colaterales
Debemos analizar muy bien nuestro código para evitar efectos colaterales y evitar que nuestro código deje de funcionar. Un consejo de nuestro profesor en esta clase: No uses variables globales.


## Principios SOLID: Single Responsibility Principle
- Cinco principios básicos de la programación orientada a objetos
- Ayudan a crear software mantenible en el tiempo
*Su objetivo siempre es apuntar a desarrollar aplicaciones más fácilmente mantenibles a lo largo del tiempo*
La idea es tratar de aplicar estos principios mientras estamos desarrollando nuestro software. También es posible, ya teniéndolo desarrollado volver a migrarlo a la "luz de los principios SOLID" y ver que modificaciones se pueden hacer para hacerlo más robusto en el tiempo.

**SOLID** son cinco principios básicos de la programación orientada a objetos que ayudan a crear software mantenible en el tiempo.

**SOLID** significa:

**S**: Single Reponsibility Principle.
**O**: Open/Closed Principle.
**L**: Liskov Substitution Principle.
**I**: Interface Segregation Principle.
**D**: Dependency Inversion Principle.
La **S** se trata de una clase que debe tener sólo **una** razón para cambiar.

### Principio 1. Una clase debe tener sólo **una** razón para cambiar (o alta coesión).
- Más reutilizable

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 6 25 24 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/6512c356-93d2-43d4-8021-826870f9dd8a">

- **Ejemplo**
Lo correcto sería tener tres clases separadas en este ejemplo.

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 6 20 25 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/2b9952ef-d87b-4c10-98cb-12ed4c0e7047">

## Principio 2. Open/Closed Principle
Una entidad de software debe quedarse **abierta para su extensión**, pero **cerrada para su modificación**

- Antes de su modificación

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 7 46 56 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/d8e7503f-939d-4350-ba36-6c4a068f8a1b">

- Modificación
Crear una nueva clase (en caso de que haya una nueva al evaluar) y podrá ser extendido tanto como sea necesario.
<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 7 45 23 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/3df0f21c-1925-4023-b279-6921b7d974e7">

Aporte: Open/Closed Principle: Invita a usar las clases abstractas.

Abierto para la extensión (en el ejemplo ya existe factura , memo y recibo pero podría agregarse ticket, boleta, autorizaciones, etc) pero cerrado para la modificación, por lo tanto no se modifica nada.

### Liskov Substitution Principle
El Liskov Substitution Principle establece que cada clase que hereda de otra puede usarse como su padre sin necesidad de conocer las diferencias entre ellas. Para que pueda darse este principio debe cumplir con dos puntos:

El cliente debe usar métodos de la clase padre únicamente.
La clase hija no debe alterar el comportamiento de los métodos de la clase padre.

- Primer ejemplo
<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 8 19 14 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/191e7423-5b73-480f-8bb2-b345b6419eeb">

- Reglas
El cliente debe usar métodos de la clase padre únicamente.
La clase hija no debe alterar el comportamiento de los métodos de la clase padre.

- Segundo ejemplo
<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 8 23 58 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/5a9a8ede-2476-406a-a0fd-88407cc21eec">

<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 8 24 04 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/d65cad81-779a-4bea-acbe-f9cb5cedff82">

Como se puede observar `avanzarVehiculo()` en el segundo llamado no esta respetando la regla, violación al principio de sustitución del disco.
<img width="1280" alt="Captura de Pantalla 2023-07-03 a la(s) 8 24 09 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/91e64847-1ca0-4897-bc2b-4b2e73a7c9b4">

Cuando esto sucede lo que debemos preguntarnos es que si la relación de herencia es tal, en ese caso, el Scuter es realmente un Vehículo o tal vez tiene que ser alguna otra cosa. No significa que las clases deban estár relacionadas entre sí. **Lo que hay que preguntarse y muy probablemente la respuesta sea no es si la relación que les corresponde es de herencia o es algún otro tipo de relación**.

## Interface Segregation Principle
El Interface Segregation Principle establece que los clientes de un programa sólo deberían conocer de éste los métodos que realmente usan.

*Los clientes de un programa dado sólo deberían conocer de éste aquellos métodos que realmente usan*.

- Software factory
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 1 37 31 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/bea8906a-ba8a-4d3d-8d77-171a77b9c988">

- Programador
Implementa workable, puede codear
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 1 37 57 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/539b5b3a-b017-4b66-9347-2bc96a337973">

- Tester
Implementa workable, no puede codear, siempre da una excepción, no debería estár
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 1 38 35 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/0ce9d208-a65a-4fec-9d4e-c11648dd3936">

- Procesamiento del proyecto (lo cual hasta aquí está mal)
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 1 42 14 p m" src="https://github.com/perezgarridogilb/Backend-projects/assets/56992179/283e7e10-70f3-4db3-a60e-7a10f2def365">

- Solución propuesta
Se parte en dos la interface Workable en dos
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 3 40 18 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/e569de30-ca01-4418-af11-8b78b485d5b9">

- Las clases
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 3 45 11 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/3db1f4e2-38c4-417f-91e8-dc2d8ba44ee6">

- Procesamiento del proyecto. Queda más sencillo y más mantenible
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 3 46 00 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/ac7a1347-3730-4731-be4f-8504c481ad6a">

## Dependency Inversion Principle
Dependency Inversion Principle detalla que los módulos de alto nivel no deben depender de los de bajo nivel, ambos deben depender de abstracciones.

Las abstracciones no deben depender de los detalles, los detalles deben depender de las abstracciones.

*La idea de este principio es ver cómo se vinculan estas clases de modo que la dependencia no sea realmente muy fuerte, sino que sea un poco más desacoplada*.

### Reglas

- **Los módulos de alto nivel no deben depender de los de bajo nivel**, ambos deben depender de abstracciones.
- **Las abstracciones no deben depender de los detalles**, los detalles deben depender de las abstracciones.

### Ejemplo. Sistema de notificaciones

- Enviarle mensajes al usuario por diferentes canales, se sirve de estas clases de medio en el constructor
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 3 55 20 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/838abf69-c598-401c-ad2f-a47d704c9f77">

- Podemos tener entonces un método Notify, que recibe un usuario, la severidad del mensaje que queremos enviar y el propio mensaje para enviar el mensaje según el canal que corresponda según las reglas que establece el negocio
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 3 55 25 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/e53ecdc4-53a1-478a-b29a-fed99d09c6a7">

- Problema, estamos haciendo una dependencia dura del notificador con sus clases auxiliares, ya que estamos creando los objetos dentro del propio constructor de la clase Notify
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 3 55 51 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/f36a396e-ffab-47e1-9b70-bcaaf34d42fe">

- Solución propuesta, de modo que si se necesita hacer un cambio ya no se están inicializando las clases directamente en el constructor
<img width="1280" alt="Captura de Pantalla 2023-07-04 a la(s) 4 07 01 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/8927e0f0-0cd8-4f5d-be72-e9b954a24605">

## Singleton

Los patrones de diseño son soluciones de arquitectura de software aplicables a diferentes problemas.

El patrón Singleton permite restringir la creación de objetos pertenecientes a una clase o al valor de un tipo a un único objeto.

###

Este patrón se puede pensar como un patrón de creación o de comportamiento. La idea consiste en tener un clase que tenga una sola instancia en nuestra aplicación. Usualmente este patrón se utiliza para optimizar recursos.

Este se encarga de evitar a toda costa de exista más de una instancia. Para conseguir esto debemos hacer private el constructor. Para instanciar esta clase, crearemos una función que normalmente se llamará getInstance y está se encargará de comprobar si ya existe una instancia, si no existe una, la función la creará.


## Factory
El patron Factory es creacional, se utiliza para ayudar a la creación de nuevas instancias de objetos.
- Cuando la creación de un objeto es muy complejo
- Requiere de muchos parámetros
- La propia operación del objeto requiere hacer operaciones complejas
- Ciertos cálculos díficiles o alguna cuestión así


### Ejemplo de una clase automóvil
Clase automóvil, que el constructor recibe la marca y el modelo, simplemente con eso crea el objeto. Una factory que podríamos utilizar puede ser automóvil factory, bajando la complejidad de la creación del automóvil

![Captura de Pantalla 2023-07-04 a la(s) 10 45 03 p m](https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/41f29002-4e8e-4129-9ae0-b697248fc11d)

- Pasamos de dos parámetros a uno, donde es muy probable que los autos que salgan en este año lleven el valor 2019, lo cual sería redundante pasarle el valor 2019 a cada instancia de creación del auto. Eso es lo que aportaría esa factory, la forma de utilizarlo es esta:
    - De esta manera estamos creando el objeto sin utilizar la factory, ya no pasamos el parámetro 2019, simplemente le estamos diciendo que queremos crear un nuevo auto, que internamente va a tener el parámetro 2019 en su creación, de este modo lo que estamos logrando es un código más abstracto, **más reutilizable**

![Captura de Pantalla 2023-07-04 a la(s) 10 45 09 p m](https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/12bd736f-f2d5-4572-ab3a-e48b30093190)

- Aporte de la comunidad:

```
<?php 

class Automobile {

    private $vehicleMake;
    private $vehicleModel;

    public function __construct($make, $model) {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }

    public function getMakeAndModel() {
        return $this->vehicleMake.' - '.$this->vehicleModel;
    }
}


class AutomobileFactory {

    private static $model;

    public static function create($make) {
        self::$model = date('Y');
        return new Automobile($make, self::$model);
    }
}

$renault = new Automobile("Renault", 2019);
$toyota = AutomobileFactory::create("Toyota");


echo $renault->getMakeAndModel().PHP_EOL;
echo $toyota->getMakeAndModel().PHP_EOL;

```

## Command

El patrón Command permite solicitar una operación a un objeto sin conocer realmente el contenido de esta operación, ni el receptor real de la misma. Para ello se encapsula la petición como un objeto, con lo que además facilita la parametrización de los métodos.

## Introducción al Testing Automatizado

### Problemas del testing manual
- Costoso
- Lento
- Poco confiable

*Testing automatizado*: Se trata de escribir programas que sean capaces de probar programas y reportar los fallos
- Menos costoso
- Más confiable

*Hay cosas que no se pueden automatizar como lo intuitivo y agradable visualmente*

Existen dos tipos de testing:
1. **Unit Testing**: Evaluamos el funcionamiento de los componentes individualmente (fomenta el refactory)

- Ejemplo:
    - phpUnit
    - Extiende de TestCase
    - Empieza con testArbitrario
    - assert(comparar1, comparar2)

![Captura de Pantalla 2023-07-05 a la(s) 9 54 57 p m](https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/45013d4b-e4e1-4f67-9b18-d3ff9f4a2921)

- Problema (el sistema en su conjunto no valora su objetivo)

![Captura de Pantalla 2023-07-05 a la(s) 9 56 33 p m](https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/0388cfa2-5395-4d97-b447-9288e372da5e)

2. **Integration Testing**: Validar la interacción entre los componentes y el sistema completo

- Ejemplo, testear una aplicación web, que arroje HTTP 200 acceder a cierta página

![Captura de Pantalla 2023-07-05 a la(s) 9 56 43 p m](https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/2d1a57c4-3e20-4f74-b488-5698e6256c21)

##

Documentación
¿Qué documentar?

Como implementar nueva funcionalidad.
Como se realizan las pruebas.
Lo mínimo que necesita las personas que quieren colaborar o heredar tu proyecto.

¿Como documentar?

UML como documentación.
¿Dónde documentar?

Propio código.
Sistema de documentación.
Wiki
Ficheros externos.
README
¿Cuándo documentar?

Documentar inmediatamente después de codear.
Cuando se resuelve un problema, documentar la solución

## A quién beneficia el código bien escrito
La primera persona a quien beneficiará es a nosotros mismos, lograremos entender nuestro código no importa el tiempo que pase.

Nuestros compañeros lograrán entender muchísimo más nuestro código luego de todas las buenas prácticas que hemos realizado. Y finalmente a nuestro cliente que aunque no pueda ver al detalle nuestro código, estará mejor organizado y podrá ser leído por cualquier persona.

¿A quién beneficia el código limpio?
- A tí
- A tus compañeros
- A tus clientes

### Ejes que hacen a la calidad del código
- Legibilidad
- Mantenibilidad
- Testeabilidad (preparado para ser testeado de forma automatizada)

### Temas a tener en cuenta
- La forma en que escribes el código
- Los nombres que utilizas
- El diseño de tus clases
- No sólo se trata de código, la documentación también es importante
