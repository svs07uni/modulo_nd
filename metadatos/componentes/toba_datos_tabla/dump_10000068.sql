------------------------------------------------------------
--[10000068]--  DT - dependencia 
------------------------------------------------------------

------------------------------------------------------------
-- apex_objeto
------------------------------------------------------------

--- INICIO Grupo de desarrollo 10
INSERT INTO apex_objeto (proyecto, objeto, anterior, identificador, reflexivo, clase_proyecto, clase, punto_montaje, subclase, subclase_archivo, objeto_categoria_proyecto, objeto_categoria, nombre, titulo, colapsable, descripcion, fuente_datos_proyecto, fuente_datos, solicitud_registrar, solicitud_obj_obs_tipo, solicitud_obj_observacion, parametro_a, parametro_b, parametro_c, parametro_d, parametro_e, parametro_f, usuario, creacion, posicion_botonera) VALUES (
	'modulo_nd', --proyecto
	'10000068', --objeto
	NULL, --anterior
	NULL, --identificador
	NULL, --reflexivo
	'toba', --clase_proyecto
	'toba_datos_tabla', --clase
	'10000001', --punto_montaje
	'dt_dependencia', --subclase
	'datos/dt_dependencia.php', --subclase_archivo
	NULL, --objeto_categoria_proyecto
	NULL, --objeto_categoria
	'DT - dependencia', --nombre
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
	'2016-11-09 13:04:31', --creacion
	NULL  --posicion_botonera
);
--- FIN Grupo de desarrollo 10

------------------------------------------------------------
-- apex_objeto_db_registros
------------------------------------------------------------
INSERT INTO apex_objeto_db_registros (objeto_proyecto, objeto, max_registros, min_registros, punto_montaje, ap, ap_clase, ap_archivo, tabla, tabla_ext, alias, modificar_claves, fuente_datos_proyecto, fuente_datos, permite_actualizacion_automatica, esquema, esquema_ext) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000068', --objeto
	NULL, --max_registros
	NULL, --min_registros
	'10000001', --punto_montaje
	'1', --ap
	NULL, --ap_clase
	NULL, --ap_archivo
	'dependencia', --tabla
	NULL, --tabla_ext
	NULL, --alias
	'0', --modificar_claves
	'modulo_nd', --fuente_datos_proyecto
	'modulo_nd', --fuente_datos
	'1', --permite_actualizacion_automatica
	'public', --esquema
	'public'  --esquema_ext
);

------------------------------------------------------------
-- apex_objeto_db_registros_col
------------------------------------------------------------

--- INICIO Grupo de desarrollo 10
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000068', --objeto
	'10000033', --col_id
	'nombre', --columna
	'C', --tipo
	'0', --pk
	'', --secuencia
	'100', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	NULL, --externa
	'dependencia'  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000068', --objeto
	'10000034', --col_id
	'sigla', --columna
	'C', --tipo
	'1', --pk
	'', --secuencia
	'6', --largo
	NULL, --no_nulo
	'1', --no_nulo_db
	NULL, --externa
	'dependencia'  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000068', --objeto
	'10000035', --col_id
	'depende_de', --columna
	'C', --tipo
	'0', --pk
	'', --secuencia
	'6', --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	NULL, --externa
	'dependencia'  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000068', --objeto
	'10000036', --col_id
	'tipo', --columna
	'E', --tipo
	'0', --pk
	'', --secuencia
	NULL, --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	NULL, --externa
	'dependencia'  --tabla
);
INSERT INTO apex_objeto_db_registros_col (objeto_proyecto, objeto, col_id, columna, tipo, pk, secuencia, largo, no_nulo, no_nulo_db, externa, tabla) VALUES (
	'modulo_nd', --objeto_proyecto
	'10000068', --objeto
	'10000037', --col_id
	'localidad', --columna
	'E', --tipo
	'0', --pk
	'', --secuencia
	NULL, --largo
	NULL, --no_nulo
	'0', --no_nulo_db
	NULL, --externa
	'dependencia'  --tabla
);
--- FIN Grupo de desarrollo 10
