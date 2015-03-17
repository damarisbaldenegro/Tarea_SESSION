<?php
	session_start();
	$_SESSION['User'] = $_POST['User'];
	$_SESSION['Pass'] = $_POST['Pass'];

	if($_SESSION['User']=='root' && $_SESSION['Pass']=='123')
	{
	 echo 'Bienveni@ '.$_SESSION['User']."<a href=Inicio.php>Cerrar Sesi&oacute;n</a><br><br>";;
	 

	}
	else
	{
		
	head('Location: Inicio.php');
	}
?>
<?php
    if (!isset($_SESSION['visitas'])) {
      echo 'Esta es su primera visita.';
    } else {
      echo 'Visit&oacute; esta p&aacute;gina en: <br />';
      foreach ($_SESSION['visitas'] as $v) {
        echo date('d M Y h:i:s', $v) . '<br />';
      }
    }
    ?>
<?php
// añade el sello temporal de la visita actual
$_SESSION['visitas'] [] = mktime();
?>