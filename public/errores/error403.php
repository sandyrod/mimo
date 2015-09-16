<html> 
<head> 
<title>Prohibido</title> 
</head> 
<body> 
No tiene suficientes permisos para accedera : <b><?=$_SERVER['REQUEST_URI'];?></b> 
.<br> 
El error ha sido comunicado al administrador del sitio. Disculpe las molestias 
ocasionadas.
<?
$ip   = getenv("REMOTE_ADDR"); 
echo $ip;
//Indicamos la fecha y hora del suceso.
$fecha = date('d-m-Y H:i:s');
$para='webmaster@misitio.com';
$asunto='Documento no encontrado.';
$mensaje='El documento: ' . $_SERVER['REQUEST_URI'] . ' no ha sido encontrado en el sitio: ' .$_SERVER['SERVER_NAME']. ' al tratar de ser accedido el ' . $fecha . ' desde la dirección ' . $_SERVER['HTTP_REFERER'];


        

mail($para, $asunto, $mensaje);
?>
<!--
Todo sea por el IE
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --> 
</body>
</html>