<h1 align="center">
    Escuela Politécnica Nacional<br>
    Facultad de Ingeniería en Sistemas<br>
    Construcción y Evolución de Software<br>
    
</h1>

### Grupo: 9

### Integrantes
- Joel Delgado
- Erik Chalacama
- Ariel Suntasig
  
# Pruebas Funcionales
 ---

| **Prueba N°:** 1| **Nombre:** Registro de una acción |
| ------- | - |
| **Pasos** | 1. Realizar un click sobre el botón "Registrar nuevas acciones".|
||2. LLenar los campos solicitados por la aplicacón web. |
| **Resultado Esperado** | El sistema debe mostrar en la tabla la o las acciones ingresadas. |


| **Prueba N°:** 2 | **Nombre:** Eliminacion de una acción |
| ------- | - |
| **Pasos** | 1. Seleccionar la acción a eliminar.|
||2. Dar click sobre el botom eliminar que aparece en la fila de la acción seleccionada.
||3. Confirmar si se desea eliminar la acción caso contrario seleccionar cancelar.|
| **Resultado Esperado** | El sistema debe eliminar la accion seleccionada de la tabla . |

| **Prueba N°:** 3 | **Nombre:** Verificación de ingreso sin campos en blanco |
| ------- | - |
| **Pasos** | 1. Realizar un click sobre el botón "Registrar nuevas acciones".|
||2. Ingresar en el primer campo el nombre de la accion.
||3. Presionar agregar registro en la apliacación web|
| **Resultado Esperado** | El sistema debe mostrar un mensaje indicando: "Por favor, complete todos los campos correctamente" . |

| **Prueba N°:** 4 | **Nombre:** Formato incorrecto de fecha |
| ------- | - |
| **Pasos** | 1. Realizar un click sobre el botón "Registrar nuevas acciones".|
||2. Ingresar en el primer campo el nombre de la accion.
||3. Ingresar en el segundo campo la fecha sin el año solo el diaa y mes.
||4. Presionar agregar registro en la apliacación web|
| **Resultado Esperado** | El sistema debe mostrar un mensaje indicando: "Debes introducir un valor válido. El campo está incompleto o incluye una fecha no válida" . |

| **Prueba N°:** 5 | **Nombre:** Restricción de letras en campos numéricos |
| ------- | - |
| **Pasos** | 1. Realizar un click sobre el botón "Registrar nuevas acciones".|
||2. Ingresar en el primer campo el nombre de la accion.
||3. Ingresar en el segundo campo la fecha.
||4. Ingresa en el tercer campo el valor de las acciones de manera escrita|
| **Resultado Esperado** | El sistema solo deberia permitir el ingreso de caracteres numéricos. |

| **Prueba N°:** 6 | **Nombre:** Ordenación de acciones registradas |
| ------- | - |
| **Pasos** | 1. Acceder a la página principal donde se lista las acciones registradas. |
||2. Hacer clic en la cabecera de la columna "Nombre de la acción" para ordenar las acciones por nombre. |
||3. Hacer clic en la cabecera de la columna "Precio de compra por acción" para ordenar las acciones por precio. |
||4. Hacer clic en la cabecera de la columna "ID" para ordenar las acciones por ID. |
| **Resultado Esperado** | 1. Al hacer clic en la cabecera "Nombre de la acción", el sistema debe reordenar la lista de acciones alfabéticamente por nombre. |
||2. Al hacer clic en "Precio de compra por acción", el sistema debe reordenar la lista de acciones de menor a mayor precio. |
||3. Al hacer clic en "ID", el sistema debe reordenar la lista de acciones por ID de forma ascendente. |
