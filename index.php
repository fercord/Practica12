<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8" />
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" />
</head>

<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">
                <a href="stem.html">Maria Fernanda Flores Cordova - 21091000</a>
            </h1>
        </header>
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: Cálcular el Valor del radio</h2>
                <p>Descripción:</p>
                <p>
                    La Luminosidad del Sol es de 3.85×1026 W y tiene una temperatura de
                    alrededor de 6000 K. Encuentre el valor del radio.<br />
                </p>
            </section>
            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="./images/SolRadio.jpg" />
                </center>
            </section>
            <section class="formulas">
                <h2>Fórmulas</h2>
                Longitud de onda= 2.898 × 10^-3 m K Radio = √(Luminosidad / (4πσT^4))
            </section>
            <section class="datos">
                <h2>Datos:</h2>
                Luminosidad = 3.85x1026 W<br />
                Temperatura = 6000 K.
            </section>
            <section class="calculos">
                <h2>Solución</h2>
                <p>
                    EL Radio aproximado del sol es de: <br />
                    R = √(3.85 × 10^26 W / (4π × 5.67 × 10^-8 W m^-2 K^-4 × (6000 K)^4))
                </p>
                <form method="POST" action="">
                    <button type="submit">Presiona para calcular</button>
                </form>
            </section>
            <section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA">
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $temperatura = 6000;
                        $luminosidad = 3.85 * pow(10, 26);
                        $lon_max = (2.898 * pow(10, -3)) / $temperatura;
                        $radio = sqrt($luminosidad / $lon_max);
                        echo $radio . ' metros';
                    }
                    ?>
                </div>
            </section>
        </section>
        <footer class="pie">Creative Commons versión 3.0 SciSoft 2023</footer>
    </section>
</body>

</html>
