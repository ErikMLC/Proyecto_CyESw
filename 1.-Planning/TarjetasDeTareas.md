<h1 align="center">
    Escuela Politécnica Nacional<br>
    Facultad de Ingeniería en Sistemas<br>
    CONSTRUCCIÓN Y EVOLUCIÓN DE SOFTWARE<br>
</h1>

---

## Grupo: 9

---

**Integrantes:**

- Chalacama Erik
- Delgado Joel
- Suntasig Ariel

---

## Tarjetas de Tareas de Mis Acciones

---

| **Tarjeta de Tarea 1** | **Título:**  Implementación de Ingreso de Acciones                                                                                                                                                                                                             |
| ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Descripción:**         | Como desarrollador, debo implementar la funcionalidad que permita al usuario ingresar el NOMBRE DE LA ACCIÓN, FECHA DE COMPRA, PRECIO DE COMPRA POR ACCIÓN y CANTIDAD DE ACCIONES en la aplicación web.                          |
| **Criterio de aceptación:** | - El sistema debe tener un formulario para ingresar los detalles de la acción. <br> - Al presionar 'Guardar', se debe agregar una nueva fila en la tabla de 'Mis Acciones' con los detalles ingresados.  |
| **Valor de negocio:**    | Esta tarea tiene un valor de negocio alto, ya que es esencial para que los usuarios registren sus acciones. |

| **Tarjeta de Tarea 2** | **Título:** Implementación de Visualización de Acciones                                                                                                                                                                                                                      |
| ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Descripción:**         | Como desarrollador, debo implementar la funcionalidad que permita al usuario visualizar una tabla con el NOMBRE DE LA ACCIÓN, FECHA DE COMPRA, PRECIO DE COMPRA POR ACCIÓN, CANTIDAD DE ACCIONES y COSTO TOTAL DE COMPRA de todas sus acciones.                                                                |
| **Criterio de aceptación:** | - La tabla de 'Mis Acciones' debe mostrar clara y concisamente los detalles de todas las acciones ingresadas.     |
| **Valor de negocio:**    | Esta tarea tiene un valor de negocio alto, ya que permite a los usuarios realizar un seguimiento detallado de sus acciones. |

| **Tarjeta de Tarea 3** | **Título:** Implementación de Visualización del Costo Total                                                                                                                                                                                                                       |
| ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Descripción:**         | Como desarrollador, debo implementar la funcionalidad que automáticamente calcule el COSTO TOTAL DE COMPRA y lo muestre en la columna correspondiente de la tabla de 'Mis Acciones'.                                                                                                        |
| **Criterio de aceptación:** | - El sistema debe calcular el costo total basándose en el PRECIO DE COMPRA POR ACCIÓN y la CANTIDAD DE ACCIONES. <br> - El costo total calculado debe mostrarse claramente en la tabla.  |
| **Valor de negocio:**    | Esta tarea tiene un valor de negocio medio, ya que proporciona información útil para que los usuarios comprendan su inversión total en cada acción.
 |

| **Tarjeta de Tarea 4** | **Título:**  Implementación de Eliminación de Acciones                                                                                                                                                                                                                       |
| ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Descripción:**         | Como desarrollador, debo implementar la funcionalidad que permita al usuario eliminar una acción de su tabla de ‘Mis Acciones’, para quitarla de su registro y liberar espacio.                                                                                                        |
| **Criterio de aceptación:** | - El sistema debe tener un botón de ‘Eliminar’ en cada fila de la tabla de ‘Mis Acciones’. <br>  |
| **Valor de negocio:**    | Esta tarea tiene un valor de negocio bajo, ya que es una función opcional que no afecta directamente al rendimiento de las acciones.
|


| **Tarjeta de Tarea 5** | **Título:** Implementación de Visualización del Porcentaje de Cambio                                                                                                                                                                                                                 |
| ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Descripción:**         | Como desarrollador, debo implementar la funcionalidad que muestre el porcentaje de cambio de valor desde la compra para cada acción en la tabla de 'Mis Acciones' en la aplicación web.                                                                                                        |
| **Criterio de aceptación:** | - El porcentaje de cambio debe calcularse comparando el precio actual de mercado con el precio de compra. <br> - El porcentaje de cambio debe mostrarse en la tabla de 'Mis Acciones' junto a cada acción. <br> - Los valores positivos deben indicar un aumento y los negativos una disminución en el valor. |
| **Valor de negocio:**    | Esta tarea tiene un valor de negocio alto, ya que proporciona información crítica para que los usuarios evalúen el rendimiento actual de sus inversiones. |


| **Tarjeta de Tarea 6** | **Título:** Implementación de Cálculo y Visualización de Ganancias/Pérdidas                                                                                                                                                                                                                     |
| ------------------------ | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Descripción:**         | Como desarrollador, debo implementar la funcionalidad que calcule y muestre la ganancia o pérdida monetaria para cada acción en la tabla de 'Mis Acciones', basándose en el porcentaje de cambio.                                                                                                 |
| **Criterio de aceptación:** | - El sistema debe calcular la ganancia o pérdida multiplicando el porcentaje de cambio por el costo total de la compra. <br> - La ganancia o pérdida calculada debe mostrarse claramente junto a cada acción en la tabla. <br> - Se debe considerar un cambio en tiempo real del precio de las acciones para este cálculo. |
| **Valor de negocio:**    | Esta tarea tiene un valor de negocio medio-alto, ya que ofrece a los usuarios una comprensión inmediata de las implicaciones financieras de los cambios en el mercado de sus inversiones. |