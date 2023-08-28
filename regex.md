# Expresiones regulares

## Coincidencias Básicas

- .: Cualquier caracter, excepto nueva línea.
- \d: Cualquier dígito (0-9).
- \D: No es un dígito (0-9).
- \w: Carácter de palabra (a-z, A-Z, 0-9, \_).
- \W: No es un carácter de palabra.
- \s: Espacios de cualquier tipo (espacio, tabulación, nueva línea).
- \S: No es un espacio, tabulación o nueva línea.

## Límites

- \b: Límite de palabra.
- \B: No es un límite de palabra.
- ^: Inicio de una cadena de texto.
- $: Final de una cadena de texto.

## Cuantificadores

- \*: 0 o más repeticiones.
- +: 1 o más repeticiones.
- ?: 0 o una repetición.
- {3}: Número exacto de repeticiones.
- {3,4}: Rango de repeticiones (mínimo, máximo).

## Conjuntos de Caracteres

- []: Caracteres dentro de los corchetes.
- [^ ]: Caracteres que NO están dentro de los corchetes.

## Grupos

- (): Grupo.
- |: Uno u otro.
