<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Check List de Inspeccion Final</title>
</head>

<body>

  <h1 class="titulo">Check List de Inspeccion Final</h1>
  <form action="sql.php" method="post" class="formulario">
    <div class="contenedor_datos">
      <p class="datos">Datos</p>
      <div class="contenedor_input">
        <p class="label">Turno:</p>
        <input type="text" class="input" name="turno" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Inspector:</p>
        <input type="text" class="input" name="inspector" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Fecha:</p>
        <input type="text" class="input" name="fecha" required>
      </div>
      <div class="contenedor_input">
        <p class="label">OP:</p>
        <input type="text" class="input" name="op" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Producto:</p>
        <input type="text" class="input" name="producto" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Peso X Caja/ Bolsa: (Kg)</p>
        <input type="text" class="input" name="peso" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Tipo de Inspeccion: Pokayoke/ Visual</p>
        <input type="text" class="input" name="inspeccion" required>
      </div>
      <div class="espacio"></div>
    </div>
    <div class="contenedor_datos">
      <p class="datos">Datos</p>
      <div class="contenedor_input">
        <p class="label">Rebaba: Cant. de Piezas</p>
        <input type="text" class="input" name="rebaba" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Rechupe: Cant. de Piezas</p>
        <input type="text" class="input" name="rechupe" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Incompleta: Cant. de Piezas</p>
        <input type="text" class="input" name="incompleta" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Deforme: Cant. de Piezas</p>
        <input type="text" class="input" name="deforme" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Quemada: Cant. de Piezas</p>
        <input type="text" class="input" name="quemada" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Mal Corte: Cant. de Piezas</p>
        <input type="text" class="input" name="corte" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Burbuja: Cant. de Piezas</p>
        <input type="text" class="input" name="burbuja" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Exc. de Desmoldante: Cant. de Piezas</p>
        <input type="text" class="input" name="desmoldante" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Adelanto: Cant. de Piezas</p>
        <input type="text" class="input" name="adelanto" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Puntos Negros: Cant. de Piezas</p>
        <input type="text" class="input" name="puntos" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Contaminada: Cant. de Piezas</p>
        <input type="text" class="input" name="contaminada" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Operador:</p>
        <input type="text" class="input" name="operador" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Cant. de Defectos Encontrados:</p>
        <input type="text" class="input" name="total_defectos" required>
      </div>
      <div class="contenedor_input">
        <p class="label">Cant. Total Revisado:</p>
        <input type="text" class="input" name="total_revisado" required>
      </div>
      <div class="espacio"></div>
    </div>
    <button class="boton"><input type="submit" class="enviar" name="enviar" value="Enviar"></button>
  </form>
  <p class="derechos">&copy; Todos los Derechos Reservados | 2025</p>
</body>

</html>