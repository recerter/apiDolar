<?php
set_time_limit(1000);
require_once("api.php");
$db_handle = new DBController();
$con = $db_handle->connectDB();
$precioDolar = new precio();
$cotizaciones = $con->query("SELECT * FROM dolar_cotizacion");
    while($rowCotizacion = $cotizaciones->fetch_array()){
        $cotizacion_compra = NULL;
        $cotizacion_venta = NULL;
        $cotizacion_valor = NULL;
        $valorCotizacion = $precioDolar->PrecioDolarSustraer($rowCotizacion["cotizacion_api"]);
                if(!empty($valorCotizacion["compra"])){
                    $cotizacion_compra = floatval($valorCotizacion["compra"]);
                }
                if(!empty($valorCotizacion["venta"])){
                    $cotizacion_venta = floatval($valorCotizacion["venta"]);
                }
                if(!empty($valorCotizacion["valor"])){
                    $cotizacion_valor = floatval($valorCotizacion["valor"]);
                }
                $precioDolar->updateCotizacion($rowCotizacion["cotizacion_api"], $cotizacion_compra, $cotizacion_venta, $cotizacion_valor);            
    }
?>