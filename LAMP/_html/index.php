<!DOCTYPE html>
<HTML>

<HEAD>
    <TITLE>Conexión a la base de datos</TITLE>
</HEAD>

<BODY BGCOLOR="FFFFFF">

    <H1>Conexión a la base de datos</H1>

    <?php
    $host = "mariadb-server";
    $user = "root";
    $pass = "password";
    $db = "mi_app";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión realizada";
    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }
    ?>
</BODY>

</HTML>