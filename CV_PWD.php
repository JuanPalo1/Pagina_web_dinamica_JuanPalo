<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Currículum Vitae</title>
    <link rel="stylesheet" type="text/css" href="CV_PDW.css">
</head>
<body>
    <div class="page">
        <div class="header">
            <div class="header-left">
                <img src="ejemplo.jpg" alt="Tu Foto" class="profile-image">
            </div>
            <div class="header-right">
                <?php
                if (isset($_GET["Nom_Ape"]) && isset($_GET["Fecha_Nac"]) && isset($_GET["Ocup"])) {
                    $Nom_Ape = $_GET["Nom_Ape"];
                    $Fecha_Nac = $_GET["Fecha_Nac"];
                    $Ocup = $_GET["Ocup"];

                    echo "<h1>$Nom_Ape</h1>";
                    echo "<p>$Ocup</p>";
                    echo "<p>$Fecha_Nac</p>";
                    }

                ?>
            </div>

            <div class="content">
                <div class="split">
                    <div class="left-column">
                        <?php
                            if (isset($_GET["Num_tel"]) && isset($_GET["email"]) && isset($_GET["nacionalidades"])) {
                                $Num_tel = $_GET["Num_tel"];
                                $email = $_GET["email"];
                                $nacionalidades = $_GET["nacionalidades"];

                                echo '<h2>CONTACTO</h2>';
                                echo '<hr class="subheading-line">';
                                echo '<ul class="contact-list">';
                                echo '<li><i class="fa fa-phone"></i> ' . $Num_tel . '</li>';
                                echo '<li><i class="fa fa-envelope"></i> ' . $email . '</li>';
                                echo '<li><i class="fa fa-map-marker"></i> ' . $nacionalidades . '</li>';
                                echo '</ul>';
                                
                            }

                            if (isset($_GET["idiomas1"]) && isset($_GET["idiomas2"]) && isset($_GET["idiomas3"])) {
                                $idiomas1 = $_GET["idiomas1"];
                                $idiomas2 = $_GET["idiomas2"];
                                $idiomas3 = $_GET["idiomas3"];
                            
                                echo '<h2>IDIOMAS</h2>';
                                echo '<hr class="subheading-line">';
                                echo '<ul>';
                                echo '    <li>' . $idiomas1 . '</li>';
                                echo '    <li>' . $idiomas2 . '</li>';
                                echo '    <li>' . $idiomas3 . '</li>';
                                echo '</ul>';
                            }
                            
                            if (isset($_GET["aptitud1"]) && isset($_GET["aptitud2"]) && isset($_GET["aptitud3"])) {
                                $aptitud1 = $_GET["aptitud1"];
                                $aptitud2 = $_GET["aptitud2"];
                                $aptitud3 = $_GET["aptitud3"];
                            
                                echo '<h2>APTITUDES</h2>';
                                echo '<hr class="subheading-line">';
                                echo '<ul>';
                                echo '    <li>' . $aptitud1 . '</li>';
                                echo '    <li>' . $aptitud2 . '</li>';
                                echo '    <li>' . $aptitud3 . '</li>';
                                echo '</ul>';
                            }
                            
                            if (isset($_GET["habilidades"])) {
                                $habilidades = $_GET["habilidades"];
                            
                                echo '<h2>HABILIDADES</h2>';
                                echo '<hr class="subheading-line">';
                                echo '<ul>';
                                echo '    <li>' . $habilidades . '</li>';
                                echo '</ul>';
                            }                            

                        ?>
                    </div>

                    <div class="right-column">
                        <?php

                        if (isset($_GET["perfil"]) && isset($_GET["EXP_LAB"]) && isset($_GET["Formacion"])) {
                            $perfil = $_GET["perfil"];
                            $EXP_LAB = $_GET["EXP_LAB"];
                            $Formacion = $_GET["Formacion"];

                            echo '<h2>PERFIL</h2>';
                            echo '<hr class="subheading-line">';
                            echo '<ul>';
                            echo    '<p>' . $perfil . '</p>';
                            echo '</ul>';

                            echo '<h2>EXPERIENCIA LABORAL</h2>';
                            echo '<hr class="subheading-line">';
                            echo '<ul>';
                            echo    '<p>' . $EXP_LAB . '</p>';
                            echo '</ul>';

                            echo '<h2>FORMACIÓN</h2>';
                            echo '<hr class="subheading-line">';
                            echo '<ul>';
                            echo    '<p>' . $Formacion . '</p>';
                            echo '</ul>';
                        }             

                        ?>
                    </div>

                </div>

            </div>
        </div>

    </div>
</body>
</html>
