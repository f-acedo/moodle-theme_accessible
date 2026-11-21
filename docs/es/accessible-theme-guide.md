# Tema Accessible para Moodle: la guía completa

Versión 1.0.0 (estable), para Moodle 5.2 y posteriores.

Esta guía explica qué es el tema Accessible, por qué existe, qué estándares sigue, cada función que añade, las fuentes que incluye y por qué se eligieron, cómo se probó y qué no puede hacer. Está escrita para cualquier persona que tenga que decidir si probarlo: administradores del sitio, responsables de accesibilidad, docentes, personal de soporte y los propios usuarios.

## Contenido

1. [Qué es Accessible](#1-qué-es-accessible)
2. [Por qué existe este tema](#2-por-qué-existe-este-tema)
3. [Principios de diseño](#3-principios-de-diseño)
4. [Estándares y contexto legal](#4-estándares-y-contexto-legal)
5. [Opciones personales de accesibilidad](#5-opciones-personales-de-accesibilidad)
6. [Diseño visual: lo que ve todo el mundo](#6-diseño-visual-lo-que-ve-todo-el-mundo)
7. [Lectores de pantalla y usuarios de teclado](#7-lectores-de-pantalla-y-usuarios-de-teclado)
8. [Modo de alto contraste](#8-modo-de-alto-contraste)
9. [Filtros de visión del color](#9-filtros-de-visión-del-color)
10. [Fuentes: por qué estas tres](#10-fuentes-por-qué-estas-tres)
11. [Funciones para administradores](#11-funciones-para-administradores)
12. [Privacidad y datos](#12-privacidad-y-datos)
13. [Idiomas](#13-idiomas)
14. [Cómo se probó el tema](#14-cómo-se-probó-el-tema)
15. [Límites conocidos](#15-límites-conocidos)
16. [¿Es Accessible adecuado para tu sitio?](#16-es-accessible-adecuado-para-tu-sitio)
17. [Instalación y configuración](#17-instalación-y-configuración)
18. [Créditos, licencias y fuentes de información](#18-créditos-licencias-y-fuentes-de-información)

Apéndice A. [Referencia técnica](#apéndice-a-referencia-técnica)

---

## 1. Qué es Accessible

Accessible es un tema para **Moodle 5.2 y posteriores**. Es un tema hijo de **Boost**, el tema estándar de Moodle, así que conserva la estructura, la navegación y el comportamiento de Boost, y cambia su aspecto, cómo se escala y cómo se anuncia.

Está pensado para tres grupos de personas:

- **Personas ciegas** que usan un lector de pantalla (como NVDA, JAWS, VoiceOver o TalkBack). Para ellas lo importante es el orden en que se lee la página, los nombres de los botones y de las áreas de navegación, y poder hacerlo todo con el teclado.
- **Personas con baja visión**, por ejemplo alguien con alrededor del 30 % de la visión normal que usa un ampliador de pantalla, el zoom del navegador o lentes especiales. Para ellas lo importante es el contraste, el tamaño, un indicador de foco claro y una maquetación que no se rompa al ampliarlo todo.
- **Personas con deficiencia de la visión del color** (daltonismo). Para ellas lo importante es que ninguna información se dé solo mediante el color, y que los colores que se parecen puedan verse distintos.

El objetivo es que estas personas puedan realmente **percibir y navegar** por Moodle de forma autónoma, y no solo que las páginas pasen una lista de comprobación automática.

Accessible puede usarse de dos maneras: como **tema del sitio** para todo el mundo, o como **tema alternativo** que cada usuario puede elegir para sí mismo, mientras los demás conservan el aspecto habitual del sitio.

---

## 2. Por qué existe este tema

### Los usuarios

Los problemas de visión son frecuentes. El [*Informe mundial sobre la visión*](https://www.who.int/publications/i/item/9789241516570) (2019) de la Organización Mundial de la Salud calcula que **al menos 2200 millones de personas** en todo el mundo tienen una deficiencia visual de cerca o de lejos. La deficiencia de la visión del color afecta a alrededor de **1 de cada 12 hombres y 1 de cada 200 mujeres**, según [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/). En cualquier escuela, universidad o empresa que use Moodle, algunos estudiantes, docentes y empleados están en estos grupos, lo hayan dicho o no.

### Moodle y la accesibilidad

Moodle se toma la accesibilidad en serio: su núcleo se desarrolla pensando en ella y se comprueba con las WCAG. Boost, su tema por defecto, es una base sólida. Pero un tema de propósito general tiene que equilibrar muchos objetivos a la vez: la marca, el diseño visual, la densidad de información y las necesidades del usuario medio. Algunas decisiones que convienen a la mayoría son difíciles para los usuarios a quienes está dirigido este tema:

- Texto gris claro y bordes finos que no alcanzan los niveles de contraste más altos.
- Rellenos azul pálido o gris para mostrar el estado (seleccionado, al pasar el puntero, desactivado), difíciles de ver con baja visión o con un ampliador.
- Objetivos pequeños (iconos, enlaces en filas) difíciles de pulsar con temblor o bajo ampliación.
- Tamaños y puntos de ruptura en píxeles que no crecen cuando el usuario elige un tamaño de texto mayor.
- Alertas cuyo significado depende en buena parte del color.

La mayoría de los temas parten de un diseño visual y corrigen los problemas de accesibilidad después, queja a queja. Accessible funciona al revés: **primero fue el público**, y cada decisión sobre color, tamaño, orden y redacción se tomó pensando en él.

### No sustituye a un buen contenido

Un tema controla el marco que rodea al contenido: menús, botones, formularios, alertas, navegación. No puede reescribir lo que el profesorado pone en sus cursos. Una imagen sin alternativa de texto, un PDF escaneado como imagen o un vídeo sin subtítulos siguen siendo inaccesibles sea cual sea el tema. Accessible hace la plataforma tan clara como puede; el contenido de los cursos sigue necesitando el cuidado de sus autores (véanse los [Límites conocidos](#15-límites-conocidos)).

---

## 3. Principios de diseño

Cinco reglas guían cada parte del tema.

1. **Sencillo y de alto contraste por defecto.** El fondo es blanco en todas partes y el texto es negro. Los enlaces son negros y subrayados (con un subrayado más grueso al pasar el puntero), no azules ni morados. Se elimina la decoración que no ayuda y se hace más destacado lo necesario.
2. **El color nunca es la única señal.** Todo estado que Moodle muestra con color tiene también una forma, un patrón, un símbolo o una palabra. Las alertas, por ejemplo, combinan un marco de color, una franja con patrón, un símbolo y el tipo de mensaje escrito.
3. **Marcos de color, no rellenos de color.** Las alertas y los mensajes de estado conservan el fondo blanco y muestran su color como un marco (borde). Un relleno de color pálido baja el contraste del texto que lleva encima; un marco no.
4. **Todo se escala con el texto.** Los tamaños son relativos (en `rem`), de modo que un tamaño de texto mayor da un Moodle mayor, con iconos, botones, campos de formulario, cajones y objetivos táctiles que crecen junto con el texto.
5. **La persona decide.** La fuente, el tamaño del texto, el espaciado, el contraste, el movimiento, el foco y la visión del color son opciones personales. La persona administradora del sitio fija valores por defecto razonables y cada usuario puede cambiarlos.

---

## 4. Estándares y contexto legal

### WCAG 2.1

Las [**Pautas de accesibilidad para el contenido web (WCAG) 2.1**](https://www.w3.org/TR/WCAG21/) son la referencia internacional de la accesibilidad web. Las publica el [World Wide Web Consortium (W3C)](https://www.w3.org/WAI/) y se organizan en torno a cuatro principios: el contenido debe ser *perceptible*, *operable*, *comprensible* y *robusto*. Cada criterio de conformidad tiene un nivel:

- **Nivel A**: el mínimo.
- **Nivel AA**: el nivel que exigen la mayoría de las leyes y normas del sector público.
- **Nivel AAA**: el más alto. El W3C [no recomienda](https://www.w3.org/WAI/WCAG21/Understanding/conformance) exigir el nivel AAA para sitios completos, porque algunos criterios no pueden cumplirse para todo el contenido.

Las [WCAG 2.2](https://www.w3.org/TR/WCAG22/) (2023) añaden criterios a la 2.1, pero muchas leyes siguen refiriéndose a las WCAG 2.1 de nivel AA.

### A qué aspira Accessible

Accessible toma como objetivo las **WCAG 2.1 de nivel AAA** para todo lo que dibuja el tema. En la práctica eso significa:

| Criterio WCAG | Qué pide | Qué hace el tema |
|---|---|---|
| [1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced), AAA | 7:1 para texto normal, 4,5:1 para texto grande | Todos los colores del tema se eligen para llegar a 7:1 o más, en contraste normal y alto. Medido con análisis automáticos (véase la [sección 14](#14-cómo-se-probó-el-tema)). |
| [1.4.11 Non-text Contrast](https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast), AA | 3:1 para los bordes de los controles, los indicadores de foco y los gráficos que transmiten significado | Marcos negros de 2 px en campos, casillas de verificación y botones de opción; anillo de foco negro con halo blanco. |
| [1.4.1 Use of Colour](https://www.w3.org/WAI/WCAG21/Understanding/use-of-color), A | El color no es la única forma de transmitir información | Las alertas tienen marco + patrón + símbolo + palabra; los controles desactivados tienen un borde discontinuo; los elementos seleccionados van en negrita o invertidos. |
| [1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/Understanding/resize-text), AA, y [1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/Understanding/reflow), AA | El texto puede ampliarse hasta el 200 % y la página se reorganiza | Opción de tamaño de texto de hasta el 200 %, todo en `rem`, filas que pueden saltar de línea. Algunas páginas de Moodle siguen desplazándose en horizontal al 200 % (véanse los [Límites conocidos](#15-límites-conocidos)). |
| [1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/Understanding/visual-presentation), AAA | Interlineado, sin texto justificado, colores elegibles por el usuario | Interlineado de 1,6, opciones de espaciado, el texto justificado se muestra alineado al inicio, opción de alto contraste. |
| [1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing), AA | La página resiste un mayor espaciado entre líneas, letras y palabras | La opción de espaciado «muy amplio» aplica exactamente los valores de las WCAG (0,12 em entre letras, 0,16 em entre palabras) y más interlineado. |
| [2.3.3 Animation from Interactions](https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions), AAA | El movimiento puede desactivarse | Opción de movimiento reducido; también se respeta el ajuste del sistema `prefers-reduced-motion`. |
| [2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/Understanding/bypass-blocks), A | Saltar el contenido repetido | Enlace «Salta al contenido principal» el primero en todas las páginas; contenido principal antes que los bloques. |
| [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/Understanding/focus-visible), AA | El foco del teclado puede verse | Anillo de foco de 4 px (8 px con la opción gruesa) en lugar del predeterminado del navegador. |
| [2.5.5 Target Size](https://www.w3.org/WAI/WCAG21/Understanding/target-size), AAA | Objetivos de al menos 44 × 44 píxeles CSS | Los botones y controles de formulario miden al menos 44 px; los campos, 55 px. Algunas filas de enlaces de Moodle siguen siendo más pequeñas (véanse los [Límites conocidos](#15-límites-conocidos)). |
| [4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/Understanding/name-role-value), A | Los controles y las regiones tienen nombre | Cada área de navegación tiene nombre; el botón de la contraseña informa de su estado. |

### Leyes y normas del sector público

Muchas leyes de accesibilidad se basan en las WCAG 2.1 de nivel AA, normalmente a través de otros estándares:

- **Unión Europea.** La [*Directiva de accesibilidad web*](https://eur-lex.europa.eu/eli/dir/2016/2102/oj) (Directiva (UE) 2016/2102) cubre los sitios web y las aplicaciones del sector público. El [*Acta Europea de Accesibilidad*](https://eur-lex.europa.eu/eli/dir/2019/882/oj) (Directiva (UE) 2019/882) se aplica a muchos productos y servicios privados desde el 28 de junio de 2025. Ambas se apoyan en la norma armonizada [**EN 301 549**](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility), que incluye las WCAG 2.1 de nivel AA para el contenido web.
- **Estados Unidos.** La [**Sección 508**](https://www.access-board.gov/ict/) de la Ley de Rehabilitación cubre a las agencias federales y se refiere a las WCAG 2.0 de nivel AA. En abril de 2024 el Departamento de Justicia [adoptó](https://www.ada.gov/resources/2024-03-08-web-rule/) las **WCAG 2.1 de nivel AA** como estándar técnico para los sitios web de los gobiernos estatales y locales según el Título II de la Ley de Estadounidenses con Discapacidades (ADA). Una norma provisional definitiva de abril de 2026 retrasó un año las fechas de cumplimiento (abril de 2027 para las entidades que atienden a 50 000 personas o más, abril de 2028 para las más pequeñas); consulta [ada.gov](https://www.ada.gov/) para ver las fechas vigentes.
- Otros países tienen normas similares, la mayoría basadas en las WCAG.

**Qué significa esto para ti:** Accessible se construye hacia las WCAG 2.1 AAA para las partes que controla, lo que está por encima del nivel AA que piden estas leyes. Sin embargo, **el tema no ha sido auditado ni certificado formalmente**, y el cumplimiento es una propiedad de un sitio completo (plataforma, extensiones y contenido), no de un tema. Accessible te da una base sólida; no sustituye a una auditoría de accesibilidad de tu propio sitio y de tus cursos.

---

## 5. Opciones personales de accesibilidad

Cada usuario, incluidos los visitantes que no han iniciado sesión, tiene una **página de opciones de accesibilidad**. Se llega a ella desde:

- el **botón de accesibilidad** (el símbolo de acceso universal), siempre presente en la barra superior de todas las páginas;
- el mismo botón en la esquina superior derecha de la **página de inicio de sesión**;
- el **perfil** del usuario (enlace «Accesibilidad») y la página de **Preferencias**.

Cada opción explica lo que hace. Puedes guardar y volver, guardar y seguir, cancelar o restaurar los valores predeterminados del sitio.

### Tipo de letra

Tres fuentes, todas incluidas en el tema: **Lexend Deca** (la predeterminada), **Atkinson Hyperlegible** y **OpenDyslexic**. Consulta la [sección 10](#10-fuentes-por-qué-estas-tres) para saber por qué estas tres.

### Tamaño del texto

**100 %, 125 %, 150 % o 200 %.** La opción cambia el tamaño de fuente de la raíz y, como todos los tamaños del tema están en `rem`, toda la página crece con ella: texto, iconos, botones, campos de formulario, casillas de verificación, cajones, barras de desplazamiento y objetivos táctiles. Esto es distinto del zoom del navegador, que también funciona: la opción de tamaño del texto mantiene el ancho de la ventana y deja que la maquetación se reorganice, así que es adecuada para quien quiere un texto más grande sin perder la maquetación.

Con tamaños mayores la maquetación se adapta: la barra superior pasa a dos filas y, cuando ocuparía más de una cuarta parte de la ventana, se oculta al desplazarte hacia abajo y vuelve al llegar arriba de la página o cuando el foco entra en ella. El menú principal pasa antes al botón de menú (☰), para que la barra deje sitio a la página. Las etiquetas de los formularios se colocan encima de sus campos, los menús saltan de línea, las tarjetas de perfil pasan a una sola columna, los menús largos tienen una altura máxima para que quepan en la pantalla, la barra de Guardar y Cancelar de los formularios largos se queda al final del formulario en lugar de taparlo, y las palabras largas de los títulos de sección de los formularios se parten con guion en lugar de hacer que la página se desplace en horizontal.

En pantallas pequeñas el tamaño del texto tiene un límite para que cada línea siga teniendo suficientes palabras: hasta el 150 % en pantallas de menos de 768 px (tabletas pequeñas) y hasta el 125 % por debajo de 480 px (móviles). Las pantallas más grandes reciben el tamaño elegido.

### Espaciado del texto

- **Normal:** interlineado de 1,6.
- **Amplio:** interlineado de 1,8, con un espaciado algo mayor entre letras y palabras.
- **Muy amplio:** interlineado de 2, espaciado entre letras de 0,12 em, entre palabras de 0,16 em y más espacio tras los párrafos. Son los valores de la [WCAG 1.4.12 (Text Spacing)](https://www.w3.org/WAI/WCAG21/Understanding/text-spacing).

Un espaciado mayor ayuda a muchas personas con baja visión o dislexia a no perder el renglón.

### Contraste

- **Normal:** texto negro sobre fondo blanco, con amarillo para el paso del puntero y el foco (el valor predeterminado).
- **Alto:** texto blanco sobre fondo negro, con el amarillo reservado para el paso del puntero y el foco. Consulta la [sección 8](#8-modo-de-alto-contraste).

### Movimiento

- **Normal** o **Reducido.** El movimiento reducido desactiva las animaciones, las transiciones y el desplazamiento suave. Si el sistema operativo está configurado para reducir el movimiento, el tema hace lo mismo aunque la opción sea «Normal». Esto ayuda a las personas con trastornos vestibulares y a quienes usan ampliadores, que pueden perder su posición cuando la página se mueve.

### Contorno del foco

- **Normal:** un anillo de 4 px alrededor del elemento que tiene el foco del teclado: negro con un halo blanco, o amarillo con un halo negro en alto contraste.
- **Grueso:** el anillo pasa a 8 px, más fácil de encontrar con un ampliador o con baja visión.

### Visión del color

Un tipo (**protán**, **deután**, **tritán** o **sin color**) y una intensidad (**suave**, **media** o **fuerte**). Los colores de la página se desplazan para que los que se parecen para el usuario se vean distintos. Consulta la [sección 9](#9-filtros-de-visión-del-color).

### Dónde se guardan las elecciones

- **Usuarios con sesión iniciada:** como preferencias de usuario de Moodle, de modo que lo siguen a cualquier ordenador.
- **Visitantes e invitados:** en una cookie (consulta la [sección 12](#12-privacidad-y-datos)).
- **En el primer inicio de sesión:** si la cuenta aún no tiene opciones propias, las elecciones hechas como visitante se copian a la cuenta y un mensaje lo indica. Si la cuenta ya tiene sus propias opciones, prevalece la cuenta. Solo se copian las elecciones hechas en la misma visita, justo antes de entrar: las que haya dejado en el navegador otra persona en un ordenador compartido, no.

### Cambiar de tema

Si el sitio permite que los usuarios elijan su tema, la misma página tiene un selector de tema que lista todos los temas instalados. Los usuarios pueden probar Accessible y dejarlo de nuevo sin pedírselo a nadie.

---

## 6. Diseño visual: lo que ve todo el mundo

Estos cambios se aplican a todas las personas que usan el tema, sean cuales sean sus opciones.

### Colores y enlaces

- Fondo blanco en todas partes, texto negro.
- Los enlaces son negros y subrayados; el subrayado se engrosa al pasar el puntero. No hay azul ni morado, y los enlaces visitados tienen el mismo aspecto, así que nunca hay que descifrar el color de un enlace.
- El texto atenuado (secundario) es un gris oscuro que aun así llega a 7:1, nunca los grises pálidos de un tema estándar.
- El código en línea se muestra en un magenta oscuro que llega a 7:1 (el rosa de Bootstrap ronda el 4,8:1).
- El texto que un autor ha justificado se muestra alineado al inicio de la línea: el texto justificado crea huecos irregulares difíciles de leer para muchas personas con dislexia o baja visión.

### Foco

Todo elemento interactivo muestra un anillo negro de 4 px cuando tiene el foco del teclado (8 px con la opción gruesa); los botones y los campos de formulario reciben además un halo blanco, que mantiene el anillo visible sobre cualquier fondo. Los botones, los elementos de menú y los enlaces de paginación se rellenan de amarillo, con texto negro, con el foco y al pasar el puntero. En alto contraste el propio anillo es amarillo, con un halo negro. Se elimina el «resplandor» azul pálido de Bootstrap. Además, la página deja espacio arriba cuando se desplaza a un elemento con foco, de modo que la barra superior fija nunca lo tapa.

### Botones y objetivos

- Todo botón tiene un tamaño mínimo de **44 × 44 px** (el tamaño de objetivo de las WCAG AAA) y un relleno generoso.
- Las barras de paginación, como el filtro de iniciales de la A a la Z de la página de participantes, tienen objetivos de 44 px con un marco de 2 px; el elemento actual va en blanco sobre negro y en negrita; al pasar el puntero se rellena de amarillo.
- Los controles desactivados tienen un relleno gris **y** un borde discontinuo, para que no se muestren solo con color.

### Formularios

- Los campos de texto, los menús desplegables, las áreas de texto y los botones miden todos **55 px** de alto.
- Las casillas de verificación y los botones de opción los dibuja el tema: **28 px**, con un borde negro de 2 px. Marcado significa negro con una marca o un punto blanco; desactivado significa borde discontinuo y relleno gris.
- Los campos obligatorios conservan un asterisco claro, y los mensajes de validación solo se muestran cuando hay un error, enmarcados y junto al campo.
- El interruptor del modo de edición de la barra superior es una pista blanca con una perilla negra cuando está desactivado, y una pista negra con una perilla blanca cuando está activado, de modo que su estado se muestra por la posición y la forma además del color.

### Alertas y notificaciones

Las alertas de Moodle (error, advertencia, éxito, información) se rediseñan para que su significado nunca dependa del color:

- un **fondo blanco** (sin relleno teñido), para que el texto conserve todo su contraste;
- un **marco de color** con el color de la alerta;
- una **franja con patrón** a la izquierda, distinta para cada tipo;
- un **símbolo** junto a la primera línea de texto;
- el **tipo escrito en negrita** antes del mensaje: «Error:», «Advertencia:», «Éxito:», «Información:»;
- una información emergente sobre la franja y el símbolo con el tipo de alerta.

Una persona que no ve ningún color, o que usa un lector de pantalla, recibe igualmente el tipo de mensaje. Las alertas escritas por otras extensiones con el marcado de alerta sencillo también reciben el marco, el patrón y el símbolo (pero no la palabra escrita, que procede de las propias plantillas de alerta del tema).

### Barras de desplazamiento

Las barras de desplazamiento miden **24 px** de ancho, con un tirador negro sobre una pista blanca enmarcada, en todas partes: página, cajones y tablas. A propósito no tienen efecto al pasar el puntero ni al arrastrar: una barra de desplazamiento que cambia de tamaño o de color bajo el puntero salta de un lado a otro para las personas con temblor o que usan un ampliador. El ancho funciona en Chrome, Edge y otros navegadores basados en Chromium; Firefox conserva su propio ancho pero usa los colores.

### Cabecera y pie de página

- La barra superior muestra solo lo que importa y es negra con texto blanco en todos los modos.
- El pie de página está siempre visible y es breve: se eliminan los botones flotantes de ayuda y comunicación, la línea «Usted se ha identificado como» y la versión de Moodle. Se conservan los enlaces añadidos por las extensiones (por ejemplo, el resumen de retención de datos).
- Los avatares con iniciales (los círculos de color con letras) se ocultan, salvo donde son el enlace a un perfil; las fotos de usuario se mantienen.

---

## 7. Lectores de pantalla y usuarios de teclado

Accessible se comprobó con el árbol de accesibilidad del navegador y con análisis de teclado (véase la [sección 14](#14-cómo-se-probó-el-tema)). Los cambios son:

- **Primero, el enlace de salto.** «Salta al contenido principal» es lo primero en todas las páginas.
- **Las opciones de accesibilidad, en segundo lugar.** El botón de accesibilidad es el siguiente elemento en el orden del teclado, así que un usuario puede llegar a sus opciones con dos pulsaciones de tecla. (Se muestra a la derecha de la barra superior.)
- **El contenido principal antes que los bloques.** En Boost, el cajón de bloques va antes que el contenido principal en el código de la página. En Accessible va después, de modo que un lector de pantalla lee primero el contenido de la página. La maquetación visual no cambia.
- **Cada área de navegación tiene nombre**: «Menú principal», «Menú de la página», «Índice del curso» y los menús dentro de las páginas, para que quien lista los puntos de referencia de una página sepa qué es cada uno.
- **El campo de contraseña** tiene un botón «Mostrar contraseña» que indica al lector de pantalla si la contraseña es visible (pulsado o no pulsado).
- **Volver arriba.** Aparece un botón en la parte inferior derecha cuando la página se ha desplazado más o menos una pantalla. Lleva al usuario de vuelta arriba y coloca el foco en el enlace de salto, de modo que los usuarios de teclado y de lector de pantalla vuelven realmente al principio, y no solo la página visual. Se oculta mientras el foco está en el contenido que queda debajo, para no tapar nunca el elemento con foco.
- **Botón «← Volver al curso»** en la parte superior del índice del curso dentro de una actividad, para volver a la página del curso.
- **El índice del curso se abre y se cierra en el mismo sitio.** En Boost, el botón que cierra el índice del curso está
  al otro extremo de su cabecera, lejos del botón que lo abre. En Accessible aparece justo donde estaba el botón de abrir,
  así que el cajón se abre y se cierra sin mover el puntero ni la vista ampliada, y es el primer elemento del cajón para
  el teclado.

---

## 8. Modo de alto contraste

El alto contraste es una opción personal (y puede ser el valor predeterminado del sitio). Convierte la página en **texto blanco sobre fondo negro**:

- El texto secundario es un gris muy claro (#E0E0E0), aún por encima de 7:1 sobre negro.
- Los enlaces son blancos y subrayados, como el texto.
- El **amarillo** (#FFE600) se usa solo al pasar el puntero y para el foco: rellenos al pasar el puntero y el anillo de foco, con texto negro sobre amarillo.
- Las alertas conservan sus marcos, patrones y símbolos, en colores más brillantes que alcanzan el nivel de contraste sobre negro.
- Las tarjetas, los menús, los cuadros de diálogo y los formularios de Moodle pasan a oscuro mediante el propio modo oscuro de Bootstrap, de modo que son coherentes.
- La barra superior conserva su aspecto habitual, y el área de edición del editor (TinyMCE) se oscurece con un filtro.

El modo normal no se ve afectado: la paleta clara es exactamente la misma con o sin esta opción disponible.

Lo que el alto contraste no puede cambiar (H5P, iframes, contenido de los docentes con colores propios) se detalla en los [Límites conocidos](#15-límites-conocidos).

---

## 9. Filtros de visión del color

### Qué hacen

La deficiencia de la visión del color significa que algunos colores que a la mayoría de las personas les parecen distintos le parecen iguales al usuario, con más frecuencia los rojos y los verdes. La opción de visión del color aplica un filtro sobre toda la ventana que **traslada los colores que el usuario no distingue a colores que sí distingue**, de modo que las diferencias vuelven a ser visibles.

### Las opciones

- **Tipo:**
  - **Protán:** sensibilidad débil o nula al rojo.
  - **Deután:** sensibilidad débil o nula al verde.
  - **Tritán:** sensibilidad débil o nula al azul.
  - **Sin color:** la página se muestra en grises.
- **Intensidad:** **suave** (los tipos «-anomalía», en los que el cono funciona en parte), **media** o **fuerte** (los tipos «-anopía», en los que falta el cono). La vista sin color ignora la intensidad.

Si un usuario no conoce su tipo, puede probar cada uno y quedarse con aquel en el que lo rojo, lo verde y lo azul se vean más diferentes. Es una ayuda, no una prueba médica.

### Cómo funciona

Cada filtro es una matriz de color SVG aplicada mediante una capa sobre toda la ventana, construida en dos pasos:

1. **Simulación:** lo que ve una persona con esa deficiencia, usando el [modelo publicado](https://doi.org/10.1109/TVCG.2009.113) de Machado, Oliveira y Fernandes (2009), escalado según la intensidad elegida.
2. **Corrección:** la parte del color que el usuario no puede ver se traslada a los canales que sí puede ver (el rojo al verde y al azul en protán y deután; el azul al rojo y al verde en tritán). Esta técnica se conoce como «daltonizar».

**El blanco, el gris y el negro no cambian**, de modo que el texto y los fondos conservan su contraste.

### Cómo se comprobó

Se dibujaron muestras de color sobre una página con cada combinación de tipo e intensidad, y se leyeron de vuelta los colores de sus píxeles. El blanco, el negro y el gris no cambiaron en ningún caso; cada intensidad desplazó los colores más que la anterior; la vista sin color convirtió cada muestra en un gris puro.

### Límites

- Las matrices proceden de valores publicados. **No se han validado clínicamente**, y solo las personas con deficiencia de la visión del color pueden confirmar que ayudan. Se recomienda probarlo con usuarios reales sobre contenido real de cursos.
- Las imágenes y los vídeos también se filtran, porque el filtro cubre toda la ventana. Esto incluye H5P y los contenidos incrustados de terceros como YouTube y Vimeo en Chrome, Edge y Firefox. En un navegador que no pueda aplicar la capa, el filtro se aplica a la página y los contenidos incrustados de terceros conservan sus propios colores.
- El **vídeo a pantalla completa** y los cuadros de diálogo modales nativos los dibuja el navegador por encima de todo y no se filtran. Los filtros de color del sistema operativo (Windows, macOS, iOS y Android) los cubren.
- No se ha medido el efecto de un filtro sobre toda la ventana en la velocidad de los ordenadores lentos.

### Prueba de visión del color para administradores

La pestaña **Información** de los ajustes del tema muestra la misma imagen de prueba once veces: la original, la vista sin color y cada tipo en cada intensidad. Los administradores pueden ver cómo se ven los colores del sitio para cada usuario. La imagen es un dibujo propio del tema, no una lámina de Ishihara, y no es una prueba médica.

---

## 10. Fuentes: por qué estas tres

### Por qué ofrecer a elegir

Ninguna fuente es la mejor para todo el mundo. La comodidad de lectura depende de la persona, de sus ojos y de la tarea. Por eso el tema incluye tres fuentes con objetivos de diseño distintos, deja que cada usuario las pruebe y se quede con la que le funciona, y deja que la persona administradora elija la predeterminada del sitio.

Las tres se incluyen en el tema como archivos de fuente web: **no se envía ninguna petición a Google Fonts ni a ningún otro servicio externo**, lo que es mejor para la privacidad y funciona en redes sin acceso a internet. Las tres tienen la licencia **SIL Open Font License 1.1**. La pestaña Información de los ajustes del tema muestra una muestra de cada fuente, en normal y en negrita, incluidos los caracteres que más fácilmente se confunden: `I / l / 1`, `O / 0`, `rn / m`, `cl / d`.

| Fuente | Creada por | Idea principal |
|---|---|---|
| [**Lexend Deca**](https://www.lexend.com/) (predeterminada) | Dra. Bonnie Shaver-Troup y Thomas Jockin | Espaciado entre letras amplio y uniforme para que la lectura sea más fluida |
| [**Atkinson Hyperlegible**](https://www.brailleinstitute.org/freefont/) | Braille Institute of America, diseñada con Applied Design Works | Formas de letra fáciles de distinguir, para la baja visión |
| [**OpenDyslexic**](https://opendyslexic.org/) | Abbie Gonzalez | Base de las letras más pesada, pensada para ayudar a los lectores con dislexia |

### Lexend Deca (la predeterminada)

**Historia.** Lexend es obra de la Dra. Bonnie Shaver-Troup, terapeuta educativa, y del diseñador tipográfico Thomas Jockin. A partir de su trabajo con lectores con dificultades, ella propuso que la lectura mejora con una fuente sin serifas, proporciones expandidas y un espaciado de caracteres más amplio. La desarrollaron hacia 2018 y se publicó en [Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) en 2019. Lexend se basa en [Quicksand](https://fonts.google.com/specimen/Quicksand), una tipografía iniciada por Andrew Paglinawan en 2008. La familia tiene siete anchuras, desde **Deca** (la más estrecha) hasta Zetta (la más ancha); en 2021 se añadió un eje de grosor.

**Por qué es la predeterminada.** Lexend Deca es una fuente sin serifas limpia y abierta, con un espaciado generoso que sigue siendo lo bastante compacta para una interfaz densa como la de Moodle, y se lee bien en tamaños pequeños y grandes.

### Atkinson Hyperlegible

**Historia.** Atkinson Hyperlegible se creó para el **Braille Institute of America** y se publicó en 2019, el año del centenario del instituto. La diseñó la agencia Applied Design Works como parte de la nueva marca del instituto, y lleva el nombre del fundador del instituto, J. Robert Atkinson. Ganó el premio Innovation by Design 2019 de Fast Company y, en 2024, entró en la colección permanente del Cooper Hewitt, Smithsonian Design Museum. En 2025 el Braille Institute publicó **Atkinson Hyperlegible Next**, con más grosores y una mayor cobertura de idiomas, y una versión monoespaciada.

**La idea.** La mayoría de las tipografías buscan letras uniformes. Atkinson Hyperlegible hace lo contrario: da prioridad a las **diferencias entre caracteres** para que los lectores con baja visión puedan distinguirlos, con formas abiertas y formas distintas para los pares fáciles de confundir, como la I mayúscula, la l minúscula y el número 1, o la O y el 0.

**Por qué se ofrece.** Es la fuente diseñada de forma más directa para los usuarios con baja visión a quienes sirve este tema. El tema incluye la versión original en normal y en negrita.

### OpenDyslexic

**Historia.** OpenDyslexic la creó Abbie Gonzalez, que tiene dislexia, y se publicó por primera vez en 2011. Es de código abierto y se derivó originalmente de Bitstream Vera Sans.

**La idea.** Sus letras tienen la **base más pesada**. La autora dice que el peso indica hacia dónde está abajo, lo que ayuda a los lectores a reconocer las letras y puede evitar que las volteen o las giren mentalmente (por ejemplo b, d, p y q). Las formas de las letras también son más distintas y el espaciado es mayor.

### Qué cubren las fuentes

Lexend Deca y Atkinson Hyperlegible se incluyen con los conjuntos de caracteres latino y latino extendido, los mismos archivos que sirve Google Fonts, que cubren los siete idiomas del tema y la mayoría de los idiomas europeos; estas dos fuentes no tienen caracteres griegos ni cirílicos. OpenDyslexic se incluye completa, tal como la publica su autora: además del latino, cubre el griego, el cirílico y el alfabeto fonético internacional. Los caracteres que una fuente no tiene (por ejemplo, el árabe o las escrituras asiáticas, o el griego y el cirílico en Lexend Deca y Atkinson Hyperlegible) se muestran con la fuente sin serifas del sistema.

---

## 11. Funciones para administradores

### Ajustes del tema

- Pestaña **Valores predeterminados**: la fuente, el tamaño del texto, el espaciado, el contraste, el movimiento y el foco predeterminados para todo el sitio, incluidos los visitantes y la página de inicio de sesión. La elección propia de un usuario siempre prevalece sobre el valor predeterminado. (La visión del color no tiene valor predeterminado del sitio, porque es personal.)
- Pestaña **Información** (la última pestaña):
  - la versión del tema, leída de la información de la extensión;
  - un botón **Documentación**, arriba, que abre esta guía en una pestaña nueva, en el idioma del usuario cuando la guía se ha traducido a él y en inglés en caso contrario. La página también ofrece la guía como archivo Markdown para descargar. Solo los administradores pueden abrirla;
  - un **resumen para soporte** con líneas de texto plano (versiones del tema, de Moodle, de PHP, de la base de datos y del servidor web, tema en uso, idioma y las propias opciones de accesibilidad del administrador). El navegador añade el tamaño de su ventana, la proporción de píxeles, el tamaño de fuente de la raíz y sus ajustes de movimiento reducido, contraste y colores forzados. Un botón **Copiar información** copia todo al portapapeles para un informe de error. El resumen nunca contiene la dirección del sitio, rutas de archivos ni datos personales;
  - enlaces a la página de opciones de accesibilidad y a la pestaña Valores predeterminados;
  - la **prueba de visión del color** (consulta la [sección 9](#9-filtros-de-visión-del-color));
  - una muestra de los cuatro tipos de **aviso** (éxito, información, advertencia y error), tal como los ven los usuarios con las opciones actuales (consulta la [sección 6](#6-diseño-visual-lo-que-ve-todo-el-mundo)). Los lectores de pantalla los leen como texto normal, no como avisos;
  - las **muestras de las fuentes** (consulta la [sección 10](#10-fuentes-por-qué-estas-tres));
  - las **licencias** del tema y de las fuentes, con un enlace al texto oficial y a la copia incluida en el tema.

### Favicon

El tema trae su propio favicon (el icono pequeño de la pestaña del navegador), `pix/favicon.ico`. Para usar el tuyo, súbelo en *Administración del sitio > Apariencia > Logotipos* (**Favicon**): Moodle muestra entonces el tuyo en lugar del del tema. También puedes sustituir el archivo `pix/favicon.ico`, pero la siguiente actualización del tema vuelve a poner el original.

### Tema del sitio o elección del usuario

- **Como tema del sitio:** todo el mundo recibe Accessible, con los valores predeterminados del sitio que hayas fijado.
- **Como una opción:** conserva tu tema habitual del sitio y activa **Permitir temas de usuario**. Cada usuario podrá entonces elegir Accessible (y volver atrás) desde su página de opciones de accesibilidad, y los demás conservarán el aspecto habitual.

### Un enlace de inicio de sesión que abre Accessible

Cuando Accessible es una opción del usuario y no el tema del sitio, la página de acceso a la que se llega desde la dirección del sitio usa el tema del sitio. Un usuario que depende de Accessible tiene que entrar por una página que puede resultarle difícil de usar.

Si **Permitir cambios de tema en la URL** está activado (`allowthemechangeonurl`), puedes dar a estos usuarios un enlace de inicio de sesión que abre Accessible directamente: `https://your.site/login/index.php?theme=accessible`. El tema se guarda en la sesión, así que se mantiene después de entrar y, hasta que el usuario cierra la sesión, tiene prioridad sobre el tema elegido en su perfil.

Contrapartida: el ajuste tiene que seguir activado para que el enlace funcione, y mientras lo está cualquiera puede cambiar el tema de su propia sesión con el parámetro. No puede cambiarlo para otras personas.

### Avisos cuando los usuarios no pueden usar sus opciones

Si **Permitir temas de usuario** está desactivado, los usuarios no pueden elegir el tema por sí mismos. El tema avisa de ello en dos lugares:

- una alerta en la página de notificaciones de administración, con un enlace al ajuste;
- una comprobación en **Informes > Estado del sistema** (la página de estado del sistema de Moodle).

---

## 12. Privacidad y datos

- **Usuarios con sesión iniciada:** cada opción se guarda como una preferencia de usuario de Moodle (`theme_accessible_font`, `theme_accessible_fontsize`, etc.). Se declaran en el proveedor de la **API de privacidad** del tema y se incluyen en la exportación de datos del usuario.
- **Visitantes e invitados:** las elecciones se guardan en una cookie llamada `MoodleAccessible` seguida del nombre de la cookie de sesión del sitio. Contiene solo las opciones de visualización (como JSON), es `HttpOnly` y `SameSite=Lax`, dura un año y se comprueba con la lista de valores válidos cada vez que se lee. Cuando un usuario con sesión iniciada guarda opciones, la cookie las refleja para que la página de inicio de sesión muestre la última elección. La cookie se borra cuando el usuario cierra la sesión, así que en un ordenador compartido la siguiente persona no ve ni hereda esas opciones. Un visitante que no inicia sesión conserva la cookie, así que en ordenadores públicos (bibliotecas, aulas) configura el navegador para que borre sus datos al salir o para que abra ventanas de invitado o privadas; si no, la siguiente persona verá la página con esas opciones hasta que las cambie. **Menciona esta cookie en la política de privacidad y de cookies de tu sitio.**
- **Página de opciones sin iniciar sesión:** la página de opciones de accesibilidad se abre sin sesión aunque **Forzar a los usuarios a iniciar sesión** esté activado, para que las personas puedan ajustar la página antes de entrar. Los visitantes solo ven el formulario de opciones, con el diseño de la página de inicio de sesión (sin bloques, menús ni navegación), y sus elecciones solo van a la cookie de su propio navegador.
- **Sin peticiones externas:** las fuentes, los iconos y los filtros los sirve tu propio sitio.
- **Sin seguimiento:** el tema no recoge datos de uso.

---

## 13. Idiomas

Los textos del tema están disponibles en **siete idiomas**: inglés, español, catalán, francés, italiano, alemán y portugués de Brasil. Las traducciones están disponibles en los paquetes de idioma de Moodle: cuando un sitio tiene instalado el paquete de un idioma, el tema se muestra en ese idioma. Los textos y las traducciones se escribieron con IA (Claude). Los textos en inglés, español y catalán han sido revisados por personas. Esta guía está disponible en los mismos idiomas.

---

## 14. Cómo se probó el tema

Las afirmaciones sobre accesibilidad valen solo lo que se comprobó. Esto es lo que se comprobó y cómo.

### Análisis automáticos

Se ejecutaron tres scripts con Playwright (una herramienta de automatización del navegador) en Moodle 5.2 y Moodle 5.3, en **Chromium** y **Firefox**:

- Un **análisis completo** de 27 páginas (panel, curso, actividades, foros, cuestionario e intento de cuestionario, participantes, libro de calificaciones, calendario, administración, formularios, inicio de sesión...) con tamaños de texto del **100 %, 125 % y 200 %**, en **contraste normal y alto**. Comprueba el contraste de cada trozo de texto visible con su fondo real (7:1, o 4,5:1 para texto grande), los nombres accesibles, los puntos de referencia, los identificadores duplicados, el orden de los encabezados y el tamaño de los objetivos.
- Un **análisis de teclado**: orden del tabulador, trampas de foco, indicador de foco visible y foco oculto tras elementos fijos.
- Un **análisis de contraste** de una lista más corta de páginas, usado tras cada cambio de estilo.

**Resultado:** ningún fallo de contraste en ninguna página, tamaño, modo ni navegador. Los análisis en Moodle 5.2 y Moodle 5.3 no encontraron ninguno con tamaños de texto del 100 %, 125 % y 200 %, en contraste normal o alto. Los demás hallazgos se enumeran en los [Límites conocidos](#15-límites-conocidos).

Los filtros de visión del color se comprobaron leyendo de vuelta los colores de los píxeles (véase la [sección 9](#9-filtros-de-visión-del-color)).

### Pruebas automáticas

El tema incluye pruebas PHPUnit (preferencias, valores predeterminados y validación de la cookie, hooks, comprobación de estado, proveedor de privacidad, el resumen para soporte, compilación de SCSS) y escenarios Behat (la página de opciones para usuarios y visitantes, el aviso de administración, la pestaña Información).

Se ejecutaron en ambas versiones:

| | Moodle 5.2 | Moodle 5.3 |
| --- | --- | --- |
| PHPUnit (61 pruebas, 332 aserciones) | todas superadas | todas superadas |
| Behat (17 escenarios, 124 pasos) | todos superados | **15 superados, 2 fallidos** |

Los dos escenarios Behat que fallan en Moodle 5.3 son los del aviso de administración. Fallan en el paso que abre *Informes > Estado del sistema* a través de la barra de navegación superior, no en lo que comprueban. Moodle 5.3 dibuja esa barra con un componente nuevo y el tema sigue usando el marcado clásico (véanse los [Límites conocidos](#15-límites-conocidos)). Las páginas y las opciones funcionan; solo el paso de la prueba no encuentra la barra.

### Comprobaciones de código

- **Las comprobaciones de extensiones de Moodle** (moodle-plugin-ci 4.5), ejecutadas en Moodle 5.2 y de nuevo en la 5.3: validación de la extensión, lint de PHP, PHPDoc, puntos de guardado de actualización, plantillas Mustache (renderizado y validación de HTML), todo sin errores ni advertencias.
- **Estilo de código:** `phpcs` con el estándar de Moodle no da avisos; ESLint no informa de errores ni advertencias en `javascript/accessible.js`; stylelint no informa de ninguno en el SCSS, con un puñado de excepciones documentadas (`!important` es deliberado, para imponerse a los estilos de Boost).
- **Las refactorizaciones de estilos** se prueban inocuas con una herramienta de comparación: compara los estilos calculados de bastante más de 100 000 elementos antes y después de un cambio, y comprueba que ningún par de reglas en competencia haya cambiado de orden.

### WAVE

Las páginas principales se comprobaron con la extensión [WAVE](https://wave.webaim.org/) de WebAIM, en Chrome. Todas obtienen 10 sobre 10 en la puntuación automática AIM de WAVE. La puntuación AIM compara una página con otras páginas web; como dice la propia WebAIM, una puntuación alta no demuestra que una página sea accesible o conforme, y por eso el tema también se probó a mano.

### Lo que no se ha hecho

- **Lectores de pantalla:** el tema se probó a mano con NVDA. Todavía no se ha probado con JAWS, VoiceOver ni TalkBack. La estructura de la página también se comprobó mediante el árbol de accesibilidad del navegador, que es lo que leen los lectores de pantalla.
- **Las pruebas en navegador no cubrieron Safari**, y en Moodle 5.3 fallan dos escenarios Behat (véase más arriba).
- **El reproductor de vídeo se ha comprobado en Chromium y Firefox sin ventana**, no a mano en una ventana normal de Chrome o Firefox, y no con todo tipo de contenido (archivos de vídeo locales, solo audio, subtítulos, retransmisiones en directo).
- **No se ha probado con usuarios** ciegos, con baja visión o con deficiencia de la visión del color.
- **Solo auditorías internas;** ninguna auditoría ni certificación externa.

Los comentarios de usuarios y de especialistas en accesibilidad son la contribución más valiosa que puede recibir el proyecto.

---

## 15. Límites conocidos

### Contenido que el tema no controla

- Las **actividades H5P** y otros **iframes incrustados** (vídeos, herramientas externas, LTI, documentos incrustados) tienen su propia página y sus propios estilos. El tema no puede cambiar sus colores, así que el alto contraste no llega a ellos. El filtro de visión del color sí los cubre, con las excepciones enumeradas en la [sección 9](#9-filtros-de-visión-del-color).
- El **texto coloreado a mano** en el contenido de los cursos (colores definidos en el editor, texto pegado desde Word o desde la web) conserva sus colores, porque los colores en línea se imponen al tema. Un docente que pone texto oscuro sobre un relleno pálido lo conserva, incluso en alto contraste. El profesorado debería dejar el color del texto al tema.
- Las **imágenes** conservan sus píxeles: el texto dentro de una imagen no se amplía, y el alto contraste no lo recolorea (solo el filtro de visión del color desplaza sus colores, como hace con toda la ventana). Las imágenes necesitan una alternativa de texto.
- **El área de edición del editor** (TinyMCE) es un documento aparte. En alto contraste se oscurece con un filtro, que mantiene los colores más o menos correctos pero cambia el aspecto de las imágenes durante la edición. El contenido guardado no cambia.

### Límites que vienen de Moodle

- Algunas páginas del núcleo se saltan niveles de encabezado (por ejemplo, de h1 a h3 o h4), y algunos iframes de H5P, TinyMCE y de las páginas de administración no tienen título. Esto procede del propio marcado de Moodle.
- Con un tamaño de texto del 200 %, el libro de calificaciones y la página del intento de cuestionario aún pueden desplazarse en horizontal, por diseño de Moodle.
- Con un tamaño de texto del 200 %, la página de gestión de cursos puede desplazarse en horizontal, más aún con los cajones abiertos.

### Moodle 5.3

Moodle 5.3 dibuja las barras de navegación primaria y secundaria con un componente nuevo (`core/nav`) y el interruptor del modo de edición con el Switch del sistema de diseño. El tema sigue usando para ellos el marcado clásico de Moodle 5.2. Funciona y es accesible, pero todavía no usa los componentes nuevos de Moodle, y las pruebas que navegan por la barra superior con el paso estándar de Behat («I select ... from primary navigation») fallan con este tema en la 5.3. Está previsto para una próxima versión del tema.

### Tamaño de los objetivos

Los enlaces de la ruta de navegación, las acciones de las publicaciones de los foros (Enlace permanente, Editar, Responder), los enlaces a la actividad anterior y siguiente y los enlaces del índice del curso miden entre 31 y 34 px de alto, por debajo de los 44 px de las WCAG AAA. Hacerlos más grandes alargaría mucho esas listas; todavía se está considerando.

### Navegadores

- Las barras de desplazamiento anchas funcionan en los navegadores basados en Chromium (Chrome, Edge, Opera, Brave). Firefox conserva su propio ancho.
- El tema se probó en Chromium y Firefox. No se probó Safari.

---

## 16. ¿Es Accessible adecuado para tu sitio?

### Elige Accessible cuando

- Tu sitio tiene, o puede tener, **estudiantes, docentes o personal ciegos, con baja visión o con deficiencia de la visión del color**, y quieres que trabajen de forma autónoma.
- Tienes **obligaciones de accesibilidad** y quieres una plataforma construida hacia las WCAG, el estándar en que se basan la mayoría de las leyes de accesibilidad.
- Quieres **ofrecer un aspecto alternativo** junto a tu tema principal, para que cualquiera que lo necesite pueda cambiar.
- Quieres un **Moodle tranquilo y legible** para todo el mundo: sin desorden, con un contraste fuerte y una maquetación predecible.

### Piénsalo dos veces cuando

- Necesites una **marca fuerte**, colores personalizados, imágenes de fondo o una identidad visual: el aspecto de Accessible es deliberadamente sobrio y sus colores están fijados por el contraste.
- Tus cursos dependan sobre todo de **H5P o de herramientas externas**: el tema no puede cambiar el estilo de lo que se ejecuta dentro de ellos, así que esas partes conservan sus propios colores y tamaños.

### Pruébalo sin riesgo

Instálalo y activa **Permitir cambios de tema en la URL** (*Administración del sitio > Apariencia > Ajustes avanzados de tema*, ajuste `allowthemechangeonurl`). Después abre tu sitio añadiendo `?theme=accessible` a la dirección (por ejemplo, `https://your.site/my/?theme=accessible`): el tema se aplica solo a tu sesión. Prueba las opciones, abre tus cursos al 200 % y en alto contraste, y luego **vuelve a desactivar el ajuste**, porque mientras está activado cualquiera que conozca el parámetro puede cambiar el tema. Si quieres mantener un enlace de inicio de sesión que abra Accessible, consulta [Un enlace de inicio de sesión que abre Accessible](#un-enlace-de-inicio-de-sesión-que-abre-accessible): en ese caso el ajuste se queda activado.

---

## 17. Instalación y configuración

### Requisitos

- **Moodle 5.2 y posteriores.**
- El tema **Boost**, que viene con Moodle.
- Ninguna otra extensión. Ninguna herramienta de compilación.

### Instalación

1. Copia la carpeta del tema en `public/theme/accessible` del código de tu Moodle (la carpeta debe llamarse `accessible`; si descargas el ZIP de GitHub, cambia primero el nombre de la carpeta), o sube el archivo ZIP desde *Administración del sitio > Extensiones > Instalar complementos*.
2. Ve a *Administración del sitio > Notificaciones* para terminar la instalación.
3. Purga las cachés si actualizas el tema a mano.

### Configuración

- **Como tema del sitio:** *Administración del sitio > Apariencia > Temas* y elige Accessible.
- **Como elección del usuario:** activa **Permitir temas de usuario** en *Administración del sitio > Apariencia > Ajustes avanzados de tema*.
- **Valores predeterminados:** en los ajustes del tema, pestaña **Valores predeterminados**, elige la fuente, el tamaño del texto, el espaciado, el contraste, el movimiento y el foco del sitio.
- **Privacidad:** añade la cookie de visitante a tu política de privacidad o de cookies (consulta la [sección 12](#12-privacidad-y-datos)).

### Actualización

Instala la nueva versión sobre la antigua y visita *Administración del sitio > Notificaciones*. Los usuarios conservan sus opciones.

---

## 18. Créditos, licencias y fuentes de información

### Créditos

De **Fernando Acedo** y el antiguo **equipo de desarrollo de Koditik**. Claude Code ayudó a escribir partes del tema, lo revisó y ayudó a probarlo. Claude es una marca registrada de Anthropic, PBC.

[Código fuente y versiones](https://github.com/f-acedo/moodle-theme_accessible). Informes de errores y sugerencias: [gestor de incidencias](https://github.com/f-acedo/moodle-theme_accessible/issues).

### Licencias

- Tema Accessible: **Licencia Pública General de GNU, versión 3 o posterior** ([texto oficial](https://www.gnu.org/licenses/gpl-3.0.html); copia en `LICENSE.txt`).
- Fuentes de Accessible: **SIL Open Font License 1.1** ([texto oficial](https://openfontlicense.org/open-font-license-official-text/); copias en `fonts/LICENSE-*.txt`).
  - Lexend Deca: Copyright 2019 The Lexend Project Authors.
  - Atkinson Hyperlegible: Copyright 2020 Braille Institute of America, Inc.
  - OpenDyslexic: Copyright 2019 Abbie Gonzalez, Reserved Font Name OpenDyslexic.

### Fuentes de información

Estándares y legislación:

- [Pautas de accesibilidad para el contenido web (WCAG) 2.1](https://www.w3.org/TR/WCAG21/), W3C.
- [Understanding WCAG 2.1: niveles de conformidad](https://www.w3.org/WAI/WCAG21/Understanding/conformance), W3C.
- [Directiva de accesibilidad web (UE) 2016/2102](https://eur-lex.europa.eu/eli/dir/2016/2102/oj).
- [Acta Europea de Accesibilidad, Directiva (UE) 2019/882](https://eur-lex.europa.eu/eli/dir/2019/882/oj).
- [EN 301 549, ETSI](https://www.etsi.org/human-factors-accessibility/en-301-549-v3-the-harmonized-european-standard-for-ict-accessibility).
- [Estándares de la Sección 508](https://www.access-board.gov/ict/), Junta de Acceso de EE. UU.
- [Norma web del Título II de la ADA (2024)](https://www.ada.gov/resources/2024-03-08-web-rule/), Departamento de Justicia de EE. UU.

Usuarios:

- [Informe mundial sobre la visión](https://www.who.int/publications/i/item/9789241516570), Organización Mundial de la Salud, 2019.
- [Colour Blind Awareness](https://www.colourblindawareness.org/colour-blindness/).

Fuentes tipográficas:

- [Lexend](https://www.lexend.com/) y [Lexend en GitHub](https://github.com/googlefonts/lexend).
- [Atkinson Hyperlegible, Braille Institute](https://www.brailleinstitute.org/freefont/).
- [OpenDyslexic](https://opendyslexic.org/about) y
  [OpenDyslexic en Wikipedia](https://en.wikipedia.org/wiki/OpenDyslexic).

Visión del color:

- Machado, G. M., Oliveira, M. M. y Fernandes, L. A. F. (2009), [*A physiologically-based model for simulation of
  color vision deficiency*](https://doi.org/10.1109/TVCG.2009.113), IEEE Transactions on Visualization and Computer Graphics.

---

## Apéndice A. Referencia técnica

Para especialistas que quieran conocer los detalles antes de instalar el tema: cómo se construyen los filtros de visión del color y qué mostraron las comprobaciones, hasta dónde llegaron las comprobaciones de alto contraste, y de dónde proceden las fuentes incluidas y qué dice la investigación sobre ellas. Las secciones 8, 9, 10 y 15 dan la misma información en términos sencillos.

### A.1 Filtros de visión del color: implementación y comprobaciones

Opción de usuario en `/theme/accessible/preferences.php`: **Visión del color** (tipo) e **Intensidad**.

#### Cómo funciona

- Tipos: none (ninguno), protan (débil o ciego al rojo), deutan (débil o ciego al verde), tritan (débil o ciego al azul) y mono (sin color, solo grises).
- Intensidad: mild (los tipos «-anomalía»), medium, strong (los tipos «-anopía»). Mono la ignora.
- La elección se guarda como las preferencias de usuario `theme_accessible_colortype` y `theme_accessible_colorstrength`
  (`classes/preferences.php`) y llega a la página como clases del body: `accessible-colortype-X` y
  `accessible-colorstrength-Y`.
- `templates/colorfilters.mustache` contiene nueve filtros SVG (3 tipos x 3 intensidades) y el mono. Se incluye en
  `templates/drawers.mustache`. El CSS (al final de `scss/styles.scss`) aplica el filtro correspondiente mediante una capa.
- La capa es `body::after`: una caja fija que cubre la ventana, con `pointer-events: none` y
  `backdrop-filter: url(#accessible-colortype-X-Y)`. Recolorea todo lo que se dibuja por debajo: la página, las imágenes, los elementos de vídeo, H5P y los **contenidos incrustados de terceros** (YouTube, Vimeo, LTI). No añade marcado, los clics la atraviesan, no tiene contenido para las tecnologías de apoyo y se oculta al imprimir.
- Por qué no un filtro sobre la propia página: un filtro sobre `<html>` no llega a los iframes de otro origen en Chromium (un fotograma de YouTube en pausa salió idéntico con y sin él), y un filtro sobre `<body>` lo convertiría en el bloque contenedor de la barra de navegación y de los cajones fijos y rompería su posición.
- Donde el navegador no puede usar `url()` en `backdrop-filter`, se aplica la regla antigua (`filter` sobre `<html>`). En ese caso los contenidos incrustados de terceros conservan sus propios colores.
- Lo que la capa no recolorea, porque el navegador lo dibuja por encima de todo: el **vídeo a pantalla completa** y los modales `<dialog>` nativos abiertos con `showModal()`. Los modales propios de Moodle son elementos normales y quedan cubiertos. Las capturas de pantalla hechas con herramientas del navegador (no con el sistema operativo) también pueden omitir el efecto.

#### Las matrices

Cada filtro es una `feColorMatrix` de 3x3 (aplicada en RGB lineal, el valor predeterminado de SVG):

1. Simulación del cono ausente: la matriz de Machado et al. (2009) para la dicromacia completa, escalada según la intensidad
   `S = (1 - s) * I + s * M`, con s = 0,4 (suave), 0,7 (media), 1,0 (fuerte).
2. Corrección (el paso habitual de «daltonizar»): la parte del color que el usuario no puede ver, `I - S`, se traslada a los
   canales que sí puede ver: el error del rojo al verde y al azul en protán y deután, el error del azul al rojo y al verde en
   tritán. Resultado: `C = I + shift * (I - S)`.

Cada fila de `C` suma 1, así que el blanco, el gris y el negro no cambian. Las matrices se calcularon a mano (no hay paso de compilación); vuelve a calcularlas si cambian las matemáticas.

Las matrices proceden de valores publicados, no de una validación clínica. Trata el filtro como una ayuda, no como una herramienta médica.

#### Prueba

Se dibujaron ocho muestras (blanco, negro, gris, rojo, verde, azul, amarillo, rojo anaranjado) sobre el panel para cada combinación y se leyeron sus píxeles en una captura de pantalla. Los valores son RGB.

| Tipo | Resultado |
|---|---|
| None | Sin cambios: rojo (255,0,0), verde (0,255,0), azul (0,0,255) |
| Protan | El rojo se vuelve rosa: suave (255,121,134), media (255,157,173), fuerte (255,184,203). El verde se oscurece. |
| Deutan | El rojo se vuelve rosa magenta: suave (255,72,118), media (255,95,153), fuerte (255,112,180). |
| Tritan | El azul se vuelve morado claro: suave (141,103,255), media (182,134,255), fuerte (213,158,255). El amarillo se desplaza hacia el verde. |
| Mono | Todas las muestras en gris (R = G = B), por ejemplo rojo (127,127,127), verde (220,220,220), azul (76,76,76). |

- El blanco (255,255,255), el negro (0,0,0) y el gris (128,128,128) no cambiaron en ninguna combinación.
- Cada nivel de intensidad desplaza los colores más que el anterior.
- Los desplazamientos hacen que los colores que se parecen para el usuario difieran en luminosidad o en tono.

#### Lo que no se ha hecho

- Sin validación clínica de las matrices.
- Sin excepciones por color: las imágenes y los vídeos también se filtran.
- El vídeo a pantalla completa y los cuadros de diálogo modales nativos no se filtran (véase más arriba). Los filtros de color del propio sistema operativo (Windows, macOS, iOS, Android) los cubren.
- No se midió el rendimiento en máquinas poco potentes (una capa sobre toda la ventana). En una prueba de escritorio la tasa de desplazamiento fue de unos 54 fotogramas por segundo con la capa, 59 con el filtro antiguo y 61 sin opción de color.

### A.2 Alto contraste: alcance de las comprobaciones

Lo que el alto contraste no puede cambiar se enumera en la [sección 15](#15-límites-conocidos).

El contraste se comprobó con un análisis automático (texto a 7:1, texto grande a 4,5:1) con tamaños de texto del 100 %, 125 % y 200 %, con el filtro de visión del color activado, en modales, y en las páginas del panel, del curso, del calendario, de participantes, del cuestionario y del intento de cuestionario.

### A.3 Fuentes: historia e investigación

El tema Accessible incluye tres fuentes y deja que cada usuario elija una: **Lexend Deca** (la predeterminada), **Atkinson
Hyperlegible** y **OpenDyslexic**. Esta parte cuenta de dónde procede cada una, qué querían conseguir sus diseñadores, qué dice la investigación y por qué se ofrecen fuentes como estas en sitios para personas con baja visión o dislexia. Las tres se incluyen en el tema (sin peticiones a un servicio externo de fuentes) y tienen la licencia SIL Open Font License 1.1.

#### Qué hace que una fuente sea más fácil de leer

Ninguna fuente hace la lectura fácil para todo el mundo, y la investigación sobre las «fuentes accesibles» es más reducida y más contradictoria que el marketing que la rodea. Estas son las ideas de diseño que aparecen una y otra vez, con lo que se sabe de cada una:

- **Letras que no puedan confundirse.** Muchas tipografías dibujan casi igual la **I** mayúscula, la **l** minúscula y el número **1**, y lo mismo ocurre con la **O** y el **0**, la **B** y el **8**, o **rn** y **m**. Un lector con baja visión, que ve las formas borrosas o ampliadas, no puede usar el contexto para adivinar. Dibujar estos caracteres de forma distinta es la idea principal de Atkinson Hyperlegible.
- **Formas abiertas.** Las aberturas amplias en letras como la **a**, la **c**, la **e** y la **s** siguen siendo legibles cuando la imagen está borrosa o ampliada.
- **Espaciado generoso.** Las letras demasiado juntas interfieren entre sí, un efecto llamado *apiñamiento* (*crowding*). En un estudio de 2012 con 74 niños disléxicos de 8 a 14 años (Zorzi y colegas, publicado en PNAS), un espaciado entre letras extragrande hizo la lectura un 20 % más rápida y redujo los errores a la mitad, mientras que un mayor interlineado por sí solo no tuvo efecto. El espaciado amplio es también el punto de partida de Lexend, y el tema lo ofrece como opción aparte, separada de la fuente.
- **Letras sin serifas y rectas.** Las guías para la dislexia, como la guía de estilo de la British Dyslexia Association, suelen recomendar fuentes sin serifas sencillas, y un estudio con seguimiento ocular de 48 lectores disléxicos (Rello y Baeza-Yates, 2013) encontró que las fuentes sin serifas, monoespaciadas y redondas (no cursivas) rendían mejor que las serifas, proporcionales y cursivas. Las revisiones posteriores son más prudentes: Dyslexia Scotland no registra una ventaja constante de las fuentes sin serifas sobre las serifas, y dice que el espaciado es un factor más fuerte que la forma de las letras.
- **La preferencia cuenta.** Los lectores suelen leer mejor en la fuente a la que están acostumbrados y que les gusta. Por eso el tema ofrece a elegir en lugar de una fuente prescrita.

La fuente es solo una parte de la legibilidad. El tamaño, el espaciado, el contraste y la libertad de cambiarlos importan al menos tanto, y el tema tiene una opción para cada uno (consulta la página de opciones y las secciones 5 y 8 de la guía).

#### Lexend Deca (la predeterminada)

**Historia.** Lexend es obra de la Dra. Bonnie Shaver-Troup, terapeuta educativa, y del diseñador tipográfico Thomas
Jockin. La desarrollaron hacia 2018 a partir de su trabajo con lectores con dificultades, y se publicó en
[Google Fonts](https://fonts.google.com/specimen/Lexend+Deca) en 2019. Se basa en
[Quicksand](https://fonts.google.com/specimen/Quicksand), una tipografía iniciada por Andrew Paglinawan en 2008. La familia tiene
siete anchuras, desde **Deca** (la más estrecha) hasta Zetta (la más ancha), para poder cambiar el espaciado entre letras sin
cambiar de fuente. Desde junio de 2021 todas las fuentes son fuentes variables con un eje de grosor.

**La idea.** Un espaciado entre letras amplio y uniforme y formas sencillas y abiertas, para que la lectura sea más fluida. Moodle es una interfaz densa, así que el tema usa **Deca**, que conserva el espaciado generoso pero sigue siendo lo bastante compacta para menús y formularios.

**Qué dice la evidencia.** Los diseñadores informan de una mejor velocidad de lectura en sus propias pruebas. El estudio más conocido es pequeño (20 alumnos de tercer curso leyendo durante un minuto en cinco fuentes) y procede del lado de los diseñadores. No hemos encontrado ninguna réplica independiente. Por eso el tema ofrece Lexend Deca como una opción predeterminada legible, no como una ayuda demostrada.

#### Atkinson Hyperlegible

**Historia.** El Braille Institute of America la creó para personas con baja visión y la publicó en 2019, el año del centenario del instituto. La diseñó la agencia Applied Design Works como parte de la nueva marca del instituto, y lleva el nombre del fundador del instituto, J. Robert Atkinson. Ganó el premio Innovation by Design 2019 de Fast Company y entró en la colección permanente del Cooper Hewitt, Smithsonian Design Museum. Más tarde estuvo disponible en Google Fonts, y en 2025 el instituto publicó **Atkinson Hyperlegible Next**, con más grosores y una mayor cobertura de idiomas, y una versión monoespaciada. El tema incluye la versión original en normal y en negrita.

**La idea.** La mayoría de las tipografías buscan letras uniformes. Atkinson Hyperlegible hace lo contrario: mantiene una base convencional sin serifas y añade diferencias solo donde dos caracteres se confunden con facilidad:

- la **l** minúscula lleva una cola y el número **1** un gancho, para que se diferencien entre sí y de la **I** mayúscula, que lleva serifas;
- la **B** y el **8**, la **O** y el **0** y otros pares reciben formas distintas, aberturas más amplias y terminaciones en ángulo;
- las letras se espacian para que sus bordes no se toquen.

El precio es un aspecto irregular: aparecen serifas en unas letras y en otras no, y algunos ángulos están exagerados. Para leer la interfaz del tema eso es precisamente lo que se busca, porque las letras están pensadas para distinguirse, no para ser elegantes.

**Qué dice la evidencia.** Es la fuente diseñada de forma más directa para los usuarios con baja visión a quienes sirve este tema, y su lógica de diseño es fácil de entender. No hemos encontrado ningún estudio publicado que mida su efecto en la lectura con un grupo de lectores, así que la afirmación se apoya en el diseño y en el propio trabajo del instituto.

#### OpenDyslexic

**Historia.** Abbie Gonzalez, que tiene dislexia, creó OpenDyslexic y la publicó en 2011 como fuente de código abierto, derivada de Bitstream Vera Sans.

**La idea.** Las letras tienen la **base más pesada**. La autora dice que el peso da a cada letra un «abajo» claro, lo que ayuda a los lectores a reconocerla y evita que volteen o giren mentalmente letras como la b, la d, la p y la q. Las formas de las letras también son más distintas y el espaciado es mayor.

**Qué dice la evidencia.** Los estudios que hemos encontrado no respaldan la afirmación de que mejora la lectura: un estudio sobre la velocidad y la precisión lectoras (Wery y Diliberto, 2017) no halló mejora respecto a otras fuentes, y un estudio posterior con seguimiento ocular de Rello y Baeza-Yates (2016) encontró que no rendía mejor que fuentes sin serifas comunes como Arial o Verdana. Aun así, muchas personas con dislexia la prefieren, y la preferencia importa, por lo que el tema la ofrece como una opción y no como una recomendación.

#### Por qué se ofrecen fuentes como estas en sitios para baja visión y dislexia

1. **El coste es pequeño y el beneficio puede ser grande para algunas personas.** Cambiar la fuente no cuesta nada en un tema. Para una persona que encuentra una fuente claramente más fácil, puede ser la diferencia entre leer y rendirse.
2. **Las personas somos distintas.** La baja visión tiene muchas causas (pérdida del centro o del borde del campo, visión borrosa, sensibilidad al deslumbramiento), y la dislexia no es igual en todos los lectores. No existe una única «mejor» fuente, así que la respuesta sensata es una lista corta de fuentes bien diseñadas que cada persona pueda probar.
3. **Las tres fuentes cubren tres enfoques:** letras abiertas y espaciadas de forma uniforme (Lexend Deca), letras que se distinguen por diseño (Atkinson Hyperlegible) y letras con un «peso» distintivo (OpenDyslexic). Un usuario puede compararlas en la misma página.
4. **Honestidad sobre la evidencia.** Solo el efecto del espaciado está bien respaldado. Para cada fuente el tema dice lo que pretendían sus diseñadores y lo que se sabe, y no promete ningún resultado.

El usuario decide, y la persona administradora puede fijar la fuente predeterminada de todo el sitio (pestaña **Valores predeterminados** de los ajustes del tema). La pestaña Información muestra una muestra de cada fuente, incluidos los caracteres fáciles de confundir.

#### Fuentes de información

- Braille Institute: [nota de prensa sobre Atkinson Hyperlegible](https://prnewswire.com/news-releases/braille-institute-launches-new-award-winning-typeface-designed-to-improve-legibility-for-readers-with-low-vision-301012698.html)
  y [su disponibilidad en Google Fonts](https://prnewswire.com/news-releases/braille-institutes-atkinson-hyperlegible-typeface-now-available-on-google-fonts-301349120.html);
  [Atkinson Hyperlegible en GitHub](https://github.com/googlefonts/atkinson-hyperlegible).
- Cooper Hewitt, Smithsonian Design Museum: [Atkinson Hyperlegible en la colección](https://collection.cooperhewitt.org/objects/2318809952).
- [Lexend en GitHub](https://github.com/googlefonts/lexend/) y [lexend.com](https://www.lexend.com/).
- Gonzalez, A.: [OpenDyslexic](https://opendyslexic.org/about).
- Wery, J. J. y Diliberto, J. A. (2017), [The effect of a specialized dyslexia font, OpenDyslexic, on reading rate and accuracy](https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5629233/), Annals of Dyslexia.
- Rello, L. y Baeza-Yates, R. (2013), [Good fonts for dyslexia](https://doi.org/10.1145/2513383.2513447), ACM ASSETS.
- Rello, L. y Baeza-Yates, R. (2016), [The effect of font type on screen readability by people with dyslexia](https://doi.org/10.1145/2897736), ACM Transactions on Accessible Computing.
- Zorzi, M. y otros (2012), [Extra-large letter spacing improves reading in dyslexia](https://pubmed.ncbi.nlm.nih.gov/22665803/), PNAS.
- Dyslexia Scotland: [Dyslexia-friendly typed formats](https://dyslexiascotland.org.uk/dyslexia-friendly-typed-formats).
- Dezeen: [Atkinson Hyperlegible](https://www.dezeen.com/awards/2020/longlists/atkinson-hyperlegible-typeface-for-people-with-low-vision/).
