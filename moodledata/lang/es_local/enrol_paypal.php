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
 * Strings for component 'enrol_paypal', language 'es', version '3.9'.
 *
 * @package     enrol_paypal
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Asignar rol';
$string['businessemail'] = 'Correo electrónico de negocios de PayPal';
$string['businessemail_desc'] = 'La dirección de correo electrónico
de su cuenta PayPal Business';
$string['cost'] = 'Coste de matriculación';
$string['costerror'] = 'El coste de matriculación no es un número';
$string['costorkey'] = 'Por favor, seleccione uno de los siguientes métodos de matriculación.';
$string['currency'] = 'Moneda';
$string['defaultrole'] = 'Asignación de roles por defecto';
$string['defaultrole_desc'] = 'Seleccione el rol que debería asignarse a los usuarios durante las matriculaciones con PayPal';
$string['enrolenddate'] = 'Fecha de cierre';
$string['enrolenddate_help'] = 'Si se habilita, los usuarios pueden inscibirse solamente hasta esta fecha.';
$string['enrolenddaterror'] = 'La fecha final de matrícula no puede ser anterior a la fecha inicial.';
$string['enrolperiod'] = 'Duración del periodo de inscripción';
$string['enrolperiod_desc'] = 'Periodo de tiempo por defecto en el que la matricula es válida. Si se establece a cero, la matricula durará de forma ilimitada por defecto';
$string['enrolperiod_help'] = 'Tiempo de duración de la inscripción válida, empezando al momento que el usuario es inscrito. Si se deshabilita, la inscripción será ilimitada.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios sólamente pueden inscribirse a partir de esta fecha.';
$string['expiredaction'] = 'Acción al finalizar la matrícula';
$string['expiredaction_help'] = 'Seleccione la acción a realizar cuando termine la matrícula. Por favor, tenga en cuenta que algunos datos y configuraciones del usuario son eliminados si son dados de baja del espacio.';
$string['mailadmins'] = 'Notificar a admin';
$string['mailstudents'] = 'Notificar a los participantes';
$string['mailteachers'] = 'Notificar a los facilitadores';
$string['messageprovider:paypal_enrolment'] = 'Mensajes de inscripción por PayPal';
$string['nocost'] = '¡No hay ningún coste asociado a la matriculación en este espacio!';
$string['paypal:config'] = 'Configurar matriculaciones desde PayPal';
$string['paypal:manage'] = 'Administrar los usuarios registrados';
$string['paypal:unenrol'] = 'Dar de baja usuarios del espacio';
$string['paypal:unenrolself'] = 'Darse de baja a sí mismo del espacio';
$string['paypalaccepted'] = 'Pagos PayPal aceptados';
$string['pluginname'] = 'PayPal';
$string['pluginname_desc'] = 'El módulo de PayPal le permite crear espacios de pago. Si el coste de cualquier espacio es cero, entonces los participantes no tienen que pagar para entrar. Hay un coste para todo el sitio que se establece como un valor predeterminado para todo el sitio y también valor de configuración que se puede establecer para cada espacio por separado. El costo del espacio anula el costo de sitio.';
$string['sendpaymentbutton'] = 'Enviar pago por Paypal';
$string['status'] = 'Permitir la matrícula con PayPal';
$string['status_desc'] = 'Permitir a los usuarios utilizar PayPal para inscribirse en un espacio de forma predeterminada.';
$string['unenrolselfconfirm'] = '¿Está seguro que desea darse de baja del espacio "{$a}"?';
