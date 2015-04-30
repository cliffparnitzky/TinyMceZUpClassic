<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package TinyMceZUpClassic
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'TinyMceZUpClassic',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'TinyMceZUpClassic\TinyMceZUpClassic' => 'system/modules/TinyMceZUpClassic/classes/TinyMceZUpClassic.php',
));
