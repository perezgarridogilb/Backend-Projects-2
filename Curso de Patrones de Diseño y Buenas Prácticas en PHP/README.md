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

## Dependency Inversion Principle
Los módulos de alto nivel no deben depender de los de bajo nivel, ambos deben depender de abstracciones.
Las abstracciones no deben depender de los detalles, los detalles deben depender de las abstracciones.

