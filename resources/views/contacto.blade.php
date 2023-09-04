<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>
    <form class="form" action="">
        <div class="form__apartado">
            <label for="correo">Correo:</label>
            <input
                id="correo"
                name="correo"
                type="email"
                placeholder="example@gmail.com"
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

        <div class="form__apartado">
            <label for="tipo">Tipo:</label>
            <select
                id="tipo"
                name="tipo"
                required
            >
                <option value="">Elige una opción</option>
                <option value="alumno">Alumno</option>
                <option value="empleado">Empleado</option>
            </select>
        </div>

        <input class="form__submit" type="submit" value="Enviar">
    </form>
</body>
</html>