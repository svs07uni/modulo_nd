<?php
class dt_tipo extends modulo_nd_datos_tabla
{
	function get_descripciones()
	{
		$sql = "SELECT id_tipo, nombre FROM tipo ORDER BY nombre";
		return toba::db('modulo_nd')->consultar($sql);
	}

}

?>