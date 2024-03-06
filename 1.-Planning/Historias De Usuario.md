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

## Historias De Usuario de Mis Acciones

| **HU-01**                   | **Título:**  Ingreso de Acciones                                                                                                                                                                     |
| --------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Historia de usuario:**    | **Como** usuario de la aplicación web, **quiero** ingresar el NOMBRE DE LA ACCIÓN, FECHA DE COMPRA, PRECIO DE COMPRA POR ACCIÓN y CANTIDAD DE ACCIONES, **para** tener un registro detallado de mis acciones.             |
| **Criterio de aceptación:** | **Dado** que el usuario ingresa los datos de las acciones, **cuando** se ingresan todos los detalles requeridos y presiono ‘Guardar’, **entonces** se debe mostrar una nueva fila con los detalles ingresados en la tabla de ‘Mis Acciones’.|
|                             |

| **HU-02**                   | **Título:** Visualización de Acciones                                                                                                                                                                     |
| --------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Historia de usuario:**    | **Como** usuario de la aplicación web, **quiero** ver una tabla con el NOMBRE DE LA ACCIÓN, FECHA DE COMPRA, PRECIO DE COMPRA POR ACCIÓN, CANTIDAD DE ACCIONES y COSTO TOTAL DE COMPRA de todas mis acciones, **para** realizar seguimiento de mis acciones.             |
| **Criterio de aceptación:** | **Dado** que el usuario ha ingresado los datos de las acciones, **cuando** el sistema muestra los datos, **entonces** los datos se muestran de forma clara y concisa. |
|                             |

| **HU-03**                   | **Título:** Visualización del Costo Total                                                                                                                                                                     |
| --------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Historia de usuario:**    | **Como** usuario de la aplicación web, **quiero** ver automáticamente el COSTO TOTAL DE COMPRA calculado, **para** entender rápidamente mi inversión total en cada acción.             |
| **Criterio de aceptación:** | **Dado** que he ingresado el PRECIO DE COMPRA POR ACCIÓN y la CANTIDAD DE ACCIONES, **cuando** miro la tabla de ‘Mis Acciones’, **entonces** puedo ver el COSTO TOTAL DE COMPRA calculado y mostrado en la columna correspondiente. |
|                             |

| **HU-04**                   | **Título:** Eliminación de acciones                                                                                                                                                                     |
| --------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Historia de usuario:**    | **Como** usuario de la aplicación web, **quiero**  eliminar una acción de mi tabla de ‘Mis Acciones’, **para** quitarla de mi registro y liberar espacio.             |
| **Criterio de aceptación:** | **Dado**  que he ingresado los datos de las acciones, **cuando** presiono ‘Eliminar’ en una acción, **entonces** la acción se elimina de la tabla y se actualiza la tabla. |
|

| **HU-05**                   | **Título:** Visualización del Porcentaje de Cambio                                                                                             |
| --------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Historia de usuario:**    | **Como** usuario de la aplicación web, **quiero** ver el porcentaje de cambio desde la compra en la tabla de 'Mis Acciones', **para** evaluar el rendimiento de mis inversiones a simple vista. |
| **Criterio de aceptación:** | **Dado** que el usuario ve la tabla de 'Mis Acciones', **cuando** haya fluctuaciones en el precio de mercado de las acciones, **entonces** quiero ver reflejado el porcentaje de cambio respecto al precio de compra para cada acción. |
|                             |

| **HU-06**                   | **Título:** Cálculo y Visualización de Ganancias/Pérdidas                                                                                             |
| --------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Historia de usuario:**    | **Como** usuario de la aplicación web, **quiero** que se calcule y muestre la ganancia o pérdida en dinero, basada en el porcentaje de cambio de cada acción en la tabla de 'Mis Acciones', **para** entender el impacto financiero de las fluctuaciones del mercado en mis inversiones. |
| **Criterio de aceptación:** | **Dado** que existen cambios en el valor de mercado de las acciones, **cuando** miro la tabla de 'Mis Acciones', **entonces** puedo ver la ganancia o pérdida monetaria calculada a partir del porcentaje de cambio para cada acción. |
|                             |
