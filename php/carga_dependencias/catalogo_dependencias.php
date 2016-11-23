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
                $obj->tipo($fila['id_tipo']);
                
		$this->items[$fila['sigla']] = $obj;
            }
            
            $this->ordenar();//Habilita el signo de colapsar/descolapsar el item
            $hijos = array();//Almacena los nodos iniciales
            //$this->items almacena las relaciones padre/hijos
            foreach ($this->items as $item) {
                    if (is_null($item->get_id_padre()))//Muestra solo los nodos que no tienen padre, los nodos iniciales
                        $hijos[] = $item;
                    
            }
            return $hijos;
        }
    }
    
	
}
?>

