<?php
/**
 * Message translations.
 *
 * This file is automatically generated by 'yiic message' command.
 * It contains the localizable messages extracted from source code.
 * You may modify this file by translating the extracted messages.
 *
 * Each array element represents the translation (value) of a message (key).
 * If the value is empty, the message is considered as not translated.
 * Messages that no longer need translation will have their translations
 * enclosed between a pair of '@@' marks.
 *
 * NOTE, this file must be saved in UTF-8 encoding.
 *
 * @version $Id$
 */
return array (
  'CHttpRequest is unable to determine the path info of the request.' => '',
  'CHttpRequest is unable to determine the request URI.' => '',
  'CXCache requires PHP XCache extension to be loaded.' => '',
  'Cannot add "{name}" as a child of itself.' => '',
  'The column "{column}" is not a foreign key in table "{table}".' => '',
  '"{path}" is not a valid directory.' => '"{path}" no es un directorio válido.',
  'Active Record requires a "db" CDbConnection application component.' => 'Active Record requiere un componente de aplicación "db" del tipo CDbConnection.',
  'Active record "{class}" has an invalid configuration for relation "{relation}". It must specify the relation type, the related active record class and the foreign key.' => 'Active record "{class}" contiene una configuración de relación inválida "{relation}". La misma debe especificar el tipo de relación, la clase active record relacionada y la clave foranea.',
  'Active record "{class}" is trying to select an invalid column "{column}". Note, the column must exist in the table or be an expression with alias.' => 'Active record "{class}" esta intentando de seleccionar una columna inválida "{column}". Nota: La columna puede existir en la base o ser una expresion con alias.',
  'Alias "{alias}" is invalid. Make sure it points to an existing directory or file.' => 'Alias "{alias}" es inválido. Verifique que el mismo apunta a un directorio o archivo exisitente.',
  'Application base path "{path}" is not a valid directory.' => 'Ruta base de la aplicación "{path}" no es un directorio válido.',
  'Application runtime path "{path}" is not valid. Please make sure it is a directory writable by the Web server process.' => 'Ruta de runtime de aplicación "{path}" es inválida. Verifique que sea un directorio con permisos de escritura por el proceso que corre el servidor Web.',
  'Authorization item "{item}" has already been assigned to user "{user}".' => 'Elemento de autorización "{item}" ha sido asignado al usuario "{user}".',
  'CApcCache requires PHP apc extension to be loaded.' => 'CApcCache requiere que la extensión apc de PHP se encuentre cargada.',
  'CAssetManager.basePath "{path}" is invalid. Please make sure the directory exists and is writable by the Web server process.' => 'CAssetManager.basePath "{path}" es inválido. Verifique que el directorio exista y tenga permisos de escritura por el proceso que corre el servidor Web.',
  'CCacheHttpSession.cacheID is invalid. Please make sure "{id}" refers to a valid cache application component.' => 'CCacheHttpSession.cacheID es inválido. Asegurese que "{id}" refiere a un componente de aplicación de cache válido.',
  'CCaptchaValidator.action "{id}" is invalid. Unable to find such an action in the current controller.' => 'CCaptchaValidator.action "{id}" es inválido. No se há podido encontrar dicha acción en el controlador actual.',
  'CDbAuthManager.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbAuthManager.connectionID "{id}" es inválido. Asegurese que se refiere a un ID de un componente de aplicación CDbConnection.',
  'CDbCache.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbCache.connectionID "{id}" es inválido. Asegurese que refiera a un ID de un componente de aplicación CDbConnection.',
  'CDbCacheDependency.sql cannot be empty.' => 'CDbCacheDependency.sql no puede ser vacío.',
  'CDbCommand failed to execute the SQL statement: {error}' => 'CDbCommand falló al ejecutar la sentencia SQL: {error}',
  'CDbCommand failed to prepare the SQL statement: {error}' => 'CDbCommand falló al preparar la sentencia SQL: {error}',
  'CDbConnection does not support reading schema for {driver} database.' => 'CDbConnection no soporta la lectura del esquema para la base de datos {driver}.',
  'CDbConnection failed to open the DB connection: {error}' => 'CDbConnection falló al abrir la conexion a la base de datos: {error}',
  'CDbConnection is inactive and cannot perform any DB operations.' => 'CDbConnection se encuentra inactiva y no puede realizar operaciones de BD.',
  'CDbConnection.connectionString cannot be empty.' => 'CDbConnection.connectionString no puede ser vacío',
  'CDbDataReader cannot rewind. It is a forward-only reader.' => 'CDbDataReader no puede volver atras ya que es un lector de un avance únicamente.',
  'CDbHttpSession.connectionID "{id}" is invalid. Please make sure it refers to the ID of a CDbConnection application component.' => 'CDbHttpSession.connectionID "{id}" es inválido. Asegurese que refiera a un ID de un componente de aplicación CDbConnection',
  'CDbLogRoute requires database table "{table}" to store log messages.' => 'CDbLogRoute requiere la tabla "{table}" de la base de datos para guardar los mensajes de log.',
  'CDbLogRoute.connectionID "{id}" does not point to a valid CDbConnection application component.' => 'CDbLogRoute.connectionID "{id}" no refiere a un componente de aplicación CDbConnection válido.',
  'CDbMessageSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.' => 'CDbMessageSource.connectionID es inválido. Asegurese que "{id}" refiera a un componente de aplicación de base de datos válido.',
  'CDbTransaction is inactive and cannot perform commit or roll back operations.' => 'CDbTransaction se encuentra inactiva y no puede realizar la operación commit ni roll back.',
  'CDirectoryCacheDependency.directory cannot be empty.' => 'CDirectoryCacheDependency.directory no puede ser vacío.',
  'CFileCacheDependency.fileName cannot be empty.' => 'CFileCacheDependency.fileName no puede ser vacío.',
  'CFileLogRoute.logPath "{path}" does not point to a valid directory. Make sure the directory exists and is writable by the Web server process.' => 'CFileLogRoute.logPath "{path}" no apunta a un directorio válido. Verifique que el directorio exista y tenga permisos de escritura por el proceso que corre el servidor Web.',
  'CFilterChain can only take objects implementing the IFilter interface.' => 'CFilterChain solamente puede tomar objetos que implementen la interface IFilter.',
  'CFlexWidget.baseUrl cannot be empty.' => 'CFlexWidget.baseUrl no puede ser vacío.',
  'CFlexWidget.name cannot be empty.' => 'CFlexWidget.name no puede ser vacío.',
  'CGlobalStateCacheDependency.stateName cannot be empty.' => 'CGlobalStateCacheDependency.stateName no puede ser vacío.',
  'CHttpCookieCollection can only hold CHttpCookie objects.' => 'CHttpCookieCollection solo puede contener objetos CHttpCookie.',
  'CHttpRequest is unable to determine the entry script URL.' => 'CHttpRequest no puede determinar la URL de su script de entrada.',
  'CHttpSession.cookieMode can only be "none", "allow" or "only".' => 'CHttpSession.cookieMode solo puede ser "none", "allow" ó "only".',
  'CHttpSession.gcProbability "{value}" is invalid. It must be an integer between 0 and 100.' => 'CHttpSession.gcProbability "{value}" es inválido. Debe ser un entero entre 0 y 100.',
  'CHttpSession.savePath "{path}" is not a valid directory.' => 'CHttpSession.savePath "{path}" no es un directorio válido.',
  'CMemCache requires PHP memcache extension to be loaded.' => 'CMemCache requiere que la extensión memcache de PHP se encuentre cargada.',
  'CMemCache server configuration must be an array.' => 'La configuración del servidor CMemCache debe ser un array.',
  'CMemCache server configuration must have "host" value.' => 'La configuración del servidor CMemCache debe contener un "host".',
  'CMultiFileUpload.name is required.' => 'CMultiFileUpload.name es requerido',
  'CProfileLogRoute found a mismatching code block "{token}". Make sure the calls to Yii::beginProfile() and Yii::endProfile() be properly nested.' => 'CProfileLogRoute ha encontrado un bloque de código "{token}" desalineado. Asegurese que las llamadas a Yii::beginProfile() y a Yii::endProfile() esten correctamente anidadas.',
  'CProfileLogRoute.report "{report}" is invalid. Valid values include "summary" and "callstack".' => 'CProfileLogRoute.report "{report}" es inválido. Los valores validos son "summary" y "callstack".',
  'CSecurityManager requires PHP mcrypt extension to be loaded in order to use data encryption feature.' => 'CSecurityManager requiere que la extensión mcrypt de PHP sea cargada para utilizar la opción de encriptación de datos.',
  'CSecurityManager.encryptionKey cannot be empty.' => 'CSecurityManager.encryptionKey no puede ser vacío.',
  'CSecurityManager.validation must be either "MD5" or "SHA1".' => 'CSecurityManager.validation debe ser "MD5" ó "SHA1".',
  'CSecurityManager.validationKey cannot be empty.' => 'CSecurityManager.validationKey no puede ser vacío.',
  'CTypedList<{type}> can only hold objects of {type} class.' => 'CTypedList<{type}> solo puede contener objetos de la clase {type}.',
  'CUrlManager.UrlFormat must be either "path" or "get".' => 'CUrlManager.UrlFormat debe ser "path" o "get".',
  'Cache table "{tableName}" does not exist.' => 'Tabla de cache "{tableName}" inexistente.',
  'Cannot add "{child}" as a child of "{name}". A loop has been detected.' => 'No se puede agregar "{child}" como hijo de "{name}". Un ciclo infinito se há detectado.',
  'Cannot add "{child}" as a child of "{parent}". A loop has been detected.' => 'No se puede agregar "{child}" como hijo de "{parent}". Un ciclo infinito se há detectado.',
  'Cannot add an item of type "{child}" to an item of type "{parent}".' => 'No se le puede agregar un elemento del tipo "{child}" a otro del tipo "{parent}".',
  'Either "{parent}" or "{child}" does not exist.' => '"{parent}" o "{child}" es inexistente',
  'Error: Table "{table}" does not have a primary key.' => 'Error: Tabla "{table}" no tiene una clave primaria.',
  'Error: Table "{table}" has a composite primary key which is not supported by crud command.' => 'Error: Tabla "{table}" tiene una clave primaria compuesta que no es soportada por el comando crud.',
  'Event "{class}.{event}" is attached with an invalid handler "{handler}".' => 'Evento "{class}"."{event}" tiene asociado un manejador "{handler}" inválido.',
  'Event "{class}.{event}" is not defined.' => 'Evento "{class}"."{event}" no se encuentra definido.',
  'Failed to write the uploaded file "{file}" to disk.' => 'Error al escribir el archivo subido "{file}" al disco.',
  'File upload was stopped by extension.' => 'El upload de archivo fue terminado debido a su extensión.',
  'Filter "{filter}" is invalid. Controller "{class}" does have the filter method "filter{filter}".' => 'El filtro "{filter} es inválido. El controlador "{class}" no contiene el método de filtro "filter{filter}".',
  'Get a new code' => 'Obtenga un nuevo código',
  'Invalid MO file revision: {revision}.' => 'Revisión de archivo MO inválido: {revision}.',
  'Invalid MO file: {file} (magic: {magic}).' => 'Archivo MO inválido: {file} (magic: {magic}).',
  'Invalid enumerable value "{value}". Please make sure it is among ({enum}).' => 'Valor de enumerador inválido "{value}". Asegurese que este entre ({enum}).',
  'List data must be an array or an object implementing Traversable.' => 'Los datos de la lista deben ser un array o un objeto que implemento Traversable.',
  'List index "{index}" is out of bound.' => 'Indice de la lista "{index}" esta fuera del limite.',
  'Login Required' => 'Iniciar sesión requerido.',
  'Map data must be an array or an object implementing Traversable.' => 'Los datos del mapa deben ser un array o un objeto que implemento Traversable',
  'Missing the temporary folder to store the uploaded file "{file}".' => 'La carpeta temoporaria para guardar el archivo subido "{file}" no se encuentra.',
  'No columns are being updated for table "{table}".' => 'No se actualizó ninguna columna para la tabla "{table}".',
  'No counter columns are being updated for table "{table}".' => 'Ningun contador de columnas ha sido actualizado para la tabla "{table}".',
  'Object configuration must be an array containing a "class" element.' => 'La configuración del objeto debe ser un array conteniendo un elemento "class".',
  'Please fix the following input errors:' => 'Por favor corrija los siguientes errores de ingreso:',
  'Property "{class}.{property}" is not defined.' => 'Propiedad "{class}"."{property}" no se encuentra definida.',
  'Property "{class}.{property}" is read only.' => 'Propiedad "{class}"."{property}" es de solo lectura..',
  'Queue data must be an array or an object implementing Traversable.' => 'Los datos de la cola deben ser un array o un objeto que implemento Traversable',
  'Relation "{name}" is not defined in active record class "{class}".' => 'La relación "{name}" no se encuentra definida en la clase active record "{class}".',
  'Stack data must be an array or an object implementing Traversable.' => 'Los datos de la pila deben ser un array o un objeto que implemento Traversable',
  'Table "{table}" does not have a column named "{column}".' => 'Tabla "{table}" no contiene la columna "{column}".',
  'Table "{table}" does not have a primary key defined.' => 'Tabla "{table}" no contiene definida una columna primaria.',
  'The "filter" property must be specified with a valid callback.' => 'La propiedad "filter" debe ser especificada con un callback válido.',
  'The "pattern" property must be specified with a valid regular expression.' => 'La propiedad "pattern" debe ser especificada con una expresión regular válida.',
  'The "view" property is required.' => 'La propiedad "view" es requerida.',
  'The CSRF token could not be verified.' => 'Su token CSRF no puede ser verificado.',
  'The URL pattern "{pattern}" for route "{route}" is not a valid regular expression.' => 'El patrón de URL "{pattern}" para la ruta "{route}" no es una expresión regular válida.',
  'The active record cannot be deleted because it is new.' => 'El active record no puede ser eliminado porque es nuevo.',
  'The active record cannot be inserted to database because it is not new.' => 'El active record no puede ser insertado a la base de datos porque no es nuevo.',
  'The active record cannot be updated because it is new.' => 'El active record no puede ser actualizado porque es nuevo.',
  'The asset "{asset}" to be pulished does not exist.' => 'El asset "{asset} a ser publicado no existe.',
  'The command path "{path}" is not a valid directory.' => 'La ruta de comando "{path}" no es un directorio válido.',
  'The controller path "{path}" is not a valid directory.' => 'La ruta del controlador "{path}" no es un directorio válido.',
  'The file "{file}" cannot be uploaded. Only files with these extensions are allowed: {extensions}.' => 'El archivo "{file}" no puede ser subido. Solo los archivos con estas extensiones son permitidos: {extensions}.',
  'The file "{file}" is too large. Its size cannot exceed {limit} bytes.' => 'El archivo "{file}" es muy grande. Su tamaño no puede exceder {limit} bytes.',
  'The file "{file}" is too small. Its size cannot be smaller than {limit} bytes.' => 'El archivo "{file}" es muy chico. Su tamaño no puede ser menor que {limit} bytes.',
  'The file "{file}" was only partially uploaded.' => 'El archivo "{file}" ha sido subido parcialmente.',
  'The first element in a filter configuration must be the filter class.' => 'El primer elemento en la configuración de un filtro debe ser la clase del filtro.',
  'The item "{name}" does not exist.' => 'El elemento "{name}" es inexistente.',
  'The item "{parent}" already has a child "{child}".' => 'El elemento "{parent}" ya contiene un hijo "{child}".',
  'The layout path "{path}" is not a valid directory.' => 'La ruta de esquema "{path}" no es un directorio válido.',
  'The list is read only.' => 'La lista es de solo lectura',
  'The map is read only.' => 'El mapa es de solo lectura',
  'The pattern for 12 hour format must be "h" or "hh".' => 'El patrón para hora en formato 12 debe ser "h" ó "hh".',
  'The pattern for 24 hour format must be "H" or "HH".' => 'El patrón para hora en formato 24 debe ser "H" ó "HH".',
  'The pattern for AM/PM marker must be "a".' => 'El patrón para el marcador AM/PM debe ser "a".',
  'The pattern for day in month must be "F".' => 'El patrón para día del mes debe ser "F".',
  'The pattern for day in year must be "D", "DD" or "DDD".' => 'El patrón para día del año debe ser "D", "DD", "DDD".',
  'The pattern for day of the month must be "d" or "dd".' => 'El patrón para día debe ser "d" ó "dd".',
  'The pattern for day of the week must be "E", "EE", "EEE", "EEEE" or "EEEEE".' => 'El patrón para día de la semana debe ser "E", "EE", "EEE", "EEEE" ó "EEEEE".',
  'The pattern for era must be "G", "GG", "GGG", "GGGG" or "GGGGG".' => 'El patrón para era debe ser "G", "GG", "GGG", "GGGG" ó "GGGGG".',
  'The pattern for hour in AM/PM must be "K" or "KK".' => 'El patrón para hora en AM/PM debe ser "K" ó "KK".',
  'The pattern for hour in day must be "k" or "kk".' => 'El patrón para hora del día debe ser "k" ó "kk".',
  'The pattern for minutes must be "m" or "mm".' => 'El patrón para minutos debe ser "m" ó "mm".',
  'The pattern for month must be "M", "MM", "MMM", or "MMMM".' => 'El patrón para mes debe ser "M", "MM", "MMM" ó "MMMM".',
  'The pattern for seconds must be "s" or "ss".' => 'El patrón para segundos debe ser "s" ó "ss".',
  'The pattern for time zone must be "z" or "v".' => 'El patrón para zona horaria debe ser "z" ó "v".',
  'The pattern for week in month must be "W".' => 'El patron para semana del mes debe ser "W".',
  'The pattern for week in year must be "w".' => 'El patrón para semana del año debe ser "w".',
  'The queue is empty.' => 'La cola está vacía',
  'The relation "{relation}" in active record class "{class}" is not specified correctly: the join table "{joinTable}" given in the foreign key cannot be found in the database.' => 'La relación "{relation}" en la clase active record "{class}" no se encuentra especificada correctamente: La tabla de junta (join table) "{join table}" dada no se encontro en la base de datos.',
  'The relation "{relation}" in active record class "{class}" is specified with an incomplete foreign key. The foreign key must consist of columns referencing both joining tables.' => 'La relación "{relation}" en la clase active record "{class}" se encuentra especificada con una clave foranea incompleta. La clave foranea debe consistir de las columnas que referencian la junta de tablas.',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key "{key}". The foreign key does not point to either joining table.' => 'La relación "{relation}" en la clase active record "{class}" se encuentra especificada con una clave foranea inválida "{key}". La clave foranea no apunta a la tabla de junta (joining table).',
  'The relation "{relation}" in active record class "{class}" is specified with an invalid foreign key. The format of the foreign key must be "joinTable(fk1,fk2,...)".' => 'La relación "{relation}" en la clase active record "{class}" se encuentra especificada con una clave foranea inválida. El formato de la clave foranea debe ser "joinTable(fk1,fk2,...)".',
  'The requested controller "{controller}" does not exist.' => 'El controlador "{controller}" solicitado es inexistente.',
  'The requested view "{name}" is not found.' => 'La vista "{name}" solicitad no se ha encontrado.',
  'The stack is empty.' => 'La pila está vacía',
  'The system is unable to find the requested action "{action}".' => 'El sistema no ha podido encontrar la acción "{action}" solicitada.',
  'The system view path "{path}" is not a valid directory.' => 'La ruta de vistas de sistema "{path}" no es un directorio válido.',
  'The table "{table}" for active record class "{class}" cannot be found in the database.' => 'La tabla "{table}" definida en la clase active record "{class}" no se ha podido encontrar en la base de datos.',
  'The value for the primary key "{key}" is not supplied when querying the table "{table}".' => 'El valor de la clave primaria "{key}" no ha sido otorgado cuando se consulto la tabla "{table}".',
  'The verification code is incorrect.' => 'El código de verificación es incorrecto.',
  'The view path "{path}" is not a valid directory.' => 'La ruta de la vista "{path}" no es un directorio válido.',
  'Theme directory "{directory}" does not exist.' => 'El directorio de tema "{directory}" no existe.',
  'This content requires the <a href="http://www.adobe.com/go/getflash/">Adobe Flash Player</a>.' => 'Este contenido requiere el <a href="http://www.adobe.com/go/getflash/">Adobe Flash Player</a>.',
  'Unable to add an item whose name is the same as an existing item.' => 'No se puede agregar un elemento cuyo nombre es el mismo que el de un elemento existente.',
  'Unable to change the item name. The name "{name}" is already used by another item.' => 'No se puede modificar el nombre del elemento. El nombre "{name}" ya se encuentra utilizado por otro elemento.',
  'Unable to create application state file "{file}". Make sure the directory containing the file exists and is writable by the Web server process.' => 'No se ha podido crear el archivo de estado de aplicación "{file}". Asegurese que el directorio que contiene el archivo exista y sea un directorio con permisos de escritura por el proceso que corre el servidor Web.',
  'Unable to find the decorator view "{view}".' => 'No se ha podido encontrar la vista del decorador "{view}".',
  'Unable to find the list item.' => 'No se puede encotrar el item de la lista.',
  'Unable to lock file "{file}" for reading.' => 'No se há podido bloquear el archivo "{file}" para lectura.',
  'Unable to lock file "{file}" for writing.' => 'No se ha podido bloquear el archivo "{file}" para escritura.',
  'Unable to read file "{file}".' => 'No se ha podido leer el archivo "{file}".',
  'Unable to replay the action "{object}.{method}". The method does not exist.' => 'Imposible de replicar la acción "{object}.{method}". El metodo es inexistente.',
  'Unable to write file "{file}".' => 'No se ha podido escribir el archivo "{file}".',
  'Unknown authorization item "{name}".' => 'Elemento de autorización "{name}" desconocido.',
  'Unrecognized locale "{locale}".' => 'Localizacion no reconocida "{locale}".',
  'View file "{file}" does not exist.' => 'El archivo de vista "{view}" no existe.',
  'Yii application can only be created once.' => 'Solo se puede crear una aplicación Yii.',
  'You are not authorized to perform this action.' => 'Usted no se encuentra autorizado a realizar esta acción.',
  'Your request is not valid.' => 'Su solicitud es inválida.',
  '{attribute} "{value}" has already been taken.' => '{attribute} "{value}" ya ha sido tomado.',
  '{attribute} cannot be blank.' => '{attribute} no puede ser nulo.',
  '{attribute} is invalid.' => '{attribute} es inválido.',
  '{attribute} is not a valid URL.' => '{attribute} no es una URL válida.',
  '{attribute} is not a valid email address.' => '{attribute} no es un email válido.',
  '{attribute} is not in the list.' => '{attribute} no se encuentra en la lista.',
  '{attribute} is of the wrong length (should be {length} characters).' => '{attribute} tiene un largo incorrecto (debe ser de {length} caracteres)',
  '{attribute} is too big (maximum is {max}).' => '{attribute} es muy grande (el máximo es {max}).',
  '{attribute} is too long (maximum is {max} characters).' => '{attribute} es muy largo (el máximo es de {min} caracteres)',
  '{attribute} is too short (minimum is {min} characters).' => '{attribute} es muy corto (el mínimo es de {min} caracteres)',
  '{attribute} is too small (minimum is {min}).' => '{attribute} es muy chico (el mínimo es {min}).',
  '{attribute} must be a number.' => '{attribute} debe ser un número.',
  '{attribute} must be an integer.' => '{attribute} debe ser entero.',
  '{attribute} must be repeated exactly.' => '{attribute} debe ser repetido exactamente.',
  '{attribute} must be {type}.' => '{attribute} debe ser {type}.',
  '{className} does not support add() functionality.' => '{className} no soporta la funcionalidad add().',
  '{className} does not support delete() functionality.' => '{className} no soporta la funcionalidad delete().',
  '{className} does not support flush() functionality.' => '{className} no soporta la funcionalidad flush().',
  '{className} does not support get() functionality.' => '{className} no soporta la funcionalidad get().',
  '{className} does not support set() functionality.' => '{className} no soporta la funcionalidad set().',
  '{class} does not have attribute "{name}".' => '{class} no contiene el atributo "{name}".',
  '{class} has an invalid validation rule. The rule must specify attributes to be validated and the validator name.' => '{class} tiene una regla de validación inválida. La regla se debe especificar attributos para ser validados y el nombre de su validador.',
  '{class} must specify "model" and "attribute" or "name" property values.' => '{class} debe especificar los valores de propiedad "model" y "attribute" o "name".',
  '{class}.allowAutoLogin must be set true in order to use cookie-based authentication.' => '{class}.allowAutoLogin debe ser asignado verdadero para poder utilizar la autenticación basada en cookies.',
  '{class}::authenticate() must be implemented.' => '{class}::authenticate() debe ser implementad.',
  '{controller} cannot find the requested view "{view}".' => '{controller} no ha podido encontrar la vista "{view}" solicitada.',
  '{controller} contains improperly nested widget tags in its view "{view}". A {widget} widget does not have an endWidget() call.' => '{controller} contiene etiquetas de widget en la vista "{view}" anidados incorrectamente. {widget} widget no contiene la llamada a endWidget().',
  '{controller} has an extra endWidget({id}) call in its view.' => '{controller} tiene una llamada extra a endWidget({id}) en su vista.',
  '{widget} cannot find the view "{view}".' => '{widget} no ha podido encontrar la vista "{view}".',
);
