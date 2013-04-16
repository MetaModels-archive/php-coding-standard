<?php
/**
 * Verifies that control statements conform to their coding standards.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   MetaModels_PHPCS
 * @author    Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright 2013 Team Metamodels
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link      https://github.com/bit3/php-coding-standard
 */

/**
 * Verifies that control statements conform to their coding standards.
 *
 * @category  ControlStructures
 * @package   MetaModels_PHPCS
 * @author    Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright 2013 Team Metamodels
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @link      https://github.com/bit3/php-coding-standard
 */
class MetaModels_Sniffs_ControlStructures_ControlSignatureSniff extends PHP_CodeSniffer_Standards_AbstractPatternSniff
{
	/**
	 * Constructs a PEAR_Sniffs_ControlStructures_ControlSignatureSniff.
	 */
	public function __construct()
	{
		parent::__construct(true);

	}

	/**
	 * Returns the patterns that this test wishes to verify.
	 *
	 * @return array(string)
	 */
	protected function getPatterns()
	{
		return array(
			'doEOL...{EOL...}EOL...while (...);EOL',
			'while (...) {EOL',
			'for (...)EOL...{EOL',
			'if (...)EOL...{EOL',
			'foreach (...)EOL...{EOL',
			'}EOL...else if (...)EOL...{EOL',
			'}EOL...elseif (...)EOL...{EOL',
			'}EOL...elseEOL...{EOL',
			'doEOL...{EOL',
		);

	}
}
