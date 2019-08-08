# _blank
Plantilla para desarrollo web con Vue.js integrado.
- - Con la tecnologia de **Laravel.mix** y el pre-procesado de **Sass**.

No olvides visitar nuestro repositorio en github: [_blank](https://github.com/vis97c/_blank)

## Caracteristicas
- - Soporte para sass por defecto.
- - Compilado de assets de imagen, video y fuentes.
- - Prerenderizado (no-ssr)
- - soporte para inline svg.
- - completamente personalizable.


## Instalacion

Para instalarla se requiere un entorno de trabajo con node.js. Recuerde clonar el repositorio.

- - Instale los paquetes npm:

```
     npm install
```

- - **_blank** soporta svg-icons, compile sus iconos personalizados:

- - - Solo es necesario ejecutarlo una vez o al agregar mas iconos.

```
     npm run g_icons
```

Con esto listo ya cuenta con todo lo necesario para crear y adaptar su nuevo proyecto web.

- - Recuerde que para poder ver su proyecto en el navegador debe primero compilarlo con alguno de los siguientes comandos:

```bash
     #compilado + debug
     npm run dev
     # compilado instantaneo (refresca la pagina)
     npm run watch
     # compilado instantaneo
     npm run hot
     # compilado y listo para el publico
     npm run production

```

Configuracion adicional.

- El watcher requiere definir una ruta proxy con la ubicacion de los archivos, Para su comodidad basta con configurar el archivo "**.env**" de la siguiente forma:

- - En el root del proyecto duplique el archivo "**.env-example**" y guardelo como "**.env**" sin ningun tipo de extension, se recomienda usar un editor de texto plano para ello.

- - Abra el archivo recien creado y en la linea "**BROWSERSYNC_DEV_URL**" reemplazela por la ubicacion del directorio "**public_html**".

- - - Por ejemplo "**localhost/root_de_su_proyecto/public_html**" o "**su_dominio_virtual.test**" asumiendo que este ultimo apunta al directorio publico de su proyecto.

- Si desea modificar alguno de los parametros de webpack basta con sobreescribir su configuracion a travez del archivo "**webpack.mix.js**". Para mas informacion hacerca del mismo remitase a la documentacion de [laravel.mix](https://laravel-mix.com/docs/4.0/installation).

## Uso

Los archivos que debe editar se encuentran en su mayoria en la carpeta "**src/**". Todos los archivos presentes en la misma se compilaran y copiaran al directorio "**public_html**", este se creara automaticamente tras la primera compilacion.

- - El root de su aplicacion vue se encuentra en el arhivo "**App.vue**".

- - Tambien recuerde que solo debe editar los archivos presentes en la carpeta "**src/**", como por ejemplo el **"index.php"**.

- - - Si edita su contraparte presente en "**public_html**", todas sus modificaciones se sobreescribiran en la siguiente compilacion del codigo.

No olvides tambien reemplazar el repositorio remoto con uno de tu propiedad.

## Contribuciones
Este es un proyecto personal y no tiene ningun animo de lucro, pero los aportes son bienvenidos.

- - Correcciones mediante "pull" pueden aceptarse.

- - Para cambios grandes abran por favor un nuevo "issue" para discutir los cambios que desean hacer.

- - - No olviden testear con antelacion.

## Licencia
[Custom](https://victorsaa.ml/)