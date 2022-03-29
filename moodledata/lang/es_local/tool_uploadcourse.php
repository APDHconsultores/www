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
 * Strings for component 'tool_uploadcourse', language 'es', version '3.9'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir eliminar';
$string['allowdeletes_help'] = 'Si está aceptado o no el campo eliminar.';
$string['allowrenames'] = 'Permitir renombrar';
$string['allowrenames_help'] = 'Si está aceptado o no el campo renombrar.';
$string['allowresets'] = 'Permitir reiniciar';
$string['allowresets_help'] = 'Si está aceptado o no el campo restablecer.';
$string['cachedef_helper'] = 'Almacenamiento en caché de la aplicación auxiliar';
$string['cannotdeletecoursenotexist'] = 'No se puede eliminar un espacio que no existe';
$string['cannotgenerateshortnameupdatemode'] = 'No se puede generar un nombre corto si se permiten las actualizaciones';
$string['cannotreadbackupfile'] = 'No se puede leer el archivo de copia de seguridad';
$string['cannotrenamecoursenotexist'] = 'No se puede renombrar un espacio que no existe';
$string['cannotrenameidnumberconflict'] = 'No se puede renombrar el espacio, hay conflicto con el número ID de un espacio que ya existe';
$string['cannotrenameshortnamealreadyinuse'] = 'No se puede renombrar el espacio, el nombre corto se está utilizando';
$string['cannotupdatefrontpage'] = 'Está prohibido modificar la página principal';
$string['canonlyrenameinupdatemode'] = 'Sólo puede renombrar un espacio cuando la actualización está permitida';
$string['canonlyresetcourseinupdatemode'] = 'Sólo se puede reiniciar un espacio en modo de actualización';
$string['couldnotresolvecatgorybyid'] = 'No se ha podido resolver la categoría por su ID';
$string['couldnotresolvecatgorybyidnumber'] = 'No se ha podido resolver la categoría por su número ID';
$string['couldnotresolvecatgorybypath'] = 'No se ha podido resolver la categoría por su path';
$string['coursecreated'] = 'Espacio creado';
$string['coursedeleted'] = 'Espacio eliminado';
$string['coursedeletionnotallowed'] = 'No está permitido eliminar espacio';
$string['coursedoesnotexistandcreatenotallowed'] = 'El espacio no existe y no está permitido crear espacios';
$string['courseexistsanduploadnotallowed'] = 'El espacio existe y no está permitida la actualziación';
$string['coursefile'] = 'Archivo';
$string['coursefile_help'] = 'Debe ser un archivo CSV';
$string['courseidnumberincremented'] = 'Número ID del espacio incrementado {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Proceso del espacio';
$string['courserenamed'] = 'Espacio renombrado';
$string['courserenamingnotallowed'] = 'No está permitido renombrar espacios';
$string['coursereset'] = 'Espacio reiniciado';
$string['courseresetnotallowed'] = 'No está permitido reiniciar espacio';
$string['courserestored'] = 'Espacios restaurado';
$string['coursescreated'] = 'Espacios creados: {$a}';
$string['coursesdeleted'] = 'Espacios elimiados: {$a}';
$string['courseserrors'] = 'Espacios con errores: {$a}';
$string['courseshortnamegenerated'] = 'Nombre corto de espacios generado: {$a}';
$string['courseshortnameincremented'] = 'Nombre corto de cros incrementado: {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Total de espacios: {$a}';
$string['coursesupdated'] = 'Espacios actualizados: {$a}';
$string['coursetemplatename'] = 'Restaurar de este espacio después de subirlo';
$string['coursetemplatename_help'] = 'Introduzca un nombre corto del espacio existente para usar como plantilla para la creación de todos los espacios.';
$string['coursetorestorefromdoesnotexist'] = 'El espacio a restaurar no existe';
$string['courseupdated'] = 'Espacio actualizado';
$string['createall'] = 'Crear todos, incrementar nombre corto si es necesario';
$string['createnew'] = 'Crear solo espacios nuevos, saltar los existentes';
$string['createorupdate'] = 'Crear espacios nuevos, o actualizar los existentes';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['csvdelimiter_help'] = 'Delimitador del archivo CSV';
$string['csvfileerror'] = 'Hay algo erróneo en el formato del archivo CSV. Por favor, compruebe la coincidencia entre el número de cabeceras y columnas  y que el delimitador y la codificación del archivo sean correctos: {$a}';
$string['csvline'] = 'Línea';
$string['defaultvalues'] = 'Valores por defecto del espacio';
$string['encoding'] = 'Codificación';
$string['encoding_help'] = 'Codificación del archivo CSV';
$string['errorwhiledeletingcourse'] = 'Error al eliminar el espacio';
$string['errorwhilerestoringcourse'] = 'Error al restaurar el espacio';
$string['generatedshortnamealreadyinuse'] = 'El nombre corto generado ya está en uso';
$string['generatedshortnameinvalid'] = 'El nombre corto generado no es válida';
$string['id'] = 'ID';
$string['idnumberalreadyinuse'] = 'Número ID ya utilizado en otro espacio';
$string['importoptions'] = 'Opciones de importación';
$string['invalidbackupfile'] = 'Archivo de copia de seguridad no válido';
$string['invalidcourseformat'] = 'Formato de espacio no válido';
$string['invalidcsvfile'] = 'Archivo de entrada CSV no válido';
$string['invalidencoding'] = 'Codificación no válida';
$string['invalideupdatemode'] = 'Modo de actualización seleccionado no válido';
$string['invalidmode'] = 'Modo seleccionado no válido';
$string['invalidroles'] = 'Nombres de rol no válidos: {$a}';
$string['invalidshortname'] = 'Nombre corto no válido';
$string['missingmandatoryfields'] = 'Falta valor para los campos obligatorios: {$a}';
$string['missingshortnamenotemplate'] = 'Falta nombre corto y la plantilla de nombre corto no se ha determinado';
$string['mode'] = 'Modo subida';
$string['mode_help'] = 'Esto le permite especificar si se pueden crear o actualizar los espacios.';
$string['nochanges'] = 'Sin cambios';
$string['pluginname'] = 'Subir espacio';
$string['preview'] = 'Vista previa';
$string['reset'] = 'Reiniciar espacio tras la subida';
$string['reset_help'] = 'Si se reiniciará el espacio después de crearlo/actualizarlo.';
$string['restoreafterimport'] = 'Restaurar tras la importación';
$string['result'] = 'resultado';
$string['rowpreviewnum'] = 'Columnas de la vista previa';
$string['rowpreviewnum_help'] = 'Número de filas del archivo CSV que se previsualizarán en la siguiente página. Esta opción tiene como objetivo limitar el tamaño de la próxima página.';
$string['shortnametemplate'] = 'Plantilla para generar un nombre corto';
$string['shortnametemplate_help'] = 'El nombre corto del espacio se muestra en la barra de navegación. Usted puede utilizar la sintaxis de plantillas (%f = fullname, %i = idnumber) o introducir un valor inicial que se irá incrementando.';
$string['templatefile'] = 'Restaurar a partir de este archivo después de la carga';
$string['templatefile_help'] = 'Seleccionar un archivo para su uso como plantilla para la creación de todos los espacios.';
$string['unknownimportmode'] = 'Modo de importación desconocido';
$string['updatemissing'] = 'Rellene los elementos que faltan en los datos CSV y valores predeterminados';
$string['updatemode'] = 'Modo de actualización';
$string['updatemode_help'] = 'Si permite que se actualicen los espacios, también deberá especificar en la herramienta con qué actualizar los espacios.';
$string['updatemodedoessettonothing'] = 'El modo de actualización no permite que nada se actualice';
$string['updateonly'] = 'Sólo actualizar espacios existentes';
$string['updatewithdataonly'] = 'Actualizar solo los datos CSV';
$string['updatewithdataordefaults'] = 'Actualizar los datos CSV y los valores predeterminados';
$string['uploadcourses'] = 'Subir espacios';
$string['uploadcourses_help'] = 'Los espacios pueden ser cargados a través de archivos de texto. El formato del archivo debe ser el siguiente:

* Cada línea del archivo contiene un registro
* Cada registro es una serie de datos separados por comas (u otros delimitadores)
* El primer registro contiene una lista de nombres de campo que define el formato del resto del archivo
* los campos requeridos son nombre corto, nombre completo, el resumen y la categoría';
$string['uploadcoursespreview'] = 'Previsualización de los espacios cargados';
$string['uploadcoursesresult'] = 'Resultados de la carga de espacios';
