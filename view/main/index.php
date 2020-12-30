<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
</head>

<body>
    <?php require 'view/header.php'; ?>
    <div class="container text-center mb-3">
        <!-- <img class="img-fluid" id="logo-main-index" src="<?php echo constant('URL') . "resources/img/logo-pjedomex.png" ?>" alt="Logo Poder Judicual del Estado de México"> -->
        <h4 class="header-main" >Sistema de Control de Pacientes de  <?php echo constant('EMPRESA') ?> </h4>
        <h5 class="header-main">
            <?php
                echo constant('SLOGAN');
            ?>
        </h5>
        <img class="img-main-logo" src="<?php echo constant('URL') . 'resources\img\frutart-logo.jpg'; ?>" alt="Logo Frutart Nutrición">
        <!-- Pendientes o citas de hoy -->
        <!-- <h5 class="header-main" >Seleccione una región</h5> -->
        <!-- Image Map Generated en http://www.image-map.net/ -->
        <!-- <img src="<?php echo constant('URL') . 'resources\img\mapa-nombres.png'; ?> " class="regiones-map" usemap="#image-map">

        <map name="image-map"  >
            <area id="mapa-regiones" target="" alt="Toluca" title="Toluca" href="consulta/toluca" coords="42,574,77,635,97,655,182,580,208,589,289,536,367,542,429,443,410,343,381,279,357,253,359,234,382,224,393,194,406,153,398,138,377,134,380,83,350,45,332,32,315,41,293,45,233,5,212,15,219,36,225,67,211,82,155,87,179,149,158,187,144,206,131,196,118,209,136,260,141,292,117,309,103,318,96,338,82,375,88,388,70,417,52,432,30,442,26,458,9,475,4,480,23,495,48,498,53,520" shape="poly">
            <area target="" alt="Tlanepantla" title="Tlanepantla" href="consulta/tlanepantla" coords="411,334,421,317,451,298,456,287,458,267,474,268,474,254,490,241,489,213,499,209,490,198,479,178,470,172,465,168,466,151,462,137,442,142,435,149,422,159,411,173,401,176,393,190,386,214,378,222,359,242,357,255,386,280,394,298,407,330" shape="poly">
            <area target="" alt="Texcoco" title="Texcoco" href="consulta/texcoco" coords="457,136,467,148,471,169,479,170,496,212,490,226,484,265,510,270,519,268,529,242,544,216,549,192,537,169,523,152,535,138,527,118,548,95,544,75,530,81,523,105,518,110,512,97,512,104,506,103,502,94,489,91,477,94,463,104,464,111,456,117" shape="poly">
            <area target="" alt="Ecatepec" title="Ecatepec" href="consulta/ecatepec" coords="509,276,509,291,510,303,523,308,534,322,540,335,537,352,545,362,539,368,540,380,540,392,540,410,546,423,560,425,568,436,577,446,572,456,594,458,624,456,640,449,645,430,646,405,642,394,641,366,646,354,639,332,639,321,638,288,634,271,622,250,615,240,623,238,637,233,632,221,646,201,655,183,653,169,643,160,623,161,621,154,630,150,626,142,613,147,602,143,591,143,582,144,577,136,571,125,567,129,561,135,556,146,549,152,546,169,550,180,552,189,550,203,539,218,532,233,533,240,526,251,522,262" shape="poly">
        </map> -->
    </div>
    <?php require 'view/footer.php'; ?>
</body>

</html>