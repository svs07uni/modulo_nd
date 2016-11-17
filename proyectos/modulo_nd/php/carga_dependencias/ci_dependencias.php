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
		$arbol->set_mostrar_filtro_rapido(false);
		$arbol->set_nivel_apertura(0);
                $arbol->set_ancho_nombres('100px');                
		$arbol->set_datos($nodos);
	}

	function evt__arbol_dependencias__cambio_apertura($apertura)
	{
	}

	function evt__arbol_dependencias__ver_propiedades($nodo)
	{
	}

	//-----------------------------------------------------------------------------------
	//---- form_dependencias ------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__form_dependencias(modulo_nd_ei_formulario $form)
	{
	}

	function evt__form_dependencias__guardar($datos)
	{
	}

	function evt__form_dependencias__cancelar()
	{
	}

}
?>