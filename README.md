# PHP STRUCTURE

Este es un proyecto web básico en PHP sin utilizar ningún framework, utilizando PHP 8.0. El proyecto está organizado en una estructura de directorios clara para facilitar el desarrollo y mantenimiento.

## Estructura del Proyecto
php_structure/\
├── public/\
│ ├── index.php\
│ ├── css/\
│ │ └── styles.css\
│ ├── js/\
│ │ └── scripts.js\
├── src/\
│ ├── Controller/\
│ │ ├── HomeController.php\
│ │ ├── UserController.php\
│ │ └── ProductController.php\
│ ├── Model/\
│ │ └── User.php\
│ ├── View/\
│ │ └── home.php\
├── config/\
│ ├── config.php\
│ ├── database.php\
│ ├── email.php\
│ ├── logging.php\
│ └── controllers.php\
├── vendor/\
│ └── autoload.php\
├── logs/\
│ └── app.log\
├── .htaccess\
├── composer.json\
├── composer.lock\
└── README.md

## Descripción de Directorios y Archivos

- **public/**: Contiene los archivos accesibles públicamente.
  - `index.php`: Punto de entrada de la aplicación.
  - `css/`: Carpeta para archivos CSS.
  - `js/`: Carpeta para archivos JavaScript.

- **src/**: Contiene el código fuente de la aplicación.
  - `Controller/`: Contiene los controladores de la aplicación.
    - `HomeController.php`: Controlador para manejar la lógica de la página principal.
    - `UserController.php`: Controlador para manejar la lógica de usuarios.
    - `ProductController.php`: Controlador para manejar la lógica de productos.
  - `Model/`: Contiene los modelos de la aplicación.
    - `User.php`: Modelo representando un usuario.
  - `View/`: Contiene las vistas de la aplicación.
    - `home.php`: Vista para la página principal.

- **config/**: Contiene archivos de configuración.
  - `config.php`: Archivo principal de configuración que incluye todas las configuraciones.
  - `database.php`: Configuración de la base de datos.
  - `email.php`: Configuración de envío de emails.
  - `logging.php`: Configuración de logging.
  - `controllers.php`: Registro de todos los controladores.

- **vendor/**: Contiene las dependencias gestionadas por Composer.

- **logs/**: Carpeta para archivos de log.
  - `app.log`: Archivo de log de la aplicación.

- **.htaccess**: Archivo de configuración de Apache para reescribir URLs.

- **composer.json**: Archivo de configuración de Composer para gestionar dependencias.

- **composer.lock**: Archivo generado por Composer que mantiene el registro de las versiones exactas de las dependencias instaladas.

- **README.md**: Este archivo, que proporciona una descripción y estructura del proyecto.

## Instalación y Configuración

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/esdreyvg/php_structure.git