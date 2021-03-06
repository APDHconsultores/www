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
 * Strings for component 'enrol', language 'es', version '3.9'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Conectores disponibles de matriculación en el espacio';
$string['addinstance'] = 'Añadir método';
$string['addinstanceanother'] = 'Añadir método y crear otro';
$string['ajaxnext25'] = 'Siguientes 25...';
$string['ajaxoneuserfound'] = '1 usuario encontrado';
$string['ajaxxusersfound'] = '{$a} usuarios encontrados';
$string['assignnotpermitted'] = 'No tiene permiso o no puede asignar roles en este espacio';
$string['bulkuseroperation'] = 'Operación de usuario masiva';
$string['configenrolplugins'] = 'Por favor, seleccione todos los conectores requeridos y colóquelos en orden adecuado.';
$string['custominstancename'] = 'Personalizar nombre';
$string['defaultenrol'] = 'Añadir instancia a espacios nuevos';
$string['defaultenrol_desc'] = 'Es posible añadir esta extensión, por defecto, a todos los espacios nuevos.';
$string['deleteinstanceconfirm'] = 'Está a punto de eliminar el método de matriculación "{$a->name}". Todos los  {$a->users} usuarios actualmente matriculados con este método serán dados de baja y cualquier información suya relativa a sus espacios, como las calificaciones, pertenencia a grupos o suscripción a foros será eliminada.

¿Está seguro que quiere continuar?';
$string['deleteinstanceconfirmself'] = '¿Estás seguro de que quieres eliminar el elemento "{$a->name}" que le da acceso a este espacio? Es posible que usted luego no pueda acceder a este espacio si continúa.';
$string['deleteinstancenousersconfirm'] = 'Está a punto de eliminar el método de matriculación "{$a->name}". ¿Está seguro que quiere continuar?';
$string['disableinstanceconfirmself'] = '¿Estás seguro de que quieres eliminar el elemento "{$a->name}" que le da acceso a este espacio? Es posible que usted luego no pueda acceder a este espacio si continúa.';
$string['durationdays'] = '{$a} días';
$string['editenrolment'] = 'Editar matrícula';
$string['edituserenrolment'] = 'Editar {$a}\'s matriculación';
$string['enrol'] = 'Matricular';
$string['enrolcandidates'] = 'Usuarios no matriculados';
$string['enrolcandidatesmatching'] = 'Emparejar usuarios no matriculados';
$string['enrolcohort'] = 'Matricular cohorte';
$string['enrolcohortusers'] = 'Matricular usuarios';
$string['enroldetails'] = 'Detalles de matriculación';
$string['enrollednewusers'] = 'Nuevos usuarios {$a} matriculados con éxito';
$string['enrolledusers'] = 'Usuarios matriculados';
$string['enrolledusersmatching'] = 'Emparejar usuarios matriculados';
$string['enrolme'] = 'Matricularme en este espacio';
$string['enrolmentinstances'] = 'Métodos de matriculación';
$string['enrolmentmethod'] = 'Método de matriculación';
$string['enrolmentnew'] = 'Nueva matriculación en {$a}';
$string['enrolmentnewuser'] = '{$a->user} se ha matriculado en el espacio "{$a->course}"';
$string['enrolmentoptions'] = 'Opciones de matriculación';
$string['enrolments'] = 'Matriculaciones';
$string['enrolnotpermitted'] = 'No tiene permiso o no puede realizar matriculaciones en este espacio';
$string['enrolperiod'] = 'Período de vigencia de la matrícula';
$string['enroltimecreated'] = 'Matrícula creada';
$string['enroltimeend'] = 'Matrículación finalizada';
$string['enroltimestart'] = 'Matriculación iniciada';
$string['enrolusage'] = 'Instancias / matriculaciones';
$string['enrolusers'] = 'Matricular usuarios';
$string['enrolxusers'] = 'Matricular {$a} usuarios';
$string['errajaxfailedenrol'] = 'No se ha podido matricular al usuario';
$string['errajaxsearch'] = 'Error al buscar usuarios';
$string['erroreditenrolment'] = 'Se produjo un error al intentar modificar una matrícula de usuario';
$string['errorenrolcohort'] = 'Error al crear ejemplo de matriculación sync de cohorte en este espacio.';
$string['errorenrolcohortusers'] = 'Error al matricular a los miembros de la cohorte en este espacio.';
$string['errorthresholdlow'] = 'El umbral para la notificación debe ser al menos 1 día.';
$string['errorwithbulkoperation'] = 'Se produjo un error mientras se procesaban sus cambios de matriculación masivos';
$string['eventenrolinstancecreated'] = 'Instancia de inscripción creada';
$string['eventenrolinstancedeleted'] = 'Instancia de inscripción borrada';
$string['eventenrolinstanceupdated'] = 'Instancia de inscripción actualizada';
$string['eventuserenrolmentcreated'] = 'Usuario matriculado xencursox';
$string['eventuserenrolmentdeleted'] = 'Usuario matriculado xencursox';
$string['eventuserenrolmentupdated'] = 'Usuario matriculado xencursox';
$string['expirynotify'] = 'Notificar antes de que la matrícula expire';
$string['expirynotify_help'] = 'Este parámetro determina cuándo se envían los avisos de que la matricula expira.';
$string['expirynotifyall'] = 'Persona que matricula y usuario matriculado';
$string['expirynotifyenroller'] = 'Persona que matricula solamente';
$string['expirynotifyhour'] = 'Hora de envío de los avisos de que la matrícula expira';
$string['expirythreshold'] = 'Umbral para la notificación';
$string['expirythreshold_help'] = '¿Con cuánto tiempo antes de la expiración de la matrícula deben ser notificados los usuarios?';
$string['extremovedaction'] = 'Acción externa de baja de la matrícula';
$string['extremovedaction_help'] = 'Seleccione una acción para llevar a cabo cuando la matriculación de los usuarios desaparece de la fuente de matriculación externa. Tenga en cuenta que algunos datos y ajustes de los usuarios son purgados del espacio cuando se produce la baja en el espacio.';
$string['extremovedkeep'] = 'Mantener matriculado al usuario';
$string['extremovedsuspend'] = 'Deshabilitar la matriculación en el espacio';
$string['extremovedsuspendnoroles'] = 'Deshabilitar la matriculación en el espacio y eliminar los roles';
$string['extremovedunenrol'] = 'Dar de baja al usuario del espacio';
$string['finishenrollingusers'] = 'Finalizar matriculación de usuarios';
$string['foundxcohorts'] = 'Encontradas {$a} cohortes';
$string['instanceadded'] = 'Método añadido';
$string['instanceeditselfwarning'] = 'Advertencia:';
$string['instanceeditselfwarningtext'] = 'Usted está inscrito en este espacio a través de este método de matriculación, los cambios pueden afectar a su acceso a este espacio.';
$string['invalidenrolinstance'] = 'Ejemplo de matriculación no válido';
$string['invalidrequest'] = 'Solicitud inválida';
$string['invalidrole'] = 'Rol no válido';
$string['manageenrols'] = 'Gestionar plugins de matriculación';
$string['manageinstance'] = 'Gestionar';
$string['migratetomanual'] = 'Migrar a matriculaciones manuales';
$string['nochange'] = 'Sin cambios';
$string['noexistingparticipants'] = 'No existen participantes';
$string['nogroup'] = 'Sin grupo';
$string['noguestaccess'] = 'Los invitados no pueden entrar a este espacio. Por favor acceda con sus datos.';
$string['none'] = 'Ninguno';
$string['notenrollable'] = 'No se puede matricular en este espacio.';
$string['notenrolledusers'] = 'Otros usuarios';
$string['otheruserdesc'] = 'Los siguientes usuarios no están matriculados en este espacio pero tienen roles (heredados o asignados en el espacio).';
$string['participationactive'] = 'Activo';
$string['participationnotcurrent'] = 'Desactualizado';
$string['participationstatus'] = 'Estatus';
$string['participationsuspended'] = 'Suspendido';
$string['periodend'] = 'hasta {$a}';
$string['periodnone'] = 'matriculado {$a}';
$string['periodstart'] = 'desde {$a}';
$string['periodstartend'] = 'desde {$a->start} hasta {$a->end}';
$string['proceedtocourse'] = 'Continuar al contenido del espacio';
$string['recovergrades'] = 'Es posible recuperar las calificaciones de usuario antiguas';
$string['rolefromcategory'] = '{$a->role} (Heredado de la categoría de espacio)';
$string['rolefrommetacourse'] = '{$a->role} (Heredado del espacio padre)';
$string['rolefromsystem'] = '{$a->role} (Asignado a nivel de sitio)';
$string['rolefromthiscourse'] = '{$a->role} (Asignado en este espacio)';
$string['startdatetoday'] = 'Hoy';
$string['synced'] = 'Sincronizado';
$string['testsettings'] = 'Configuración del test';
$string['testsettingsheading'] = 'Configuración del test de matriculación - {$a}';
$string['totalenrolledusers'] = '{$a} usuarios matriculados';
$string['totalotherusers'] = '{$a} otros usuarios';
$string['unassignnotpermitted'] = 'No tiene permiso para retirar roles en este espacio';
$string['unenrol'] = 'Dar de baja';
$string['unenrolconfirm'] = '¿Realmente desea dar de baja al usuario "{$a->user}" del espacio "{$a->course}"?';
$string['unenrolme'] = 'Darme de baja en {$a}';
$string['unenrolnotpermitted'] = 'No dispone de permiso o no puede dar de baja a este usuario de este espacio.';
$string['unenrolroleusers'] = 'Dar de baja a usuarios';
$string['uninstallmigrating'] = 'Migrando {$a} matrículas';
$string['unknowajaxaction'] = 'Se ha solicitado una acción desconocida';
$string['unlimitedduration'] = 'Sin límite';
$string['usersearch'] = 'Buscar';
$string['withselectedusers'] = 'Con los usuarios seleccionados';
