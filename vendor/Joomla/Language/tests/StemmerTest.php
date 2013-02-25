<?php
/**
 * @package    Joomla.UnitTest
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

use Joomla\Language\Stemmer;

/**
 * Test class for JLanguageStemmer.
 * Generated by PHPUnit on 2012-03-21 at 21:29:32.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Language
 * @since       11.1
 */
class JLanguageStemmerTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var Joomla\Language\Stemmer
	 */
	protected $object;

	/**
	 * Test...
	 *
	 * @covers  Joomla\Language\Stemmer::getInstance
	 *
	 * @return void
	 */
	public function testGetInstance()
	{
		$instance = Stemmer::getInstance('porteren');

		$this->assertInstanceof(
			'Joomla\Language\Stemmer',
			$instance
		);

		$this->assertInstanceof(
			'Joomla\Language\Stemmer\Porteren',
			$instance
		);

		$instance2 = Stemmer::getInstance('porteren');

		$this->assertSame(
			$instance,
			$instance2
		);
	}

	/**
	 * Test...
	 *
	 * @covers             Joomla\Language\Stemmer::getInstance
	 * @expectedException  RuntimeException
	 *
	 * @return void
	 */
	public function testGetInstanceException()
	{
		$instance = Stemmer::getInstance('unexisting');
	}
}
