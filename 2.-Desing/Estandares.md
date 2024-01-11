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

## Estándares de Codificación - Mis Acciones

---

## PHP

- Este es un lenguaje de programación del lado del servidor que se utiliza para generar contenido dinámico en la web. Las convenciones a seguir para escribir código en PHP son:

  - **Indentación:** Utilizar 4 espacios en lugar de tabulaciones. Establecer una indentación de 4 espacios.
  - **Punto y Coma:** Incluir punto y coma al final de cada declaración.
  - **Longitud de línea:** Limitar la longitud de línea a 80-120 caracteres.
  - **Espacios en Blanco:** Utilizar espacios en blanco de manera consistente para mejorar la legibilidad.
  - **Nombrado de Variables:** Utilizar camelCase para nombrar variables (e.g., $miVariable). Utilizar el signo $ al inicio de cada nombre de variable.
  - **Constantes:** Nombrar constantes en mayúsculas con guiones bajos para separar palabras (e.g., MI_CONSTANTE). Utilizar la función define() para declarar constantes.
  - **Estructuras de Control:** Incluir llaves incluso para bloques de código de una sola línea. Utilizar la palabra clave elseif en lugar de else if. Utilizar dos puntos y endswitch al final de la estructura switch.
  - **Funciones:** Utilizar la declaración de funciones con nombre en lugar de expresiones de función anónimas. Utilizar camelCase para los nombres de funciones y parámetros. Utilizar la palabra clave function al inicio de cada declaración de función.
  - **Comentarios:** Utilizar comentarios descriptivos y claros. Evitar comentarios obvios o innecesarios. Utilizar // para comentarios de una sola línea y /\*\*/ para comentarios de varias líneas.

    **Ejemplo de código en PHP:**

    ```php
    <?php
    // Buen comentario
    function dividirDosNumeros($dividendo, $divisor) {
        // Verificar que el divisor no sea cero antes de realizar la división
        if ($divisor !== 0) {
            return $dividendo / $divisor;
        } else {
            echo "Error: División por cero.";
            return false;
        }
    }

    // Llamar a la función con algunos valores
    echo dividirDosNumeros(10, 2); // 5
    echo dividirDosNumeros(10, 0); // Error: División por cero.
    ?>
    ```

## HTML

- Este es un lenguaje de marcado que se utiliza para estructurar el contenido de una página web. Las convenciones a seguir son:

  - **Indentación:** Utilizar 2 espacios en lugar de tabulaciones. Establecer una indentación de 2 espacios.
  - **Punto y Coma:** No se utiliza punto y coma en HTML.
  - **Longitud de línea:** Limitar la longitud de línea a 80-120 caracteres.
  - **Espacios en Blanco:** Utilizar espacios en blanco de manera consistente para mejorar la legibilidad.
  - **Nombrado de Variables:** No se utilizan variables en HTML.
  - **Constantes:** No se utilizan constantes en HTML.
  - **Estructuras de Control:** No se utilizan estructuras de control en HTML.
  - **Funciones:** No se utilizan funciones en HTML.
  - **Comentarios:** Utilizar comentarios descriptivos y claros. Evitar comentarios obvios o innecesarios. Utilizar <!-- --> para comentarios de una o varias líneas.

    **Ejemplo de código en HTML:**

    ```html
    <!DOCTYPE html>
    <html lang="es">
      <head>
        <meta charset="UTF-8" />
        <title>Mi Primer Sitio Web</title>
      </head>
      <body>
        <!-- Buen comentario -->
        <h1>¡Bienvenidos a mi sitio web!</h1>
        <p>
          Este es un ejemplo de cómo podemos combinar HTML, CSS y JavaScript
          para crear una experiencia única en la web.
        </p>
      </body>
    </html>
    ```

## CSS

- Este es un lenguaje utilizado para dar estilo y diseño a nuestras páginas web. Las convenciones a seguir para escribir código en CSS son:

  - **Indentación:** Utilizar 2 espacios en lugar de tabulaciones. Establecer una indentación de 2 espacios.
  - **Punto y Coma:** Incluir punto y coma al final de cada declaración.
  - **Longitud de línea:** Limitar la longitud de línea a 80-120 caracteres.
  - **Espacios en Blanco:** Utilizar espacios en blanco de manera consistente para mejorar la legibilidad.
  - **Nombrado de Variables:** Utilizar camelCase para nombrar variables (e.g., --miVariable). Utilizar el prefijo -- al inicio de cada nombre de variable. Utilizar la función var() para usar el valor de una variable.
  - **Constantes:** No se utilizan constantes en CSS.
  - **Estructuras de Control:** No se utilizan estructuras de control en CSS.
  - **Funciones:** Utilizar la declaración de funciones con nombre en lugar de expresiones de función anónimas. Utilizar kebab-case para los nombres de funciones (e.g., mi-funcion). Utilizar paréntesis para pasar parámetros a las funciones.
  - **Comentarios:** Utilizar comentarios descriptivos y claros. Evitar comentarios obvios o innecesarios. Utilizar /\*\*/ para comentarios de una o varias líneas.

    **Ejemplo de código en CSS:**

    ```css
    /* Buen comentario */
    :root {
      --color-primario: blue;
      --color-secundario: white;
    }

    h1 {
      color: var(--color-primario);
      font-size: 2rem;
    }

    p {
      color: var(--color-secundario);
      font-size: 1rem;
    }
    ```

## JAVASCRIPT

- Este es un lenguaje de programación que nos permite hacer que nuestros sitios web sean dinámicos e interactivos. Las convenciones a seguir para escribir código en JAVASCRIPT son:

  - **Indentación:** Utilizar 2 espacios en lugar de tabulaciones. Establecer una indentación de 2 espacios.
  - **Punto y Coma:** Incluir punto y coma al final de cada declaración.
  - **Longitud de línea:** Limitar la longitud de línea a 80-120 caracteres.
  - **Espacios en Blanco:** Utilizar espacios en blanco de manera consistente para mejorar la legibilidad.
  - **Nombrado de Variables:** Utilizar camelCase para nombrar variables (e.g., miVariable). Utilizar las palabras clave let o const para declarar variables. Evitar el uso de var.
  - **Constantes:** Nombrar constantes en mayúsculas con guiones bajos para separar palabras (e.g., MI_CONSTANTE). Utilizar la palabra clave const para declarar constantes.
  - **Estructuras de Control:** Incluir llaves incluso para bloques de código de una sola línea. Utilizar la palabra clave else if en lugar de elseif. Utilizar un comentario // fall through cuando se omite un break de manera intencional.
  - **Funciones:** Utilizar la declaración de funciones con nombre en lugar de expresiones de función anónimas. Utilizar camelCase para los nombres de funciones y parámetros. Utilizar la palabra clave function al inicio de cada declaración de función. Utilizar la sintaxis de flecha para declarar funciones anónimas.
  - **Comentarios:** Utilizar comentarios descriptivos y claros. Evitar comentarios obvios o innecesarios. Utilizar // para comentarios de una sola línea y /\*\*/ para comentarios de varias líneas.

    **Ejemplo de código en JAVASCRIPT:**

    ```javascript
    // Buen comentario
    function dividirDosNumeros(dividendo, divisor) {
      // Verificar que el divisor no sea cero antes de realizar la división
      if (divisor !== 0) {
        return dividendo / divisor;
      } else {
        console.error("Error: División por cero.");
        return NaN;
      }
    }

    // Llamar a la función con algunos valores
    console.log(dividirDosNumeros(10, 2)); // 5
    console.log(dividirDosNumeros(10, 0)); // Error: División por cero.
    ```

