<?php
class dt_dependencia extends modulo_nd_datos_tabla
{
		function get_listado()
		{
			$sql = "SELECT
				t_d.nombre,
				t_d.sigla,
				t_d1.nombre as depende_de_nombre,
				t_t.nombre as tipo_nombre,
				t_l.localidad as localidad_nombre
			FROM
				dependencia as t_d	LEFT OUTER JOIN dependencia as t_d1 ON (t_d.depende_de = t_d1.sigla)
				LEFT OUTER JOIN tipo as t_t ON (t_d.tipo = t_t.id_tipo)
				LEFT OUTER JOIN localidad as t_l ON (t_d.localidad = t_l.id_localidad)
			ORDER BY nombre";
			return toba::db('modulo_nd')->consultar($sql);
		}
                
                //usado en carga_dependencias/ci_dependencias.php
                function get_datos($filtro = null){
                    $where = "";
                    
                    if(sizeof($filtro)==1){
                        if(isset($filtro['sigla'])){
                            $where = "WHERE t_d.sigla = '".$filtro['sigla']."'";
                        }
                    }
                    
                    $sql = "SELECT
				t_d.nombre,
				t_d.sigla,
                                t_d.depende_de,
				t_d1.nombre as depende_de_nombre,
                                t_t.id_tipo,
				t_t.nombre as nombre_tipo,
				t_l.localidad as localidad
			FROM
				dependencia as t_d	
                                LEFT OUTER JOIN dependencia as t_d1 ON (t_d.depende_de = t_d1.sigla)
				LEFT OUTER JOIN tipo as t_t ON (t_d.tipo = t_t.id_tipo)
				LEFT OUTER JOIN localidad as t_l ON (t_d.localidad = t_l.id_localidad)
			$where
                        ORDER BY nombre";
			return toba::db('modulo_nd')->consultar($sql);
                }

                function get_descripciones()
		{
			$sql = "SELECT sigla, nombre FROM dependencia ORDER BY nombre";
			return toba::db('modulo_nd')->consultar($sql);
		}








}
?>