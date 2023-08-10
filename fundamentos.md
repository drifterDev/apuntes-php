# Conceptos básicos del backend

## Escalabilidad:

Escalabilidad en el mundo del backend se refiere a la capacidad de un sistema para crecer y adaptarse a medida que aumenta la demanda de usuarios o carga de trabajo.

- Escalabilidad vertical: Se refiere a aumentar la capacidad de un sistema mediante la mejora de los recursos existentes en un solo servidor. Por ejemplo, agregar más RAM o CPU a un servidor para que pueda manejar más solicitudes.

- Escalabilidad horizontal: Se refiere a aumentar la capacidad de un sistema mediante la adición de más servidores al sistema. Por ejemplo, si tienes una aplicación web, puedes agregar más servidores para distribuir la carga de trabajo y atender a más usuarios simultáneamente.

## Replicación

Replicación en el mundo del backend implica crear copias idénticas de un sistema o componente para distribuir la carga de trabajo y mejorar la disponibilidad.

Estos conceptos son importantes para garantizar que los sistemas backend puedan crecer eficientemente a medida que aumenta la demanda, ya sea mediante la mejora de los recursos de un servidor existente (escalabilidad vertical) o mediante la adición de más servidores al sistema (escalabilidad horizontal). La replicación ayuda a distribuir la carga y garantizar la disponibilidad del sistema.

## Caché

La caché es un concepto que se refiere al almacenamiento temporal de datos o resultados para mejorar el rendimiento y la velocidad de acceso.

En términos simples, la caché es como una memoria rápida y cercana que guarda información para que pueda ser accedida más rápidamente en futuras solicitudes.

## Colas de tareas

Las colas de tareas son un concepto que se refiere a la organización y gestión de las tareas o trabajos a realizar en un sistema.

En términos simples, una cola de tareas es como una lista de trabajos pendientes que deben ser procesados en un orden determinado.

## Server Side Rendering

Server-side rendering (SSR) es un concepto importante en el desarrollo web que se refiere a la técnica de generar y enviar contenido HTML completo desde el servidor al cliente en respuesta a una solicitud.

En términos simples, cuando un navegador solicita una página a un servidor que utiliza SSR, el servidor procesa la solicitud y genera el contenido HTML completo para esa página, incluyendo todos los datos y elementos necesarios. Luego, el servidor envía este contenido HTML listo para ser renderizado directamente al navegador.

## Client side rendering

El client-side rendering (renderizado en el lado del cliente) es una técnica en el desarrollo web en la que el procesamiento y la generación del contenido de una página ocurre en el navegador del cliente.

En términos simples, cuando visitas una página web que utiliza client-side rendering, el servidor envía al navegador un archivo HTML básico junto con los archivos de código JavaScript y CSS necesarios. Luego, el navegador descarga y ejecuta esos archivos para procesar y renderizar la página final en el dispositivo del usuario.

## Static Site Generation

La generación estática de páginas es una técnica web que crea páginas HTML completas de antemano, en lugar de generarlas en tiempo real. Esto mejora la velocidad de carga, ya que las páginas están listas para mostrarse sin demora. A diferencia de la generación en el servidor (SSR), donde se crea el contenido al recibir una solicitud, con la generación estática, el contenido se pre-renderiza y se almacena como archivos HTML.

| Aspecto           | CSR                                 | SSR                               |
| ----------------- | ----------------------------------- | --------------------------------- |
| Procesamiento     | En el navegador del cliente         | En el servidor                    |
| Carga inicial     | Rápida                              | Más lenta                         |
| SEO               | Requiere técnicas adicionales       | Mejor para el SEO                 |
| Interactividad    | Mayor                               | Menor                             |
| Mantenimiento     | Mayor carga del lado del cliente    | Mayor carga del lado del servidor |
| Tamaño archivo    | Más pequeño                         | Más grande                        |
| Caché contenido   | En el cliente                       | En el servidor                    |
| Recursos servidor | Menos recursos requeridos           | Más recursos requeridos           |
| Infraestructura   | No requiere renderizado en servidor | Requiere renderizado en servidor  |
