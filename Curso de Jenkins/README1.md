# La Guía de Jenkins: ¡De Cero a Experto! | Agosto 2023

## CI / CD

### Entrega continua
La entrega continua de código a un entorno específico una vez que el código está listo y preparado para ser entregado

### Despliegue continuo
Es la práctica de liberar y entregar cada build o compilación satisfactoria al usuario

## Introduccing Jenkins
- El seguimiento de tareas repetidas que surgen durante el desarrollo de un producto o proyecto

- En la fase de desarrollo de Proyecto Jenkins va a testear y probar CONTINUAMENTE los builds y va a mostrarnos los errores, si los hay, en etapas iniciales de su desarrollo

En cada commit del proyecto podemos usar Jenkins para dirigir y automatizar ese trabajo particular.

### ¿Porqué utilizar Jenkins para la integración continua?
1. El código es construído (Build) y probado (Test) apenas el desarrollador realiza el commit, jenkins se va a encargar de construir y testear el código en reiteradas veces durante el día.
2. Cuando el build fue satisfactorio, Jenkins va a realizar un despliegue al servidor de pruebas (test server) y notifica al equipo de desarrollo.
3. Cuando el Build tiene errores, Jenkins va a notificar los errores al equipo.
4. El proceso automaticado de build y test ahorran tiempo y reducen los defectos.

###
1. Jenkins es manejado por una comunidad abierta y es constantemente actualizado
2. Soporta arquitectura de nube, por lo que se puede implementar
3. Constante crecimiento. Cuenta con más de 1500 plugins creados por la comunidad para soportar la construcción, despliegue y automaticación de cualquier proyecto
4. Soporta Docker Containers, así que el servicio de Jenkins puede ser contenerizado
