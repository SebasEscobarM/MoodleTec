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
 * Strings for component 'adaptivequiz', language 'es_mx', version '4.4'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Habilidad estimada';
$string['abilityestimated_help'] = 'La habilidad estimada de alguien que hizo la prueba se alinea con la dificultad del examen en la cual el examinado tiene una probabilidad de 50% de contestar correctamente la pregunta. Para identificar el nivel de desempeño, hacer coincidir el valor de habilidad con el rango de nivel de preguntas  (vea el rango después del símbolo \'/\' ).';
$string['activityreports'] = 'Reporte de intentos';
$string['adaptivequiz:addinstance'] = 'Añadir un nuevo examen adaptativo';
$string['adaptivequiz:attempt'] = 'Intentar examen adaptativo';
$string['adaptivequiz:reviewattempts'] = 'Revisar envíos de examen adaptativo';
$string['adaptivequiz:viewreport'] = 'Ver reportes de examen adaptativo';
$string['adaptivequizname'] = 'Nombre';
$string['adaptivequizname_help'] = 'Escriba el nombre de la instancia de Examen Adaptativo';
$string['all_attempts_deleted'] = 'Todos los intentos de Examen Adaptativo fueron eliminados';
$string['all_grades_removed'] = 'Todas las calificaciones de Examen Adaptativo fueron eliminadas';
$string['answer'] = 'Respuesta';
$string['answers_display_name'] = 'Respuestas';
$string['attempt_questiondetails'] = 'Detalles de la Pregunta';
$string['attempt_state'] = 'Estado del intento';
$string['attempt_summary'] = 'Resumen del Intento';
$string['attempt_user'] = 'Usuario';
$string['attemptclosed'] = 'Este intento ha sido cerrado manualmente.';
$string['attemptclosedstatus'] = 'Cerrado manualmente por {$a->current_user_name} (user-id: {$a->current_user_id}) en {$a->now}.';
$string['attemptdeleted'] = 'Intento eliminado para {$a->name} enviado en {$a->timecompleted}';
$string['attemptfeedback'] = 'Retroalimentación del intento';
$string['attemptfeedback_help'] = 'La retroalimentación del intento es mostrada al usuario una vez que el intento esté terminado';
$string['attemptfeedbackdefaulttext'] = '¡Usted ha terminado el intento; gracias por tomar el examen!';
$string['attemptfinishedtimestamp'] = 'Hora de fin del intento';
$string['attemptfirst'] = 'Primer intento';
$string['attemptlast'] = 'Último intento';
$string['attemptnofirstquestion'] = 'Lo sentimos, pero no se pudo definir la primera pregunta para iniciar el intento; posiblemente el examen esté mal configurado.';
$string['attemptquestion_ability'] = 'Medida de Habilidad';
$string['attemptquestion_abilitylogits'] = 'Habilidad Medida (logits)';
$string['attemptquestion_difficulty'] = 'Dificultad de la Pregunta (logits)';
$string['attemptquestion_diffsum'] = 'Suma de Dificultad';
$string['attemptquestion_level'] = 'Nivel de la Pregunta';
$string['attemptquestion_rightwrong'] = 'Respuesta Correcta/Incorrecta';
$string['attemptquestion_stderr'] = 'Error Estándar (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Progreso de preguntas: {$a}';
$string['attemptquestionsprogress_help'] = 'El número máximo de preguntas mostradas aquí no necesariamente es el número de preguntas que usted tiene que tomar durante el examen. Esto es el MÁXIMO POSIBLE número de preguntas que usted podría tomar, pero el examen podría terminar más pronto si la medida de habilidad está suficientemente definida.';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptsallowed_help'] = 'El númeo de veces que un estudiante puede intentar esta habilidad';
$string['attemptstarttime'] = 'Hora de inicio del intento';
$string['attemptstate'] = 'Estado del intento';
$string['attemptstopcriteria'] = 'Razón para interrumpir el intento';
$string['attemptsusernoprevious'] = 'Usted aun no ha intentado este examen';
$string['attemptsuserprevious'] = 'Sus intentos anteriores';
$string['attempttotaltime'] = 'Tiempo total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Regresar a todas las preguntas';
$string['bestscore'] = 'Mejor Puntaje';
$string['bestscorestderror'] = 'Error Estándar';
$string['browsersecurity'] = 'Seguridad del Navegador';
$string['browsersecurity_help'] = 'Si se seleciona "Pantalla completa con algo de seguridad JavaScript" el examen solamente iniciará si el estudiante tiene un navegador de Internet con JavaScript habilitado; el examen aparecerá en una ventana emergente a pantalla completa, que cubre todas las otras ventanas y que no tiene controles para  navegación, y a los estudiantes se les impide, tanto como es posible, el usar facilidades del tipo de copiar y pegar';
$string['calcerrorwithinlimits'] = 'El error estándar calculado de {$a->calerror} está dentro de los límites impuestos por la actividad {$a->definederror}';
$string['closeattempt'] = 'Cerrar intento';
$string['completionattemptcompletedcminfo'] = 'Completar un intento';
$string['completionattemptcompletedform'] = 'El estudiante debe tener al menos un intento completado en esta actividad';
$string['confirmcloseattempt'] = '¿Está Usted seguro de querer cerrar y finalizar este intento de {$a->name}?';
$string['confirmcloseattemptscore'] = '{$a->num_questions} preguntas fueron contestadas y el puntaje hasta aquí es  {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Este intento fue iniciado en {$a->started} y actualizado por última vez en {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmando la eliminación del intento de {$a->name} enviado en {$a->timecompleted}';
$string['deleteattemp'] = 'Eliminar intento';
$string['discrimination_display_name'] = 'Discriminación';
$string['downloadcsv'] = 'Descargar CSV';
$string['enterrequiredpassword'] = 'Escriba contraseña requerida';
$string['errorattemptstate'] = 'Hubo un error al determinar el estado del intento';
$string['errorclosingattempt_alreadycomplete'] = 'Este intento ya está completo, no puede cerrarse manualmente.';
$string['errorfetchingquest'] = 'No pudo obtenerse una pregunta para el nivel {$a->level}';
$string['errorlastattpquest'] = 'Error al revisar el valor de respuesta para la última pregunta intentada';
$string['errornumattpzero'] = 'Error con el número de preguntas intentadas siendo igual a cero, pero el usuario envió una respuesta a pregunta anterior';
$string['errorsumrightwrong'] = 'La suma de respuestas correctas e incorrectas no es igual al número total de preguntas intentadas';
$string['eventattemptcompleted'] = 'Intento completado';
$string['formelementdecimal'] = 'Escriba un número decimal. Con un máximo de 10 dígitos de longitud y un máximo de 5 dígitos a la derecha del punto decimal';
$string['formelementempty'] = 'Escriba un número entero positivo del 1 al 999';
$string['formelementnegative'] = 'Escriba un número positivo del 1 al 999';
$string['formelementnumeric'] = 'Escriba un valor numérico del 1 al 999';
$string['formlowlevelgreaterthan'] = 'Los niveles más inferiores deben ser menores que el nivel más alto';
$string['formminquestgreaterthan'] = 'El número mínimo de preguntas debe ser menor que el número máximo  de preguntas.';
$string['formquestionpool'] = 'Seleccione al menos una categoría d epregunta';
$string['formstartleveloutofbounds'] = 'El nivel inicial debe ser un número entre el nivel más bajo y el más alto';
$string['formstderror'] = 'Debe ingresar un porcentaje menor a 50 y mayor o igual a 0';
$string['functiondisabledbysecuremode'] = 'Esta funcionalidad está actualmente deshabilitada';
$string['gradehighest'] = 'Calificación más alta';
$string['grademethod'] = 'Método de calificación';
$string['grademethod_help'] = 'Cuando se permiten múltiples intentos, están disponibles los siguientes métodos para calcular la calificación final del examen:

* Calificación mayor de todos los intentos
* Primer intento (todos los demás intentos son ignorados)
* Último intento (todos los demás intentos son ignorados)';
$string['graphlegend_error'] = 'Eror estándar';
$string['highestlevel'] = 'Nivel más alto de dificultad';
$string['highestlevel_help'] = 'El nivel más alto o más difícil del que pueden seleccionarse preguntas. Durante un intento, la actividad no irá más allá de este nivel de dificultad';
$string['highlevelusers'] = 'Usuarioa arriba del nivel-de-pregunta';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Reporte individual de intentos de usuario para {$a}';
$string['leveloutofbounds'] = 'Nivel solicitado {$a->level} fuera de límites para el intento';
$string['lowestlevel'] = 'Nivel más bajo de dificultad';
$string['lowestlevel_help'] = 'El nivel más bajo o menos difícil del que pueden seleccionarse preguntas para la evaluación. Durante un intento, la actividad no irá más allá de este nivel de dificultad';
$string['lowlevelusers'] = 'Usuarios debajo del nivel-de-pregunta';
$string['maximumquestions'] = 'Númeromáximo de preguntas';
$string['maximumquestions_help'] = 'El número máximo d epreguntas que puede intentar un estudiante';
$string['maxquestattempted'] = 'Número máximo de preguntas intentadas';
$string['midlevelusers'] = 'Usuarios cerca del nivel-de-pregunta';
$string['minimumquestions'] = 'Númeromáximo d epreguntas';
$string['minimumquestions_help'] = 'El número mínimo de preguntas que debe intentar el estudiante';
$string['missingtagprefix'] = 'Falta prefijo de marca';
$string['modformshowattemptprogress'] = 'Mostrar progreso del examen a estudiantes';
$string['modformshowattemptprogress_help'] = 'Cuando es seleccionado, un estudiante verá una barra de progreso que ilustra cuantas preguntas están contestadas del número máximo.';
$string['modulename'] = 'Examen Adaptativo';
$string['modulename_help'] = 'La actividad de Examen Adpatativo le permite a un profesor crear exámenes que miden eficientemente las habilidades del examinado. Los exámenes adaptativos están compuestos de preguntas sleccionadas del banco de preguntas, que están marcadas con un puntaje de su dificultad. Las preguntas son elegidas para coincidir con el nivel estimado de habilidad del examinado actual. Si el examinado tiene éxito con una pregunta, a continuación se le presentará una pregunta más difícil. Si el examinado contesta incorrectamente una pregunta, a continuación se le presentará una pregunta menos difícil. Esta técnica evolucionará en una secuencia de preguntas que convergen en la habilidad efectiva del examinado. El examen se detiene cuando se ha determinado la habildad del examinado con la exactitud requerida.

Esta actividad es más apropiada para determinar una medida de habilidad a lo largo de una escala unidimensional. Mientras que la escala puede ser muy amplia, las preguntas deben todas proporcionar una medida de habilidad o aptitud en la misma escala. En un examen para colocación, por ejemplo, las preguntas en la parte baja de la escala que los novatos pueden contestar correctamente deberían de también ser contestables por los expertos, mientras que las preguntas en la parte alta de la escala deberían de ser únicamente contestables por expertos o por una adivinanza afortunada. Las preguntas que no discriminen entre los sustentantes de diferentes habilidades harán ineficiente el examen y pueden proporcionar resultados inconclusos.

Las preguntas en el Examen Adaptativo deben de

* ser calificadas automáticamente como correcta/incorrecta
* ser marcadas con su nivel de dificultad usando \'adpq_\' seguido por un número entero positivo que esté dentro del rango para el examen

El Examen Adaptativo puede configurarse para

* definir el rango de dificultades-de-pregunta/habilidades-de-usuario a medirse. 1-10, 1-16, and 1-100 son ejemplos de rangos válidos.
* definir la precisión requerida antes de que se detenga el examen. A menudo un error de 5% en la medición de la habilidad es una regla para detenerse apropiada
* requerir un número mínimo de preguntas a contestarse
* requerir un número máximo de preguntas a contestarse

Esta descripción y el procedimiento para examinar en esta actividad están basados en  <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> por John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Examen Adaptativo';
$string['na'] = 'n/d';
$string['name'] = 'Nombre';
$string['noattemptsallowed'] = 'No más intentos permitidos en esta actividad';
$string['nonewmodules'] = 'No se encontraron instancias de Examen Adaptativo';
$string['nopermission'] = 'Usted no tiene permiso para ver este recurso';
$string['notinprogress'] = 'Este intento no está en progreso.';
$string['notyourattempt'] = 'Este no es su intento para la actividad';
$string['numofattemptshdr'] = 'Número de intentos';
$string['percent_correct_display_name'] = '% Correctos';
$string['pluginadministration'] = 'Examen Adaptativo';
$string['pluginname'] = 'Examen Adaptativo';
$string['question_report'] = 'Análisis de Pregunta';
$string['questionanalysisbtn'] = 'Análisis de Pregunta';
$string['questionnumber'] = 'Pregunta #';
$string['questionpool'] = 'Lote de Preguntas';
$string['questionpool_help'] = 'Seleccione la(s) categoría(s) de donde se sacarán las preguntas para un intento.';
$string['questions_report'] = 'Reporte de Preguntas';
$string['questionsattempted'] = 'Suma de preguntas intentadas';
$string['questionspoolerrornovalidstartingquestions'] = 'Las categorías de pregunta seleccionadas no contienen preguntas que estén marcadas apropiadamente para coincidir con el nivel inicial de dificultas seleccionado.';
$string['recentactquestionsattempted'] = 'Preguntas intentadas: {$a}';
$string['recentattemptstate'] = 'Inicio del intento:';
$string['recentcomplete'] = 'Completado';
$string['recentinprogress'] = 'En progreso';
$string['reportanswersdistributionchartdisplaystacked'] = 'Mostrar barras apiladas';
$string['reportanswersdistributionchartnumrightlabel'] = 'Número de respuestas correctas';
$string['reportanswersdistributionchartnumwronglabel'] = 'Número de respuestas incorrectas';
$string['reportanswersdistributionchartxaxislabel'] = 'Dificultad de la pregunta';
$string['reportanswersdistributionchartyaxislabel'] = 'Número de respuestas';
$string['reportattemptadmanswerright'] = 'C';
$string['reportattemptadmanswerwrong'] = 'I';
$string['reportattemptadmchartadmdifflabel'] = 'Dificultad Administrada';
$string['reportattemptadmcharttargetdifflabel'] = 'Dificultad Esperada';
$string['reportattemptanswerdistributiontab'] = 'Distribución de Respuesta';
$string['reportattemptgraphtab'] = 'Gráfica de Intento';
$string['reportattemptgraphtabletitle'] = 'Vista de Tabla de Gráfica de Intento';
$string['reportattemptquestionsdetailstab'] = 'Detalles de Preguntas';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - revisando intento por {$a->fullname} enviado en {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'todos los usuarios que alguna vez hicieron intentos';
$string['reportattemptsdownloadfilename'] = '{$a}_attempts_report';
$string['reportattemptsenrolledwithattempts'] = 'participantes que hicieron intentos';
$string['reportattemptsenrolledwithnoattempts'] = 'participantes que NO hicieron intentos';
$string['reportattemptsfilterformheader'] = 'Filtrando';
$string['reportattemptsfilterformsubmit'] = 'Filtro';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Incluir usuarios con inscripciones inactivas';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Si es que se incluyen o no usuarios con inscripciones suspendidas.';
$string['reportattemptsfilterusers'] = 'Mostrar';
$string['reportattemptsnotenrolled'] = 'usuarios no inscritos que hicieron intentos';
$string['reportattemptspersistentfilter'] = 'Filtro persistente';
$string['reportattemptspersistentfilter_help'] = 'Cuando se activa, la configuración inferior del filtro será almacenada al enviar, y entonces será aplicada cada vez que usted visite la página del reporte.';
$string['reportattemptsprefsformheader'] = 'Preferencias del Reporte';
$string['reportattemptsprefsformsubmit'] = 'Aplicar';
$string['reportattemptsresetfilter'] = 'Reiniciar filtro';
$string['reportattemptsshowinitialbars'] = 'Mostrar barra de iniciales';
$string['reportattemptsummarytab'] = 'Resumen del Intento';
$string['reportattemptsusersperpage'] = 'Número de usuarios mostrados:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - reporte de intentos de usuario individual para {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - reporte de preguntas';
$string['reportuserattemptstitleshort'] = 'intentos de {$a}';
$string['requirepassword'] = 'Requiere contraseña';
$string['requirepassword_help'] = 'Se les pide a los estudiantes que escriban una contraseña antes de iniciar sus intentos';
$string['requirepasswordmessage'] = 'Para intentar este examen Usted necesita saber la contraseña del examen';
$string['resetadaptivequizsall'] = 'Eliminar todos los intentos de Examen Adaptativo';
$string['result'] = 'Resultado';
$string['reviewattempt'] = 'Revisar intento';
$string['reviewattemptreport'] = 'Reviesando intento por {$a->fullname} enviado en {$a->finished}';
$string['score'] = 'Puntaje';
$string['showabilitymeasure'] = 'Mostrar medición de habilidad a los estudiantes';
$string['showabilitymeasure_help'] = 'A veces, podría ser útil revelar las estimaciones de habilidad a los estudiantes después de un examen adaptativo. Con esta configuración habilitada, un estudiante puede ver la estimación de la habilidad en el resumen de los intentos y también  justo después de terminar un intento.';
$string['standarderror'] = 'Error estándar para detenerse';
$string['standarderror_help'] = 'Cuando la cantidad de error en la medición de la habilidad del usuario disminuye por debajo de esta cantidad, el examen se detendrá. Ajuste esta cantidad desde el valor por defecto de 5% para requerir más o menos precisión en la medición de habilidad';
$string['standarderrorhdr'] = 'Error estándar';
$string['startattemptbtn'] = 'Iniciar intento';
$string['startinglevel'] = 'Nivel inicial de dificultad';
$string['startinglevel_help'] = 'Cuando el estudiante inicie un intent, la actividad seleccionará aleatoriamente una pregunta que coincida con elnivel de dificultad';
$string['statistic'] = 'Estadística';
$string['stopingconditionshdr'] = 'Condiciones para detenerse';
$string['submitanswer'] = 'EWnviar respuesta';
$string['times_used_display_name'] = 'Veces Usada';
$string['updateattempterror'] = 'Eror al tratar de actualizar registro de intento';
$string['user'] = 'Usuario';
$string['value'] = 'Valor';
$string['wrongpassword'] = 'La contraseña es incorrecta';
