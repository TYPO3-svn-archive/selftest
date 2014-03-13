<?php

namespace TYPO3\Selftest\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Florian Mast <flo.mast@web.de>
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \TYPO3\Selftest\Domain\Model\Result.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Self Test
 *
 * @author Florian Mast <flo.mast@web.de>
 */
class ResultTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \TYPO3\Selftest\Domain\Model\Result
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \TYPO3\Selftest\Domain\Model\Result();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getExplanationReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setExplanationForStringSetsExplanation() { 
		$this->fixture->setExplanation('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getExplanation()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getLowerLimitReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getLowerLimit()
		);
	}

	/**
	 * @test
	 */
	public function setLowerLimitForIntegerSetsLowerLimit() { 
		$this->fixture->setLowerLimit(12);

		$this->assertSame(
			12,
			$this->fixture->getLowerLimit()
		);
	}
	
	/**
	 * @test
	 */
	public function getUpperLimitReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getUpperLimit()
		);
	}

	/**
	 * @test
	 */
	public function setUpperLimitForIntegerSetsUpperLimit() { 
		$this->fixture->setUpperLimit(12);

		$this->assertSame(
			12,
			$this->fixture->getUpperLimit()
		);
	}
	
}
?>