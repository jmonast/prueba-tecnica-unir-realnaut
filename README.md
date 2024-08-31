# Proyecto de Menú Responsivo para WordPress

Este proyecto consiste en un menú de navegación para un sitio web en WordPress, diseñado para funcionar tanto en dispositivos móviles como en escritorio. 

## Características

- **Responsive Design**: El menú está diseñado para adaptarse automáticamente a diferentes tamaños de pantalla, proporcionando una experiencia de usuario óptima tanto en móviles como en escritorio.
- **Submenús**: Algunos elementos del menú pueden contener submenús desplegables.
- **Shortcode**: El menú puede ser insertado en cualquier parte del contenido de una página utilizando el shortcode `[show_menu]`.

## Instalación y Configuración

1. **Clona o descarga este repositorio** y sube los archivos a tu directorio de temas de WordPress (`wp-content/themes/`).

2. **Activa el tema** desde el panel de administración de WordPress si es un tema completo o integra el menú en tu tema actual.

3. **Crear el Menú**:
   - Ve a la sección `Apariencia > Menús` en el panel de administración de WordPress.
   - Crea un nuevo menú, llamado `Menu principal`, asignando los elementos deseados y organizándolos en el orden que prefieras.
   - Si algunos elementos del menú deben tener submenús, arrástralos bajo el elemento principal y ajústalos como subelementos.

4. **Añadir el Menú al Sitio**:
   - Para mostrar el menú en tu tema, puedes hacerlo manualmente insertando el código PHP correspondiente en la plantilla donde quieres que aparezca el menú:
     ```php
     <?php echo do_shortcode('[show_menu]'); ?>
     ```
   - Alternativamente, puedes utilizar el shortcode `[show_menu]` directamente en el contenido de cualquier página o entrada.

## Dependencias

Este proyecto requiere:

- WordPress 5.0 o superior.
- Conocimientos básicos de HTML, CSS (SASS), PHP y JavaScript para realizar personalizaciones.

## Personalización

El menú se ha diseñado utilizando SASS, lo que facilita la personalización de los estilos. Los archivos SASS se encuentran en el directorio `/assets/scss/`. Si deseas modificar los estilos:

1. Realiza tus cambios en los archivos `.scss`.
2. Compila los archivos SASS en CSS ejecutando el comando correspondiente, por ejemplo:
   sass --watch _base.scss base.css
