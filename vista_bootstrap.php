<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Nombres y Strings</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Calculadora de Nombres y Strings</h1>
        <form action="controlador.php" method="post">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="campo1">Escribe algo:</label>
                    <input type="text" class="form-control" id="campo1" name="campo1" placeholder="Escribe algo...">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="campo2">Escribe otra cosa:</label>
                    <input type="text" class="form-control" id="campo2" name="campo2" placeholder="Escribe otra cosa...">
                </div>
            </div>
            <div class="button-container">
                <button type="submit" class="btn btn-primary" name="operador" value="+">Sumar</button>
                <button type="submit" class="btn btn-primary" name="operador" value="-">Restar</button>
                <button type="submit" class="btn btn-primary" name="operador" value="*">Multiplicar</button>
                <button type="submit" class="btn btn-primary" name="operador" value="/">Dividir</button>
                <button type="submit" class="btn btn-primary" name="operador" value="n!">Factorial</button>
                <button type="submit" class="btn btn-danger " name="operador" value="Borrar Historial">Borrar Historial</button>
            </div>
            <div class="result-container mt-3">
                <div class="resultat">
                    Resultado: <?php echo $resultado; ?>
                </div>
                <div class="error">
                    Error: <?php echo $error; ?>
                </div>
                <div class="historial-container">
                    Historial: <?php echo $historialtest; ?>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>