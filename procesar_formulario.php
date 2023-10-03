<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Nom_Ape = $_POST["Nom_Ape"];
    $Fecha_Nac = $_POST["Fecha_Nac"];
    $Ocup = $_POST["Ocup"];
    $Num_tel = $_POST["Num_tel"];
    $email = $_POST["email"];
    $nacionalidad = $_POST["nacionalidad"];
    $idiomas1 = $_POST["idiomas1"];
    $idiomas2 = $_POST["idiomas2"];
    $idiomas3 = $_POST["idiomas3"];
    $aptitud1 = $_POST["aptitud1"];
    $aptitud2 = $_POST["aptitud2"];
    $aptitud3 = $_POST["aptitud3"];
    $habilidades = isset($_POST['habilidades']) ? implode(', ', $_POST['habilidades']) : '';
    $perfil = $_POST["perfil"];
    $EXP_LAB = $_POST["EXP_LAB"];
    $Formacion = $_POST["Formacion"];

    header("Location: CV_PWD.php?Nom_Ape=$Nom_Ape&Fecha_Nac=$Fecha_Nac&Ocup=$Ocup&Num_tel=$Num_tel&email=$email&nacionalidades=$nacionalidades&idiomas1=$idiomas1&idiomas2=$idiomas2&idiomas3=$idiomas3&aptitud1=$aptitud1&aptitud2=$aptitud2&aptitud3=$aptitud3&habilidades=$habilidades&perfil=$perfil&EXP_LAB=$EXP_LAB&Formacion=$Formacion");
    exit();
}
?>
