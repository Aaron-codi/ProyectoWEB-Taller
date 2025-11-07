<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous">
</head>
<body>
    <h1 class="m-3">Agregar alumno</h1>
    <form  action="insertarLigas.php" method="POST" class="mx-3 p-2" style="width:1000px;">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Equipo</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">E</label>
                <input type="number" name="edad" class="form-control" id="edad" required>
            </div>
            <div class="mb-3">
                <label for="curso" class="form-label">Curso</label>
                <input type="text" name="curso" class="form-control" id="curso" required>
            </div>
        <button type="submit" class="btn btn-outline-dark">Guardar</button>
        <a class="btn btn-outline-dark mx-3" href="main.html" role="button">Volver a la pagina principal</a>
    </form> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>
</html>