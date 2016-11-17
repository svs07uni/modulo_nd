<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class modulo_nd_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'modulo_nd_ci' => 'extension_toba/componentes/modulo_nd_ci.php',
		'modulo_nd_cn' => 'extension_toba/componentes/modulo_nd_cn.php',
		'modulo_nd_datos_relacion' => 'extension_toba/componentes/modulo_nd_datos_relacion.php',
		'modulo_nd_datos_tabla' => 'extension_toba/componentes/modulo_nd_datos_tabla.php',
		'modulo_nd_ei_arbol' => 'extension_toba/componentes/modulo_nd_ei_arbol.php',
		'modulo_nd_ei_archivos' => 'extension_toba/componentes/modulo_nd_ei_archivos.php',
		'modulo_nd_ei_calendario' => 'extension_toba/componentes/modulo_nd_ei_calendario.php',
		'modulo_nd_ei_codigo' => 'extension_toba/componentes/modulo_nd_ei_codigo.php',
		'modulo_nd_ei_cuadro' => 'extension_toba/componentes/modulo_nd_ei_cuadro.php',
		'modulo_nd_ei_esquema' => 'extension_toba/componentes/modulo_nd_ei_esquema.php',
		'modulo_nd_ei_filtro' => 'extension_toba/componentes/modulo_nd_ei_filtro.php',
		'modulo_nd_ei_firma' => 'extension_toba/componentes/modulo_nd_ei_firma.php',
		'modulo_nd_ei_formulario' => 'extension_toba/componentes/modulo_nd_ei_formulario.php',
		'modulo_nd_ei_formulario_ml' => 'extension_toba/componentes/modulo_nd_ei_formulario_ml.php',
		'modulo_nd_ei_grafico' => 'extension_toba/componentes/modulo_nd_ei_grafico.php',
		'modulo_nd_ei_mapa' => 'extension_toba/componentes/modulo_nd_ei_mapa.php',
		'modulo_nd_servicio_web' => 'extension_toba/componentes/modulo_nd_servicio_web.php',
		'modulo_nd_comando' => 'extension_toba/modulo_nd_comando.php',
		'modulo_nd_modelo' => 'extension_toba/modulo_nd_modelo.php',
	);
}
?>