<?php

    $arrayPais=[1=>"España",2=>"Portugal",3=>"Francia",4=>"Perú"];

    $arrayContaminacion=["water"=>"Desperdiciar Agua","recycle"=>"No Reciclar","gum"=>"Tirar Chicles al Suelo"];

    $arrayTransporte=["car"=>"Coche","bus"=>"Autobus","bike"=>"Bicicleta","walk"=>"Caminar"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1 id="title">FORMULARIO</h1>
        </header>

        <nav>
            <ul>
                <li id="option-form"><a href="index.html">CAMBIO CLIMÁTICO</a></li>
            </ul>
        </nav>

        <form action="recogerBien.php" method="get">
            <div class="boxForm" id="name">
                <label>Nombre:</label>
                <input type="text" name="name" placeholder="Adrián">
            </div>

            <div class="boxForm" id="surname">
                <label>Apellido:</label>
                <input type="text" name="surname" placeholder="Risco Sánchez">
            </div>

            <div class="boxForm" id="pw">
                <label>Contraseña:</label>
                <input type="password" name="password">
            </div>

            <div class="boxForm" id="country">
                <label>Selecciona tu País: </label>
                <select name="selectCountry">
                    <?php
                        foreach($arrayPais as $idPais=>$nombrePais){
                            echo "<option value='".$idPais."'>".$nombrePais."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="boxForm" id="clothes">
                <input type="checkbox" name="clothes">
                <label>¿Te gustaría donar ropa?</label>
            </div>

            <div class="boxForm">
                <h3>¿Qué errores has cometido que afectaron al medioambiente?</h3>
                <div>
                    <?php
                        foreach($arrayContaminacion as $condicion=>$texto){
                            echo "<input type='checkbox' name='condition[]' value='".$condicion."'";
                            echo "<label>".$texto."</label>";
                        }
                    ?>
                </div>
            </div>

            <div class="boxForm">
                <h3>¿Qué transporte usas más?</h3>
                <?php
                    foreach($arrayTransporte as $transporte=>$texto){
                        echo "<input type='radio' name='transport' value='".$transporte."'";
                        echo "<label>".$texto."</label>";
                    }
                ?>
            </div>

            <div class="boxForm" id="termsConditions">
                <input type="checkbox" name="conditions">
                <label>Aceptar Términos y Condiciones</label>
            </div>

            <div id="send">
                <button type="submit">Enviar</button>
            </div>
        </form>

        <footer>
            <p>© 2025 Adrián Risco Sánchez - Impacto del cambio climático en las personas</p>
        </footer>
    </body>
</html>