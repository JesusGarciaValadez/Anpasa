<?php



//$send_to = "vdavila@cmv.com.mx";
//$send_to = "info@anpasa.com";

//$send_to = $_POST["rr"];
$send_subject = "Formulario de contacto ";

$send_to = "vdavila@cmv.com.mx";



$f_name = cleanupentries($_POST["name"]);
$f_email = cleanupentries($_POST["email"]);
$f_message = cleanupentries($_POST["message"]);

$f_empresa = cleanupentries($_POST["empresa"]);
$f_giro = cleanupentries($_POST["giro"]);
$f_telefono = cleanupentries($_POST["telefono"]);
$f_ciudad = cleanupentries($_POST["ciudad"]);


$f_area = cleanupentries($_POST["area"]);


$from_ip = $_SERVER['REMOTE_ADDR'];
$from_browser = $_SERVER['HTTP_USER_AGENT'];

function cleanupentries($entry) {
	$entry = trim($entry);
	$entry = stripslashes($entry);
	$entry = htmlspecialchars($entry);

	return $entry;
}

$message = "Mensaje enviado" . date('m-d-Y') . 
"\n\nName: " . $f_name . 
"\n\narea: " . $f_area . 
"\n\nE-Mail: " . $f_email . 
"\n\nEmpresa: \n" . $f_empresa . 
"\n\nGiro: \n" . $f_giro . 
"\n\nTelefono: \n" . $f_telefono .
"\n\nCiudad: \n" . $f_ciudad . 
 "\n\Mensaje: \n" . $f_message . 


"\n\n\nInformación Técnica:\n" . $from_ip . "\n" . $from_browser;

$send_subject .= " - {$f_name}";

$headers = "From: " . $f_email . "\r\n" .
    "Reply-To: " . $f_email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (!$f_email) {
	echo "Correo vacío";
	exit;
}else if (!$f_name){
	echo "Nombre vacío";
	exit;
}else{
	if (filter_var($f_email, FILTER_VALIDATE_EMAIL)) {
		mail($send_to, $send_subject, $message, $headers);
		echo "true";
	}else{
		echo "correo inválido";
		exit;
	}
}

?>
