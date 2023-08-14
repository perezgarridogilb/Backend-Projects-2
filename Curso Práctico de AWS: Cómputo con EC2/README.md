# Curso Práctico de AWS: Cómputo con EC2

## Budget en AWS

Un presupuesto AWS (Amazon Web Services) es una herramienta que te permite definir umbrales de gastos para tus recursos y servicios en la nube de AWS. Con un presupuesto, puedes monitorear y recibir notificaciones cuando tus costos o uso superen los límites que hayas establecido. Esto es especialmente útil para controlar los gastos y mantener tus operaciones dentro de un presupuesto determinado.

**Iniciar Sesión en la Consola de AWS**:
Accede a la Consola de AWS utilizando tus credenciales de cuenta.

**Navegar a AWS Budgets**:
En la consola de AWS, busca y selecciona "AWS Budgets". Puedes encontrarlo en la sección "Management & Governance" (Administración y Gobernanza).

**Crear un Nuevo Presupuesto**:
Haz clic en el botón "Create budget" (Crear presupuesto) para comenzar a configurar tu presupuesto.

**Seleccionar un Tipo de Presupuesto**:
AWS Budgets ofrece varios tipos de presupuestos, como gastos, uso, reservas y ahorros. Elige el tipo que mejor se adapte a tus necesidades. Por ejemplo, si deseas monitorear los costos, selecciona "Cost Budget". Si deseas monitorear el uso, elige "Usage Budget".

**Configurar Detalles del Presupuesto**:
Proporciona los detalles del presupuesto, como su nombre, período de tiempo, frecuencia de actualización y los umbrales de gastos o uso.

**Definir Umbrales**:
Configura los umbrales de gastos o uso que deseas monitorear. Puedes establecer umbrales mensuales, trimestrales, anuales, etc. También puedes configurar umbrales para grupos de etiquetas específicos si utilizas etiquetas en tus recursos.

**Configurar Notificaciones**:
Define las notificaciones que deseas recibir cuando los umbrales se superen. Puedes configurar notificaciones por correo electrónico o mediante una SNS (Simple Notification Service) topic.

**Revisar y Confirmar**:
Revise la configuración del presupuesto y confírmala.

**Activar el Presupuesto**:
Una vez que hayas confirmado la configuración del presupuesto, actívalo para que comience a monitorear y enviar notificaciones.

**Monitorear y Gestionar**:
Una vez activado, el presupuesto comenzará a monitorear tus gastos o uso. Recibirás notificaciones cuando los umbrales se superen. Puedes ajustar los umbrales y la configuración en cualquier momento según sea necesario.

## Amazon EC2
EC2 es uno de los más populares de la oferta de AWS
EC2: Elastic Compute Cloud = infraestructura como servicio.

Conoces EC2 es fundamental para entender cómo funciona la nube

### Consiste principalmente en la capacidad de:
- **Alquilar máquinas virtuales**: Mediante Amazon EC2 (Elastic Compute Cloud), puedes alquilar máquinas virtuales configurables en la nube, lo que te permite ejecutar aplicaciones y servicios en un entorno escalable y controlado.

- **Almacenamiento de datos EBS**: Amazon EBS (Elastic Block Store) proporciona almacenamiento persistente en forma de volúmenes que se pueden conectar a instancias de EC2. Es útil para almacenar bases de datos, archivos y otros datos que necesitan persistencia.

- **Escalar los servicios utilizando un ASG Group**: Con Amazon EC2 Auto Scaling, puedes configurar un grupo de escalado automático (Auto Scaling Group, ASG) que ajusta automáticamente la cantidad de instancias de EC2 según la demanda. Esto permite manejar picos de tráfico sin intervención manual.

- **Distribución de carga entre máquinas (ELB)**: Amazon ELB (Elastic Load Balancer) distribuye automáticamente el tráfico de red entrante a través de varias instancias de EC2 para mejorar la disponibilidad y la escalabilidad de tus aplicaciones. Puedes usar ELB para equilibrar la carga entre instancias en diferentes zonas de disponibilidad.

### Opciones de configuración
- Linux
- Windows
- Mac OS

### Opciones de tamaño
- Cuánta potencia de cómputo y núcleos (CPU)
- Cuánta memoria de acceso aleatorio (RAM)
- Cuánto espacio de almacenamiento
- Tarjeta de red
- Reglas de Firewall
- Acción de arranque

### EC2 User Data (script de carga inicial)
- Sólo se crea la primera vez

```
#!/bin/bash

# Use this for your user data (script from top to bottom)

# install httpd (Linux 2 version)

yum update -y

yum install -y httpd

systemctl start httpd

systemctl enable httpd

echo "<h1>Hello World from $(hostname -f)</h1>" > /var/www/html/index.html
```

#####
- Script de datos de usuarios
    - Actualizaciones
    - Software
    - Descarga de archivos
    - ¿Cualquier cosas que se nos ocurra?
- Ejecuta usuario root

## Tipos de instancias EC2

<img width="616" alt="Captura de Pantalla 2023-08-10 a la(s) 3 39 36 p m" src="https://github.com/perezgarridogilb/Engineering-Project-de-Aplicacion-de-Rastreo/assets/56992179/8c77bd8f-740f-4cfe-b5cb-59b33839f1c3">

### Descripción general

<img width="607" alt="Captura de Pantalla 2023-08-10 a la(s) 3 41 36 p m" src="https://github.com/perezgarridogilb/Engineering-Project-de-Aplicacion-de-Rastreo/assets/56992179/90b8cc6c-a136-4c5e-a516-c74d7801cd87">

- Depende de lo que se busca

### Propósito general

<img width="611" alt="Captura de Pantalla 2023-08-10 a la(s) 3 42 42 p m" src="https://github.com/perezgarridogilb/Engineering-Project-de-Aplicacion-de-Rastreo/assets/56992179/8372ce89-3599-4a63-a965-98466e71c73b">

- Ejemplo: Servidores web o repositorios de código que podemos tener dentro de nuestras instancias

### Optimizado para informática

<img width="598" alt="Captura de Pantalla 2023-08-10 a la(s) 3 43 12 p m" src="https://github.com/perezgarridogilb/Engineering-Project-de-Aplicacion-de-Rastreo/assets/56992179/6b2a6731-66b8-436f-b1c0-0b880c2ca3f4">

- Es cómputo intensivo, que requieren procesadores de alto desempeño, tenemos diferentes instancias
    - C es optimizado para informática
    - El número es lo que actualmente tenemos o lo que nos ofrece AWS

#### Optimizado para informática (Tipos de carga)
- Carga de trabajo de procesamiento por lotes
- Transcodificación de medios
- Servidores web de alto rendimiento
- Informática de alto rendimiento (HPC)
- Modelado cientifico y Machine Learning
- Servidores de juegos dedicados

### Optimizado para memoria

<img width="614" alt="Captura de Pantalla 2023-08-10 a la(s) 3 47 30 p m" src="https://github.com/perezgarridogilb/Engineering-Project-de-Aplicacion-de-Rastreo/assets/56992179/a3e8b9ae-db8f-4dad-b654-82ebb8835467">

- Las R, Z, X, el tipo de instancia que es más optimizada para memoria
- Cargas de trabajo que procesan grandes conjuntos de datos en la memoria

#### Optimizado para memoria (Casos de uso)
- Bases de Datos (Relacionales como no relacionales de alto rendimiento)
- Cache Distribuido
- Aplicaciones BI
- Aplicaciones para procesamiento en tiempo real

### Optimizado para almacenamiento

<img width="613" alt="Captura de Pantalla 2023-08-13 a la(s) 8 34 30 p m" src="https://github.com/perezgarridogilb/Backend-Projects-2/assets/56992179/ea23d5b2-112d-4345-9fbc-924f2ccf0ca1">

- Alto acceso secuencial de escritura y de lectura para grandes conjuntos de datos

#### Optimizado para almacenamiento (Casos de uso)
- Procesamiento de transacciones
- Bases de datos relacionales y NoSQL
- Redis
- Almacenamiento de datos 

- Amplia gama de instancias *que sólo va hacer uso de lo que se necesita*.

## Grupos de seguridad y puertos clásicos

### Grupos de seguridad
- Son fundamentales para la seguridad dentro de la red en AWS
- Si queremos controlar todo el tráfico dentro y fuera de nuestras instancias de EC2 vamos a ocupar grupos de seguridad.
- Los grupos de seguridad sólo contienen reglas de permiso y no contienen otro tipo de reglas para poder entrar el tráfico hacia internet y salir las solicitudes que hacemos dentro de nuestras instancias a internet.
- Va a funcionar como si tuvieramos un firewall o una puerta hacia internet y fuera de ella.
    - También dentro de los ecosistemas o servicios que vamos a estar utilizando dentro de AWS
- Poder regular qué accesos queremos, qué puertos vamos a utilizar
- Si queremos utilizar un puerto ssh 22, vamos a poder denegarlo o también permitirlo y regulamos este tipo de accesos.
- Si queremos un rango de IP's que sólo van a poder entrar a nuestra instancia que van a poder usar el puerto ssh 22 vamos a poder configurarlo dentro del grupo de seguridad
- **También se puede referenciar por IP**, configurando la comunicación entrante desde nuestros clientes a la máquina EC2
- También comunicarnos desde la instancia hacia los servicios de internet (salida).

### ¿Qué necesitas saber?
- Adjuntar varias instancias
    - Componente que actua como un firewall
- Bloqueando a una región/VPC
- Vive "fuera".
- Grupo de seguridad para acceso SSH.
- Tiempo de espera.
- Conexión rechazada. 

### Referencia a otros grupos de seguridad
- Se puede tener más instancias.
- Más grupos de seguridad.
Se pueden ir referenciando dentro de nuestra instancia, dentro de nuestro grupo de seguridad, dentro de AWS.

### Puertos clásicos
- 22 - SSH
- 21 FTP
- 22 SFTP
- 80 HTTP
- 443 - HTTPS
- 3389 - RDP (Escritorio remoto para sistemas operativos windows)

