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
 * Strings for component 'block_grade_me', language 'es_mx', version '4.4'.
 *
 * @package     block_grade_me
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alt_gradebook'] = 'Ir al libro de calificaciones de {$a->course_name}…';
$string['alt_mark'] = 'revisar';
$string['alt_mod'] = 'Ir a {$a->mod_name} en el libro de calificaciones…';
$string['datetime'] = '%B %d, %l:%M %p';
$string['excess'] = 'Hay más de {$a->maxcourses} cursos con trabajos sin-calificar.';
$string['expand'] = 'Colapsar / Expandir Todo';
$string['grade_me:addinstance'] = 'Añadir un nuevo bloque de Califica_Me';
$string['grade_me:myaddinstance'] = 'Añadir un nuevo bloque de Califica_Me a la página de Mi Moodle';
$string['grade_me_tools'] = 'Herramientas';
$string['grade_me_tools_desc'] = '<p><a href="{$a}/blocks/grade_me/quiz_update_ngrade.php">Refrescar intentos de exámenes que necesitan calificarse</a></p>';
$string['link_grade_img'] = 'Calificar tarea ...';
$string['link_gradebook'] = 'Ir a {$a->course_name}…';
$string['link_gradebook_icon'] = 'Ir al libro de calificaciones de {$a->course_name} …';
$string['link_mod'] = 'Ir a {$a->mod_name}';
$string['link_mod_img'] = 'Ir a {$a->mod_name} en el libro de calificaciones…';
$string['link_user_profile'] = 'el perfil de {$a->first_name}…';
$string['nothing'] = '¡Nada para calificar!';
$string['pluginname'] = 'Califica_Me';
$string['pluginname-reset'] = 'Califica_Me - reiniciar tabla';
$string['quiz_update_ngrade_complete'] = 'Actualización completada';
$string['quiz_update_ngrade_success'] = 'La lista de intentos de exámenes fue actualizada exitosamente; actualmente hay {$a} preguntas que necesitan califcarse.';
$string['settings_adminviewall'] = 'Administradores Ven Todo';
$string['settings_configadminviewall'] = 'Habilitar para darle a los administradores los permisos para ver todo el trabajo sin calificar - no solamente para los cursos en donde tuvieran un rol de calificador.';
$string['settings_configenablepre'] = '¿ Debería Califica_Me mostrar actividad no evaluada del módulo  "{$a->plugin_name}"  ?';
$string['settings_configmaxage'] = 'La edad máxima de los elementos calificables, en días, para mostrar. Los elementos más antiguos que esto serán ocultados. Ponga 0 para sin límite.';
$string['settings_configmaxcourses'] = 'Configura el número máximo de cursos no-calificados a mostrar. El configurar esto muy alto puede impactar sobre el desempeño del servidor.';
$string['settings_configshowhidden'] = 'Habilitar mostrar elementos a calificar dentro de cursos ocultos';
$string['settings_enablepre'] = 'Mostrar';
$string['settings_maxage'] = 'Edad Máxima';
$string['settings_maxcourses'] = 'Máximo de cursos a mostrar';
$string['settings_showhidden'] = 'Elementos de cursos ocultos mostrados';
$string['title'] = 'Califica_Me';
