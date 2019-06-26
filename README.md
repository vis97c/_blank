# _blank
Plantilla para desarrollo web con Vue.js integrado.
- - Con la tecnologia de **Laravel.mix** y el pre-procesado de **Sass**.



## Instalacion

Para instalarla se requiere un entorno de trabajo con node.js y composer.

- - En la raiz del proyecto instale los paquetes de composer con el siguiente comando:

```
     composer install
```
- - A continuacion instale los paquetes npm:

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

## Uso

Los archivos que debe editar se encuentran en su mayoria en la carpeta "**src/**". Todos los archivos presentes en la misma se compilaran y copiaran al directorio "**public_html**", este se creara automaticamente tras la primera compilacion.

- - El root de su aplicacion vue se encuentra en el arhivo "**App.vue**".

- - Tambien recuerde que solo debe editar los archivos presentes en la carpeta "**src/**", como por ejemplo el **"index.php"**.

- - - Si edita su contraparte presente en "**public_html**", todas sus modificaciones se sobreescribiran en la siguiente compilacion del codigo.


## Contribuciones
Este es un proyecto personal y no tiene ningun animo de lucro, pero los aportes son bienvenidos.

- - Correcciones mediante "pull" pueden aceptarse.

- - Para cambios grandes abran por favor un nuevo "issue" para discutir los cambios que desean hacer.

- - - No olviden testear con antelacion.

## Licencia
[Custom](https://victorsaa.ml/)