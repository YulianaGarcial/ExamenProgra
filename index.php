<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calculaStem.js"></script>
</head>
<body>
<section class="wrapper">
    <header>
        <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas para resolver problemas</h1>
    </header>
    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Calcular el aumento de temperatura del agua de un colector solar</h2>
            <p>Descripción:</p>
            <p> Un colector solar plano que tiene una superficie de 4m2 debe calentar agua 
                para uso domestico. Sabiendo que el coeficiente de radiacion solar K = 0,9 cal/min.cm2
                y que el consumo de agua es constante, a razón de 6 litros/minuto, determina el aumento 
                de temperatura del agua si esta funcionando durante 2 horas.
                Se supone que inicialmente el agua esta a 18° C y que no hay perdidas de calor. 
            </p>
        </section>
        <section class="esquemaProblema">
            <h2>Esquema</h2>
            <center>
                <img class="imgProblema" src="images/colector.jpg" alt="Colector solar">
            </center>
        </section>
        <section class="formulas">
            <h2>Fórmulas</h2>
            <p> Q = K.t.S*r en Kcal </p>
            <ul>
                <li> Convertir a Kwh (base 1h.)</li>
               
            </ul>
           
        </section>
        <section class="datos">
            <h2>Datos:</h2>
            <ul>
                <li> Q= Energia generada, K= Coeficiente de radiacion </li>
                <li> t= Tiempo en minutos  </li>
                <li> S= Area en cm2 </li>
                <li> r= Rendimiento </li>
            </ul>
        </section>
        <section class="calculos">
            <h2>Solución</h2>
            <button onclick="calcula();">Presiona para calcular</button>
        </section>

        <?php
        
        ?>

        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
            <?php
                print"<h1> Resultado: " .calcular()"unidades</h1>"
            ?>
        </section>
    </section>
    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2024
    </footer>
</section>
</body>
</html>