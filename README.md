# Practica

## Objetivo de la práctica
Desarrollar la implementación del prototipo asignado en una vista web de Laravel. Este repositorio se considera el `proyecto base` y contiene el código fuente sobre el que deberá trabajar cada equipo.

## Integrantes de cada equipo considerados:

### Equipo 1

Esme Nava  
Fernando Altamirano  


### Equipo 2

Cuauhtemoc Lemus   
Jessica Marybel Contreras   
Malinali Gónzalez Lara   

### Equipo 3

Raúl Ascencio Bolio.  
Becerril Torres Teresa    

### Equipo 4

Macías Gómez Jorge  
Samantha Itzel Correa Mandujano  
José Carlos Buenrostro Rueda  
Alvaro Hernández Hernández  

### Equipo 5

Velez Cardenas Juan Luis Guillermo  
Luis Rafael Rivera Sotomayor  


# Generalidades del proyecto base

## Estado del proyecto base

El proyecto se desarrolló sobre la versión estable de Laravel Framework `8.13.0`.

## Primeros paso

1. Cada equipo debe descargar los últimos cambios de la rama `development` y en este estado pueden crear sus propias rama para guardar sus cambios. Cada rama que deseen crear debe tener el prefijo 'equipoN-', donde N es el equipo al que pertenecen.  

**Pueden crear las ramas que creen convenientes.**

2. Deberán avisar que comienzan la práctica como equipo. Para esto deberán realizar un primer commit con el tag "Equipo N inicia práctica" en una rama llamada `equipoN-iniciopractica`, donde N corresponde a el número de su equipo.  

**Cualquier persona puede realizar este procedimiento.**  
**Deberán avisar por el grupo de Telegram que realizaron esta acción.**  

## Durante la entrega:

1. Cuando hayan conseguido el objetivo de práctica, deberán hacer un push en una rama llamada `equipoN-entregapractica` con el commit "ENTREGA DE PRACTICA". Sólo un integrate del equipo deberá realizar este proceso.

4. Deberá avisar en el grupo de Telegram que se entregó la práctica.

## Después de la entrega de la práctica

1. El ayudante revisa la rama correspondiente de acuerdo a su entrega por equipo. Después se integrará a la rama `development`.

3. Para poder integrar su rama a la rama `development` deberán de haber subido sus cambios de la rama `equipoN-entregapractica` y haber notificado en el grupo de Telegram. SÓLO los ayudantes podrán integrar estas ramas a `development`.

## Restricciones

- **Sólo el ayudante puede integrar cambios a la rama `development`.**  

- **Sólo deberán hacer push sobre ramas que ustedes hayan creado y que pertenezcan a su mismo equipo.**  

- **Cualquier persona puede crear la rama que crea conveniente pero con la condición de que tenga el prefijo 'equipoN-'.**  

# Desarrollo de la práctica

## Prototipo

1. El prototipo del cuál deberán tomar como referencia para entregar se encuentra en la carpeta del proyecto `documents/prototypes/`. El prototipo asignado a cada equipo corresponde al archivo pdf que lleve como nombre el número de equipo que les corresponde.

## Consideraciones:

1. Cada equipo tiene una sección dedicada para agregar rutas web en el archivo `routes/web.php` para que agregue las rutas definidas que cargan su prototipo.
- El nombre de la ruta es a elección del equipo.
- Se sugiere sólo escribir la sección que les corresponda.

2. Cada equipo tiene una carpeta dedicada en la carpeta `public` con el nombre de su equipo para que puedan incluir cualquier recurso necesario para desarrollar el prototipo asignado.
- El nombre de la ruta es a elección del equipo.
- Se sugiere que sólo ocupen la carpeta que les corresponda.

3. Cada equipo tiene una carpeta dedicada en la carpeta `resources/views/` para que incluyan los archivos blade necesarios para poder llegar al objetivo de la práctica.
- El nombre del archivo es a elección del equipo.
- Se sugiere que sólo ocupen la carpeta que les corresponda.

**Pueden crear las carpetas que crean necesarias.**

## Puntos extra:
- La proposición de una paleta de colores de la vista web a entregar (1 punto).
- Una propuesta de interacciones durante la navegación de la vista web a entregar. Dicha interacción deberá ser justificada (2 puntos).
- Una propuesta de un negocio cuyo contenido se ajuste al diseño asignado. Dicha propuesta deberá ser justificada (2 puntos).

**Los puntos extra se consideran sólo si se entregó la práctica.**

# Retroalimentación
A continuación deberán agregar algún comentario de acuerdo a su experiencia durante el desarrollo de la práctica en la sección que les corresponde.

## Equipo 1 y 3
Nuestra experiencia fue positiva, aunque somos nuevos utilizando Laravel y tuvimos algunos problemas para hacer setup del entorno de desarrollo por lo que debimos de hacer configuraciones extras además de las que vienen en la documentación.  Al final pudimos resolverlas.

## Equipo 2
Tuvimos muchos problemas con la configuración de laravel, nos daba muchos errores y no nos dejaba ver la página en el explorador, se tuvo que desinstalar e instalar varias veces y nunca se pudo instalar mix, así que se usó la carpeta publica para el archivo css  


## Equipo 4

1.- Agregamos Laravel Mix para la compilación de Webpack.

2.- Agregamos Browser Sync al proyecto, ya que nos permite ahorrar tiempo a la hora de escribir CSS, evitándonos tener que recargar la página cada que hacemos cambios en nuestro CSS.

3.- Agregamos nuestra carpeta de recursos (CSS) en /resources y con la regla postCss en laravel mix, compilamos nuestro CSS a la carpeta destino /public siguiendo la estructura defininida para el proyecto.

4.- Agregamos versionado a los ficheros css, de tal forma que no tengamos que estar vaciando la memoria cache del navegador cada que modificamos o agregamos código a nuestro CSS.

5.- Definimos un prefijo para nuestras rutas, de tal forma que sea más legible la definición de nuestras rutas, y que podamos encapsular de manera más limpia las que corresponden exclusivamente a nuestro equipo.

6.- Para desplegar el proyecto en ambiente de desarrollo, necesitamos compilar los assets, para ello tenemos que instalar previamente las dependencias de node ejecutando

```npm install```

Levantamos nuestro servidor php con

```php artisan serve```

Y finalmente ejecutamos

```npm run watch```

Esto levantara nuestro browser sync abriendo nuestro navegador en http://localhost:3000/ y se encargar de ver los cambios que hagamos a nuestros blades así como CSS (y Js) y recargará automáticamente cuanda haya nuevos cambios.

7.- Nuestro prototipo se puede consultar en http://localhost:3000/equipo4/prototipo, se hizo un intento por agregar mobile design.

## Equipo 5
