# Diseño de Aplicaciones Web

## Actividad 9

El objetivo es desarrollar una aplicación web utilizando Laravel que incluya un sistema de autenticación. La aplicación debe cumplir con los siguientes requisitos:

1. **Sistema de Autenticación:** Se implementará un sistema de autenticación para permitir que los usuarios se registren e inicien sesión en la aplicación.

2. **Vistas Personalizadas:**
    - **Landing Page:** Se creará una vista llamada "landingpage" que será la página principal para los usuarios no registrados.
    - **Dashboard:** Se desarrollará una vista llamada "dashboard" destinada a los usuarios registrados. Esta vista proporcionará un panel de control personalizado con acceso a las funcionalidades principales de la aplicación.

3. **Barra de Navegación Dinámica:** Se realizarán modificaciones en la barra de navegación para adaptar las opciones según el estado de inicio de sesión del usuario.
    - Si el usuario no ha iniciado sesión, la barra de navegación mostrará opciones para iniciar sesión y registrarse.
    - Una vez que el usuario ha iniciado sesión, la barra de navegación se actualizará para incluir un enlace al panel de control ("dashboard").

4. **Acceso Restringido:** Se garantizará que los usuarios no registrados no puedan acceder al "dashboard", asegurando así que solo los usuarios autenticados tengan acceso a esta vista privilegiada.

Es fundamental que tanto la "landingpage" como el "dashboard" sean diseñados de manera distintiva para que los usuarios puedan identificar claramente cuál es la página principal y cuál es el panel de control. Además, se debe asegurar que la funcionalidad de acceso restringido al "dashboard" esté correctamente implementada para evitar que los usuarios no autorizados accedan a áreas sensibles de la aplicación.

### Hecho Con Laravel 11 por Ashanty Sierra