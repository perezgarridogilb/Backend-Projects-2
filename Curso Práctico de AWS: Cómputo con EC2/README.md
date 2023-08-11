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

### Optimizado para informática
- Carga de trabajo de procesamiento por lotes
- Transcodificación de medios
- Servidores web de alto rendimiento
- Informática de alto rendimiento (HPC)
- Modelado cientifico y Machine Learning
- Servidores de juegos dedicados

### Optimizado para memoria
