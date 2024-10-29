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
 * Strings for component 'auth_uniquelogin', language 'es_mx', version '4.4'.
 *
 * @package     auth_uniquelogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aplly_to_admin'] = 'Aplicar a Administradores';
$string['aplly_to_teacher'] = 'Aplicar a Profesores';
$string['auth_uniquelogerror'] = 'Ya hay una sesión activa, por lo que no es posible ingresar.';
$string['auth_uniquelogindescription'] = 'Este plugin asegura que cada usuario solamente tenga una sesión activa.<br /><br />
Cada vez que un usuario haga una entrada exitosa al sitio, todas las demás sesiones pertenecientes a ese usuario serán terminadas.<br><br /><div style=\\"font-weight: bold;\\">Nota 1: Para que este plugin funcione, las sesiones de usuario deben estar almacenadas en la base de datos. Esta configuración está determinada en   <a href="settings.php?section=sessionhandling">Sesiones.</a></div><br />';
$string['auth_uniquelogintitle'] = 'Entrada única';
$string['configaplly_to_admin'] = 'Aplicar la restricción para ingreso único a usuarios con rol de Administrador en el contexto del sistema.';
$string['configaplly_to_teacher'] = 'Aplicar la restricción para ingreso único a usuarios con rol de Profesor en cualquier curso Moodle.';
$string['pluginname'] = 'Entrada única';
