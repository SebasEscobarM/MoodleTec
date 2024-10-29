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
 * Strings for component 'block_mrbs', language 'es_mx', version '4.4'.
 *
 * @package     block_mrbs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about_mrbs'] = 'Acerca de MRBS';
$string['accessdenied'] = 'Acceso Denegado';
$string['accessmrbs'] = 'Agendar un Recurso';
$string['addarea'] = 'Añadir área';
$string['addentry'] = 'Añadir entrada';
$string['addroom'] = 'Añadir sala';
$string['adminview'] = '¿Cual es la URL a su Instalación de MRBS?';
$string['advanced_search'] = 'Búsqueda avanzada';
$string['all_day'] = 'Todo el día';
$string['area'] = 'Área';
$string['area_admin_email'] = 'Email Admin área';
$string['areas'] = 'Áreas';
$string['backadmin'] = 'Regresar a Admin';
$string['bgcolor'] = 'colorfondo';
$string['blockname'] = 'Agendar Recurso';
$string['booking_users'] = 'Usuarios que pueden reservar';
$string['booking_users_help'] = 'Esta debería ser una lista separada por comas de las direcciones de correo electrónico de los usuarios que tienen permitido reservar esta sala. Déjelo vacío para permitirle a todos los usuarios reservar esta sala.';
$string['bookingmoved'] = 'Una de sus reservaciones ha sido movida';
$string['bookingmovedmessage'] = 'Su reservación {$a->name} ha sido movida de la sala {$a->oldroom} a la sala {$a->newroom} en {$a->area} para la lección de {$a->date}, {$a->starttime}. La sala es necesitada para {$a->newbookingname}. ADVERTENCIA: Este movimiento ha sido realizado por una computadora haciendo una predicción educada; por favor revise que esta sala sea apropiada antes de la lección';
$string['bookingmovedshort'] = '{$a->name} movida a {$a->newroom}';
$string['bookingmoveerror'] = 'ERROR EN RESERVACIÓN DE SALA';
$string['bookingmoveerrormessage'] = 'Ha ocurrido un error al mover {$a->name} (id: {$a->id})';
$string['bookingmoveerrorshort'] = 'Ha ocurrido un error al mover {$a->name}. El administrador ha sido informado.';
$string['bookingsfor'] = 'Reservaciones para';
$string['bookingsforpost'] = '--cadena no usada--';
$string['both'] = 'Ambos';
$string['brief_description'] = 'Descripción breve';
$string['browserlang'] = 'Su navegador está configurado para usar';
$string['capacity'] = 'Capacidad';
$string['charset'] = 'UTF-8';
$string['clash'] = 'Colisión: {$a->oldbooking} {$a->newbooking} {$a->time} en Sala: {$a->room}';
$string['clashemailbody'] = 'Debido a una importación de horario reciente, existe una colisión que afecta a una de sus reservaciones: En {$a->time}, {$a->oldbooking} y {$a->newbooking} ambas están reservadas en la sala {$a->room} Por favor resuelvan esto entre Ustedes con anticipación para evitar trastornos innecesarios. ESTA SERÁ LA ÚLTIMA ADVERTENCIA DE ESTA COLISIÓN. SI USTED IGNORA ESTE MENSAJE USTED TENDRÁ PROBLEMAS. Este mensaje ha sido enviado automáticamente por el sistema de reservaciones de salas en-línea, si Usted piensa que ha recibido esto por error por favor contacte a  {$a->admin}';
$string['clashemailnotsent'] = 'NO PUDO ENVIARSE E-MAIL AL MAESTRO DE';
$string['clashemailsent'] = 'E-mail enviado a';
$string['clashemailsub'] = 'Alerta de colisión en sala';
$string['class'] = 'clase';
$string['click_to_reserve'] = 'Elija la celda para hacer reservación';
$string['computerroom'] = 'Solamente salas de computadoras';
$string['computerrooms'] = 'Salas de computadoras';
$string['config_admin'] = 'Admin de MRBS';
$string['config_admin2'] = 'Nombre del administrador de MRBS';
$string['config_admin_email'] = 'E-mail del admin de MBRS';
$string['config_admin_email2'] = 'E-mail del admin de MBRS. Para recibir notificacines por E-mail sobre MRBS, la dirección de E-mail debe estar asociada con una cuenta de usuario de Moodle.';
$string['config_area_list_format'] = 'Mostrar lista de área';
$string['config_area_list_format2'] = '¿Deberían de verse las áreas como una lista o una caja de selección desplegable?';
$string['config_cookie_path_override'] = 'Anulación de ruta de cookie';
$string['config_cookie_path_override2'] = 'Si este valor se configura, será usado por el esquema de la sesión PHP para anular el comportamiento por defecto de determinar automáticamente la ruta de cookie a usar.';
$string['config_date_ddmmyy'] = '10 Julio';
$string['config_date_mmddyy'] = 'Julio 10';
$string['config_dateformat'] = 'Formato de fecha';
$string['config_dateformat2'] = 'Formato de fecha usado por MRBS.';
$string['config_default_report_days'] = 'Lapso del reporte (días)';
$string['config_default_report_days2'] = 'Lapso por defecto del reporte en días';
$string['config_default_room'] = 'Sala por defecto';
$string['config_default_room2'] = 'Definir la sala por defecto para empezar (usada por index.php). Los números de salas pueden determinarse al ver en Editar o Eliminar URL para una sala en la página de administración.';
$string['config_default_view'] = 'Vista por defecto';
$string['config_default_view2'] = 'Definir vista inicial por defecto (mes, semana o día)';
$string['config_enable_periods'] = 'Usar períodos';
$string['config_enable_periods2'] = 'Usar períodos personalizados para agendar MRBS. Si esto se configurta a NO, entonces MRBS agendará empleando bloques de tiempo';
$string['config_entry_type'] = 'Tipo de entrada {$a}';
$string['config_entry_type2'] = 'Estos tipos de eventos aparecen en la pantalla de \'Añadir Entrada\'. Cada tipo de entrada es asignado un color diferente por defecto. Los tipos de entrada se muestran en el órden siguiente: \'Entrada A\', \'Entrada B\', \'Entrada C\', etc';
$string['config_eveningends'] = 'Hora de término';
$string['config_eveningends2'] = 'Momento (hora) de término para el día. Los períodos deben estar deshabilitados para usar esta opción.';
$string['config_eveningends_min'] = 'Minutos de término';
$string['config_eveningends_min2'] = 'Momento (minutos) de término para el día. Los períodos deben estar deshabilitados para usar esta opción.';
$string['config_highlight_method'] = 'Método de resaltado';
$string['config_highlight_method2'] = 'Elija uno de los métodos para resaltar: bgcolor (colorfondo), class (clase) o hybrid (híbrido).';
$string['config_javascript_cursor'] = 'Cursor JavaScript';
$string['config_javascript_cursor2'] = 'Cambiar a FALSO si los clientes tienen navegadores antiguos incompatibles con JavaScript.';
$string['config_mail_admin_all'] = 'Mandar E-mail de todo al Admin';
$string['config_mail_admin_all2'] = 'Mandar un E-mail al Admin para todos los cambios';
$string['config_mail_admin_on_bookings'] = 'Mandar E-mail Admin de Reservaciones';
$string['config_mail_admin_on_bookings2'] = 'Mandar un E-mail al Admin para notificarle sobre una nueva reservación';
$string['config_mail_admin_on_delete'] = 'Mandar E-mail Admin de Eliminaciones';
$string['config_mail_admin_on_delete2'] = 'Mandar un E-mail al Admin para notificarle sobre eliminaciones';
$string['config_mail_area_admin_on_bookings'] = 'Mandar E-mail Admin nueva reservación';
$string['config_mail_area_admin_on_bookings2'] = 'Mandar un E-mail al Admin para notificarle sobre una nueva reservación';
$string['config_mail_booker'] = 'MandarE-mail agendador';
$string['config_mail_booker2'] = 'Mandar un E-mail a quien agenda sobre una nueva reservación';
$string['config_mail_cc'] = 'Mandar cc';
$string['config_mail_cc2'] = 'Configurar dirección E-mail del campo de copia al carbón (cc). Por defecto está vacío. Es similar a destinatarios de correo, Usted puede definir más de un destinatario. Todos los correos de destinatarios deben estarasociados a una cuenta de usuario de Moodle.';
$string['config_mail_details'] = 'Detalles del correo';
$string['config_mail_details2'] = 'Detalles del correo';
$string['config_mail_from'] = 'Enviar de';
$string['config_mail_from2'] = 'Configurar la dirección de E-mail del campo De. Por defecto es el administrador del sitio. El correo De requiere estar asociado con una cuenta de usuario de Moodle.';
$string['config_mail_recipients'] = 'Destinatarios de correo';
$string['config_mail_recipients2'] = 'Configure los correos de los destinatarios. Usted puede definir más de un destinatario como por ejemplo: \'juanito@perez.com, chuchitachiquita@yahoo.com.mx\' Los correos de los destinatarios deben estar asociados a una cuenta de usuario de Moodle.';
$string['config_mail_room_admin_on_bookings'] = 'Mandar E-mail al administrador de sala';
$string['config_mail_room_admin_on_bookings2'] = 'Mandar E-mail al administrador de sala notificándole de una nueva reservación';
$string['config_max_advance_days'] = 'Reservación anticipada máxima';
$string['config_max_advance_days2'] = 'El máximo de días de anticipación con que puede hacerse una reservación; (-1) para deshabilitar.  Los usuarios con la capacidad \'mrbs:ignoremaxadvancedays\' (por defecto los administradores del sitio y de mrbs ) todavía podrán hacer más reservaciones más adelantadas que estas.';
$string['config_max_rep_entrys'] = 'Máx entradas repet';
$string['config_max_rep_entrys2'] = 'Máximo de entradas repetidas (máx necesitado +1)';
$string['config_monthly_view_entries_details'] = 'Ver detalles mensuales';
$string['config_monthly_view_entries_details2'] = 'Se pueden mostrar las entradas en la vista mensual como espacio principio/fin, descripción breve o ambas. Configurar a \'descripción\' para una descripción corta,\'espacio\' para un espacio de tiempo y \'ambas\' para ambas. Por defecto es \'ambas\', pero 6 entradas por día se mostrarán en lugar de 12.';
$string['config_morningstarts'] = 'Hora inicio';
$string['config_morningstarts2'] = 'Momento (hora) de inicio del día. Los períodos deben estar deshabilitados para usar esta opción.';
$string['config_morningstarts_min'] = 'Minutos inicio';
$string['config_morningstarts_min2'] = 'Momento (minuto) de inicio del día. Los períodos deben estar deshabilitados para usar esta opción.';
$string['config_new_window'] = 'Ventana';
$string['config_new_window2'] = 'Cuando se configura a Nueva ventana, el bloque MRBS se abrirá en una ventana nueva. Cuando se configura a Misma ventana, el bloque MRBS se abrirá dentro de Moodle con los encabezados de Moodle.';
$string['config_periods'] = 'Períodos personalizados';
$string['config_periods2'] = 'Defina el nombre o descripción para sus períodos en órden cronológico. Una entrada por línea.';
$string['config_refresh_rate'] = 'Tiempo de refresco de página';
$string['config_refresh_rate2'] = 'Tiempo (en segundos) de refresco de página. Configurar a 0 para deshabilitar';
$string['config_resolution'] = 'Bloques de tiempo';
$string['config_resolution2'] = 'Bloque sde tiempo a ser agendados. Los períodos deben deshabilitarse para usar esta opción.';
$string['config_search_count'] = 'Resultados por página buscar';
$string['config_search_count2'] = 'Resultados por página al buscar';
$string['config_show_plus_link'] = 'Mostrar enlace a plus';
$string['config_show_plus_link2'] = 'Cambiar a cierto (true) para siempre mostrar el enlace (+)';
$string['config_timeformat'] = 'Formato del tiempo';
$string['config_timeformat2'] = 'Formato de tiempo a usar en MRBS.';
$string['config_times_right_side'] = 'Hora al lado derecho';
$string['config_times_right_side2'] = 'Para mostrar la hora al lado derecho en el día y vista semanal, configurar a SI';
$string['config_view_week_number'] = 'Ver número semana';
$string['config_view_week_number2'] = 'Para ver semanas al fondo (trailer.php) como números de semanas (42) en lugar de \'primer día de la semana\' (13 Oct), configure esto a CIERTO (TRUE)';
$string['config_weeklength'] = 'Duración de la semana';
$string['config_weeklength2'] = '¿Cuantos días de la semana deberían mostrarse?';
$string['config_weekstarts'] = 'Principio de semana';
$string['config_weekstarts2'] = 'Elija el principio de la semana';
$string['confirmdel'] = '¿Está seguro de querer eliminar esta entrada?';
$string['conflict'] = 'La nueva reservación tendrá conflicto con la siguiente entrada(s)';
$string['createdby'] = 'Creada Por';
$string['cronfile'] = 'Ubicación del archivo de importación de sesión';
$string['cronfiledesc'] = 'Si desea emplear la característica de importación de sesión automática, escriba la ubicación del archivo aquí. El archivo debe poder ser movido por el usuario del servidor web. Al escribir una ubicación, Usted habilitará tipos de reservaciones especiales para las reservaciones importadas';
$string['ctrl_click'] = 'Usar Control-Click para seleccionar más de una sala';
$string['ctrl_click_type'] = 'Usar Control-Click para seleccionar más de un tipo';
$string['database'] = 'Base de Datos';
$string['dayafter'] = 'Ir a Día Después';
$string['daybefore'] = 'Ir a Día Anterior';
$string['days'] = 'días';
$string['delarea'] = 'Usted debe eliminar todas las salas en esta área antes de que pueda eliminarla<p>';
$string['delete_user'] = 'Eliminar este usuario';
$string['deleteentry'] = 'Eliminar Entrada';
$string['deletefollowing'] = 'Esto eliminará las siguientes reservaciones';
$string['deleteseries'] = 'Eliminar Serie';
$string['dontshowoccupied'] = 'No mostrar salas ocupadas';
$string['doublebookebody'] = 'El usuario {$a->user} ha reservado su sala dos veces, {$a->room}, a las {$a->time} del {$a->date}. Esto choca con sus reservaciones para {$a->oldbooking}. El usuario ha reservado la sala para {$a->newbooking}. Si esto no fuera un problema, no se requiere ninguna acción. Pero, si Usted no se lo esperaba, por favor contacte a este usuario para resolver este conflicto. Este mensaje ha sido enviado automáticamente por el sistema de reservación de salas en línea; si Usted cree que ha recibido este mensaje por error, por favor contacte a  {$a->admin}';
$string['doublebookefailbody'] = 'El siguiente mensaje no pudo enviarse a {$a}:';
$string['doublebookefailsubject'] = 'Falla de Notificación de Reservación Doble';
$string['doublebookesubject'] = 'Notificación de Reservación Doble';
$string['duration'] = 'Duración';
$string['edit_user'] = 'Editar usuario';
$string['editarea'] = 'Editar Área';
$string['editentry'] = 'Editar Entrada';
$string['editingserieswarning'] = 'Usted está actualmente editando una entrada única en una serie, elija aquí para editar las series:';
$string['editroom'] = 'Editar Sala';
$string['editroomarea'] = 'Editar área o descripción de Sala';
$string['editseries'] = 'Editar serie';
$string['email_failed'] = 'Falló el envío de E-mail';
$string['end_date'] = 'Hora Fin';
$string['entries_found'] = 'entradas encontradas';
$string['entry'] = 'Entrada';
$string['entry_found'] = 'entrada encontrada';
$string['entryid'] = 'ID entrada';
$string['error_area'] = 'Error:área';
$string['error_room'] = 'Error:sala';
$string['error_send_email'] = 'Error: Problema al enviar E-mail a: {$a}';
$string['eventbookingcreated'] = 'Reservación creada';
$string['eventbookingupdated'] = 'Reservación actualizada';
$string['external'] = 'No-clase';
$string['failed_connect_db'] = 'Error Fatal: No se pudo conectar a la Base de datos';
$string['failed_to_acquire'] = 'No se pudo adquirir acceso exclusivo a la Base de datos';
$string['findroom'] = 'Encontrar una sala';
$string['finishedimport'] = 'Procesado completo, tiempo empleado: {$a} segundos';
$string['for_any_questions'] = 'para las preguntas que no sean contestadas aquí';
$string['forciblybook'] = 'Reservar por la fuerza una sala';
$string['forciblybook2'] = 'Reservar por la fuerza (mover automáticamente otras reservaciones)';
$string['fulldescription'] = 'Descripción completa:<br>&nbsp;&nbsp;(Número de personas,<br>&nbsp;&nbsp;Interna/Externa etc)';
$string['goroom'] = 'Ir';
$string['goto'] = 'ir_a';
$string['gotoroom'] = 'Ir a';
$string['gotothismonth'] = 'Ir a este Mes';
$string['gotothisweek'] = 'Ir a Esta Semana';
$string['gototoday'] = 'Ir a Hoy';
$string['help_wildcard'] = 'Not: Use el símbolo de % como un comodín en cualquiera de las cajas de texto';
$string['highlight_line'] = 'Resalte esta línea';
$string['hours'] = 'horas';
$string['hybrid'] = 'híbrido';
$string['idontcare'] = 'No me importa, reserve doblemente las salas';
$string['importedbooking'] = 'Reservación Importada';
$string['importedbookingmoved'] = 'Reservación Importada (editada)';
$string['importlog'] = 'Bitácora de Importación MRBS';
$string['in'] = 'en';
$string['include'] = 'Incluir';
$string['internal'] = 'Clase';
$string['invalid_booking'] = 'Reservación inválida';
$string['invalid_entry_id'] = 'ID de entrada inválida';
$string['invalid_search'] = 'Cadena de búsqueda vacía o inválida.';
$string['invalid_series_id'] = 'ID de serie inválida';
$string['mail_body_changed_entry'] = 'Una  entrada ha sido modificada, aquí están los detalles';
$string['mail_body_del_entry'] = 'Una  entrada ha sido eliminada, aquí están los detalles';
$string['mail_body_new_entry'] = 'Una nueva entrada ha sido reservada, aquí están los detalles';
$string['mail_changed_entry'] = 'Una  entrada ha sido modificada, aquí están los detalles';
$string['mail_deleted_entry'] = 'Una nueva entrada ha sido eliminada, aquí están los detalles';
$string['mail_new_entry'] = 'Una nueva entrada ha sido reservada, aquí están los detalles';
$string['mail_subject'] = 'Asunto';
$string['mail_subject_delete'] = 'Entrada eliminada para {$a->date}, {$a->room} (reservada por {$a->user})';
$string['mail_subject_entry'] = 'Entrada cambiada para {$a->date}, {$a->room} (por {$a->user})';
$string['mail_subject_newentry'] = 'Entrada añadida para {$a->date}, {$a->room} (por {$a->user})';
$string['match_area'] = 'Coincidir área';
$string['match_descr'] = 'Coincidir descripción completa';
$string['match_entry'] = 'Coincidir descripción corta';
$string['match_room'] = 'Coincidir sala';
$string['match_type'] = 'Coincidir tipo';
$string['mincapacity'] = 'Capacidad mínima';
$string['minutes'] = 'minutos';
$string['month'] = 'mes';
$string['monthafter'] = 'Ir al Mes Después';
$string['monthbefore'] = 'Ir al Mes Anterior';
$string['movedto'] = 'movido a';
$string['mrbs'] = 'Sistema de Reservación de Salas de Juntas (MRBS=Meeting Room Booking System)';
$string['mrbs:addinstance'] = 'Añadir bloque MRBS a la página de Mi Moodle';
$string['mrbs:administermrbs'] = 'Modificar salas + configuraciones  MRBS';
$string['mrbs:doublebook'] = 'Reservar Doble Salas';
$string['mrbs:editmrbs'] = 'Editar reservaciones MRBS';
$string['mrbs:editmrbsunconfirmed'] = 'Crear solamente reservaciones \'noconfirmadas\' (\'unconfirmed\') (anuladas por \'editmrbs\')';
$string['mrbs:forcebook'] = 'Forzar Reservar Sala (auto mover reservaciones existente)';
$string['mrbs:ignoremaxadvancedays'] = 'Ignorar la configuración \'max_advance_days\'';
$string['mrbs:myaddinstance'] = 'Añadir nueo bloque MRBS';
$string['mrbs:viewalltt'] = 'Ver horarios de todos los usuarios';
$string['mrbs:viewmrbs'] = 'Ver reservaciones MRBS';
$string['mrbsadmin'] = 'Administrador de MRBS';
$string['mrbsadmin_desc'] = 'Usuarios con este rol (a nivel de sistema) pueden configurar completamente un horario MRBS: crear áreas y salas, editar las reservaciones de otras personas, forzar reservaciones y hacer dobles reservaciones a salas';
$string['mrbseditor'] = 'Editor de MRBS';
$string['mrbseditor_desc'] = 'Usuarios con este rol (a nivel de sistema) pueden hacer reservaciones usando MRBS y editar sus propias reservaciones';
$string['mrbsviewer'] = 'Visor de MRBS';
$string['mrbsviewer_desc'] = 'Usuarios con este rol (a nivel de sistema) pueden ver el horario de MRBS, pero no pueden hacer ningún cambio';
$string['must_set_description'] = 'Usted debe configurar una descripción';
$string['must_set_name'] = 'Usted debe configurar un nombre';
$string['mustlogin'] = 'Usted debe estar dentro de Moodle antes de poder accesar el bloque de calendario MRBS';
$string['namebooker'] = 'Reservación para';
$string['newwindow'] = 'Nueva ventana';
$string['no_rooms_for_area'] = 'Sin salas definidas para esta área';
$string['no_user_with_email'] = 'No se encontraron u: {$a}. All MRBS related email(s) must be associated with a Moodle user account.';
$string['no_users_create_first_admin'] = 'Crear un usuario configurado como administrador y entonces Usted puede entrar y crear más usuarios.';
$string['no_users_initial'] = 'Sin usuarios en la Base de datos, permitiendo la creación inicial de usuarios';
$string['noarea'] = 'No seleccionó área';
$string['noareas'] = 'Sin áreas';
$string['norights'] = 'Usted no tiene permisos para modificar este item.';
$string['norooms'] = 'Sin salas.';
$string['noroomsfound'] = 'Lo siento, no se encontraron salas';
$string['not_found'] = 'no encontrada';
$string['not_php3'] = '<H1>ADVERTENCIA: Esto probablemente no funcione con PHP3</H1>';
$string['notallcreated'] = 'Algunas reservaciones están demasiado anticipadas - {$a->created} de {$a->requested} reservaciones creadas';
$string['notallowedbook'] = 'Usted no está en la lista de usuarios con permiso para reservar esta sala';
$string['of'] = 'de';
$string['pagewindow'] = 'Misma ventana';
$string['password_twice'] = 'Si desea cambiar la contraseña, por favor escriba la nueva contraseña dos veces';
$string['period'] = 'Período';
$string['periods'] = 'períodos';
$string['please_contact'] = 'Por favor contacte a';
$string['pluginname'] = 'MRBS';
$string['postbrowserlang'] = 'idioma.';
$string['ppreview'] = 'Imprimir Vista Previa';
$string['records'] = 'Registros';
$string['rep_dsp'] = 'Mostrar en Reporte';
$string['rep_dsp_dur'] = 'Duración';
$string['rep_dsp_end'] = 'Hora de Fin';
$string['rep_end_date'] = 'Repetir Fecha Final';
$string['rep_for_nweekly'] = '(para n-semanal)';
$string['rep_for_weekly'] = '(para (n-)semanal)';
$string['rep_freq'] = 'Frecuencia';
$string['rep_num_weeks'] = 'Número de semanas';
$string['rep_rep_day'] = 'Repetir día';
$string['rep_type'] = 'repetir tipo';
$string['rep_type_0'] = 'Nada';
$string['rep_type_1'] = 'Diario';
$string['rep_type_2'] = 'Semanal';
$string['rep_type_3'] = 'Mensual';
$string['rep_type_4'] = 'Anual';
$string['rep_type_5'] = 'Mensualmente, día correspondiente';
$string['rep_type_6'] = 'n-Semanal';
$string['repeat_id'] = 'Repetir ID';
$string['report_and_summary'] = 'Reporte y Resumen';
$string['report_end'] = 'Reporte fecha fin';
$string['report_on'] = 'Reporte de Juntas';
$string['report_only'] = 'Reporte solamente';
$string['report_start'] = 'Reporte fecha inicio';
$string['requestvacate'] = 'Solicitar mover esta reservación';
$string['requestvacatemessage'] = '{$a->user} solicita que Usted mueva {$a->description} de la sala {$a->room}, {$a->datetime}. Por favor contáctelo(s) para discutir esto.[Déle una razón]';
$string['requestvacatemessage_html'] = '{$a->user} solicita que Usted mueva <a href="{$a->href}">{$a->description}</a> de la sala {$a->room}, {$a->datetime}. Por favor contáctelo(s) para discutir esto.<br /><br />[Déle una razón]';
$string['resolution_units'] = 'Minutos';
$string['returncal'] = 'Regresar a vista calendario';
$string['returnprev'] = 'Regresar a página previa';
$string['rights'] = 'Derechos';
$string['room'] = 'Sala';
$string['room_admin_email'] = 'E-mail admin de sala';
$string['roomchange'] = 'Marcar como cambio de sala';
$string['rooms'] = 'Salas';
$string['roomsearch'] = 'Buscar Sala';
$string['roomsfree'] = 'Slas libres...';
$string['sched_conflict'] = 'Conflicto de agenda';
$string['search_for'] = 'Buscar a';
$string['search_results'] = 'Buscar resultados para';
$string['seconds'] = 'segundos';
$string['serverpath'] = 'Ruta de instalación de MRBS';
$string['show_my_entries'] = 'elija para mostrar todas las entradas entrantes';
$string['slot'] = 'Período';
$string['sort_rep'] = 'Ordenar Reporte por';
$string['sort_rep_time'] = 'Fecha/Hora de inicio';
$string['specialroom'] = 'Excluir salas especiales';
$string['start_date'] = 'Hora de inicio';
$string['startedimport'] = 'Archivo encontrado, iniciando proceso de importación';
$string['submitquery'] = 'Realizar Reporte';
$string['sum_by_creator'] = 'Creador';
$string['sum_by_descrip'] = 'Descripción breve';
$string['summarize_by'] = 'Resumido por';
$string['summary_header'] = 'Resumen de (Entradas) Horas';
$string['summary_header_per'] = 'Resumen de (Entradas) Períodos';
$string['summary_only'] = 'Resumen solamente';
$string['sure'] = '¿Está seguro?';
$string['system'] = 'Sistema';
$string['teachingroom'] = 'Solamente salas de enseñanza';
$string['through'] = 'hasta';
$string['too_may_entrys'] = 'Las opciones seleccionadas crearán demasiadas entradas.<BR> ¡Por favor use opciones diferentes!';
$string['toofaradvance'] = 'Usted no puede reservar con más de {$a} días de anticipación';
$string['ttfor'] = 'Horario para';
$string['type'] = 'Tipo';
$string['typea'] = '--cadena no usada--';
$string['unconfirmedbooking'] = 'No confirmada';
$string['unknown'] = 'Desconocida';
$string['update_area_failed'] = 'Falló actualización área';
$string['update_room_failed'] = 'Falló actualización sala';
$string['useful_n-weekly_value'] = 'valor n-semanal útil.';
$string['valid_room'] = 'sala.';
$string['valid_time_of_day'] = 'hora del día válida.';
$string['viewday'] = 'Ver Día';
$string['viewmonth'] = 'Ver Mes';
$string['viewweek'] = 'Ver Semana';
$string['weekafter'] = 'Ir a Semana Después';
$string['weekbefore'] = 'Ir a Semana Anterior';
$string['weeks'] = 'semanas';
$string['you_are'] = 'Usted es';
$string['you_have_not_entered'] = 'Usted no ha escrito un(a)';
$string['you_have_not_selected'] = 'Usted no ha seleccionado un(a)';
