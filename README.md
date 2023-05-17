# Nombre del Proyecto

Aplicativo-Web-Proyecto

## Introducción

Este es un proyecto de una aplicación web desarrollada con HTML, CSS, JavaScript y PHP. La aplicación permite la administración de inventarios y tiene diversas utilidades para el manejo de datos y generación de reportes en formato PDF.

La aplicación cuenta con una interfaz amigable y moderna, y está diseñada para ser fácil de usar por cualquier usuario. También tiene funcionalidades de personalización, como el modo oscuro.

En la siguiente imagen puedes ver una vista previa de la interfaz:

![Inicio en modo oscuro](/aplicacion-web-mayo/media/img/homeDark.png)

![Inicio en modo claro](/aplicacion-web-mayo/media/img/homeWhite.png)

## Funcionalidades

- Calculadora de datos
- Herramienta de gestión de inventarios
- Generación de reportes en formato PDF

## Tecnologías Utilizadas

- HTML
- CSS
- JavaScript
- PHP
- Bootstrap
- jQuery
- [mPDF](https://github.com/mpdf/mpdf) (librería para generación de PDF)

## Instalación y Uso

A continuación se detallan los pasos necesarios para instalar y ejecutar la aplicación en tu entorno local:

1. Clona este repositorio en tu entorno de desarrollo local:

git clone https://github.com/nicol4sFe/aplicativo-web-mayo.git

2. Configura el servidor web y la base de datos:
- Asegúrate de tener instalado un servidor web (como Apache) y PHP en tu máquina.
- Crea una base de datos en tu servidor de base de datos (por ejemplo, MySQL) para la aplicación.
- Abre el archivo `config.php` en la raíz del proyecto y actualiza la información de conexión a la base de datos (nombre de usuario, contraseña, nombre de la base de datos).
- Importa el archivo SQL proporcionado en la carpeta `database` a tu base de datos para crear las tablas necesarias.

3. Coloca el proyecto en el directorio raíz de tu servidor web:
- Mueve la carpeta `aplicativo-web-mayo` al directorio raíz de tu servidor web (por ejemplo, `htdocs` en XAMPP).

4. Inicia el servidor web y accede a la aplicación:
- Inicia tu servidor web local (por ejemplo, XAMPP, WAMP, MAMP).
- Abre tu navegador web y accede a la siguiente URL: `http://localhost/aplicativo-web-mayo/`

## Contribuir

Si deseas contribuir a este proyecto, sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una rama nueva para tus cambios.
3. Haz tus cambios y haz un commit con un mensaje descriptivo.
4. Haz un push de tus cambios a la rama en tu fork.
5. Abre un pull request y describe tus cambios.

## Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).

