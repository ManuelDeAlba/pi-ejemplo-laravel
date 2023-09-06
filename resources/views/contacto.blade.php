<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    
    <form class="form" action="contacto" method="post">
        @csrf <!-- Esto se usa con blade, genera un input oculto con un token para validar que la informacion es de un formulario legitimo -->
        
        <!-- Las dobles llaves sirven para insertar variables y automáticamente limpian las cadenas para posibles ataques -->
        <h3>Tipo: {{ $tipo }}</h3>

        <div class="form__apartado">
            <label for="correo">Correo:</label>
            <input
                id="correo"
                name="correo"
                type="email"
                placeholder="example@gmail.com"
                @if ($tipo == "alumno")
                    value="@alumnos.udg.mx"
                @elseif ($tipo == "empleado")
                    value="@empleados.udg.mx"
                @else
                    value="@<?php echo $tipo; ?>.udg.mx"
                @endif
                required
            >
        </div>

        <div class="form__apartado">
            <label for="comentario">Comentario:</label>
            <textarea
                id="comentario"
                name="comentario"
                cols="30"
                rows="5"
            ></textarea>
        </div>

        <input class="form__submit" type="submit" value="Enviar">
    </form>
</body>
</html>