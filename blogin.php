<?php
    if(isset($_POST['key'])){
        $key=$_POST['key'];
        if($key="Mario Laserna"){
            unset($_POST['key']);
            $_SESSION['auth']="ok";
            header("Location: ./busos.php");
        }
    }
?>
<html>
    <head><meta chartset="UTF-8"></head>
    <body>
        <h1>Pregunta de validación:</h1>
        <p>¿Cuál es el nombre del edificio ML?</p>
        <form method="POST">
            <input type="radio" id="W" name="nombre" value="NO">
            <label for="W">Carlos Pacheco Devia</label><br>
            <input type="radio" id="O" name="nombre" value="NO">
            <label for="O">Henrry Yerly</label><br>
            <input type="radio" id="ML" name="nombre" value="Mario Laserna">
            <label for="ML">Mario Laserna</label><br>
            <input type="radio" id="Ll" name="nombre" value="NO">
            <label for="Ll">Alberto Lleras Camargo</label><br>
            <p><input type="submit" value="Enviar"><a href="./index.html">Cancelar</a></p>
        </form>
    </body>
</html>