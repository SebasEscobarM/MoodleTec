<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_sharing_cart', language 'es_mx', version '4.4'.
 *
 * @package     block_sharing_cart
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activity_string'] = 'Actividad';
$string['async_restore_in_progress'] = 'Restaurando elemento compartido "{$a->modtext}"a la sección número {$a->section}';
$string['backup'] = 'Copiar al Carrito para Compartir';
$string['backup_heavy_load_warning_message'] = 'Si es que la sección contiene varias actividades, el tiempo de procesamiento será más tardado.';
$string['backupnotfound'] = 'Archivo de respaldo no encontrado';
$string['bulkdelete'] = 'Eliminar en masa';
$string['clicktomove'] = 'Clic para mover aquí';
$string['clipboard'] = 'Copiando este ítem compartido';
$string['confirm_backup'] = '¿Está seguro de querer copiar esta actividad/recurso al Carrito para Compartir?';
$string['confirm_backup_section'] = '¿ Quiere copiar esta sección del curso y sus actividades y recursos al Carrito para Compartir ?';
$string['confirm_delete'] = '¿Está Usted seguro de querer eliminar?';
$string['confirm_delete_selected'] = '¿Está Usted seguro de querer eliminar todos los ítems seleccionados?';
$string['confirm_restore'] = '¿Está seguro de querer copiar este ítem al curso?';
$string['confirm_userdata'] = '¿Quiere Usted incluir datos de usuario dentro de la copia de esta actividad/recurso?
OK - Copiar *con* datos del usuario
Cancelar - Copiar *sin* datos del usuario';
$string['conflict_description'] = '¿Desea sobrescribir la información de sección al curso?';
$string['conflict_description_note'] = '*Los formatos de resumen de sección  (color del font , imágenes, etc.) y configuraciones de disponibilidad anularán después de ser copiadas al curso.';
$string['conflict_no_overwrite'] = 'Conservar el nombre actual de sección <strong>"{$a}"</strong>';
$string['conflict_overwrite_title'] = 'Cambiar nombre de sección y configuraciones a <strong>"{$a}"</strong>';
$string['conflict_submit'] = 'Continuar';
$string['copy_activity'] = 'Copiar actividad';
$string['copy_activity_reason'] = 'Esta vista está disponible porque usted tiene acceso a respaldar actividades, pero no tiene acceso a gestionar/mover actividades.';
$string['copy_activity_title'] = 'Copiar actividad seleccionada';
$string['copy_section'] = 'Copiar sección';
$string['copy_section_title'] = 'Copiar sección seleccionada';
$string['copyhere'] = 'Copiar aquí';
$string['define_required_capabilities'] = 'Por favor defina las capacidades requeridas';
$string['delete_folder'] = 'y todo su contenido';
$string['drop_here'] = 'Soltar aquí...';
$string['folder_string'] = 'Carpeta:';
$string['forbidden'] = 'Usted no tiene permisos para acceder a este ítem compartido';
$string['inprogess_pleasewait'] = 'Espere por favor...';
$string['invalidoperation'] = 'Operación inválida detectada';
$string['label_image_replaced_text'] = '(Etiqueta: Imagen)';
$string['missing_capabilities'] = 'Capacidad necesaria faltante: {$a}';
$string['missing_capability'] = 'Capacidad necesaria faltante: {$a}';
$string['modal_bulkdelete_confirm'] = 'Eliminar seleccionado';
$string['modal_bulkdelete_title'] = 'Seguro que quiere eliminar';
$string['modal_checkbox'] = '¿Seguro que desea copiar datos del usuario? (por ejemplo. glosario/wiki/entradas de base de datos)';
$string['modal_checkbox_anonymize'] = '¿Desea hacer anónimos los datos del usuario?';
$string['modal_confirm_backup'] = 'Confirmar';
$string['modal_confirm_delete'] = 'Eliminar';
$string['movedir'] = 'Mover a la carpeta';
$string['no_backup_support'] = 'Sin soporte para respaldo para este módulo';
$string['notarget'] = 'Destino no encontrado';
$string['pluginname'] = 'Carrito para Compartir';
$string['privacy:metadata:block_sharing_cart'] = 'Aquí se almacenan los datos del carrito para compartir';
$string['privacy:metadata:block_sharing_cart:ctime'] = 'Hora de creación';
$string['privacy:metadata:block_sharing_cart:modicon'] = 'Ícono de módulo de actividad';
$string['privacy:metadata:block_sharing_cart:modname'] = 'El nombre del módulo de actividad';
$string['privacy:metadata:block_sharing_cart:modtext'] = 'El título del módulo de actividad';
$string['privacy:metadata:block_sharing_cart:tree'] = 'El título de la carpeta del carrito para compartir que se muestra en el bloque';
$string['privacy:metadata:block_sharing_cart:userid'] = 'La ID del usuario';
$string['privacy:metadata:block_sharing_cart:weight'] = 'Orden de elementos, ordenando en orden ascendente';
$string['privacy:metadata:block_sharing_cart_plugins'] = 'Los datos del carrito para compartir son almacenados aquí';
$string['privacy:metadata:block_sharing_cart_plugins:data'] = 'Datos del plugin del carrito para compartir';
$string['privacy:metadata:block_sharing_cart_plugins:plugin'] = 'El nombre del plugin';
$string['privacy:metadata:block_sharing_cart_plugins:userid'] = 'La ID del usuario';
$string['recordnotfound'] = 'Ítems compartidos no encontrados';
$string['requireajax'] = 'El carrito para compartir requiere AJAX';
$string['requirejs'] = 'El carrito para compartir requiere JavaScript habilitado en su navegador';
$string['restore'] = 'Copiar al curso';
$string['restore_heavy_load_warning_message'] = 'El tiempo de carga es más tardado, porque están siendo procesados más de 10 actividades/recursos.';
$string['section_name_conflict'] = 'Conflicto en sección';
$string['settings:add_to_sharing_cart'] = 'Añadir al carrito para compartir';
$string['settings:add_to_sharing_cart_desc'] = 'Elegir entre arrastrar y soltar o clic para método añadir para añadir módulos y secciones al carrito para compartir. -
El método de \'Clic para añadir\' es el estándar en el carrito para compartir, donde usted necesita hacer clic en el ícono de la canasta, antes de ser añadido al carrito  para compartir. -
El método de \'Arrastrar y soltar\' le permite a usted arrastrar y soltar módulos/actividades y secciones adentro del bloque del carrito para compartir o adentro del ícono de la canasta en el pie de página.
Por favor tenga en cuenta que esto solamente está soportado para Moodle 4.0+';
$string['settings:backup_mode'] = 'Modo de respaldo';
$string['settings:backup_mode_desc'] = 'Elegir entre proceso de respaldo inmediato o asincrónico';
$string['settings:backup_restore_mode_async'] = 'Asincrónico';
$string['settings:backup_restore_mode_immediate'] = 'Inmediato';
$string['settings:click_to_add'] = 'Clic para añadir';
$string['settings:drag_and_drop'] = 'Arrastrar y soltar';
$string['settings:restore_mode'] = 'Modo de restauración';
$string['settings:restore_mode_desc'] = 'Elegir entre proceso de restauración inmediato o asincrónico';
$string['settings:show_copy_activity_in_block'] = 'Mostrar el "Copiar actividad" dentro del bloque';
$string['settings:show_copy_activity_in_block_desc'] = 'Mostrar el "Copiar actividad" dentro del bloque del carrito para compartir, debajo de todos los módulo/actividades - Esto solamente está disponible si el usuario tiene la capacidad para respaldar actividades, pero no la capacidad para gestionar/mover actividades.';
$string['settings:show_copy_section_in_block'] = 'Mostrar el "Copiar sección" en bloque';
$string['settings:show_copy_section_in_block_desc'] = 'Mostrar a "Sección copiar" en el bloque del carrito para compartir, debajo de todos los módulos/actividades';
$string['settings:userdata_copyable_modtypes'] = 'Tipos de módulos copiables con datos de usuarios';
$string['settings:userdata_copyable_modtypes_desc'] = 'Al copiar una actividad al Carrito para Compartir, un diálogo muestra una opción para decidir si es que una copia de una actividad incluye o no sus datos del usuario, si este tipo de módulo es seleccionado en el caso de arriba y un operador tiene las capacidades <strong>moodle/backup:userinfo</strong>,
<strong>moodle/backup:anonymise</strong> y <strong>moodle/restore:userinfo</strong>.
(Por defecto, solamente los roles de administrador y Mánager tienen esas capacidades.)';
$string['settings:workaround_qtypes'] = 'Parche para tipos de preguntas';
$string['settings:workaround_qtypes_desc'] = 'El parche para el problema de la restauración de pregunta será realizado si se selecciona su tipo de pregunta. Sin embargo, cuando la pregunta a restaurarse ya existe, estos datos se verán como inconsistentes; este parche tratará de hacer otros duplicados en lugar de re-utilizar los datos existentes. Podría ser útil para evitar algunos errores en la restauración, tales como <i>error_question_match_sub_missing_in_db</i>.';
$string['sharing_cart'] = 'Carrito para Compartir';
$string['sharing_cart:addinstance'] = 'Añadir un nuevo bloque de carrito para compartir';
$string['sharing_cart_help'] = '<div>
    <strong>Copiar desde el curso hacia el Carrito para Compartir</strong>
        <p>Usted notará un pequeño ícono de "Copiar al Carrito para Compartir" que aparece después de cada recurso o actividad en un curso.
Haga clic en ese ícono para mandar una copia de ese recurso/actividad al Carrito para Compartir.
Solamente la actividad misma, sin datos del usuario, será clonada..</p>
    <strong>Copiar desde el Carrito para Compartir al curso</strong>
        <p>Haga clic en un ícono para "Copiar al curso" en el Carrito para Compartir y seleccione uno de los marcadores para destino en cada sección.
O haga clic en el ícono para "Cancelar" que está arriba de éstos.</p>
    <strong>Hacer carpetas adentro del Carrito para Compartir</strong>
        <p>Haga clic en un ícono para "Mover hacia adentro de una carpeta" en un ítem del Carrito para Compartir.
Aparecerá una caja para escritura para el nuevo nombre de la carpeta en caso de que no hubiera carpeta.
O Usted puede seleccionar una carpeta existente en la lista desplegable.
La cual será remplazada con una caja para ingresar texto si Usted hace clic en el ícono para "Editar".</p>
</div>';
$string['unexpectederror'] = 'Ocurrió un error inesperado';
$string['uninstalled_plugin_warning_title'] = 'Este plugin está des-instalado. El intentar recuperar esto sin re-instalar el plugin: {$a} causará errores. La restauración está deshabilitada';
$string['variouscourse'] = 'de varios cursos';
