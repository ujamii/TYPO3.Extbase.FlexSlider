<?php
namespace SotaStudio\Flexslider\ViewHelpers;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2014 Andy Hausmann <ah@sota-studio.de>, SOTA Studio
 *  (c) 2012-2014 Xaver Maierhofer <xaver.maierhofer@xwissen.info>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

use SotaStudio\Flexslider\Utility\Div,
	TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

/**
 *
 * Renders Inline JS via PageRenderer and enables Plugins to throw it into external files,
 * close to the ending body tag or just to special stuff with it, like concatenation, compression and such.
 *
 * = Examples =
 *
 * <code title="Single argument">
 * <fs:AddJsInline code="$();" name="unique-name" moveToFooter="0" />
 * </code>
 * <output>
 * </output>
 *
 * @author Andy Hausmann <ah@sota-studio.de>, SOTA Studio
 * @author Xaver Maierhofer <xaver.maierhofer@xwissen.info>
 * @package flexslider
 * @subpackage ViewHelpers
 */
class AddJsInlineViewHelper extends AbstractTagBasedViewHelper {

	/**
	 * Adds JS and CSS to the frontend
	 *
	 * @param string $code JS Block
	 * @param string $name Unique key to avoid multiple inclusions
	 * @param bool  $moveToFooter  Move the the ending body tag?
	 * @return void
	 */

	public function render($code = NULL, $name = '', $moveToFooter = FALSE) {
		if ($code) {
			Div::addJsInline(
				$code,
				$name,
				$moveToFooter
			);
		}
	}

}