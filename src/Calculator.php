<?php
/**
 * @package Ddaniel\GhReleases
 */

namespace Ddaniel\GhReleases;

use Exception;

/**
 * Class Calculator
 *
 * @package Ddaniel\GhReleases
 */
class Calculator {
	/**
	 * @var float|int
	 */
	private float $memory = 0;

	/**
	 * @param  float $a first term.
	 * @param  float $b second term.
	 *
	 * @return float
	 */
	public function add( float $a, float $b ): float {
		return $a + $b;
	}

	/**
	 * @param  float $a first term.
	 * @param  float $b second term.
	 *
	 * @return float
	 */
	public function subtract( float $a, float $b ) : float {
		return $a - $b;
	}

	/**
	 * @param  float $a first term.
	 * @param  float $b second term.
	 *
	 * @return float
	 */
	public function multiply( float $a, float $b ) : float {
		return $a * $b;
	}

	/**
	 * @param  float $a  first term.
	 * @param  float $b  second term.
	 *
	 * @return float
	 * @throws Exception If $b is zero.
	 */
	public function divide( float $a, float $b ) : float {
		if ( .0 === $b ) {
			throw new Exception( 'Division by zero' );
		}

		return $a / $b;
	}

	/**
	 * @return float|int
	 */
	public function get_memory() {
		return $this->memory;
	}

	/**
	 * @param  float|int $memory value to save in memory.
	 */
	public function set_memory( $memory ): void {
		$this->memory = $memory;
	}
}
