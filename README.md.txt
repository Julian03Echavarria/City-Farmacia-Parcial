# City Farmac - Primer Parcial de Produccion Web

Profesor: Ferrer Carlos
Alumno: Echavarría Ramos Julián Matías
Turno y Comision: Noche ACN3AV	
---

1. ¿Cómo abrir y levantar el proyecto?

Para ejecutar este proyecto en tu entorno local:

1. Se necesita tener instalado un servidor local compatible con PHP como: XAMPP (El utilizado en el proyecto), WampServer o Laragon.
2. Copiar la carpeta del proyecto dentro del directorio raíz del servidor (por ejemplo, 'htdocs' en XAMPP).
3. Abrir el panel de control de XAMPP y activar los servicios de Apache.
4. Abrir el navegador web e ingresar a la URL del proyecto (ej: http://localhost/City%20Farmac%20Parcial/).

---

2. Configuración de la Ruta Base

El proyecto utiliza una constante global para gestionar las rutas absolutas de forma dinámica y evitar problemas con enlaces rotos.

Archivo de configuración: 'config/config.php'
Dentro de este archivo se configura la constante 'BASE_URL' o la ruta raíz según el servidor local. Asegurarse de que coincida exactamente con el nombre de la carpeta del proyecto en 'htdocs'.

---

## 3. Listado de Vistas y URLs

	Vistas Públicas
Home: 'index.php' -> 'http://localhost/City%20Farmac%20Parcial/index.php'

Catálogo: 'catalogo.php' -> 'http://localhost/City%20Farmac%20Parcial/catalogo.php'

Detalle: 'detalle.php' -> 'http://localhost/City%20Farmac%20Parcial/detalle.php?id=1'

Contacto: 'contacto.php' -> 'http://localhost/City%20Farmac%20Parcial/contacto.php'

Error: '404.php' -> 'http://localhost/City%20Farmac%20Parcial/404.php'

	Panel de Administración
Dashboard: 'panel/index.php' -> 'http://localhost/City%20Farmac%20Parcial/panel/index.php'

Gestión de Productos: 'panel/productos.php' -> 'http://localhost/City%20Farmac%20Parcial/panel/productos.php'

Gestión de Categorías: 'panel/categorias.php' -> 'http://localhost/City%20Farmac%20Parcial/panel/categorias.php'

Gestión de Marcas: 'panel/marcas.php' -> 'http://localhost/City%20Farmac%20Parcial/panel/marcas.php'

Gestión de Comentarios: 'panel/comentarios.php' -> 'http://localhost/City%20Farmac%20Parcial/panel/comentarios.php'

Gestión de Usuarios: 'panel/usuarios.php' -> 'http://localhost/City%20Farmac%20Parcial/panel/usuarios.php'

Gestión de Perfiles: 'panel/perfiles.php' -> 'http://localhost/City%20Farmac%20Parcial/panel/perfiles.php'