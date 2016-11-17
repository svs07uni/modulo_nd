<?php
class dt_localidad extends modulo_nd_datos_tabla
{
	function get_descripciones()
	{
		$sql = "SELECT id_localidad, localidad FROM localidad ORDER BY localidad";
		return toba::db('modulo_nd')->consultar($sql);
	}


}
?>