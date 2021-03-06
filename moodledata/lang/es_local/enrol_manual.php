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
 * Strings for component 'enrol_manual', language 'es', version '3.9'.
 *
 * @package     enrol_manual
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alterstatus'] = 'Cambiar estado';
$string['altertimeend'] = 'Cambiar tiempo final';
$string['altertimestart'] = 'Cambiar tiempo inicial';
$string['assignrole'] = 'Asignar rol';
$string['browsecohorts'] = 'Buscar compañeros';
$string['browseusers'] = 'Buscar usuarios';
$string['confirmbulkdeleteenrolment'] = '¿Está seguro que desea eliminar estas matrículas de usuarios?';
$string['defaultperiod'] = 'Duración del periodo de matriculación por defecto';
$string['defaultperiod_desc'] = 'Periodo de tiempo por defecto en el que la matricula es válida. Si se establece a cero, la matricula durará de forma ilimitada por defecto';
$string['defaultperiod_help'] = 'Periodo de tiempo predeterminado durante el que el la matrícula es válida, a partir del momento en que se matricula el usuario. Si está desactivado, la duración de la matrícula será ilimitada por defecto.';
$string['defaultstart'] = 'Comienzo del periodo de matriculación';
$string['deleteselectedusers'] = 'Eliminar las matrículas de usuario seleccionadas';
$string['editselectedusers'] = 'Editar las matrículas de usuario seleccionadas';
$string['enrolledincourserole'] = 'Matriculado en "{$a->course}" as "{$a->role}"';
$string['enrolusers'] = 'Matricular usuarios';
$string['enroluserscohorts'] = 'Matricular cohortes y usuarios seleccionados';
$string['expiredaction'] = 'Acción a la expiración de la matrícula';
$string['expiredaction_help'] = 'Seleccione la acción a llevar a cabo cuando la matriculación del usuario expire. Tenga en cuenta que hay información y datos de configuración relativos al usuario que serán eliminados en el proceso de baja.';
$string['expirymessageenrolledbody'] = 'Apreciado  {$a->user},

Este es un aviso de que su matrícula en el \'{$a->course}\' está próxima a expirar en {$a->timeend}. Si necesita ayuda, por favor póngase en contacto con {$a->enroller}.';
$string['expirymessageenrolledsubject'] = 'Notificación de la caducidad de la matricula';
$string['expirymessageenrollerbody'] = 'La matrícula en el espacio \'{$a->course}\' finalizará dentro del próximo {$a->threshold} para los siguientes usuarios:

{$a->users}

Para extender su matrícula, vaya a {$a->extendurl}';
$string['expirymessageenrollersubject'] = 'Notificación de la caducidad de la matricula';
$string['manual:config'] = 'Configurar instancias de la matriculaciñon manual';
$string['manual:enrol'] = 'Matricular usuarios';
$string['manual:manage'] = 'Gestión de matriculas de usuario';
$string['manual:unenrol'] = 'Dar de baja usuarios del espacio';
$string['manual:unenrolself'] = 'Darse de baja del espacio';
$string['manualpluginnotinstalled'] = 'El complemento "Manual" no ha sido instalado aún';
$string['messageprovider:expiry_notification'] = 'Notificaciones de expiración de matriculaciones manuales';
$string['now'] = 'Ahora';
$string['pluginname'] = 'Matriculación manual';
$string['pluginname_desc'] = 'La extensión para la matriculación manual permite que los usuarios sean  matriculados de forma manual por un usuario con los permisos adecuados, como un facilitador, mediante un enlace situado en la configuración de la administración del espacio. La extensión debe normalmente estar activada, ya que algunas extensiones de matriculación, como la auto-matriculación, así lo requieran.';
$string['selectusers'] = 'Seleccionar usuarios';
$string['status'] = 'Habilita matriculación manual';
$string['status_desc'] = 'Permitir la matriculación manual de usuarios. Esta opción normalmente debería estar habilitada.';
$string['status_help'] = 'Esta configuración determina si los usuarios pueden ser matriculados de forma manual por un usuario con los permisos adecuados, como un facilitador, mediante un enlace situado en la configuración de la administración del espacio.';
$string['statusdisabled'] = 'Deshabilitado';
$string['statusenabled'] = 'Habilitado';
$string['unenrol'] = 'Dar de baja usuario';
$string['unenrolselectedusers'] = 'Dar de baja la matrícula de los usuarios seleccionados';
$string['unenrolselfconfirm'] = '¿Desea realmente darse de baja del espacio "{$a}" ?';
$string['unenroluser'] = '¿Desea realmente dar de baja la matrícula del usuario "{$a->user}" del espacio "{$a->course}"';
$string['unenrolusers'] = 'Dar de baja usuarios';
$string['wscannotenrol'] = 'Con esta extensión no se puede matricular manualmente un usuario en el espacio id = {$a->courseid}';
$string['wsnoinstance'] = 'La extensión (plugin) para la matriculación manual no existe o está deshabilitada para el espacio (id = {$a->courseid})';
$string['wsusercannotassign'] = 'Usted no tiene permisos para asignar el rol ({$a->roleid}) a este usuario ({$a->userid}) en este espacio ({$a->courseid}).';
