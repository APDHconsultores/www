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
 * Strings for component 'completion', language 'es', version '3.9'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Alcanzando calificación';
$string['activities'] = 'Actividades';
$string['activitiescompleted'] = 'Finalización de actividades';
$string['activitiescompletednote'] = 'Nota: La cierre de actividades debe establecerse para que una actividad aparezca en la lista de abajo';
$string['activitieslabel'] = 'Actividades / recursos';
$string['activityaggregation'] = 'Condición requerida';
$string['activityaggregation_all'] = 'TODAS las actividades seleccionadas para finalizar';
$string['activityaggregation_any'] = 'CUALQUIERA actividad seleccionada para finalizar';
$string['activitycompletion'] = 'Finalización de actividad';
$string['activitycompletionupdated'] = 'Cambios guardados';
$string['affectedactivities'] = 'Los cambios afectarán a las siguientes <b>{$a}</b> actividades o recursos:';
$string['aggregationmethod'] = 'Método de agregación';
$string['all'] = 'Todos';
$string['any'] = 'Cualquiera';
$string['approval'] = 'Aprobación';
$string['areyousureoverridecompletion'] = '¿Está seguro de querer anular el estado actual de cierre de esta actividad para este usuario y marcarlo como "{$a}"?';
$string['badautocompletion'] = 'Cuando selecciona cierre automática, debe también activar al menos un requisito (vid. más abajo)';
$string['bulkactivitycompletion'] = 'Editar en masa el cierre de actividad';
$string['bulkactivitydetail'] = 'Seleccione las actividades que desea editar en masa.';
$string['bulkcompletiontracking'] = 'Seguimiento de el cierre';
$string['bulkcompletiontracking_help'] = '<strong>Ninguna:</strong> No indicar cierre de actividad

<strong>Manual:</strong> El participante puede marcar manualmente la actividad como completada

<strong>Con condición(es):</strong> Mostrar actividad como completada cuando se cumplan las condiciones';
$string['checkactivity'] = 'Casilla de selección para actividad / recurso: {$a}';
$string['checkall'] = 'Activar o desactivar todas las actividades y recursos';
$string['checkallsection'] = 'Activar o desactivar todas las actividades y recursos en la sección siguiente: {$a}';
$string['completed'] = 'Finalizado';
$string['completedunlocked'] = 'Opciones de cierre desbloqueadas';
$string['completedunlockedtext'] = 'Cuando guarda los cambios, se borrará el estado de cierre de todos los participantes. Si cambia de parecer sobre este asunto, no guarde el formulario.';
$string['completedwarning'] = 'Opciones de cierre bloqueadas';
$string['completedwarningtext'] = 'Esta actividad ya ha sido completada por {$a} participante(s). Cambiar las opciones de cierre borrará su estado de cierre y puede ocasionar confusión. Por tanto, estas opciones han sido bloqueadas y no se deberían desbloquear salvo que fuera absolutamente necesario.';
$string['completion'] = 'Rastreo de cierre';
$string['completion-alt-auto-enabled'] = 'El sistema marca este ítem como finalizado de acuerdo con las condiciones {$a}';
$string['completion-alt-auto-fail'] = 'Finalizado {$a} (no ha alcanzado la calificación de aprobado)';
$string['completion-alt-auto-n'] = 'Sin finalizar: {$a}';
$string['completion-alt-auto-n-override'] = 'No completado: {$a->modname} (configurado por {$a->overrideuser})';
$string['completion-alt-auto-pass'] = 'Finalizado: {$a} (ha alcanzado la calificación de aprobado)';
$string['completion-alt-auto-y'] = 'Finalizado: {$a}';
$string['completion-alt-auto-y-override'] = 'Completado: {$a->modname} (configurado por {$a->overrideuser})';
$string['completion-alt-manual-enabled'] = 'Los participantes pueden marcar manualmente este ítem como finalizado: {$a}';
$string['completion-alt-manual-n'] = 'No finalizado; {$a}. Seleccione para marcar como finalizado';
$string['completion-alt-manual-n-override'] = 'No completado: {$a->modname} (configurado por {$a->overrideuser}). Seleccionar para marcarlo como completado.';
$string['completion-alt-manual-y'] = 'Finalizado; {$a} seleccione para marcar como no finalizado';
$string['completion-alt-manual-y-override'] = 'Completado: {$a->modname} (configurado por {$a->overrideuser}). Seleccionar para marcarlo como no completado.';
$string['completion-fail'] = 'Finalizado (no ha alcanzado la calificación de aprobado)';
$string['completion-n'] = 'No finalizado';
$string['completion-n-override'] = 'No completado (configurado por {$a})';
$string['completion-pass'] = 'Finalizado (ha alcanzado la califiación de aprobado)';
$string['completion-y'] = 'Finalizado';
$string['completion-y-override'] = 'Completado (configurado por {$a})';
$string['completion_automatic'] = 'Mostrar la actividad como completada cuando se cumplan las condiciones';
$string['completion_help'] = 'Si se activa esta opción, se rastrea el grado de cierre de cualquier actividad, bien manual, bien automáticamente, basándose en determinadas condiciones. Si se desea, se pueden fijar múltiples condiciones. Si se hace así, la actividad únicamente se considerará completa si se cumplen TODAS las condiciones.

Una marca al lado del nombre de la actividad enla página del espacio indica cuándo la actividad está completa.';
$string['completion_manual'] = 'Los participantes pueden marcar manualmente la actividad como completada';
$string['completion_none'] = 'No indicar cierre de la actividad';
$string['completionactivitydefault'] = 'Utilizar actividad por defecto';
$string['completiondefault'] = 'Seguimiento de cierre por defecto';
$string['completiondisabled'] = 'Desactivado, no se muestra en los ajustes de la actividad';
$string['completionduration'] = 'Matriculación';
$string['completionenabled'] = 'Activado, control por medio de los ajustes de cierre y de actividad';
$string['completionexpected'] = 'Se espera finalizar en';
$string['completionexpected_help'] = 'Esta opción especifica la fecha en que se espera que la actividad esté finalizada.';
$string['completionexpecteddesc'] = 'Finalización esperada en {$a}';
$string['completionexpectedfor'] = '{$a->instancename} debería ser completado';
$string['completionicons'] = 'Casillas para marcar el grado de cierre';
$string['completionicons_help'] = 'Una marca junto al nombre de la actividad puede utilizarse para indicar que una actividad se completó.

Si se muestra una casilla con el borde punteado, la marca aparecerá automáticamente cuando se haya completado la actividad de acuerdo con las condiciones establecidas por el facilitador.

Si se muestra una casilla con el borde sólido, entonces será posible hacer clic sobre ella cuando piense que ha finalizado la actividad. (Si se vuelve a hacer clic sobre ella, la marca desaparece en caso de que haya cambiado de opinión). Esto es una acción opcional que se utiliza para llevar un seguimiento personal del progreso a lo largo del espacio.';
$string['completionmenuitem'] = 'Finalización';
$string['completionnotenabled'] = 'Completar espacio no está habilitada';
$string['completionnotenabledforcourse'] = 'Completar espacio no está habilitada';
$string['completionnotenabledforsite'] = 'Completar espacio no está habilitada';
$string['completionondate'] = 'Fecha';
$string['completionondatevalue'] = 'Los usuarios permanecerán matriculados hasta';
$string['completionsettingslocked'] = 'Ajustes de cierre bloqueados';
$string['completionupdated'] = 'Se actualizó cierre para actividad <b>{$a}</b>';
$string['completionusegrade'] = 'Requerir calificación';
$string['completionusegrade_desc'] = 'El participante debe recibir una calificación para finalizar esta actividad';
$string['completionusegrade_help'] = 'Si se activa, la actividad se considera finalizada cuando un participante recibe una calificación. Los iconos Aprobar y Suspender se muestran si se ha establecido una calificación de aprobado para la actividad.';
$string['completionview'] = 'Requerir ver';
$string['completionview_desc'] = 'El participante debe ver esta actividad para finalizarla';
$string['configcompletiondefault'] = 'Configuración predeterminada para el seguimiento de el cierre cuando se crean nuevas actividades.';
$string['configenablecompletion'] = 'Cuando se habilita, le permite activar las características de seguimiento de el cierre (seguimiento del  progreso) a nivel del espacio.';
$string['confirmselfcompletion'] = 'Confirmar completar automáticamente';
$string['courseaggregation'] = 'Condición requerida';
$string['courseaggregation_all'] = 'TODOS los espacios seleccionados para finalizarlos';
$string['courseaggregation_any'] = 'CUALQUIER espacio seleccionado para finalizar';
$string['coursealreadycompleted'] = 'Usted ya ha finalizado este espacio';
$string['coursecomplete'] = 'Espacio finalizado';
$string['coursecompleted'] = 'Espacio finalizado';
$string['coursecompletion'] = 'Finalización del espacio';
$string['coursecompletioncondition'] = 'Condición: {$a}';
$string['coursegrade'] = 'Calificación del espacio';
$string['coursesavailable'] = 'Espacios disponibles';
$string['coursesavailableexplaination'] = 'Nota: Los criterios del grado de cierre del espacio deben ajustarse para que el espacio aparezca en esta lista';
$string['criteria'] = 'Criterios';
$string['criteriagroup'] = 'Grupo de criterios';
$string['criteriarequiredall'] = 'Son necesarios todos los criterios que aparecen más abajo';
$string['criteriarequiredany'] = 'Es necesario cualquiera de los criterios que aparecen más abajo';
$string['csvdownload'] = 'Descargar en formato de hoja de cálculo (UTF-8.csv)';
$string['datepassed'] = 'Fecha pasada';
$string['days'] = 'Días';
$string['daysoftotal'] = '{$a->days} de {$a->total}';
$string['defaultcompletion'] = 'Finalización de actividad por defecto';
$string['defaultcompletionupdated'] = 'Cambios guardados';
$string['deletecompletiondata'] = 'Borrar datos de cierre';
$string['dependencies'] = 'Dependencias';
$string['dependenciescompleted'] = 'Dependencias finalizadas';
$string['editcoursecompletionsettings'] = 'Editar ajustes de grado de cierre del espacio';
$string['enablecompletion'] = 'Habilitar rastreo del grado de cierre';
$string['enablecompletion_help'] = 'Una vez activada, las condiciones de el cierre de la actividad se podrán establecer en la página de configuración de la activdad y/o las condiciones de cierre del espacio podrán configurarse.';
$string['enrolmentduration'] = 'Periodo de tiempo de la matrícula';
$string['enrolmentdurationlength'] = 'El usuario debe permanecer matriculado por';
$string['err_noactivities'] = 'No está habilitada la información sobre el cierre de ninguna actividad. Puede activar la información sobre el cierre de una actividad editando su  parámetros de configuración.';
$string['err_nocourses'] = 'La cierre del espacio no está habilitada para ningún otro espacio, por lo que no se puede mostrar ninguno. Puede activar el cierre de espacio mediante los parámetros de configuración del espacio.';
$string['err_nograde'] = 'En este espacio no se ha establecido una calificación para pasar el espacio. Para activar este tipo de criterio, debe crear una calificación para pasar el espacio.';
$string['err_noroles'] = 'No hay roles con la capacidad \'moodle/course:markcomplete\' en este espacio.';
$string['err_nousers'] = 'No hay participantes ni grupos en este espacio para los que se muestre la información sobre cierre. (Por defecto, la información sobre cierre se muestra solo para participantes, por lo que si no hay participantes verá este error. Los administradores pueden modificar esta opción mediante las pantallas de administración)';
$string['err_settingslocked'] = 'Uno o más participantes han finalizado ya un criterio, por lo que los parámetros han sido bloqueados. Desbloquer los parámetros de los criterios de cierre borrará cualquier dato existente de usuario, lo que podría causar confusión.';
$string['err_system'] = 'Se ha producido un error interno en el sistema de cierre. (Los administradores del sistema pueden habilitar la información de seguimiento para ver más detalles)';
$string['eventcoursecompleted'] = 'Espacio finalizado';
$string['eventcoursecompletionupdated'] = 'Finalización de espacio actualizado';
$string['eventcoursemodulecompletionupdated'] = 'Finalización de actividad de espacio actualizada';
$string['eventdefaultcompletionupdated'] = 'Valor por defecto para cierre de actividad de espacio actualizado';
$string['excelcsvdownload'] = 'Descargar en formato compatible con Excel (.csv)';
$string['fraction'] = 'Fracción';
$string['graderequired'] = 'Calificación de espacio requerida';
$string['gradexrequired'] = '{$a} requerido';
$string['hiddenrules'] = 'Algunas configuraciones específicas para <b>{$a}</b> se han ocultado. Para verlas cancele la selección de otras actividades';
$string['inprogress'] = 'En curso';
$string['manual'] = 'Manual';
$string['manualcompletionby'] = 'Finalización manual por otros';
$string['manualcompletionbynote'] = 'Nota: La capacidad moodle/courrse:markcomplete debe estar permitida para que un rol aparezca en la lista.';
$string['manualselfcompletion'] = 'Autocompletar manualmente';
$string['manualselfcompletionnote'] = 'Nota: El bloque Autocompletar debería añadirse al espacio si autocompletar manualmente está habilitado.';
$string['markcomplete'] = 'Marcar completo';
$string['markedcompleteby'] = 'Marcado completo por {$a}';
$string['markingyourselfcomplete'] = 'Marcado propio completado';
$string['modifybulkactions'] = 'Modifique las acciones que desea editar en masa';
$string['moredetails'] = 'Más detalles';
$string['nocriteriaset'] = 'No hay criterios establecidos para la terminación de este espacio';
$string['nogradeitem'] = 'Requerir calificación no puede habilitarse para <b>{$a}</b> porque la actividad no está calificada.';
$string['notcompleted'] = 'No finalizado';
$string['notenroled'] = 'Usted no está matriculado en este espacio';
$string['nottracked'] = 'En este momento no se le está realizando un seguimiento en el cierre de este espacio';
$string['notyetstarted'] = 'Aún no comenzado';
$string['overallaggregation'] = 'Requisitos de cierre';
$string['overallaggregation_all'] = 'El espacio está finalizado cuando TODAS las condiciones se han cumplido';
$string['overallaggregation_any'] = 'El espacio está finalizado cuando ALGUNA de las condiciones se ha cumplido';
$string['pending'] = 'Pendiente';
$string['periodpostenrolment'] = 'Periodo después de la matriculación';
$string['privacy:metadata:completionstate'] = 'Si la actividad ha sido completada.';
$string['privacy:metadata:course'] = 'Un identificador del espacio';
$string['privacy:metadata:coursecompletedsummary'] = 'Almacena  información acerca de usuarios que han completado los criterios de un espacio';
$string['privacy:metadata:coursemoduleid'] = 'ID de la actividad';
$string['privacy:metadata:coursemodulesummary'] = 'Almacena datos de cierre de actividad para un usuario';
$string['privacy:metadata:coursesummary'] = 'Almacena los datos de cierre del espacio para un usuario.';
$string['privacy:metadata:gradefinal'] = 'Calificación final recibida por el cierre del espacio';
$string['privacy:metadata:overrideby'] = 'ID del usuario que anuló el cierre de la actividad.';
$string['privacy:metadata:reaggregate'] = 'Si el cierre del espacio fue totalizada de nuevo.';
$string['privacy:metadata:timecompleted'] = 'La hora en la cual fue completado el espacio.';
$string['privacy:metadata:timeenrolled'] = 'La hora en la cual el usuario fue inscrito en el espacio';
$string['privacy:metadata:timemodified'] = 'La hora en la cual el cierre de la actividad fue modificada';
$string['privacy:metadata:timestarted'] = 'La hora en la cual el espacio fue iniciado.';
$string['privacy:metadata:unenroled'] = 'Si el usuario ha sido desmatriculado (dado de baja) del espacio';
$string['privacy:metadata:userid'] = 'ID de usuario de la persona con datos de cierre de actividad y de espacio';
$string['privacy:metadata:viewed'] = 'Si la actividad fue vista';
$string['progress'] = 'Progreso del participante';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'Progreso: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Reconocimiento de aprendizaje previo';
$string['remainingenroledfortime'] = 'Permanecer matriculado durante un periodo de tiempo especificado';
$string['remainingenroleduntildate'] = 'Permanecer matriculado hasta una fecha especificada';
$string['reportpage'] = 'Mostrando usuarios {$a->from} a {$a->to} de {$a->total}.';
$string['requiredcriteria'] = 'Criterios necesarios';
$string['resetactivities'] = 'Borrar todas las actividades y recursos seleccionados';
$string['restoringcompletiondata'] = 'Escribiendo datos de grado de cierre';
$string['roleaggregation'] = 'Condiciones requeridas';
$string['roleaggregation_all'] = 'TODOS los roles seleccionados a marcar cuando se cumple la condición';
$string['roleaggregation_any'] = 'ALGUNO de los roles seleccionados a marcar cuando se cumple la condición';
$string['roleidnotfound'] = 'El Rol ID {$a} no ha sido encontrado';
$string['saved'] = 'Guardado';
$string['seedetails'] = 'Ver detalles';
$string['select'] = 'Seleccionar';
$string['self'] = 'Auto';
$string['selfcompletion'] = 'Completar automáticamente';
$string['showinguser'] = 'Mostrando usuario';
$string['unenrolingfromcourse'] = 'Desmatricularse del espacio';
$string['unenrolment'] = 'Dar de baja';
$string['unit'] = 'Unidad';
$string['unlockcompletion'] = 'Desbloquear opciones de grado de cierre';
$string['unlockcompletiondelete'] = 'Desbloquear opciones de grado de cierre y eliminar los datos de grado de cierre del usuario';
$string['updateactivities'] = 'Actualizar estado de cierre de actividades seleccionadas';
$string['usealternateselector'] = 'Usar el selector de espacio alternativo';
$string['usernotenroled'] = 'El usuario no está matriculado en este espacio';
$string['viewcoursereport'] = 'Ver informe del espacio';
$string['viewingactivity'] = 'Viendo {$a}';
$string['withconditions'] = 'Con condiciones';
$string['writingcompletiondata'] = 'Escribiendo los datos del grado de cierre';
$string['xdays'] = '{$a} días';
$string['yourprogress'] = 'Su progreso';
