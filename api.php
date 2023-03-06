<?php 
require_once ("DBController.php");
class precio {

    public function PrecioDolar($cotizacion_api){
        $db_handle = new DBController();
        $query = "SELECT * FROM dolar_cotizacion WHERE cotizacion_api = ?";
        $result = $db_handle->runQuery($query, 's', array($cotizacion_api));
        return $result[0];
    }

    public function PrecioDolarSustraer($tipo){
        $url = file_get_contents('http://dolarhoy.com/cotizaciondolar'.$tipo.'');
        $precioCompra = NULL;
        $precioVenta = NULL;
 
        //creamos nuevo DOMDocument y cargamos la url
        $dom = new DOMDocument();
        @$dom->loadHTML($url);
    
        //obtenemos todos los div de la url
        $divs = $dom->getElementsByTagName( 'div' );
        
        //recorremos los divs
        foreach( $divs as $div ){
            if( $div->getAttribute( 'class' ) === 'topic' ){
                $title = $div->nodeValue;
            }
            if( $div->getAttribute( 'class' ) === 'value' ){
                $rating = $div->nodeValue;
                if($title == "Compra"){
                    $precioCompra = substr($rating, 1);
                }elseif($title == "Venta"){
                    $precioVenta = substr($rating, 1);
                }
            }
        }
        return ["compra" => $precioCompra, "venta" => $precioVenta];
    }

    function updateCotizacion($cotizacion_api, $cotizacion_compra, $cotizacion_venta)
    {
        $db_handle = new DBController();
        $query = "UPDATE dolar_cotizacion SET cotizacion_compra = ?, cotizacion_venta = ?, cotizacion_fecha = CURRENT_TIMESTAMP  WHERE cotizacion_api = ?";
        $db_handle->update($query, 'sss', array($cotizacion_compra, $cotizacion_venta, $cotizacion_api));
    }
    
    function updateCierre(){
        $db_handle = new DBController();
        $con = $db_handle->connectDB();
        $rowDolar = $con->query("SELECT cotizacion_api, 	cotizacion_compra, cotizacion_venta FROM dolar_cotizacion");
        while($tipoDolar = $rowDolar->fetch_array()){
            $query = "INSERT INTO dolar_historialcierre (cierre_tipo, cierre_precioCompra, cierre_precioVenta) values (?, ?, ?)";
            $result = $db_handle->insert($query, 'sss', array($tipoDolar["cotizacion_api"], $tipoDolar["cotizacion_compra"], $tipoDolar["cotizacion_venta"])); 
        }
        return $result;
    }

}

if(isset($_GET['tipoDolar'])){
	$subDolar = new precio();
	header('Content-type: application/json');
	$substipoDolar = explode('/',$_GET['tipoDolar'], );
	if(isset($substipoDolar[2])){
		print_r(json_encode($subDolar->PrecioDolar($substipoDolar[2])));
	}else{
		print_r(json_encode($subDolar->PrecioDolar($substipoDolar[1])));
	}
}
