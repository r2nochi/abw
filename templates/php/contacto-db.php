<?php
/* variables iniciales */
$dbname = 'agntebtc_UsrContacto';
$user = 'agntebtc_admin';
$password = 'admindbpasswordbtc';

try {
    $dsn = "mysql:host=localhost;dbname=$dbname";
    $conex = new PDO($dsn, $user, $password);
   
    /* Declaracion de variables de registro */
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $celular = $_POST['celular'];
    $mensaje = $_POST['mensaje'];
    $tinOrigen = $_POST['origen'];
    /* Datos por db */
    $strIP =  $_SERVER['REMOTE_ADDR'];
    $strUserAgent = $_SERVER['HTTP_USER_AGENT'];
    
    
    
    /* Consulta */
    $consultaInsert = $conex->prepare("INSERT INTO datoscontacto (nombres, apellidos, correo, celular, mensaje, strIP, strUserAgent, tinOrigen) VALUES (:nombres,:apellidos, :correo, :celular, :mensaje, :strIP, :strUserAgent, :tinOrigen)");

    /* Enlazando variables */
    $consultaInsert->bindParam(':nombres',$nombres, PDO::PARAM_STR);
    $consultaInsert->bindParam(':apellidos',$apellidos,PDO::PARAM_STR );
    $consultaInsert->bindParam(':correo',$correo,PDO::PARAM_STR );
    $consultaInsert->bindParam(':celular',$celular,PDO::PARAM_INT );
    $consultaInsert->bindParam(':mensaje',$mensaje,PDO::PARAM_STR );
    $consultaInsert->bindParam(':strIP',$strIP,PDO::PARAM_STR );
    $consultaInsert->bindParam(':strUserAgent',$strUserAgent,PDO::PARAM_STR );
    $consultaInsert->bindParam(':tinOrigen',$tinOrigen,PDO::PARAM_INT );

   
    if($consultaInsert->execute()){
        /* Configurando la redirección */
        $error = 0;
        if ($tinOrigen==0) {
            header("Location: ../index1.php?operacion=contacto&error=$error");
        }
        else {
            header("Location: ../soporte.php?operacion=contacto&error=$error");
        }
    }
    else{
        /* Configurando la redirección */
        $error = 1;
        $msgerror = "errordebasededatos";
        if ($tinOrigen==0) {
            header("Location: ../index1.php?operacion=contacto&error=$error&msg=");
        }
        else {
            header("Location: ../soporte.php?operacion=contacto&error=$error&msg=$msgerror");
        }
   
    } 

} catch (PDOException $e){
    echo $e->getMessage();
}
    
?>