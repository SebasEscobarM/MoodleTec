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
 * Strings for component 'quiz_overview', language 'es_mx', version '4.4'.
 *
 * @package     quiz_overview
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'Mostrar todos los intentos';
$string['allattemptscontributetograde'] = 'Todos los intentos contribuyen a la calificación final del usuario.';
$string['allstudents'] = 'Mostrar todos los {$a}';
$string['attemptsonly'] = 'Mostrar solamente {$a} con intentos';
$string['attemptsprepage'] = 'Intentos mostrados por página';
$string['deleteselected'] = 'Eliminar los intentos seleccionados';
$string['done'] = 'Hecho';
$string['err_failedtodeleteregrades'] = 'No se pudo eliminar las calificaciones de intentos calculados';
$string['err_failedtorecalculateattemptgrades'] = 'No se pudo recalcular las calificaciones del intento';
$string['highlightinggraded'] = 'El intento del usuario que contribuye a la calificación final está resaltado.';
$string['needed'] = 'Necesario';
$string['noattemptsonly'] = 'Mostrar solamente {$a} sin intentos';
$string['noattemptstoregrade'] = 'Ningún intento necesita recalificación';
$string['nogradepermission'] = 'No tiene permiso para calificar este examen.';
$string['onlyoneattemptallowed'] = 'Sólo se permite un intento por usuario en este examen.';
$string['optallattempts'] = 'todos los intentos';
$string['optallstudents'] = 'todos los  {$a} que han intentado o no resolver este examen';
$string['optattemptsonly'] = '{$a} que han tomado este examen';
$string['optnoattemptsonly'] = '{$a} que no han tomado el examen';
$string['optonlyregradedattempts'] = 'que han sido recalificados / están marcados que necesitan recalificarse';
$string['overview'] = 'Calificaciones';
$string['overviewdownload'] = 'Descargar visión general';
$string['overviewfilename'] = 'calificaciones';
$string['overviewreport'] = 'Reporte de calificaciones';
$string['overviewreportgraph'] = 'Gráfico de barras del número de estudiantes que alcanzan los rangos de calificación';
$string['overviewreportgraphgroup'] = 'Número de estudiantes del grupo \'{$a}\' que han alcanzado los rangos de calificación';
$string['pagesize'] = 'Tamaño de página';
$string['pluginname'] = 'Calificaciones';
$string['preferencespage'] = 'Preferencias sólo para esta página';
$string['preferencessave'] = 'Guardar preferencias';
$string['preferencesuser'] = 'Sus preferencias para este reporte';
$string['privacy:metadata:preference:quiz_overview_slotmarks'] = 'Si es que se muestran puntuaciones para cada posición de pregunta.';
$string['privacy:preference:slotmarks:no'] = 'Las puntuaciones no son mostradas junto con la posición de la pregunta.';
$string['privacy:preference:slotmarks:yes'] = 'Las puntuaciones son mostradas junto con la posición de la pregunta.';
$string['regrade'] = 'Recalificar';
$string['regradeall'] = 'Recalificar todo';
$string['regradealldry'] = 'Simulacro de recalificación completa';
$string['regradealldrydo'] = 'Recalificar los intentos marcados cuando necesiten recalificación ({$a})';
$string['regradealldrydogroup'] = 'Recalificar intentos ({$a->countregradeneeded}) marcados como necesitados de recalificación en el grupo \'{$a->groupname}';
$string['regradealldrygroup'] = 'Simulacro de recalificación completa para el grupo \'{$a->groupname}';
$string['regradeallgroup'] = 'Recalificación completa para el grupo \'{$a->groupname}';
$string['regradecomplete'] = 'Re-calificación completada';
$string['regradedsuccessfullyxofy'] = 'Se terminó de re-calificar ({$a->done}/{$a->count})';
$string['regradeheader'] = 'Recalificando';
$string['regradeselected'] = 'Volver a calificar los intentos seleccionados';
$string['regradingattemptissue'] = 'Posición {$a->slot}: {$a->reason}';
$string['regradingattemptxofy'] = 'Recalificando intento ({$a->done}/{$a->count})';
$string['regradingattemptxofyproblem'] = 'Las siguientes preguntas no se pudieron re-calificar en el intento {$a->attemptnum} por {$a->name} (id {$a->attemptid})';
$string['regradingattemptxofywithdetails'] = 'Recalificando intento ({$a->done}/{$a->count}) - Intento {$a->attemptnum} por {$a->name} (id {$a->attemptid})';
$string['show'] = 'Mostrar / descargar';
$string['showattempts'] = 'Solo mostrar / descargar intentos';
$string['showdetailedmarks'] = 'Puntuación para cada pregunta';
$string['showinggraded'] = 'Mostrando sólo el intento calificado para cada usuario.';
$string['showinggradedandungraded'] = 'Mostrando los intentos calificados y no calificados para cada usuario. El intento calificado para cada usuario está resaltado. El método de calificación para este examen es {$a}.';
$string['studentingroup'] = '\'{$a->coursestudent}\' en el grupo \'{$a->groupname}';
$string['studentingrouplong'] = '\'{$a->coursestudent}\' en este grupo';
