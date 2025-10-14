# Blog - Semana de Sistemas 2025

Blog de documentación del evento "Semana de Sistemas 2025" realizado en la Universidad de El Salvador, Facultad Multidisciplinaria Oriental.

## Descripción del Proyecto

Este proyecto documenta las actividades, ponencias, talleres y eventos recreativos realizados durante los 5 días de la Semana de Sistemas 2025 (13-17 de octubre).

## Tecnologías Utilizadas

- **PHP 8.2** - Lenguaje de programación del backend
- **MySQL 8.0** - Base de datos para registrar visitas
- **Docker** - Contenedorización de la aplicación
- **Arquitectura MVC** - Patrón de diseño Model-View-Controller
- **PDO** - Para conexión segura a la base de datos
- **Sistema de Routing** - Enrutamiento personalizado

## Estructura del Proyecto

```
Proyecto_Blog_TPI/
│
├── app/
│   ├── controllers/      # Controladores (HomeController, DiaController, etc.)
│   ├── models/           # Modelos (Visita.php)
│   └── views/            # Vistas HTML/PHP
│
├── lib/
│   ├── Route.php         # Sistema de enrutamiento
│   └── Database.php      # Conexión PDO a base de datos
│
├── public/
│   ├── css/              # Estilos CSS
│   ├── js/               # JavaScript (si es necesario)
│   ├── images/           # Imágenes organizadas por días
│   ├── index.php         # Punto de entrada
│   └── .htaccess         # Configuración Apache
│
├── routes/
│   └── web.php           # Definición de rutas
│
├── autoloader.php        # Carga automática de clases
├── database.sql          # Script de base de datos
├── docker-compose.yml    # Configuración de Docker
├── Dockerfile            # Imagen Docker personalizada
└── README.md             # Este archivo

```

## Secciones del Blog

1. **Home/Inicio**: Página de bienvenida con descripción del evento
2. **Día 1 al Día 5**: Documentación diaria de actividades con fotos y videos
3. **Registrar Visita**: Formulario para registrar visitas al blog

## Instalación y Configuración

### Requisitos Previos

- Docker Desktop instalado
- Git (opcional, para clonar el repositorio)
**Acceder a la aplicación**
   - Blog: http://localhost:8083
   - phpMyAdmin: http://localhost:8084

### Credenciales de Base de Datos

- **Host**: db
- **Base de datos**: blog_db
- **Usuario**: bloguser
- **Contraseña**: blogpass
- **Root password**: rootpass

## Licencia

Proyecto educativo para la cátedra de Técnicas de Programación para Internet.
