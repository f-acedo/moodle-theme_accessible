# Accessible: un tema de Moodle para personas ciegas, con baja visión o con daltonismo

**Languages:** [English](../../README.md) · Español · [Català](../ca/README.md) · [Français](../fr/README.md) · [Italiano](../it/README.md) · [Português (Brasil)](../pt_br/README.md) · [Deutsch](../de/README.md)

**_Moodle debería funcionar para todas las personas que tienen que usarlo, no solo para quienes tienen una vista perfecta._**

Accessible es un tema para Moodle 5.2 y posteriores, basado en Boost. Se diseñó desde el principio para tres grupos de usuarios que suelen quedarse solos ante el problema:

- **Personas totalmente ciegas** que usan un lector de pantalla.
- **Personas con baja visión** que usan lupas, el zoom del navegador o lentes especiales.
- **Personas con deficiencia de visión del color** (daltonismo), para quienes «el botón rojo» o «el campo verde» no significan nada.

El objetivo es que estudiantes, profesores y administradores con estas necesidades puedan realmente *percibir y navegar* Moodle, y no solo que las páginas pasen una lista de comprobación.

## Por qué es diferente

La mayoría de los temas parten de un diseño visual y arreglan la accesibilidad después. Accessible funciona al revés: cada decisión sobre color, tamaño, orden y redacción se tomó primero pensando en sus usuarios.

- **Sencillo por diseño.** Fondo blanco, texto negro, enlaces negros subrayados, objetivos grandes y un indicador de foco muy marcado. Nada decorativo que haya que desactivar.
- **El color nunca transmite significado por sí solo.** Las alertas tienen un marco de color, un patrón, un símbolo *y* una palabra escrita («Error:», «Advertencia:»).
- **Todo escala con el texto.** Los tamaños son relativos, así que un texto más grande da un Moodle más grande: los iconos, los botones y los campos crecen junto con el texto.
- **El usuario decide.** Cada persona elige su tipo de letra, tamaño de texto, espaciado, contraste, movimiento, foco y visión del color, y puede hacerlo antes de iniciar sesión.
- **Medido, no supuesto.** El contraste del texto apunta al nivel AAA de WCAG 2.1 (7:1 para texto normal, 4,5:1 para texto grande), comprobado con análisis automáticos en contraste normal y alto, con varios tamaños de texto, en Chromium y Firefox.

## Características

### Para todos los usuarios

- **Opciones personales de accesibilidad** en una sola página, a la que se llega con el botón de accesibilidad que siempre está en la barra superior:
  - **Tipo de letra:** Lexend Deca (por defecto), Atkinson Hyperlegible u OpenDyslexic. Las tres vienen incluidas en el tema.
  - **Tamaño del texto:** 100 %, 125 %, 150 % o 200 %. Toda la página escala con él, iconos y botones incluidos.
  - **Espaciado del texto:** normal, amplio o muy amplio.
  - **Contraste:** normal (negro sobre blanco) o alto (blanco sobre negro, con el amarillo reservado para el cursor encima y el foco).
  - **Movimiento:** normal o reducido (también se respeta la configuración del sistema).
  - **Contorno de foco:** normal o grueso.
  - **Filtros de visión del color** para deficiencias de rojo (protán), verde (deután) y azul (tritán), cada uno en tres intensidades, y además una vista sin color. El blanco, el gris y el negro no cambian nunca.
- **Controles grandes y tolerantes:** objetivos de al menos 44 px en los botones, campos de formulario de 55 px, casillas y botones de opción grandes, y barras de desplazamiento grandes y de alto contraste (en Chrome, Edge y otros navegadores Chromium; Firefox mantiene su propio ancho).
- **Una página que tiene sentido al escucharla:** el contenido principal va antes que los bloques, cada zona de navegación tiene nombre, el campo de contraseña tiene un botón «Mostrar contraseña» que indica si está activado, y aparece un botón «Volver arriba» al desplazarse.
- **Opciones antes de iniciar sesión:** el botón de accesibilidad también está en la página de acceso. En el primer inicio de sesión esas opciones se copian a la cuenta, salvo que la cuenta ya tenga las suyas.

### Para administradores

- **Úsalo como tema del sitio, o ofrécelo como una opción** junto a tu tema principal (con «Permitir temas de usuario» activado). Los usuarios pueden volver a otro tema desde la misma página.
- **Valores por defecto del sitio** para tipo de letra, tamaño de texto, espaciado, contraste, movimiento y foco, para todos, visitantes incluidos.
- **Una pestaña Información** en los ajustes del tema, con una imagen de prueba de visión del color, muestras de las fuentes, licencias y un resumen de soporte que puedes copiar en un informe de error.
- **Una comprobación de estado** (Informes > Estado del sistema) que avisa cuando los usuarios no pueden elegir el tema ni sus opciones.
- **Privacidad integrada:** las preferencias se declaran y se exportan mediante la API de privacidad de Moodle. Las elecciones de los visitantes se guardan en una cookie que contiene solo opciones de visualización.
- **Sin peticiones externas de fuentes:** las fuentes vienen incluidas en el tema.
- **Siete idiomas:** inglés, español, catalán, francés, italiano, alemán y portugués de Brasil. Las traducciones están disponibles en los paquetes de idioma de Moodle.

## Conviene saber

- El aspecto es **deliberadamente sencillo**. Si necesitas una imagen de marca marcada o colores personalizados, este no es tu tema.
- El tema no puede cambiar el contenido que no controla: **actividades H5P, iframes incrustados y texto coloreado a mano** en el contenido de los cursos.
- Con el texto al 200 %, unas pocas páginas anchas de Moodle (el libro de calificaciones, la página de gestión de cursos y la página de intento de cuestionario) todavía pueden desplazarse hacia los lados.
- Algunos límites vienen del propio Moodle, como los niveles de encabezado que se saltan en algunas páginas del núcleo.
- El tema **no ha sido auditado ni certificado formalmente**. Ningún tema puede hacer accesible un sitio por sí solo: el contenido de los cursos importa igual de mucho.

## Requisitos e instalación

- Moodle 5.2 o posterior, y el tema Boost (incluido con Moodle).
- En Moodle 5.3 el tema usa el menú principal clásico, no el nuevo que trae la versión 5.3.
- Copia el tema en `public/theme/accessible` (la carpeta debe llamarse `accessible`; si descargas el ZIP de GitHub, cambia primero el nombre de la carpeta), o instálalo desde *Administración del sitio > Extensiones > Instalar complementos*, y termina la instalación desde *Administración del sitio > Notificaciones*.
- Para ponerlo como tema del sitio: *Administración del sitio > Apariencia > Temas*.
- Para que cada usuario pueda elegirlo y fijar sus propias opciones, activa **Permitir temas de usuario** (*Administración del sitio > Apariencia > Ajustes avanzados de tema*).
- Cuando es una opción del usuario, la página de acceso usa el tema del sitio. Para dar a los usuarios un enlace de inicio de sesión que abra Accessible, activa **Permitir cambios de tema en la URL** y comparte `https://your.site/login/index.php?theme=accessible` (consulta la [guía](accessible-theme-guide.md#un-enlace-de-inicio-de-sesión-que-abre-accessible) para ver la contrapartida).

No hay paso de compilación: ni Grunt, ni npm, ni webpack.

## Registro de cambios

Versión 1.0.0 (2026-11-11): versión inicial.

## Versionado

**El versionado semántico (SemVer) es un sistema de numeración estandarizado que aporta claridad y previsibilidad al desarrollo de software: asigna a cada versión un número de tres partes (MAJOR.MINOR.PATCH).** En los plugins y temas de Moodle, su finalidad principal es comunicar a los administradores del sistema la naturaleza exacta de los cambios de código y de estructura antes de que actualicen un sitio en producción. Al distinguir entre pequeñas correcciones visuales, ampliaciones de funciones seguras y cambios de arquitectura que rompen la compatibilidad, SemVer hace que el mantenimiento de la plataforma sea seguro, que las actualizaciones sean previsibles y que los despliegues automatizados no alteren por descuido la experiencia de los usuarios ni dañen la configuración de la base de datos.

### Referencia de versionado del tema Accessible (SemVer)

| Tipo de versión | Incremento de versión | Qué implica para un tema de Moodle | Ejemplos y detalles técnicos de Moodle |
| :--- | :--- | :--- | :--- |
| **Patch** | `0.0.Z` | **Pequeños ajustes de estilo y corrección de errores.** Correcciones puramente estéticas o internas que no cambian cómo se configura o se usa estructuralmente el tema. | • Corregir un error de relleno CSS o de diseño adaptable.<br>• Ajustar el color de un botón o el contraste de la tipografía.<br>• Resolver un aviso menor de PHP en los registros del servidor.<br>• *Solo cambia las últimas cifras de `$plugin->version` en `version.php`.* |
| **Minor** | `0.Y.0` | **Funciones nuevas o adaptaciones seguras a la plataforma.** Añadir opciones que no transforman la estructura del tema, o actualizar el código para admitir una versión nueva de Moodle manteniendo la compatibilidad con las actuales. | • Añadir una opción de diseño o una región de bloques nueva sin eliminar las antiguas.<br>• Introducir un ajuste propio nuevo en `settings.php` (por ejemplo, un interruptor de la cabecera).<br>• Actualizar el tema para admitir una versión menor nueva de Moodle.<br>• *Se puede automatizar sin riesgo; no rompe los diseños de curso existentes.* |
| **Major** | `X.0.0` | **Cambios estructurales que rompen la compatibilidad o actualizaciones importantes.** Cambios funcionales de gran alcance que requieren la atención del administrador, modificaciones de la base de datos o el fin del soporte de versiones anteriores de Moodle, lo que podría romper el sitio al actualizar. | • Rediseñar por completo la estructura del diseño (eliminar o renombrar regiones de bloques antiguas).<br>• Cambiar los nombres de las variables de configuración (con lo que se perderían los ajustes antiguos del tema en `config_plugins`).<br>• Actualizar el tema solo para una versión mayor nueva de Moodle y dejar de dar soporte a las anteriores (hay que incrementar `$plugin->requires`). |

## Más información

La [guía completa](accessible-theme-guide.md) explica por qué existe el tema, los estándares que sigue, cada función en detalle, las fuentes y su historia, y sus límites conocidos. Los detalles técnicos de los filtros de visión del color, los límites del alto contraste y la historia de las fuentes están en el apéndice A de la guía.

[Código fuente y versiones](https://github.com/f-acedo/moodle-theme_accessible). Informes de errores y sugerencias: [seguimiento de incidencias](https://github.com/f-acedo/moodle-theme_accessible/issues).

## Créditos y licencia

Desarrollado por Fernando Acedo y el antiguo equipo de desarrollo de Koditik. Claude Code ayudó a escribir partes del tema, lo revisó y ayudó a probarlo. Claude es una marca registrada de Anthropic, PBC.

Con licencia **GNU GPL v3 o posterior** (véase `LICENSE.txt`). Las fuentes incluidas (Lexend Deca, Atkinson Hyperlegible y OpenDyslexic) tienen licencia **SIL Open Font License 1.1**.
