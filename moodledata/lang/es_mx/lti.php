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
 * Strings for component 'lti', language 'es_mx', version '4.4'.
 *
 * @package     lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accept'] = 'Aceptar';
$string['accept_grades'] = 'Aceptar calificaciones de la herramienta';
$string['accept_grades_admin'] = 'Aceptar calificaciones de la herramienta';
$string['accept_grades_admin_help'] = 'Especificar si el proveedor de la herramienta puede añadir, actualizar, leer y borrar calificaciones asociadas con instancias de este tipo esta herramienta.

 Algunos proveedores de herramientas soportan el reportar calificaciones hacia Moodle basados en acciones que ocurren dentro de la herramienta, creando una experiencia más integrada.';
$string['accept_grades_from_tool'] = 'Permitir a {$a} añadir calificaciones en el Libro de calificaciones';
$string['accept_grades_help'] = 'Especificar si es que el proveedor de la herramienta puede añadir, actualizar, leer y borrar calificaciones asociadas únicamente con esta instancia de herramienta externa.

Algunos proveedores de herramientas reportan calificaciones de vuelta a Moodle basados en acciones tomadas dentro de la herramienta, creando una experiencia más integrada.

Observe que esta configuración puede anularse en la configuración de la herramienta.';
$string['accepted'] = 'Aceptado';
$string['action'] = 'Acción';
$string['activate'] = 'Activar';
$string['activatetoadddescription'] = 'Usted necesita activar esta herramienta antes de que pueda añadir una descripción';
$string['active'] = 'Activo';
$string['activity'] = 'Actividad';
$string['add_ltiadv'] = 'Añadir LTI Advantage';
$string['add_ltilegacy'] = 'Añadir Legacy LTI';
$string['addnewapp'] = 'Habilitar aplicación externa';
$string['addserver'] = 'Añadir nuevo servidor de confianza';
$string['addtool'] = 'Añadir herramienta';
$string['addtype'] = 'Añadir  herramienta externa pre-configurada';
$string['allow'] = 'Permitir';
$string['allowsetting'] = 'Permitirle a la herramienta almacenar 8K de configuraciones en Moodle';
$string['always'] = 'Siempre';
$string['autoaddtype'] = 'Añadir herramienta';
$string['automatic'] = 'Automática, basada en URL de herramienta';
$string['baseurl'] = 'Nombre de la Herramienta de Registro / URL Base';
$string['basiclti'] = 'LTI';
$string['basiclti_base_string'] = 'Cadena Base de LTI OAuth';
$string['basiclti_endpoint'] = 'Endpoint de LTI Launch';
$string['basiclti_in_new_window'] = 'Su actividad se ha abierto en una ventana nueva';
$string['basiclti_in_new_window_open'] = 'Abrir en nueva ventana';
$string['basiclti_parameters'] = 'Parámetros de LTI launch';
$string['basicltiactivities'] = 'Actividades LTI (Learning Tools Interoperability = Interoperatividad de Herramientas de Aprendizaje)';
$string['basicltifieldset'] = 'Campo de ejemplo a la medida';
$string['basicltiintro'] = 'Descripción de la actividad';
$string['basicltiname'] = 'Nombre de la actividad';
$string['basicltisettings'] = 'Configuraciones de (LTI)  Interoperatividad básicas de herramienta de aprendizaje';
$string['cachedef_keyset'] = 'Cachea la información del conjunto_de_clave pública de herramientas';
$string['cancel'] = 'Cancelar';
$string['cancelled'] = 'Cancelado';
$string['cannot_delete'] = 'Usted no puede borrar la configuración de esta herramienta';
$string['cannot_edit'] = 'Usted no puede editar la configuración de esta herramienta';
$string['capabilities'] = 'Capacidades';
$string['capabilities_help'] = 'Seleccione aquellas capacidades que Usted desea ofrecerle al proveedor de la herramienta.  Puede seleccionarse más de una capacidad.';
$string['capabilitiesrequired'] = 'Esta herramienta necesita acceso a los datos siguientes para activarse:';
$string['cleanaccesstokens'] = 'Remoción por herramienta externa de tokens de acceso expirados';
$string['click_to_continue'] = '<a href="{$a->link}" target="_top">Haga clic para continuar</a>';
$string['clientidadmin'] = 'ID del cliente';
$string['clientidadmin_help'] = 'La ID del cliente es un valor único usado para identificar una herramienta.
Es creada automáticamente para cada herramienta que usa el perfil de seguridad JWT introducido en LTI 1.3 y debería de ser parte de los detalles pasados al proveedor de la herramienta para que ellos puedan configurar la conexión en su parte final.';
$string['comment'] = 'Comentario';
$string['configpassword'] = 'Contraseña predeterminada para la herramienta remota';
$string['configpreferheight'] = 'Altura preferida por defecto';
$string['configpreferwidget'] = 'Configurar widget como invocación estándard';
$string['configpreferwidth'] = 'Ancho preferido por defecto';
$string['configresourceurl'] = 'URL predeterminada del recurso';
$string['configtoolurl'] = 'URL predterminada para la herramienta remota';
$string['configtypes'] = 'Permitir Aplicaciones LTI (Learning Tools Interoperability = Interoperatividad de Herramientas de Aprendizaje)';
$string['configured'] = 'Configurado';
$string['confirmtoolactivation'] = '¿Está Usted seguro de querer activar esta herramienta?';
$string['contentitem_deeplinking'] = 'Soporta Enlazado Profundo (Mensaje de Ítem-Contenido)';
$string['contentitem_deeplinking_help'] = 'Si se activa, la opción de \'Configurar herramienta desde enlace\' estará disponible al añadir una herramienta externa.';
$string['contentitem_multiple_description'] = 'Los elementos siguientes serán añadidos a su curso:';
$string['contentitem_multiple_graded'] = 'Actividad calificada (Calificaciónmáxima: {$a})';
$string['contentselected'] = 'Contenido seleccionado';
$string['course_tool_types'] = 'Herramientas del curso';
$string['courseactivitiesorresources'] = 'Actividades o recursos del curso';
$string['courseexternaltooladd'] = 'Añadir herramienta LTI externa';
$string['courseexternaltooladdsuccess'] = '{$a} añadida.';
$string['courseexternaltooledit'] = 'Editar {$a}';
$string['courseexternaltooleditsuccess'] = 'Cambios guardados.';
$string['courseexternaltooliconalt'] = 'Ícono para {$a}';
$string['courseexternaltools'] = 'Herramientas LTI externas';
$string['courseexternaltoolsinfo'] = 'Las Herramientas LTI externas son apps adicionales que usted puede integrar dentro de su curso, como por ejemplo contenido interactivo o evaluaciones. Sus estudiantes pueden acceder a ellas y usarlas sin abandonar su curso.';
$string['courseexternaltoolsnoeditpermissions'] = 'Usted no tiene permiso para editar esta herramienta';
$string['courseexternaltoolsnoviewpermissions'] = 'Ver herramientas externas de curso';
$string['courseid'] = 'Número ID del curso';
$string['courseinformation'] = 'Información del curso';
$string['courselink'] = 'Ir a curso';
$string['coursemisconf'] = 'El curso está mal configurado';
$string['coursetooldeleted'] = '{$a} eliminada';
$string['createdon'] = 'Creada en';
$string['curllibrarymissing'] = 'La extensión PHP cURL es necesaria para la Herramienta externa.';
$string['custom'] = 'Parámetros a la medida';
$string['custom_config'] = 'Empleando configuración de herramienta a la medida';
$string['custom_help'] = 'Los parámetros a la medida son configuraciones usadas por el proveedor de la herramienta. Por ejemplo, un parámetro a la medida puede emplearse para mostrar un recurso específico del proveedor. Cada parámetro deberá escribirse en una línea separada usando un formato de "nombre=valor"; por ejemplo, "chapter=3".

Es seguro dejar sin cambios este campo a menos que el proveedor de la herramienta indique lo contrario.';
$string['custominstr'] = 'Parámetros a la medida';
$string['debuglaunch'] = 'Opción de depuración (debug)';
$string['debuglaunchoff'] = 'Invocación normal';
$string['debuglaunchon'] = 'Invocación de depuración (debug)';
$string['default'] = 'Por defecto';
$string['default_launch_container'] = 'Contenedor de invocación por defecto';
$string['default_launch_container_help'] = 'El contenedor para invocar la herramienta afecta la apariencia de la herramienta cuando se invoca dentro del curso. Algunos contenedores proporcionan mayor superficie de pantalla a la herramienta, mientras otros le dan un aspecto más integrado con el ambiente Moodle

* **Por defecto** - Use el contenedor especificado por la configuración de la herramienta.
* **Incrustado** - La herramienta se muestra dentro de la ventana Moodle existente, en forma similar a la mayoría de las otras actividades.
* **Incrustado, sin bloques** - La herramienta se muestra dentro de la ventana Moodle existente, solamente con los controles de navegación en la parte superior.
* **Nueva ventana** - La herramienta abre una nueva ventana que ocupa todo el espacio disponible.
Dependiendo del navegador, abrirá en una nueva pestaña o en una ventana emergente.
Es posible que el navegador impida que se abran ventanas emergentes si está configurado así.';
$string['delegate'] = 'Delegar al profesor';
$string['delegate_tool'] = 'Como está especificado en la definición de Enlazado Profundo o Delegar al profesor';
$string['delete'] = 'Eliminar';
$string['delete_confirmation'] = '¿ Está Usted seguro de querer borrar esta herramienta externa pre-configurada ?';
$string['deletecoursetool'] = 'Eliminar {$a}';
$string['deletecoursetoolconfirm'] = 'Esto  eliminará {$a} de las herramientas LTI disponibles en su curso.';
$string['deletecoursetoolwithusageconfirm'] = '{$a} actualmente está siendo usado en al menos una actividad en su curso. Si usted elimina esta herramienta, las actividades que la usan ya no funcionarán.<br><br>¿Está seguro de querer eliminar {$a}?';
$string['deletetype'] = 'Eliminar herramienta externa pre-configurada';
$string['display_description'] = 'Mostrar la descripción de la actividad cuando los estudiantes accedan a la herramienta';
$string['display_description_help'] = 'El contenido de esta herramienta es mostrado incrustado dentro de una página en el curso. Esta configuración determina si la descripción de la actividad es mostrada en esa página.';
$string['display_name'] = 'Mostrar el nombre de la actividad cuando los estudiantes accedan a la herramienta';
$string['display_name_help'] = 'El contenido de esta herramienta es mostrado incrustado dentro de una página en el curso. Esta configuración determina si el nombre de la actividad es mostrado en esa página.';
$string['domain_mismatch'] = 'El dominio de URL de herramienta no concuerda con la configuración de la herramienta.';
$string['donot'] = 'No enviar';
$string['donotaccept'] = 'No aceptar';
$string['donotallow'] = 'No permitir';
$string['dontshowinactivitychooser'] = 'No mostrar en Selector de actividad';
$string['duplicateregurl'] = 'Esta URL de registro ya está en uso';
$string['dynreg_update_btn_new'] = 'Registrar como una nueva herramienta externa';
$string['dynreg_update_btn_update'] = 'Actualizar';
$string['dynreg_update_name'] = 'Nombre de la herramienta';
$string['dynreg_update_notools'] = 'Sin herramientas en el contexto.';
$string['dynreg_update_text'] = 'Hay herramientas existentes anexadas al dominio del registro. ¿Desea actualizar una herramienta externa existente o crear una nueva herramienta externa?';
$string['dynreg_update_url'] = 'URL Base';
$string['dynreg_update_version'] = 'Versión LTI';
$string['dynreg_update_warn_dupdomain'] = 'No es recomendable tener múltiples herramientas externas bajo el mismo dominio.';
$string['editdescription'] = 'Haga clic aquí para darle una descripción a esta herramienta';
$string['editmanualinstancedeprecationwarning'] = 'Las actividades de Herramienta externa configuradas manualmente ya no están soportadas. No se preocupe; esta actividad seguirá funcionando como está, pero usted ya no puede hacer cambios aquí a la configuración de la herramienta.
<br><br>
Para hacer cualquier cambio a la herramienta, o para crear nuevas actividades con ella, la herramienta necesita ser añadida a su curso en Curso > Más > Herramientas externas LTI. Después, usted podrá crear nuevas actividades seleccionando la herramienta directamente en el Selector de actividades.
<br><br>
Usted puede leer más acerca de añadir Herramientas externas LTI en la documentación de M <a href="{$a}" target="_blank">Herramienta externa</a>.';
$string['edittype'] = 'Editar herramienta pre-configurada';
$string['embed'] = 'Incrustado';
$string['embed_no_blocks'] = 'Incrustado, sin bloques';
$string['enableemailnotification'] = 'Mandar emails de notificación';
$string['enableemailnotification_help'] = 'Si se habilita, los estudiantes recibirán notificación por email cuando sean calificados sus envíos para la herramienta.';
$string['enterkeyandsecret'] = 'Escriba su clave del consumidor y secreto compartido';
$string['enterkeyandsecret_help'] = 'Si a Usted le dieron una clave de consumidor o un secreto compartido, ingréselos aquí';
$string['entitycourseexternaltools'] = 'Herramientas LTI externas';
$string['errorbadurl'] = 'La URL no es una URL válida de herramienta o cartucho.';
$string['errorincorrectconsumerkey'] = 'La clave del consumidor es incorrecta';
$string['errorinvaliddata'] = 'Datos inválidos: {$a}';
$string['errorinvalidmediatype'] = 'Tipo de medio inválido: {$a}';
$string['errorinvalidresponseformat'] = 'Contenido inválido-formato de respuesta del elemento.';
$string['errormisconfig'] = 'Herramienta mal configurada. Por favor pídale a su administrador Moodle que arregle la configuración de la herramienta.';
$string['errortooltypenotfound'] = 'Tipo de herramienta LTI no encontrado.';
$string['existing_window'] = 'Ventana existente';
$string['extensions'] = 'Servicios de extensión LTI';
$string['external_tool_type'] = 'Herramienta  pre-configurada';
$string['external_tool_type_help'] = '* **Automático, basada en URL de la herramienta** - Moodle seleccionará automáticamente la mejor configuración de herramienta Si la URL de la herramienta no es reconocida, Usted necesitará poner los detalles de configuración de la herramienta manualmente.
* **Una herramienta pre-configurada específica** - Al seleccionar una herramienta pre-configurada, Usted puede forzar a Moodle a que emplee esa configuración de herramienta cuando se comunique con el proveedor de la herramienta externa. Si Launch URL pareciera que no pertenece al proveedor de la herramienta, aparecerá una advertencia. En algunos casos no es necesario proporcionar un Launch URL al proporcionar una herramienta pre-configurada específica (si no está invocando un recurso particular dentro del proveedor de la herramienta).

* **Configuración a la medida** - Para ajustar la configuración a la medida solamente en esta instancia, mostrar Opciones Avanzadas, y proporcione la clave del consumidor y el secreto compartido Usted mismo. Si no tiene una clave de consumidor y una secreto compartido,puede solicitarlos al proveedor de la herramienta. No todas las herramientas requieren una clave de consumidor y un secreto compartido; en estos casos los campos pueden dejarse en blanco.

### Edición de la herramienta pre-configurada.

Existen tres íconos disponibles en la lista desplegable de herramienta pre-configurada:

* **Añadir** - Crea una configuración de herramienta a nivel de curso. Todas las instancias de la herramienta externa en este curso pueden emplear esta configuración de herramienta.

* **Editar** - Selecciona una herramienta a nivel de curso a partir de una lista desplegable y eligiendo después este ícono. Los detalles de la configuración de la herramienta pueden editarse.

* **Eliminar** - Remueve el tipo de herramienta del curso seleccionado.';
$string['external_tool_types'] = 'Herramientas pre-configuradas';
$string['failedtoconnect'] = 'Moodle no pudo comunicarse con el sistema "{$a}"';
$string['failedtocreatetooltype'] = 'Falló al crear herramienta nueva. Por favor revise la URL e inténtelo nuevamente.';
$string['failedtodeletetoolproxy'] = 'No se pudo eliminar el registro de herramienta. Usted puede necesitar visitar "Gestionar registros de herramienta externa" y eliminarlo manualmente.';
$string['filter_basiclti_configlink'] = 'Configurar sus sitios preferidos y sus contraseñas';
$string['filter_basiclti_password'] = 'La contraseña es obligatoria';
$string['filterconfig'] = 'Administración de LTI';
$string['filtername'] = 'LTI';
$string['fixexistingconf'] = 'Usar una configuración existente para la instancia mal-configurada';
$string['fixnew'] = 'Nueva configuración';
$string['fixnewconf'] = 'Definir una nueva configuración para la instancia mal-configurada';
$string['fixold'] = 'Usar la existente';
$string['force_ssl'] = 'Forzar SSL';
$string['force_ssl_help'] = 'Seleccionando esta opción, se obliga que todos los usos de este proveedor de herramienta usen SSL.

Además, todas las solicitudes de servicios web del proveedor de la herramienta emplearán SSL.

Si emplea esta opción, confirme que tanto el sitio Moodle y el proveedor de la herramienta soporten SSL.';
$string['forced_help'] = 'Esta configuración ha sido forzada en un curso o a nivel del sitio en la configuración de la herramienta. Usted no puede cambiarlo desde esta interfaz.';
$string['generaltool'] = 'Herramienta general';
$string['global_tool_types'] = 'Herramientas pre-configuradas';
$string['grading'] = 'Ruteamiento de calificaciones';
$string['icon_url'] = 'URL del ícono';
$string['icon_url_help'] = 'La URL del ícono permite que se modifique el ícono que aparece en el listado del curso para esta actividad. En lugar de emplear el ícono por defecto para LTI, puede especificarse un ícono que identifique mejor el tipo de actividad.';
$string['id'] = 'ID';
$string['indicator:cognitivedepth'] = 'LTI cognitiva';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad LTI.';
$string['indicator:cognitivedepthdef'] = 'LTI cognitiva';
$string['indicator:cognitivedepthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso cognitivo ofrecido por las actividades LTI durante este intervalo de análisis (Niveles = Sin Ver, Ver, Enviar, Ver retroalimentación)';
$string['indicator:cognitivedepthdef_link'] = 'Learning_analytics_indicators#Cognitive_depth';
$string['indicator:socialbreadth'] = 'LTI social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad LTI.';
$string['indicator:socialbreadthdef'] = 'LTI social';
$string['indicator:socialbreadthdef_help'] = 'El participante ha alcanzado este porcentaje del compromiso social ofrecido por las actividades de LTI durante este intervalo de análisis (Niveles = Sin participación, Participante solo, Participante con otros)';
$string['indicator:socialbreadthdef_link'] = 'Learning_analytics_indicators#Social_breadth';
$string['initiatelogin'] = 'URL para Iniciar Ingreso';
$string['initiatelogin_help'] = 'La URL de la herramienta a la cual se envían solicitudes para iniciar un ingreso. Esta URL es requerida antes de que un mensaje pueda ser enviado exitosamente a la herramienta.';
$string['invalidid'] = 'ID del LTI estaba incorrecta';
$string['jwtsecurity'] = 'LTI 1.3';
$string['keytype'] = 'Tipo de clave pública';
$string['keytype_help'] = 'El método de autenticación usado para validar la herramienta.';
$string['keytype_keyset'] = 'URL de conjunto_de_clave';
$string['keytype_rsa'] = 'Clave RSA';
$string['launch_in_moodle'] = 'Invocar herramienta en Moodle';
$string['launch_in_popup'] = 'Invocar herramienta en ventana emergente';
$string['launch_url'] = 'URL de Herramienta';
$string['launch_url_help'] = 'La URL de herramienta indica la dirección de internet de la Herramienta Externa, y puede contener información adicional, como los recursos a mostrar. Si Usted no está seguro de qué introducir para URL de herramienta, por favor revise con el proveedor de la herramienta para obtener mayor información.

Usted puede ingresar una URl del cartucho, si tuviera una, y el resto de los detalles del formato se llenarán automáticamente.

Si ha elegido una herramienta preconfigurada, tal vez no necesite ingresar una URL de herramienta. Si el enlace a la herramienta solamente se emplea para invocar el ingreso al sistema del proveedor de la herramienta, y no va hacia un recurso específico, este muy probablemente sea el caso.';
$string['launchinpopup'] = 'Contenedor para invocar';
$string['launchinpopup_help'] = 'El contenedor para invocar la herramienta afecta el aspecto de la herramienta cuando se invoca desde el curso. Algunos contenedores proporcionan más espacio de pantalla a la herramienta, mientras otros le dan una imágen más integrada con el ambiente Moodle.

* **Default** - Usa el contenedor especificado por la configuración de la herramienta.

* **Incrustado** - La herramienta se muestra dentro de una ventana Moodle existente, de forma similar a la mayoría de las otras Actividades de Moodle.

* **Incrustado sin bloques** - La herramienta se muestra dentro de una ventana Moodle existente, solamente con los controles de navegación en la parte superior de la página.

* **Nueva Ventana** - La herramienta se abre en una ventana nueva, ocupa todo el espacio disponible.

Dependiendo del navegador, se abrirá en una nueva pestaña o una ventana emergente. Es posible que algunos navegadores impidan que se abra la ventana emergente.';
$string['launchoptions'] = 'Opciones para invocar';
$string['lti'] = 'LTI';
$string['lti:addcoursetool'] = 'Añadir configuraciones de herramientas específicas de curso';
$string['lti:addinstance'] = 'Añadir una nueva herramienta externa';
$string['lti:addmanualinstance'] = 'Añadir una herramienta configurada-manualmente';
$string['lti:addmanualinstanceprohibitederror'] = 'La creación manual de herramientas sin una definición de herramienta del curso ya no está soportadas. Por favor cree primeramente una herramienta de curso y después use esa para crear instancias de actividades.';
$string['lti:addpreconfiguredinstance'] = 'Añadir una herramienta pre-configurada';
$string['lti:admin'] = 'Ser un administrador cuando la herramienta sea invocada';
$string['lti:grade'] = 'Ver calificaciones regresadas por la herramie
nta externa';
$string['lti:manage'] = 'Ser un instructor cuando se invoque la herramienta';
$string['lti:requesttooladd'] = 'Solicitar que una herramienta se configure para todo el sitio';
$string['lti:view'] = 'Invocar actividades de herramienta externa';
$string['lti_administration'] = 'Editar herramienta pre-configurada';
$string['lti_errormsg'] = 'La herramienta dió el siguiente mensaje de error: "{$a}"';
$string['lti_launch_error'] = 'Ocurrió un error al invocar la herramienta externa:';
$string['lti_launch_error_tool_request'] = '<p> Para solicitarle al administrador que complete la configuración de la herramienta, haga clic  <a href="{$a->admin_request_url}" target="_top">aqui</a>. </p>';
$string['lti_launch_error_unsigned_help'] = '<p> Ese error puede ser el resultado de una clave de usuario (y una palabra secreta compartida) faltante  para el proveedor de la herramienta. </p> <p>Si Usted tiene una clave de consumidor y una palabra secreta compartida, Usted puede proporcionarlas al editar la instancia de la herramienta externa (asegúrese de que estén visibles las opciones avanzadas).</p> <p>Alternativamente, puede  <a href="{$a->course_tool_editor}">crear una configuración para el proveedor de herramienta a nivel de curso</a>. </p>';
$string['lti_tool_request_added'] = 'La solicitud para pedir que configuren la herramienta se procesó exitosamente. Usted deberá contactar a un Administrador para completar la configuración de la herramienta.';
$string['lti_tool_request_existing'] = 'Ya se ha solicitado antes una configuración de la herramienta para el dominio de la herramienta.';
$string['ltisettings'] = 'Configuraciones LTI';
$string['ltiunknownserviceapicall'] = 'LLamada API a servicio LTI desconocido.';
$string['ltiversion'] = 'Versión de LTI';
$string['ltiversion_help'] = 'La versión de LTI usada para firmar mensajes y solicitudes de servicio: LTI 1.0/1.1 y LTI 2.0 usan el perfil de seguridad de OAuth 1.0A; LTI 1.3.0 usa JWTs.';
$string['main_admin'] = 'Ayuda general';
$string['main_admin_help'] = 'Las herramientas externas le permiten a los usuarios de Moodle interactuar con recursos educativos alojados en sitios remotos. Empleando un protocolo especial para invocarla, la herramienta remota tendrá acceso a cierta información general sobre el usuario que la invoca. Por ejemplo, el nombre de la institución, ID del curso, ID del usuario, y otra información tal como el nombre del usuario y dirección de su correo electrónico.

Las herramientas enlistadas en esta página se dividen en tres categorías:

* **Activa** - Estos proveedores de herramientas han sido aprobados y configurados por un administrador. Estas pueden emplearse desde cualquier curso en este sitio. Si una clave de consumidor y un secreto compartido se introducen, se establece una relación de confianza entre este sitio y la herramienta remota, proporcionando un canal de comunicación seguro.

* **Pendiente** - Estos proveedores de herramientas llegaron mediante una importación de un paquete, pero no han sido configurados por un administrador. Los profesores aún pueden usar herramientas de estos proveedores si es que tienen una clave de consumidor y un secreto compartido, o si no se requiere de ninguna.

* **Rechazada** - Estos proveedores de herramientas están señalados como aquellos que el administrador no tiene intención de hacer disponibles en el sitio. Los profesores aún pueden emplear herramientas de estos proveedores si tienen una clave de usuario y secreto compartido, o si no se requiere de ninguno.';
$string['manage_external_tools'] = 'Gestionar herramientas';
$string['manage_tool_proxies'] = 'Gestionar Registros por Herramienta Externa';
$string['manage_tools'] = 'Gestionar Herramientas pre-configuradas';
$string['manuallyaddtype'] = 'De forma alterna, Usted puede   <a href="{$a}">configurar una herramienta manualmente</a>.';
$string['miscellaneous'] = 'Misceláneos';
$string['misconfiguredtools'] = 'Se detectaron instancias de herramientas mal-configuradas';
$string['missingparameterserror'] = 'La página está mal configurada: "{$a}"';
$string['module_class_type'] = 'tipo de módulo Moodle';
$string['modulename'] = 'Herramienta externa';
$string['modulename_help'] = 'El módulo de actividad de Herramienta externa les permiten a los estudiantes interactuar con recursos educativos y actividades alojadas en otros sitios de internet. Por ejemplo, una herramienta externa podría proporcionar acceso a un nuevo tipo de actividad o de materiales educativos de una editorial.

Para crear una actividad de herramienta externa se requiere un proveedor de herramienta que soporte  LTI (Learning Tools Interoperability = Interoperatividad de Herramientas de Aprendizaje). Un profesor puede crear una actividad de herramienta externa o hacer uso de una herramienta configurada por el administrador del sitio.

Las herramientas externas difieren se los recursos URL en varias formas:

* Las herramientas externas están conscientes del contexto, por ejemplo: tienen acceso a información acerca del usuario que invocó la herramienta, como por ejemplo institución, curso y nombre

* Las herramientas externas soportan leer, actualizar y borrar calificaciones asociadas con la instancia de la actividad

* Las configuraciones de la herramienta externa crean una relación de confianza entre su sitio Moodle y el proveedor de la herramienta, permitiendo la comunicación segura entre ambos';
$string['modulename_link'] = 'mod/lti/view';
$string['modulename_shortcut_link'] = 'mod/lti/view/custom';
$string['modulenameplural'] = 'Herramientas externas';
$string['modulenamepluralformatted'] = 'Herramientas externas';
$string['name'] = 'Nombre';
$string['never'] = 'Nunca';
$string['new_window'] = 'Ventana nueva';
$string['no_lti_configured'] = 'No hay Herramientas Externas activas configuradas.';
$string['no_lti_pending'] = 'No hay Herramientas Externas pendientes.';
$string['no_lti_rejected'] = 'No hay Herramientas Externas rechazadas.';
$string['no_lti_tools'] = 'No hay herramientas externas configuradas.';
$string['no_tp_accepted'] = 'No hay Registros aceptados de Herramienta Externa.';
$string['no_tp_cancelled'] = 'No hay Registros cancelados de Herramienta Externa.';
$string['no_tp_configured'] = 'No existen Registros de Herrramientas Externas no-registradas configuradas.';
$string['no_tp_pending'] = 'No hay registros pendientes de Herramienta Externa  .';
$string['no_tp_rejected'] = 'No hay registros rechazados de Herramienta Externa  .';
$string['noattempts'] = 'No se han intentado instancias de esta herramienta';
$string['nocourseexternaltoolsnotice'] = 'Aun no hay herramientas LTI externas.';
$string['noltis'] = 'No hay instancias de herramienta externa';
$string['noprofileservice'] = 'Servicio de perfil no encontrado';
$string['noservers'] = 'No se encontraron servidores';
$string['notypes'] = 'Actualmente no hay herramientas configuradas para LTI (Learning Tools Interoperability = Interoperatividad de Herramientas de Aprendizaje) en Moodle. Haga clic sobre el enlace para instalar (arriba) para añadirlas.';
$string['noviewusers'] = 'No se encontraron usuarios con permisos para emplear esta herramienta';
$string['oauthsecurity'] = 'LTI 1.0/1.1';
$string['opensslconfiginvalid'] = 'LTI 1.3 requiere un archivo válido openssl.cnf configurado y disponible en su servidor web. Por favor póngase en contacto con el administrador del sitio para configurar y habilitar openssl para este sitio.';
$string['optionalsettings'] = 'Configuraciones opcionales';
$string['organization'] = 'Detalles de organización';
$string['organizationdescr'] = 'Descripción de Organización';
$string['organizationid_default'] = 'ID predeterminado de la Organización';
$string['organizationid_default_help'] = 'El valor predeterminado a usar para la ID de la Organización. La ID del sitio identifica a esta instalación de Moodle.';
$string['organizationidguid'] = 'ID de la Organización';
$string['organizationidguid_help'] = 'Un identificador único para esta instancia de Moodle pasado a la herramienta como el Identificador Único Global de la instancia de plataforma.

Si este campo se deja vacío, el valor predeterminado será usado.';
$string['organizationurl'] = 'URL de la Organización';
$string['organizationurl_help'] = 'La URL base de esta instancia Moodle. Si este campo se deja en blanco, se usará un valor por defecto basado en la configuración del sitio.';
$string['pagesize'] = 'Envíos mostrados por página';
$string['parameter'] = 'Parámetros de la Herramienta';
$string['parameter_help'] = 'Los Parámetros de la Herramienta son configuraciones solicitadas que serán pasadas por el proveedor de la herramienta en el proxy aceptado de la herramienta.';
$string['password'] = 'Secreto Compartido';
$string['password_admin'] = 'Secreto Compartido';
$string['password_admin_help'] = 'El secreto compartido puede concebirse como una contraseña usada para autenticar el acceso a la herramienta. Debe de proporcionarse junto con la clave del consumidor al proveedor de la herramienta.

Aquellas herramientas que no requieran una comunicación segura con Moodle y que no proporcionen servicios adicionales (como reporte de calificaciones) puede ser que no requieran de un secreto compartido.';
$string['password_help'] = 'Para herramientas pre-configuradas, no es necesario proporcionar un secreto compartido aquí, dado que el secreto compartido estará dado como parte del proceso de configuración.

Este campo debe llenarse si creamos un enlace hacia el proveedor de la herramienta que no está previamente configurada. Si el proveedor de la herramienta se empleará más de una vez en el curso, el añadir una configuración de la herramienta sería una buena idea.

El secreto compartido puede concebirse como una contraseña usada para autenticar el acceso a la herramienta. Debe de proporcionarse junto con la clave del consumidor al proveedor de la herramienta.

Aquellas herramientas que no requieran una comunicación segura con Moodle y que no proporcionen servicios adicionales (como reporte de calificaciones) puede ser que no requieran de un secreto compartido.';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de Herramienta externa';
$string['pluginname'] = 'Herramienta externa';
$string['preferheight'] = 'Altura Preferida';
$string['preferwidget'] = 'Invocador de Widget preferido';
$string['preferwidth'] = 'Ancho preferido';
$string['press_to_submit'] = 'Presione para invocar esta actividad';
$string['privacy'] = 'Privacidad';
$string['privacy:metadata:coursefullname'] = 'El nombre completo del curso desde el cual el usuario está accediendo al Consumidor LTI';
$string['privacy:metadata:courseid'] = 'La ID del curso  desde el cual el usuario está accediendo al Consumidor LTI';
$string['privacy:metadata:courseidnumber'] = 'El número ID del curso  desde el cual el usuario está accediendo al Consumidor LTI';
$string['privacy:metadata:courseshortname'] = 'El  nombre corto del curso  desde el cual el usuario está accediendo al Consumidor LTI';
$string['privacy:metadata:createdby'] = 'El usuario que creó el registro';
$string['privacy:metadata:email'] = 'La dirección Email del usuario que accede al Consumidor LTI';
$string['privacy:metadata:externalpurpose'] = 'El Consumidor LTI proporciona información del usuario y contexto al Proveedor de Herramienta lTI.';
$string['privacy:metadata:firstname'] = 'El nombre del usuario que está accediendo al Consumidor LTI';
$string['privacy:metadata:fullname'] = 'El nombre completo del usuario que está accediendo al Consumidor LTI';
$string['privacy:metadata:lastname'] = 'El apelido(s) del usuario que está accediendo al Consumidor LTI';
$string['privacy:metadata:lti_submission'] = 'Envío LTI';
$string['privacy:metadata:lti_submission:datesubmitted'] = 'El sello de tiempoque indica cuando fue hecho el envío';
$string['privacy:metadata:lti_submission:dateupdated'] = 'El sello de tiempo que indica cuando fue modificado el envío';
$string['privacy:metadata:lti_submission:gradepercent'] = 'La calificación para el usuario como un porcentaje';
$string['privacy:metadata:lti_submission:originalgrade'] = 'La calificación original para el usuario';
$string['privacy:metadata:lti_submission:userid'] = 'La ID del usuario que envío para la actividad LTI';
$string['privacy:metadata:lti_tool_proxies'] = 'Proxies LTI';
$string['privacy:metadata:lti_tool_proxies:name'] = 'Nombre del proxy LTI';
$string['privacy:metadata:lti_types'] = 'Tipos LTI';
$string['privacy:metadata:lti_types:name'] = 'Nombre del tipo LTI';
$string['privacy:metadata:role'] = 'El rol en el curso para el usuario que está accediendo al Consumidor LTI';
$string['privacy:metadata:timecreated'] = 'El momento cuando fue creado el registro';
$string['privacy:metadata:timemodified'] = 'El momento cuando fue modificado el registro';
$string['privacy:metadata:userid'] = 'La ID del usuario que está accediendo al Consumidor LTI';
$string['privacy:metadata:useridnumber'] = 'El número ID del usuario que está accediendo al Consumidor LTI';
$string['privacy:metadata:username'] = 'El apellido(s) del usuario que está accediendo al Consumidor LTI';
$string['publickey'] = 'Clave pública';
$string['publickey_help'] = 'La clave pública (en formato PEM) proporcionada por la herramienta para permitir que las firmas de mensajes entrantes y solicitudes de servicio sean verificadas.';
$string['publickeyset'] = 'Conjunto_de_clave Pública';
$string['publickeyset_help'] = 'Conjunto_de_clave pública de donde este sitio obtendrá la clave pública de la herramienta para permitir que las firmas de mensajes entrantes y las solicitudes de servicio sean verificadas.';
$string['quickgrade'] = 'Permitir calificación rápida';
$string['quickgrade_help'] = 'Si se habilita, múltiples herramientas podrán calificarse en una sola página. Añada calificaciones y comentarios y luego elija el botón de "Guardar toda mi retroalimentación" para guardar todos los cambios para esta página.';
$string['redirect'] = 'Usted será re-direccionado en unos segundos. Si no lo fuese, presione el botón.';
$string['redirectionuris'] = 'URI(s) de redirección';
$string['redirectionuris_help'] = 'Una lista de URLs (una por línea) que la herramienta usa cuando hace solicitudes de autorización. Al menos una debe estar registrada antes de que un mensaje pueda ser enviado exitosamente a la herramienta.';
$string['register'] = 'Registrar';
$string['register_warning'] = 'La página de registro al parecer está tomando mucho tiempo para abrirse. Si no apareciera, revise que Usted haya escrito la URL correcta en los ajustes de las configuraciones. Si Moodle está usando HTTPS, asegúrese de que la herramienta que Usted está configurando soporte HTTPS y de que Usted esté usando HTTPS en la URL.';
$string['registertype'] = 'Configurar un nuevo registro de Herramienta Externa';
$string['registration_options'] = 'Opciones de Registro';
$string['registrationname'] = 'Nombre del Prroveedor de Herramienta';
$string['registrationname_help'] = 'Escriba el nombre del proveedor de servicio que se está registrando.';
$string['registrationurl'] = 'URL de Registro';
$string['registrationurl_help'] = 'La URL para registro debería de estar disponible desde el proveedor de la herramienta como el lugar a donde deberían de enviarse las solicitudes de registro.';
$string['reject'] = 'Rechazar';
$string['rejected'] = 'Rechazado';
$string['resource'] = 'Recurso';
$string['resourcekey'] = 'Clave de Consumidor';
$string['resourcekey_admin'] = 'Clave de Consumidor';
$string['resourcekey_admin_help'] = 'La clave del consumidor puede concebirse como un nombre de usuario empleado para autenticar el acceso a la herramienta. Se puede emplear por el proveedor de la herramienta para identificar inequívocamente al sitio Moodle desde donde los usuarios invocan la herramienta.

La clave del consumidor debe ser proporcionada por el proveedor de la herramienta. El método para obtener la clave del consumidor varía entre los proveedores de herramientas. Puede ser un procedimiento automatizado, o puede requerir un diálogo con el proveedor de la herramienta.

Las herramientas que no requieran una comunicación segura con Moodle y que no proporcionan servicios adicionales (como reportar calificaciones) puede ser que no requieran una clave para el recurso.';
$string['resourcekey_help'] = 'Para herramientas pre-configuradas, no es necesario proporcionar una clave de recurso aquí, dado que la clave del recurso estará dada como parte del proceso de configuración.

Este campo debe llenarse si creamos un enlace hacia el proveedor de la herramienta que no está previamente configurada. Si el proveedor de la herramienta se se empleará más de una vez en el curso, el añadir una configuración de la herramienta sería una buena idea.

La clave del consumidor puede concebirse como un nombre de usuario empleado para autenticar el acceso a la herramienta.  Se puede emplear por el proveedor de la herramienta para identificar inequívocamente al sitio Moodle desde donde los usuarios invocan la herramienta.

La clave del consumidor debe ser proporcionada por el proveedor de la herramienta. El método para obtener la clave del consumidor varía entre los proveedores de herramientas. Puede ser un procedimiento automatizado, o puede requerir un diálogo con el proveedor de la herramienta.

Las herramientas que no requieran una comunicación segura con Moodle y que no proporcionan servicios adicionales (como reportar calificaciones) puede ser que no requieran una clave para el recurso.';
$string['resourceurl'] = 'URL del recurso';
$string['restricttocategory'] = 'Restringir a categoría';
$string['restricttocategory_help'] = 'Para restringir el uso de esta herramienta a los cursos dentro de  una categoría, seleccione categoría o categorías de entre la lista.';
$string['return_to_course'] = 'Elija <a href="{$a->link}" blanco="_top">aquí</a> para regresar al curso.';
$string['saveallfeedback'] = 'Guarde todas mis retroalimentaciones';
$string['search:activity'] = 'Herramienta externa - información de actividad';
$string['secure_icon_url'] = 'URL del ícono seguro';
$string['secure_icon_url_help'] = 'Similar al URL del ícono, pero se emplea si el sitio es accedido en forma segura mediante SSL. Este campo es para impedir que el navegador muestre una advertencia acerca de una imagen insegura.';
$string['secure_launch_url'] = 'URL de herramienta segura';
$string['secure_launch_url_help'] = 'Similar a la URL de la herramienta, pero se usa en lugar de la URL de la herramienta si se requiere alta seguridad. Moodle usará el Secure Launch URL (URL de invocación segura) en lugar de la URL de la herramienta si el sitio Moodle es accedido mediante SSL, o si la configuración de la herramienta está definida para que siempre invoque mediante SSL.

La URL de la herramienta también puede configurarse hacia una dirección https para forzar a que se invoque mediante SSL, y este campo puede dejarse vacío.';
$string['selectcontent'] = 'Seleccionar contenido';
$string['selectcontentvalidationerror'] = 'Usted necesita seleccionar contenido para esta actividad.';
$string['send'] = 'Enviar';
$string['services'] = 'Servicios';
$string['services_help'] = 'Seleccione aquellos servicios que Usted desea ofrecerle al proveedor de herramienta. Puede seleccionarse más de un servicio.';
$string['setupoptions'] = 'Opciones de Configuración';
$string['share_email'] = 'Compartir el email del launcher (invocador) con la herramienta';
$string['share_email_admin'] = 'Compartir el email del launcher (invocador) con herramienta';
$string['share_email_admin_help'] = 'Especificar si es que la dirección de correo electrónico del usuario que invoca la herramienta será compartida con el proveedor de la herramienta. El proveedor de la herramienta puede necesitar la dirección de correo del que lo invoca para distinguir a usuarios con el mismo nombre en la UI (Interfaz de Usuario), o mandar correos a usuarios basados en acciones dentro de la herramienta.';
$string['share_email_help'] = 'Especificar si es que la dirección de correo electrónico del usuario que invoca la herramienta será compartida con el proveedor de la herramienta.

El proveedor de la herramienta puede necesitar la dirección de correo del que lo invoca para distinguir a usuarios con el mismo nombre , o mandar correos a usuarios basados en acciones dentro de la herramienta.

Observe que esta configuración puede anularse en la configuración de la herramienta.';
$string['share_name'] = 'Compartir el nombre del que invoca con la herramienta';
$string['share_name_admin'] = 'Compartir el nombre del que invoca con herramienta';
$string['share_name_admin_help'] = 'Especificar si es que el nombre completo del usuario que invoca la herramienta deberá ser compartido con el proveedor de la herramienta. El proveedor de la herramienta puede necesitar los nombres de quienes la invocan para mostrar información significativa dentro de la herramienta.';
$string['share_name_help'] = 'Especificar si es que el nombre completo del usuario que invoca la herramienta deberá ser compartido con el proveedor de la herramienta.

El proveedor de la herramienta puede necesitar los nombres de quienes la invocan para mostrar información significativa dentro de la herramienta.

Observe que esta configuración puede anularse en la configuración de la herramienta.';
$string['share_roster'] = 'Permitirle a la herramienta acceder al registro de usuarios del curso';
$string['share_roster_admin'] = 'La herramienta puede acceder al registro de usuarios del curso';
$string['share_roster_admin_help'] = 'Especificar si es que la herramienta puede acceder a la lista de usuarios inscritos en cursos desde los que se invoca esta herramienta.';
$string['share_roster_help'] = 'Especificar si es que la herramienta puede acceder a la lista de usuarios inscritos en este curso

Observe que esta configuración puede anularse en la configuración de la herramienta.';
$string['show_in_course_activity_chooser'] = 'Mostrar dentro del selector de actividades y como una herramienta pre-configurada';
$string['show_in_course_lti1'] = 'Uso de configuración de herramienta';
$string['show_in_course_lti1_help'] = 'Esta herramienta puede mostrarse en el selector de actividades, para que un profesor seleccione el añadirla a un curso. Alternativamente, también puede mostrarse en el menú desplegable de herramienta pre-configurada al añadirle una herramienta externa al curso. Una opción adicional es que la configuración de la herramienta solamente se use si se ingresa la URL exacta de la herramienta al añadirle una herramienta externa a un curso.';
$string['show_in_course_lti2'] = 'Uso de configuración de herramienta';
$string['show_in_course_lti2_help'] = 'Esta herramienta puede ser mostrada en el selector de actividades para que un profesor la seleccione para añadirla  a un curso o en el menú desplegable de herramienta pre-configurada cuando se le añade una herramienta externa a un curso.';
$string['show_in_course_no'] = 'No mostrar, usar solamente cuando se ingresa una coincidencia de URL de herramienta';
$string['show_in_course_preconfigured'] = 'Mostrar como herramienta pre-configurada al añadir una herramienta externa';
$string['showinactivitychooser'] = 'Mostrar en Selector de actividad';
$string['sitehost'] = 'Nombre de host del sitio';
$string['siteid'] = 'ID del sitio';
$string['size'] = 'Parámetros de tamaño';
$string['submission'] = 'Envío';
$string['submissions'] = 'Envíos';
$string['submissionsfor'] = 'Envíos para {$a}';
$string['subplugintype_ltiresource'] = 'Recurso de servicio LTI';
$string['subplugintype_ltiresource_plural'] = 'Recursos de servicio LTI';
$string['subplugintype_ltiservice'] = 'Servicio LTI';
$string['subplugintype_ltiservice_plural'] = 'Servicios LTI';
$string['subplugintype_ltisource'] = 'Orígen de LTI';
$string['subplugintype_ltisource_plural'] = 'Orígenes de LTI';
$string['successfullycreatedtooltype'] = '¡Se creó exitosamente herramienta nueva!';
$string['successfullyfetchedtoolconfigurationfromcontent'] = 'Se buscó exitosamente la configuración de herramienta desde el contenido selecionado.';
$string['toggle_debug_data'] = 'Activar/Desactivar datos de depuración (debug)';
$string['tool_config_not_found'] = 'En esta URL no se encontró configuración para la herramienta.';
$string['tool_settings'] = 'Configuraciones de la Herramienta';
$string['tooldescription'] = 'Descripción de la herramienta';
$string['tooldescription_help'] = 'La descripción de la herramienta que será mostrada a los profesores en la lista de actividades.

Esto debería de describir para qué es la herramienta y qué es lo que hace y cualquier información adicional que el profesor podría necesitar saber.';
$string['tooldetailsaccesstokenurl'] = 'URL de token de accceso';
$string['tooldetailsauthrequesturl'] = 'URL de solicitud de autenticación';
$string['tooldetailsclientid'] = 'ID del cliente';
$string['tooldetailsdeploymentid'] = 'ID de Distribución';
$string['tooldetailsmailtosubject'] = 'Configuración de Herramienta LTI';
$string['tooldetailsmodalemail'] = 'Email';
$string['tooldetailsmodallink'] = 'Ver Detalles de Configuración';
$string['tooldetailsmodaltitle'] = 'Detalles de Configuración de Herramienta';
$string['tooldetailsplatformid'] = 'ID de plataforma';
$string['tooldetailspublickeyseturl'] = 'URL de conjunto_de_clave pública';
$string['toolisbeingused'] = 'Esta herramienta está siendo usada {$a} veces';
$string['toolisnotbeingused'] = 'Esta herramienta todavía no ha sido usada';
$string['toolproxy'] = 'Registros de Herramienta Externa';
$string['toolproxy_help'] = 'Los registros de herramientas externas le permiten a los administradores de Moodle configurar herramientas externas desde un proxy de herramienta obtenido desde un proveedor de herramienta que soporte LTI 2.0. Una URL para registro proporcionada por el proveedor de herramienta es todo lo que se necesita para iniciar el proceso. Las capacidades y servicios ofrecidos al proveedor de herramienta son seleccionadas cuando se configure un nuevo registro.

Los registros de herramientas enlistados en esta página están separados en cuatro categorías:

* **Configurado** - Estos registros de herramienta han sido configurados, pero el proceso de registro todavía no se ha iniciado.
* **Pendiente** - El proceso de registro para estas herramientas ha iniciado, pero no se ha completado. Abra y cierre las configuraciones para moverlo de regreso a la categoría de  \'Configurado\'.
* **Aceptado** - Estos registros de herramienta han sido aprobados; los recursos especificados en el proxy de la herramienta aparecerán dentro de la página de herramientas preconfiguradas con un estatus inicial de \'Pendiente\'.
* **Rechazado** - Estos registros de herramientas son los que fueron rechazados durante el proceso de registro. Abra y cierre las configuraciones para moverlo de regreso a la categoría de  \'Configurado\' para que el proceso de registro pueda ser reiniciado.';
$string['toolproxyregistration'] = 'Registro de Herramienta Externa';
$string['toolregistration'] = 'Registro de Herramienta Externa';
$string['toolsetup'] = 'Configuración de Herramienta Externa';
$string['tooltypeadded'] = 'Herramienta pre-configurada añadida';
$string['tooltypedeleted'] = 'Herramienta pre-configurada eliminada';
$string['tooltypenotdeleted'] = 'No pudo eliminarse herramienta pre-configurada';
$string['tooltypenotfounderror'] = 'La  herramienta LTI usada en esta actividad ha sido eliminada. Si usted necesita ayuda, póngase  en contacto con  su profesor o administrador del sitio.';
$string['tooltypes'] = 'Herramientas';
$string['tooltypeupdated'] = 'Herramienta pre-configurada actualizada';
$string['toolurl'] = 'URL de la Herramienta';
$string['toolurl_contentitemselectionrequest'] = 'URL de Selección de Contenido';
$string['toolurl_contentitemselectionrequest_help'] = 'La URL de Seleccionar Contenido será usada para invocar la página de selección del contenido del proveedor de la herramienta. Si estuviera vacía, se usará la URL de la herramienta';
$string['toolurl_help'] = 'La URL de la Herramienta se emplea para aparear las URLs de las herramientas con las configuraciones de Herramientas correctas. Ponerle el prefijo http(s) a la URL es opcional.

Adicionalmente, la URL base se emplea como la URL de la herramienta si es que no se especificó una URL en la instancia de la herramienta externa.

Por ejemplo, una URL base de *tool.com* concordaría con lo siguiente:

* tool.com
* tool.com/quizzes
* tool.com/quizzes/quiz.php?id=10
* www.tool.com/quizzes

Una URL base de *www.tool.com/quizes* concordaría con lo siguiente:

* www.tool.com/quizzes
* tool.com/quizzes
* tool.com/quizzes/take.php?id=10

Una URL base de  *quiz.tool.com* concordaría con lo siguiente:

* quiz.tool.com
* quiz.tool.com/take.php?id=10

Si existen dos diferentes configuraciones de herramienta para el mismo dominio, se usará la concordancia más específica.

Usted también puede insertar una cartridge URL (URL de cartucho) si Usted tiene una y los detalles para la herramienta serán llenados automáticamente.';
$string['toolurlplaceholder'] = 'URL de Herramienta...';
$string['typename'] = 'Nombre de la Herramienta';
$string['typename_help'] = 'El nombre de la herramienta es usado para identificar al proveedor de la herramienta dentro de Moodle. El nombre que se introduzca será visible a los profesores cuando añadan herramientas externas dentro de sus cursos.';
$string['types'] = 'Tipos';
$string['unabletocreatetooltype'] = 'No puede crearse herramienta';
$string['unabletofindtooltype'] = 'No puede encontrarse herramienta para {$a->id}';
$string['unknownstate'] = 'Estado desconocido';
$string['update'] = 'Actualizar';
$string['usage'] = 'Número de usos';
$string['useraccountinformation'] = 'Información de cuenta del usuario';
$string['userpersonalinformation'] = 'Información personal del usuario';
$string['using_tool_cartridge'] = 'Usando cartucho de herramienta';
$string['using_tool_configuration'] = 'Empleando la configuración de herramienta:';
$string['validurl'] = 'Una URL válida debe comenzar con http(s)://';
$string['viewsubmissions'] = 'Ver envíos y pantalla para calificar';
