<?php
/**
 * Test App Comment Model
 *
 *
 *
 * PHP Version 5.x
 *
 * CakePHP :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2006-2009, Cake Software Foundation, Inc.
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2006-2009, Cake Software Foundation, Inc.
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package       cake
 * @subpackage    cake.tests.test_app.models
 * @since         CakePHP v 1.2.0.7726
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class PersisterTwo extends AppModel {
	var $useTable = 'posts';
	var $name = 'PersisterTwo';

	var $actsAs = array('PersisterOneBehavior');

	var $hasMany = array('Comment');
}
?>