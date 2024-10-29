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
 * Strings for component 'publication', language 'es_mx', version '4.4'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Añadir archivos';
$string['allfiles'] = 'Envíos de archivo';
$string['allowedfiletypes'] = 'Tipos de archivo aceptados';
$string['allowedfiletypes_err'] = '¡ Revise lo que puso! Extensión de archivo o separadores inválidos';
$string['allowedfiletypes_help'] = 'Los tipos de archivo aceptados pueden ser restringidos al ingresar una lista separada por comas de mimetypes, como por ejemplo \'video/mp4, audio/mp3, image/png, image/jpeg\', o extensiones de archivo incluyendo el punto, como por ejemplo \'.png, .jpg\'. Si el campo se deja vacío, entonces todos los tipos de archivo están permitidos.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Los detalles de la tarea y el formato para envío estarán disponibles en <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'A partir de';
$string['allowsubmissionsfromdate_help'] = 'Si se habilita, los estudiantes no podrán enviar antes de esta fecha. Si se deshabilita los estudiantes podrán enviar desde ahorita mismo.';
$string['allowsubmissionsfromdate_import'] = 'Aprobación a partir de';
$string['allowsubmissionsfromdate_upload'] = 'Subir a partir de';
$string['allowsubmissionsfromdatesummary'] = 'Esta Tarea aceptará envíos a partir de <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Siempre  mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la Descripción de la Tarea de arriba solamente estará visible para los estudiantes a partir de la fecha de "Permitir envíos a partir de".';
$string['approval_required'] = 'Decisión pendiente';
$string['approval_timeover'] = 'Usted solamente puede cambiar su consentimiento durante el período de edición.';
$string['approvalchange'] = 'Estado de publicación cambiado';
$string['approvalfromdate'] = 'Aprobación a partir de';
$string['approvalfromdate_help'] = 'El estado de aprobación NO puede ser cambiado antes de esta fecha. Esta configuración solo es relevante cuando la aprobación de Estudiante o de Grupo no sea automática.';
$string['approvalsettings'] = 'Configuraciones de publicación';
$string['approvaltodate'] = 'Aprobación hasta';
$string['approvaltodate_help'] = 'El estado de aprobación NO puede ser cambiado después de esta fecha. Esta configuración solo es relevante cuando la aprobación de Estudiante o de Grupo no sea automática.';
$string['approvaltodatevalidation'] = 'La fecha de aprobación hasta cierta fecha debe ser después d ela fecha de aprobación a partir de.';
$string['approved'] = 'Aprobado';
$string['approveusers'] = 'Dar aprobación';
$string['assignment'] = 'Tarea';
$string['assignment_help'] = 'Elija la tarea para importar archivos desde envíos individuales o de grupo.';
$string['assignment_notfound'] = 'La tarea desde la cual fueron importados los archivos, ya no pudo encontrarse.';
$string['assignment_notset'] = 'No se han elegido Tareas.';
$string['availability'] = 'Período de edición (subir o aprobar)';
$string['choose'] = 'Elija por favor...';
$string['completiondetail:upload'] = 'Subir un archivo';
$string['completionupload'] = 'El estudiante debe subir un archivo';
$string['configautoimport'] = 'Si Usted prefiere que los envíos de los estudiantes sean importados automáticamente dentro de las instancias de carpeta del estudiante. Esta característica puede ser habilitada/deshabilitada para cada instancia de carpeta del estudiante en forma separada.';
$string['configmaxbytes'] = 'Tamaño máximo por defecto para todos los archivos en la carpeta del estudiante.';
$string['configmaxfiles'] = 'Número máximo por defecto de anexos permitidos por usuario.';
$string['configobtainstudentapproval'] = 'Los documentos son visibles después del consentimiento del estudiante.';
$string['configobtainteacherapproval'] = 'Los documento de los estudiantes por defecto son visibles para todos los otros participante.';
$string['configrequiremodintro'] = 'Deshabilite esta opción si no desea forzar a los usuarios a que escriban descripciones de cada actividad.';
$string['courseuploadlimit'] = 'Límite de subidas del curso';
$string['currentlynotapproved'] = '* Actualmente no-aprobado o rechazado para publicación..';
$string['cutoffdate'] = 'Fecha límite';
$string['cutoffdate_help'] = 'Si se configura, las tareas no aceptarán envíos después de esta fecha si no hubiera una extensión.';
$string['cutoffdate_import'] = 'Última aprobación hasta';
$string['cutoffdate_upload'] = 'Última posibilidad de Subida hasta';
$string['cutoffdatefromdatevalidation'] = 'La fecha de corte debe ser posterior a la fecha de "permitir envíos a partir de".';
$string['cutoffdatevalidation'] = 'La fecha de corte no puede ser antes de la fecha esperada.';
$string['details'] = 'Detalles';
$string['downloadall'] = 'Descargar todos los envíos de archivos';
$string['duedate'] = 'Hasta';
$string['duedate_help'] = 'Esta es la fecha para la cual es esperada la tarea. Se seguirán permitiendo los envíos después de esta fecha, pero todos los envíos posteriores a esta fecha serán marcados como tardíos. Para impedir los envíos después de una cierta fecha - configure la fecha_de_corte de la Tarea.';
$string['duedate_import'] = 'Probar para';
$string['duedate_upload'] = 'Subir a';
$string['duedatevalidation'] = 'La fehca esperada debe ser despues de la fecha de "permitir envíos después de ".';
$string['edit_timeover'] = 'Los archivos solamente pueden ser editados dentro del período de edición.';
$string['edit_uploads'] = 'Subir/editar archivos';
$string['email:filechange:footer'] = '</ul><br />or favor compruebe si su permso para publicación es requerido.';
$string['email:filechange_import:header'] = 'Lo siguientes archivos de la Tarea <b>\'{$a->assign}\'</b> fueron importados dentro de <b>\'{$a->publication}\'</b> en {$a->dayupdated} a las {$a->timeupdated}:<br /><ul>';
$string['email:filechange_import:subject'] = 'Archivo(s) importado(s)';
$string['email:filechange_upload:header'] = '<b>{$a->username}</b> ha subido los siguienets archivos a  <b>\'{$a->publication}\'</b> en {$a->dayupdated} a las {$a->timeupdated}:<br /><ul>';
$string['email:filechange_upload:subject'] = 'Archivo(s) subido(s)';
$string['email:statuschange:filename'] = '<li>\'{$a->filename}\' a \'<b>{$a->apstatus}</b>\'</li>';
$string['email:statuschange:footer'] = '</ul>';
$string['email:statuschange:header'] = 'El estado de publicación de lso archivos siguientes <b>\'{$a->publication}\'</b> fue cambiado en {$a->dayupdated} a las {$a->timeupdated} por <b>{$a->username}</b>:<br /><ul>';
$string['email:statuschange:subject'] = 'Estado de publicación cambiado';
$string['entiresperpage'] = 'Participantes mostrados por página';
$string['eventpublicationapprovalchanged'] = 'Aprobación de archivo de publicación cambiada';
$string['eventpublicationduedateextended'] = 'Fecha esperada de publicación  extendida';
$string['eventpublicationfiledeleted'] = 'Archivo de publicación eliminado';
$string['eventpublicationfileimported'] = 'Archivo de publicación importado';
$string['eventpublicationfileuploaded'] = 'Archivo de publicación subido';
$string['extensionduedate'] = 'Extensión de fecha esperada';
$string['extensionnotafterduedate'] = 'La extensión de fecha esperada debe ser después de la fecha esperada.';
$string['extensionnotafterfromdate'] = 'La extensión de fecha esperada debe ser después de la fecha a partir de la cual se permiten los envíos';
$string['extensionto'] = 'Extensión para';
$string['filedetails'] = 'Detalles';
$string['filesofthesetypes'] = 'Pueden añadirse archivos de estos tipos:';
$string['filter'] = 'Filtro';
$string['filter:allfiles'] = 'Todos los envíos de archivo';
$string['filter:approvalrequired'] = 'Decisión pendiente';
$string['filter:approved'] = 'Envíos de archivo aprobados';
$string['filter:nofiles'] = 'Sin envío de archivos';
$string['filter:nofilter'] = 'Sin filtro';
$string['filter:rejected'] = 'Envíos de archivo rechazados';
$string['giveapproval'] = 'Dar aprobación';
$string['go'] = 'Ir';
$string['grantextension'] = 'Otorgar extensión';
$string['group_approved'] = 'Aprobado por todos los miembros del grupo.';
$string['guideline'] = 'Publicación de envíos de archivo';
$string['hidden'] = 'No publicado';
$string['importfrom_err'] = 'Usted tiene que elegir una tarea desde donde desea importar envíos de archivo.';
$string['maxbytes'] = 'Tamaño máximo de anexo';
$string['maxbytes_help'] = 'Archivos subidos por estudiantes pueden ser hasta de este tamaño.';
$string['maxfiles'] = 'Número máximo de anexos';
$string['maxfiles_help'] = 'Cada estudiante podrá subir hasta este número de archivos para su envío.';
$string['messageprovider:publication_updates'] = 'Notificaciones de publicación';
$string['mode'] = 'Modo';
$string['mode_help'] = 'Elija si es que los estudiantes pueden subir documentos aquí o si su envío de una tarea deberá de ser importado.';
$string['modeimport'] = 'Importar archivos desde una actividad de Tarea';
$string['modeupload'] = 'Subir archivos directamente en la actividad actual';
$string['modulename'] = 'Carpeta del estudiante';
$string['modulename_help'] = 'La carpeta del estudiante ofrece las siguientes características:

* Los participantes pueden subir documentos que están disponibles inmediatamente para otros participante o que solamente están disponibles después de que los documentos hayan sido revisados y se haya dado su consentimiento.
* Puede elegirse una Tarea como la base para una carpeta del estudiante. El profesor puede decidir cuales documentos de la carpeta son visibles para todos los participantes. Los profesores también pueden permitir que los participantes decidan si es que sus documentos serán visibles para otros.';
$string['modulenameplural'] = 'Carpetas de estudiantes';
$string['myfiles'] = 'Archivos propios';
$string['mygroupfiles'] = 'Mis archivos del grupo';
$string['name'] = 'Nombre';
$string['noentries'] = 'Sin entradas';
$string['nofiles'] = 'Sin archivos disponibles';
$string['nofilestodisplay'] = 'Actualmente no hay archivos disponibles o aun no publicados.';
$string['nofilestozip'] = 'Sin archivos para comprimir en ZIP';
$string['nonexistentfiletypes'] = 'Los siguientes tipos de archivos no fueron reconocidos: {$a}';
$string['nopublicationsincourse'] = 'No hay instancia de carpeta de estudiante en este curso.';
$string['nothing_to_show_groups'] = 'Nada para mostrar - sin grupos disponibles';
$string['nothing_to_show_users'] = 'Nada para mostrar - sin estudiantes disponibles';
$string['nothingtodisplay'] = 'No hay entradas para mostrar';
$string['notice'] = '<strong>Aviso: </strong>';
$string['notice_changes_possible_in_original'] = 'Los acmbios a archivos existetes solo son posibles en la actividad de tarea original.';
$string['notice_files_imported'] = 'Los archivos mostrados son importados desde una actividad de tarea.';
$string['notice_files_imported_group'] = 'Los archivos mostrados son de un envío de grupo, importados de una actividad de tarea.';
$string['notice_group_all_teachernotrequired'] = 'Los archivos solo serán publicados para todos los estudiantes con la aprobación de  <strong>TODOS los miembros del grupo.</strong>';
$string['notice_group_one_teachernotrequired'] = 'Los archivos solo serán publicados para todos los estudiantes con la aprobación de  <strong>AL MENOS UN miembro del grupo.</strong>';
$string['notice_group_one_teacherrequired'] = 'Los archivos solo serán publicados para todos los estudiantes con la aprobación de  <strong>AL MENOS UN miembro del grupo y el profesor.</strong> Los profesores se reservan el dercho de rechazar la publicación de sus archivos en cualquier momento.';
$string['notice_import_studentnotrequired_teachernotrequired'] = 'Los archivos serán publicados (serán hechos visibles para todos) <strong>automáticamente..</strong>';
$string['notice_import_studentnotrequired_teacherrequired'] = 'Los archivos serán publicados (serán hechos visibles para todos)  solo <strong>después de la aprobación de profesores.</strong>  Los profesores se reservan el dercho de rechazar la publicación de sus archivos en cualquier momento.';
$string['notice_import_studentrequired_teachernotrequired'] = 'Los archivos serán publicados (serán hechos visibles para todos)   después de <strong>su aprobación de usted.</strong>';
$string['notice_import_studentrequired_teacherrequired'] = 'Los archivos serán publicados (serán hechos visibles para todos) después de <strong>su aprobación de usted y la aprobación de los profesores.</strong>  Los profesores se reservan el dercho de rechazar la publicación de sus archivos en cualquier momento.';
$string['notice_upload_studentnotrequired_teachernotrequired'] = 'Todos los archivos que suba aquí serán publicados (serán hechos visibles para todos)  <strong>automáticamente.</strong>';
$string['notice_upload_studentnotrequired_teacherrequired'] = 'Todos los archivos que suba aquí serán publicados (serán hechos visibles para todos)  después de <strong>su aprobación de usted y la aprobación de los profesores.</strong>  Los profesores se reservan el dercho de rechazar la publicación de sus archivos en cualquier momento.';
$string['notice_upload_studentrequired_teachernotrequired'] = 'Todos los archivos que suba aquí serán publicados (serán hechos visibles para todos)  después de <strong>su aprobación de usted.</strong';
$string['notice_upload_studentrequired_teacherrequired'] = 'Todos los archivos que suba aquí serán publicados (serán hechos visibles para todos)  después de <strong>su aprobación de usted y la aprobación de los profesores.</strong>  Los profesores se reservan el dercho de rechazar la publicación de sus archivos en cualquier momento.';
$string['notifications'] = 'Notificaciones';
$string['notify:filechange'] = 'Notificaciones acerca de archivos enviados o importados';
$string['notify:filechange_admin'] = 'Configuración predeterminada de notificación apara cambios de archivo - enviado o importado';
$string['notify:filechange_help'] = 'Dependiendo de la configuración, si se habilita, los estudiantes y/o los profesores recibirán una notificación cuando los estudiantes suban o cambien un archivo, o cuando el archivo es importado o actualizado desde una actividad de tarea.';
$string['notify:setting:0'] = 'Sin notificaciones';
$string['notify:setting:1'] = 'Solo profesores';
$string['notify:setting:2'] = 'Solo estudiantes';
$string['notify:setting:3'] = 'Ambos, profesores y estudiantes';
$string['notify:statuschange'] = 'Notificaciones acerca de cambios del estado de publicación';
$string['notify:statuschange_admin'] = 'Configuración predeterminada de notificaciones acerca de cambios del estado de publicación';
$string['notify:statuschange_help'] = 'Dependiendo de la configuración, si se habilita, los estudiantes y/o los profesores recibirán una notificación cuandoel estado de la publicación de uno de los archivos sea cambiado.';
$string['notifystudents'] = 'Notificar a estudiantes acerca de cambios en la publicaciónn';
$string['notifystudents_help'] = 'Si se habilita, los estudiantes recibirán una notificación cuando cambie el estado de alguno de sus archivos subidos.';
$string['notifyteacher'] = 'Notificar a profesores acerca de archivos subidos';
$string['notifyteacher_help'] = 'Si se habilita, los evaluadores recibirán una notificación cuando un estudiante suba un archivo,';
$string['obtainapproval_automatic'] = 'Automático';
$string['obtainapproval_required'] = 'Requerido';
$string['obtaingroupapproval'] = 'Aprobación por grupo';
$string['obtaingroupapproval_admin'] = 'Configuración predeterminada de aprobación por grupo';
$string['obtaingroupapproval_admin_desc'] = 'Esta configuración determina la configuración predeterminada de aprobación para miembros del grupo. Esta configuración se vuelve relevante <strong>solo</strong> cuando el modo es configurado a "Importar archivos desde una actividad de Tarea" y la tarea tiene envío grupal.';
$string['obtaingroupapproval_all'] = 'Requerido de TODOS los miembros';
$string['obtaingroupapproval_single'] = 'Requerido de por lo menos UN miembro';
$string['obtaingroupapproval_title'] = 'Aprobación de grupo';
$string['obtainstudentapproval'] = 'Aprobación de estudiante';
$string['obtainstudentapproval_admin'] = 'Configuración predeterminada de aprobación de estudiante';
$string['obtainstudentapproval_admin_desc'] = 'esta configuración determina la configuración predeterminada de aprobación por estudiantes.';
$string['obtainstudentapproval_help'] = 'Decida si se obtendrá aprobación por parte del estudiante: <br><ul><li> SI- los archivos serán visibles solamnte después de que el estudiante lo apruebe. El profesor puede seleccioanr estudiantes/archivos individuales a los cuales pedirles aprobación.</li><li> NO - No se obtendrá aprobación del estudiante mediante Moodle. La visibilidad del archivo es solamente la decisiónd el profesor.</li></ul>';
$string['obtainstudentapproval_no'] = 'Automática';
$string['obtainstudentapproval_yes'] = 'Requerida';
$string['obtainteacherapproval'] = 'Aprobación de profesor';
$string['obtainteacherapproval_admin'] = 'Configuración predeterminada de aprobación de profesor';
$string['obtainteacherapproval_admin_desc'] = 'esta configuración determina la configuración predeterminada de aprobación para profesores.';
$string['obtainteacherapproval_help'] = 'Decida si es que los archivos serán hechos visibles inmediatamente al subirlos o no: <br><ul><li> SI- todos los archivos serán visibles para todos de inmediato</li><li> NO - los archivos serán publicados solamente después de la aprobación por el profesor</li></ul>';
$string['obtainteacherapproval_no'] = 'Automática';
$string['obtainteacherapproval_yes'] = 'Requerida';
$string['optionalsettings'] = 'Opciones';
$string['overdue'] = 'Fecha límite de período de edición ha pasado';
$string['overview'] = 'Vista general';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de la carpeta del estudiante';
$string['pluginname'] = 'Carpeta del estudiante';
$string['privacy:metadata:approval'] = 'Si es que el miembro de grupo la aha aprobado o rechazado para publicación.';
$string['privacy:metadata:contenthash'] = 'Hash SHA1 del contenido del archivo, usado para determinar si el archivo cambió.';
$string['privacy:metadata:extduedates'] = 'Almacena información acerca de fechas esperadas anuladas/extendidas para mod_publication.';
$string['privacy:metadata:extensionduedate'] = 'La fecha esperada efectiva para estudiantes está siendo anulada/extendida.';
$string['privacy:metadata:fileid'] = 'Identificador del archivo.';
$string['privacy:metadata:filename'] = 'El nombre del archivo.';
$string['privacy:metadata:files'] = 'Almacena información (identificador, a quien pertenece, de donde viene, hash del contenido, nombre del archivo y si fue aprobado por profesor o estudiante) acerca de archivos subidos/importados dentro de mod_publication.';
$string['privacy:metadata:groupapproval'] = 'Almacena información acerca de aprobación o rechazo de archivos de miembros de grupo importados desde envíos de grupo.';
$string['privacy:metadata:publicationfileexplanation'] = 'Los archivos y los envíos de texto en línea convertidos por este plugin son almacenados vía API de archivo de Moodle.';
$string['privacy:metadata:publicationperpage'] = '¡Cuantas entradas deberían de mostrarse en una sola página de tabla!';
$string['privacy:metadata:studentapproval'] = 'Si es que el estudiante ha aprobado o rechazado la publicación de un archivo.';
$string['privacy:metadata:teacherapproval'] = 'Si es que el profesor ha aprobado o rechazado la publicación de un archivo.';
$string['privacy:metadata:timecreated'] = 'La hora y fecha de cuando fue creado el registro de datos.';
$string['privacy:metadata:timemodified'] = 'La hora y fecha más reciente de cuando fue actualizado/modificado el registro de datos.';
$string['privacy:metadata:type'] = 'Marca el origen del archivo (subido por estudiante, importado desde envío de tarea o texto_en_línea convertido desde envío de tarea).';
$string['privacy:metadata:userid'] = 'Identificador del usuario.';
$string['privacy:path:files'] = 'Archivos';
$string['privacy:path:resources'] = 'Recursos';
$string['privacy:type:import'] = 'Archivo importado';
$string['privacy:type:onlinetext'] = 'texto_en_línea importado';
$string['privacy:type:upload'] = 'Archivo subido';
$string['publication:addinstance'] = 'Añadir una nueva carpeta del estudiante';
$string['publication:approve'] = 'Decidir si es que los archivos deberían estar publicados (visibles para todos los estudiantes.';
$string['publication:grantextension'] = 'Otorgar extensión';
$string['publication:receiveteachernotification'] = 'Recibir notificaciones para profesores';
$string['publication:upload'] = 'Subir archivos a una carpeta de estudiante';
$string['publication:view'] = 'Ver carpeta del estudiante';
$string['publicationstatus'] = 'Publicación';
$string['publicationstatus_help'] = 'El estado de la publicación representa la aprobación del profesor y la publicación final: <ul><li><i class="fa fa-check text-success fa-fw"></i> El archivo es publicado y por lo tanto es visible para todos los participantes</li><li><i class="fa fa-times text-danger fa-fw"></i> El archivo NO es publicado (no se ha dado aprobación o ha sido rechazado) y por lo tanto nNO es visible</li></ul>';
$string['publicfiles'] = 'Archivos publicados';
$string['published_aftercheck'] = 'Aprobación de profesores requerida';
$string['published_immediately'] = 'Aprobar automáticamente';
$string['rejected'] = 'Rechazado';
$string['rejectusers'] = 'Rechazar';
$string['requiremodintro'] = 'Requerir descripción de la actividad';
$string['reset'] = 'Revertir';
$string['reset_userdata'] = 'Todos los datos';
$string['resetstudentapproval'] = 'Revertir aprobación de estudiante';
$string['save_changes'] = 'Guardar cambios';
$string['saveapproval'] = 'Guardar cambios';
$string['savestudentapprovalwarning'] = '¿Está Usted seguro de querer guardar estos cambios? Una vez configurado Usted no podrá cambiar el estatus.';
$string['saveteacherapproval'] = 'Guardar cambios';
$string['search:activity'] = 'Carpeta de estudiante - información de actividad';
$string['show_details'] = 'Mostrar detalles';
$string['status'] = 'Estatus';
$string['status:approved'] = 'Aprobado';
$string['status:approvednot'] = 'Rechazado';
$string['status:approvedrevoke'] = 'Revocada';
$string['student_approve'] = 'Aprobar';
$string['student_approved'] = 'Aprobado por estudiante.';
$string['student_approved_automatically'] = 'Aprobado por estudiante automáticamente.';
$string['student_pending'] = 'Decisión del estudiante pendiente';
$string['student_reject'] = 'Rechazar';
$string['student_rejected'] = 'Rechazado del estudiante';
$string['studentapproval'] = 'Aprobación (estudiantes)';
$string['studentapproval_help'] = 'En la columna "Aprobación (estudiantes)" la retroalimentación a los estudiantes es mostrada:<br><ul><li><i class="fa fa-question fa-fw text-advertencia"></i> - Decisión pendiente</li><li><i class="fa fa-check text-éxito fa-fw"></i> - Aprobación dada</li><li><i class="fa fa-times text-peligro fa-fw"></i> - Aprobación rechazada</li></ul>';
$string['submissionsettings'] = 'Configuraciones del envío';
$string['teacher_approve'] = 'Aprobar';
$string['teacher_approved'] = 'Aprobado por profesor.';
$string['teacher_approved_automatically'] = 'Aprobado por profesor automáticamente.';
$string['teacher_pending'] = 'La decisión del profesor está pendiente.';
$string['teacher_reject'] = 'Rechazar';
$string['teacher_rejected'] = 'No publicado (rechazado)';
$string['teacherapproval'] = 'Aprobación';
$string['teacherapproval_help'] = 'La decisión actual sobre archivos, visibles para todos los participantes: <br /><ul><li>Elegir... - aun no aprobado o desaprobado, aunque los archivos no son visibles.</li><li>Yes - aprobado, los archivos son visibles.</li><li>No - desaprobado, los archivos no son visibles.</li></ul>';
$string['total'] = 'Total';
$string['updatefiles'] = 'Subir archivos';
$string['updatefileswarning'] = 'Los archivos de un estudiante individual dentro de la carpeta del estudiante serán actualizados con su envío de la tarea. Los archivos que ya eran visibles de los estudiantes también serán remplazados si fueran eliminados o refrescados. Las configuraciones del estudiante con respecto a visibilidad no serán cambiadas.';
$string['uploaded'] = 'Subido';
$string['visibility'] = 'Publicado';
$string['visible'] = 'Publicado';
$string['visibleforstudents'] = 'Publicado';
$string['visibleforstudents_no'] = 'Este archivo NO está publicado (No es visible a los estudiantes).';
$string['visibleforstudents_yes'] = 'Este archivo si está publicado (visible a los estudiantes).';
$string['withselected'] = 'Con los seleccionados...';
$string['zipusers'] = 'Descargar envíos de archivos seleccionados';
