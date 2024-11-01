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
 * Strings for component 'qtype_musicscale', language 'es_mx', version '4.4'.
 *
 * @package     qtype_musicscale
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['A'] = 'A (la)';
$string['B'] = 'B (si)';
$string['C'] = 'C (do)';
$string['D'] = 'D (re)';
$string['E'] = 'E (mi)';
$string['F'] = 'F (fa)';
$string['G'] = 'G (sol)';
$string['addingscale'] = 'Añadiendo Escala Musical';
$string['alto'] = 'Alto';
$string['answer'] = 'respuesta';
$string['answer_cap'] = 'Respuesta';
$string['answer_help'] = '<p>Escriba las notas de la escala en este formato:</p><p>[Letra (C (do), D (re), E (mi), F (fa) ,G (sol), B (si))] [Accidental (# or b)] [registro, usando el  <a href="http://es.wikipedia.org/wiki/%C3%8Dndice_ac%C3%BAstico_cient%C3%ADfico" target="_blank">Índice acústico científico</a>]</p><p>Inserte comas entre las notas, sin espacios. Incluya la nota tónica tanto al principio como al final de la escala.</p><p>Ejemplos:</p><ul><li>La solución para la escala E major (Mi mayor)  donde la tónica es E4 debería escribirse como: <br><strong>E4,F#4,G#4,A4,B4,C#5,D#5,E5</strong></li><li>La solución para la escala F# melodic minor donde la tónica es F#3 debería escribirse como: <br><strong>F#3,G#3,A3,B3,C#4,D#4,E#4,F#4,E4,D4,C#4,B3,A3,G#3,F#3</strong></li></ul><p>Usted puede elegir "Vacíos para 3 opciones más" para añadir otras respuestas que den una puntuación parcila. Al menos una de las respuestas debe tener asignada una puntuación total del 100%.</p>';
$string['answerno'] = 'Respuesta {$a}';
$string['b'] = 'Bemol';
$string['bass'] = 'Bajo';
$string['default'] = 'Por defecto';
$string['editingscale'] = 'Editando Escala Musical';
$string['feedback'] = 'Retroalimentación';
$string['feedbackcorrectanswer'] = 'Su respuesta es correcta.';
$string['feedbackwronganswer'] = 'La respuesta correcta es:';
$string['forceclef'] = 'Forzar Clave';
$string['forceclef_help'] = 'Esto anulará la Clave generada por defecto.';
$string['instructions'] = '<h5>Instrucciones</h5><p>Mueva su ratón por encima del pentagrama para generar una nota.</p><p>Cuando Usted haya alcanzado la ubicación para colocarla, haga clic izquierdo del ratón para asegurarla.</p><p>Si Usted necesita mover la nota, haga clic izquierdo sobre de ella , y muévala hacia la nueva ubicación; después haga clic izquierdo para volverla a asegurar.</p><p>Para añadir accidentales a la nota, haga clic derecho con el ratón y aparecerá un menú contextual.';
$string['modescale'] = 'Tipo de escala';
$string['modescale_harmonic_minor'] = 'Harmónica menor';
$string['modescale_help'] = 'Especifica el tipo de escala a introducir.';
$string['modescale_major'] = 'Mayor';
$string['modescale_melodic_minor'] = 'Melódica menor';
$string['modescale_natural_minor'] = 'Natural menor';
$string['no'] = 'No';
$string['nonexistentkey'] = 'Esta tónica no tiene un tono para el modo de la escala que seleccionó - por favor seleccione otra tónica u otro tipo de escala.';
$string['noteletterout'] = 'Usted ha añadido una letra de nota que está fuera del rango.';
$string['orignoteaccidental'] = 'Tónica accidental';
$string['orignoteaccidental_help'] = 'Especifica una accidental quese aplica a la tónica - si no aplica accidental, entonces debería seleccionarse natural';
$string['orignoteletter'] = 'Letra de tónica';
$string['orignoteletter_help'] = 'Especifica el nombre de letra de la tónica.';
$string['orignoteregister'] = 'Registro de tónica';
$string['orignoteregister_help'] = 'Especifica el registro donde está la tónica, usando  <a href="http://es.wikipedia.org/wiki/%C3%8Dndice_ac%C3%BAstico_cient%C3%ADfico" target="_blank">índice acústico científico</a>.';
$string['outofrange'] = 'La clave y nota(s) que Usted ha seleccionado están fuera del rngo.';
$string['pluginname'] = 'Escala musical';
$string['pluginname_help'] = 'Flash para Definir Escalas';
$string['pluginnameadding'] = 'Añadiendo una pregunta de escala musical';
$string['pluginnameediting'] = 'Editando una pregunta de escala musical';
$string['pluginnamesummary'] = 'Componente Flash que permite al usuario definir una escala';
$string['registerout'] = 'Usted ha añadido un registro que está fuera del rango.';
$string['scale'] = 'Escala Musical';
$string['scale_help'] = 'Al alumno se le da una tónica, modo, llave y tipo de escala y se le pregunta la escala correspondiente en la partitura.';
$string['tenor'] = 'Tenor';
$string['tonic_too_high_for_register'] = 'El registro es demasiado alto para la tónica dada - el componente de entrada no lo soportaría. Por favor seleccione un registro menor.';
$string['yes'] = 'Si';
