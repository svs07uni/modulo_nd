<?php
class ci_dependencias extends modulo_nd_ci
{
    
    //-----------------------------------------------------------------------------------
	//---- arbol_dependencias -----------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__arbol_dependencias(toba_ei_arbol $arbol)
	{
                $dep = $this->dep('datos')->tabla('dependencia')->get_datos();
            
                //-- Se obtienen los nodos que formar�n parte del arbol
		require_once('catalogo_dependencias.php');
		$catalogo = new catalogo_dependencias();
                
                $nodos = $catalogo->cargar_dependencias($dep);
                
		//-- Se configura el arbol
		$arbol->set_mostrar_filtro_rapido(true);
		$arbol->set_nivel_apertura(0);
                $arbol->set_ancho_nombres('100px'); 
                
		$arbol->set_datos($nodos);
	}

	function evt__arbol_dependencias__cambio_apertura($apertura)
	{
	}

	function evt__arbol_dependencias__ver_propiedades($nodo)
	{
            $dep['sigla'] = $nodo;
            $this->dep('datos')->tabla('dependencia')->cargar($dep);
	}

	//-----------------------------------------------------------------------------------
	//---- form_dependencias ------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__form_dependencias(modulo_nd_ei_formulario $form)
	{
            if($this->dep('datos')->tabla('dependencia')->esta_cargada()){
                $dep = $this->dep('datos')->tabla('dependencia')->get(); 
                
                return $dep;
            }
	}

	function evt__form_dependencias__guardar($datos)
	{
            $this->dep('datos')->tabla('dependencia')->set($datos);
            $this->dep('datos')->tabla('dependencia')->sincronizar();
            $this->dep('datos')->tabla('dependencia')->resetear();
	}

	function evt__form_dependencias__cancelar()
	{
            $this->dep('datos')->tabla('dependencia')->resetear();
	}

}
?>