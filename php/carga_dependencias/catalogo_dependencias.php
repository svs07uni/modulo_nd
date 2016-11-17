<?php
require_once('dependencia.php');
class catalogo_dependencias extends toba_catalogo_items_base 
{
    protected $usa_niveles = false;
    
    function cargar_dependencias($datos_base){
        
        if(!empty($datos_base)){
            foreach($datos_base as $pos=>$fila){
                $obj = new dependencia( $fila['nombre'], null, $fila['sigla'], $fila['depende_de']);
                $obj->set_nombre_largo($fila['nombre']);
                //$obj->set_imagen($fila['imagen_recurso_origen'], $fila['imagen']);
                $obj->tipo($fila['id_tipo']);
		$this->items[$fila['sigla']] = $obj;
            }
            
            $this->ordenar();//Habilita el signo de colapsar/descolapsar el item
            $hijos = array();
            foreach ($this->items as $item) {
                    if ($item->get_id_padre() == $raiz)
                            $hijos[] = $item;
            }
            return $hijos;
        }
    }
    /*
    function cargar($opciones, $raiz=null, $incluidos_forzados=array())
	{
		if (! is_null($raiz)) {
			$rs = toba::proyecto()->get_items_menu();
                        
			//ei_arbol($rs);
                        
			$this->items = array();
			if (!empty($rs)) {
				foreach ($rs as $fila) {
					if ($fila['carpeta']) {
						$obj = new dependencia( $fila['nombre'], null, $fila['item'], $fila['padre']);
                                                $obj->contiene(true);

					}else{
						$obj = new dependencia( $fila['nombre'], null, $fila['item'], $fila['padre']);	
					}				
					$obj->set_imagen($fila['imagen_recurso_origen'], $fila['imagen']);				
					$this->items[$fila['item']] = $obj;
				}
				$this->carpeta_inicial = $raiz;
				$this->mensaje = "";
				$this->ordenar();
			}
		}
	}
*/
	
}
?>

