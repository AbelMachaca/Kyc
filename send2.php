<?php
if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"])) {

    // Simular la validación del reCAPTCHA
    $captcha_success = new stdClass();
    $captcha_success->success = true;

    if ($captcha_success->success) {
        // Procesar el formulario
        $fecha = date("D-M-y H:i");
        $mymail = "info@kycsa.com";
        $subject = "Servicio Tecnico";
        $contenido = "Escribio: " . $_POST["nombre"] . " \n";
        $contenido .= "Email: " . $_POST["email"] . " \n";
        $contenido .= "Telefono: " . $_POST["telefono"] . "\n";
        $contenido .= "Categoria o criterio: " . $_POST["categoria"] . "  " . $_POST["dcriterio"] . "\n";
        $contenido .= "N de Serie: " . $_POST["nroserie"] . "\n";
        $contenido .= "Modelo : " . $_POST["modelo"] . "\n";
        $contenido .= "Aplicacion : " . $_POST["aplicacion"] . "\n";
        $contenido .= "Comentarios o preguntas: " . $_POST["mensaje"] . "\n\n";
        $contenido .= "El mensaje se escribió el " . $fecha;
        $header = "From:" . $_POST["email"] . "\nReply-To:" . $_POST["email"] . "\n";
        $header .= "X-Mailer:PHP/" . phpversion() . "\n";
        $header .= "Mime-Version: 1.0\n";
        $header .= "Content-Type: text/plain";

        // Comentar la función mail para evitar errores locales
        // mail($mymail, $subject, $contenido, $header);

        // Simulación de envío exitoso
        echo "El formulario fue procesado correctamente.";
    } else {
        echo "Por favor, verifica el captcha.";
    }
}
?>
