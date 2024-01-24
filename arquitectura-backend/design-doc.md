# Arquitectura backend
---
## Overview: Problema a resolver
La empresa "RandomCameraReviews" necesita un sistema que permita que fotografos profesionales suban "reviews" de Camaras fotograficas, para que cualquier persona desde cualquier parte del mundo pueda buscar los reviews y comprarlas a travez de su portal. La empresa cuenta con un equipo de developers especializado en frontEnd que realizara un portal para que los editores suban los "reviews" y los usuarios puedan verlos, y han solicitado que tu como especista en Backend, les proporciones un sistema, incluyendo API.

### Alcance(Scope)
Desarrollo de un portal web de visualización libre de publicidad acorde a los eventos de agrupaciones musicales, la cual puede ser cargada, modificada y eliminada unicamente por los gestores del evento.

#### Casos de uso
Descripción...
* Como editor me gustaria poder subir una review de una camara
* Como editor me gustaria poder subir una review de un lente para las camaras
* Como editor me gustaria poder subir review de accesorios para las camaras
* Como usuario no registrado me gustaria poder leer una review

#### Out of Scope (casos de uso No Soportados)
Descripción...
* Como usuario no registrado me gustaria poder subir una review de una camara
* Como editor me gustaria dar feedback a otras review
* Como editor me gustaria aprobar comentarios en reviews de usuario registrados
* Como usuario no registrado me gustaria registrarme
* Como usuario no registrado me gustaria poder compartir una review en mis redes sociales
* Como usuario registrado me gustaria comentar en las reviews
* Como usuario registrado me gustaria dar seguimiento de los comentarios en la reviews que me interesan
---
## Arquitectura

### Diagramas
poner diagramas de secuencia, uml, etc

### Modelo de datos
Poner diseño de entidades, Jsons, tablas, diagramas entidad relación, etc..

---
## Limitaciones
Lista de limitaciones conocidas. Puede ser en formato de lista.
Ej.
* Llamadas del API tienen latencia X
* No se soporta mas de X llamadas por segundo
---
## Costo
Descripción/Análisis de costos
Ejemplo:
"Considerando N usuarios diarios, M llamadas a X servicio/baseDatos/etc"
* 1000 llamadas diarias a serverless functions. $XX.XX
* 1000 read/write units diarias a X Database on-demand. $XX.XX
Total: $xx.xx (al mes/dia/año)