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
 * Strings for component 'availability_grade', language 'es_mx', version '4.4'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Elementos de calificación cacheados para evaluar disponibilidad condicional';
$string['cachedef_scores'] = 'Calificaciones del usuario cacheadas para evaluar disponibilidad condicional';
$string['description'] = 'Requerir que los estudiantes alcancen una calificación especificada.';
$string['error_backwardrange'] = 'Al especificar un rango de calificaciones, el mínimo debe ser menor al máximo.';
$string['error_invalidnumber'] = 'Los rangos de calificaciones deben estar espicificados con porcentajes válidos.';
$string['error_selectgradeid'] = 'Usted debe seleccionar un elemento de calificación para la condición de calificación.';
$string['label_max'] = 'Porcentaje máximo de calificación (exclusivo)';
$string['label_min'] = 'Porcentaje mínimo de calificación (inclusive)';
$string['missing'] = '(actividad faltante)';
$string['option_max'] = 'debe ser <';
$string['option_min'] = 'debe ser ≥';
$string['pluginname'] = 'Restricción por calificaciones';
$string['privacy:metadata'] = 'El plugin de Restricción por calificaciones de actividad no almacena ningún dato personal.';
$string['requires_any'] = 'Usted tenga una calificación en <strong>{$a}</strong>';
$string['requires_max'] = 'Usted logre menos que un cierto puntaje en  <strong>{$a}</strong>';
$string['requires_min'] = 'Usted logre más que un cierto puntaje en  <strong>{$a}</strong>';
$string['requires_notany'] = 'Usted no tenga una calificación en <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Usted no obtenga ciertos puntajes en <strong>{$a}</strong>';
$string['requires_range'] = 'Usted logre un puntaje dentro de cierto rango en  <strong>{$a}</strong>';
$string['title'] = 'Calificación';
