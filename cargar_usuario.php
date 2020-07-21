<?php
session_start();
error_reporting(0); 
include_once('database.php');

if(isset($_SESSION['User']))
{ 
    $User = $_SESSION['User'];
    $sql = "SELECT * FROM usuarios WHERE Username = '$User'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    { 
        $name = $row['Username'];
        $money = $row['Money'];
		$email = $row['Email'];
		$passwordxsilasmoscas = $row['Password'];
		$exp = $row['Experiencia'];
		$estaonline = $row['Online'];
		$idplayer = $row['ID'];
		$adm = $row['Admin'];
		$arrestado = $row['Registro'];
		$horasdejuego = $row['Sexo'];
		$numerotlf = $row['Numero'];
		$vida = $row['Vida'];
		$Chaleco = $row['Chaleco'];
		$crack = $row['Crack'];
        $score = $row['Nivel']; //selecti];
		$medicamentos = $row['Medicamentos'];
		$guia = $row['Agenda'];
		$piezas = $row['Materiales'];
		$repuestos = $row['Repuestos'];
		$radio = $row['Radio'];
		$totems = $row['totemscompletados'];
		$fz = $row['Moneda'];
		$pistola = $row['WP1'];
		$escopeta = $row['WP2'];
		$subfusil = $row['WP3'];
		$asalto = $row['WP4'];
		$rifle = $row['WP5'];
		$blanca = $row['WP6'];
		$granada = $row['WP7'];
		$regalo = $row['WP8'];
		$expcamionero = $row['ExpCamionero'];
		$expbasurero = $row['ExpBasurero'];
		$exparmero = $row['ExpArmero'];
		$expladron = $row['ExpLadron'];
		$exptransportista = $row['ExpTransportista'];
		$nivelcamionero = $row['NivelCamionero'];
		$nivelbasurero = $row['NivelBasurero'];
		$nivelarmero = $row['NivelArmero'];
		$nivelladron = $row['NivelLadron'];
		$niveltransportista = $row['NivelTransportista'];
		$nivelpiloto = $row['NivelPiloto'];
		$exppiloto = $row['ExpPiloto'];
		$fechaban = $row['fecha'];
		$razonban = $row['razon'];
		$ban = $row['ban'];
		$expfaltante = $row['expfaltante'];
		$ropa = $row['Skin'];
		$platabanco = $row['DineroB'];
		$numerocuentabancaria = $row['CuentaB'];
		$posibilidad = $row['changenamefree'];
		$auto1 = $row['Auto1'];
		$auto2 = $row['Auto2'];
		$auto3 = $row['Auto3'];
		$auto4 = $row['Auto4'];
		$faccion = $row['Faccion'];
    } 
} 
else header('location: ingresar.php');
$dinerototal = $money+$platabanco;
?>