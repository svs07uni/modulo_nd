------------------------------------------------------------
--[10000070]--  DT - provincia 
------------------------------------------------------------

------------------------------------------------------------
-- apex_objeto
------------------------------------------------------------

--- INICIO Grupo de desarrollo 10
INSERT INTO apex_objeto (proyecto, objeto, anterior, identificador, reflexivo, clase_proyecto, clase, punto_montaje, subclase, subclase_archivo, objeto_categoria_proyecto, objeto_categoria, nombre, titulo, colapsable, descripcion, fuente_datos_proyecto, fuente_datos, solicitud_registrar, solicitud_obj_obs_tipo, solicitud_obj_observacion, parametro_a, parametro_b, parametro_c, parametro_d, parametro_e, parametro_f, usuario, creacion, posicion_botonera) VALUES (
	'modulo_nd', --proyecto
	'10000070', --objeto
	NULL, --anterior
	NULL, --identificador
	NULL, --reflexivo
	'toba', --clase_proyecto
	'toba_datos_tabla', --clase
	'10000001', --punto_montaje
	NULL, --subclase
	NULL, --subclase_archivo
	NULL, --objeto_categoria_proyecto
	NULL, --objeto_categoria
	'DT - provincia', --nombre
	NULL, --titulo
	NULL, --colapsable
	NULL, --descripcion
	'modulo_nd', --fuente_datos_proyecto
	'modulo_nd', --fuente_datos
	NULL, --solicitud_registrar
	NULL, --solicitud_obj_obs_tipo
	NULL, --solicitud_obj_observacion
	NULL, --parametro_a
	NULL, --parametro_b
	NULL, --parametro_c
	NULL, --parametro_d
	NULL, --parametro_e
	NULL, --parametro_f
	NULL, --usuario
	'2016-11-09 13:06:58', --creacion
	NULL  --posicion_botonera
);
--- FIN Grupo de desarrollo 10

------------------------------------------------------------
-- apex_objeto_db_registros
------------------------------------------------------------
INSERT INTO apex_objeto_db_registros (objeto_proyecto, objeto, max_registros, min_registros, punto_montaje, ap, ap_clase, ap_archivo, tabla, tabla_ext, alias, modificar_claves, fuente_datos_proyecto, fuente_datos, permite_actualizacion_automatica, esquema, esquema_ext) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000070', --objeto
	NULL, --max_registros
	NULL, --min_registros
	'10000001', --punto_montaje
	'1', --ap
	NULL, --ap_clase
	NULL, --ap_archivo
	'provincia', --tabla
	NULL, --tabla_ext
	NULL, --alias
	'0', --modificar_claves
	'modulo_nd', --fuente_datos_proyecto
	'modulo_nd', --fuente_datos
	'1', --permite_actualizacion_automatica
	NULL, --esquema
	'public'  --esquema_ext
);

------------------------------------------------------------
-- apex_objeto_db_registros_col
------------------------------------------------------------

--- INICIO Grupo de desarrollo 10
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000070', --objeto
	'10000042', --col_id
	'codigo_pcia', --columna
	'E', --tipo
	'1', --pk
	'provincia_codigo_pcia_seq', --secuencia
	NULL, --largo
	NULL, --no_nulo
	'1', --no_nulo_db
	NULL, --externa
	'provincia'  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000070', --objeto
	'10000043', --col_id
	'descripcion', --columna
	'C', --tipo
	'0', --pk
	'', --secuencia
	'50', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	NULL, --externa
	'provincia'  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000070', --objeto
	'10000044', --col_id
	'pais', --columna
	'E', --tipo
	'0', --pk
	'', --secuencia
	NULL, --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	NULL, --externa
	'provincia'  --tabla
);
--- FIN Grupo de desarrollo 10
