<?php

class dependencia extends toba_nodo_basico
{
        protected $imagen;
	protected $imagen_origen;
	protected $icono = "item.gif";	
	protected $propiedades = true;
        
        protected $tipo;
		
	function tipo($tipo_dep){
            $this->tipo = $tipo_dep;
            
            if($tipo_dep){//es una carpeta entonces cambiar el icono
                $this->icono = "nucleo/carpeta.gif";
            }
        }
        
        function set_nombre_largo($nombre){
            $this->nombre_largo = $nombre;
        }
	
	function set_camino($camino)
	{
		
	}
	
	function set_imagen($origen, $imagen)
	{
		$this->imagen_origen = $origen;
		$this->imagen = $imagen;
	}
	
	function get_iconos()
	{
		if (isset($this->imagen) && ($this->imagen != '') && ($this->imagen_origen != '')) {
			if ($this->imagen_origen == 'apex') {
				$imagen = toba_recurso::imagen_toba($this->imagen, false);	
			} else {
				$imagen = toba_recurso::url_proyecto($this->proyecto).'/img/'.$this->imagen;
			}
		}
		if (!isset($imagen)) {
			$imagen = toba_recurso::imagen_toba($this->icono, false);
		}
		$iconos = array();
		$iconos[] = array('imagen' => $imagen, 'ayuda' => $this->nombre_corto);
		
		return $iconos;
	}
}
?>

