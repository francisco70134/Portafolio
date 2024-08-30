<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <title>Portafolio</title>
    <link rel="shortcut icon" href="assetsassets/img/icoPortafolio.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php
    include("view/pages/header.php");
    ?>

    <!-- SECCION INICIOO -->
    <section id="inicio"  class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-imagen">
                <img src="assets/img/perfilFrancisco.jpeg" alt="mi perfil">
            </div>
            <h3>FRANCISCO <br> OLORTEGUI ABANTO</h3>

            <h2>Ingeniería<abbr title=""></abbr> de Software - Análisis de datos</h2>
            <div class="redes">
                <a href="https://www.facebook.com/edu.olorteguiabanto" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://www.linkedin.com/in/francisco-edu-olortegui-abanto/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://github.com/francisco70134/" target="_blank"><i class="fa-brands fa-github"></i></a>

            </div>
        </div>


    </section>

    <!-- MIS SECCIONES -->
    <?php
    /* sobre mi */
    include("view/pages/sobre-mi.php");

    /* skills */
    include("view/pages/skills.php");

    /* curriculum */
    include("view/pages/curriculum.php");

    /* portafolio */
    include("view/pages/portafolio.php");

    /* contacto */
    include("view/pages/contacto.php");
    ?>



    <!-- FOOTER -->

    <?php
    include("view/pages/footer.php");
    ?>

    <!-- llamamos al script -->
    <script src="assets/script.js"></script>
    <script src="//code.tidio.co/akxanzlaj55xozxojjo6mxdegdb8xzjp.js" async></script>
</body>

</html>