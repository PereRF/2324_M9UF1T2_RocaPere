<!DOCTYPE html>
<html>
<head>
    <title>Formulario con un solo campo</title>
    <link rel="stylesheet" type="text/css" href="estil.css">
</head>
<body>
    <h1>Calculadora de nombres i strings</h1>
    <form action="controlador.php" method="post">
        <div class="input-container">
        <input type="text" id="campo1" name="campo1" placeholder="Escribe algo...">
        <br>
        <input type="text" id="campo2" name="campo2" placeholder="Escribe otra cosa...">
        <br>
        <div>
        <div class = buttons-container>
        <input type="submit" value="+" name="operador">
        <input type="submit" value="-" name="operador">
        <input type="submit" value="*" name="operador">
        <input type="submit" value="/" name="operador">
        <input type="submit" value="n!" name="operador">
        <input type="submit" value="Borrar Historial" name="operador">
        </div>
        <div class= "result-container">
        <div class="resultat">
        <?php
        echo $resultado
        ?>
        </div>
        <div class="error">
        <?php
        echo $error
        ?>
        </div>
        <div class="historial-container">
        <?php
        echo $historialtest
        ?>
        </div>
        </p>
</div>
        
        </form>
</body>
</html>