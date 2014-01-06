<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_webgozar
 *
 * @copyright   Copyright (C) 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if ($code) :
?>
<div align="center" class="webgozar<?php echo $moduleclass_sfx; ?>">
<?php
switch ($type)
{
	case 'counter':
		if (!$showCounter) echo '<div style="display:none">';
		echo '<script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=' . $code . '&amp;t=counter" ></script>';
		if (!$showCounter) echo '</div>';
		break;

	case 'poll':
		echo '<script type="text/javascript" language="javascript" src="http://www.webgozar.ir/c.aspx?Code=' . $code . '&amp;t=poll" ></script>';
		break;

	case 'newsletter':
?>
<form action="http://www.webgozar.com/nletter/join.aspx" target="_blank" onsubmit="return sp(this);" name="wfrm" method="post">
	<fieldset>
		<input type="hidden" value="<?php echo $code; ?>" name="code">
		<input type="text" class="txts" name="wgname" placeholder="<?php echo JText::_('MOD_WEBGOZAR_NAME'); ?>">
		<?php if ($newsletterLayout == 'v') echo '<br />'; ?>
		<input type="text" class="txts" name="wgemail" dir="ltr" placeholder="<?php echo JText::_('MOD_WEBGOZAR_EMAIL'); ?>">
		<?php if ($newsletterLayout == 'v') echo '<br />'; ?>
		<button name="R1" type="submit" value="1" class="btn btn-primary"><?php echo JText::_('MOD_WEBGOZAR_SUBSCRIBE'); ?></button>
		<button name="R1" type="submit" value="0" class="btn btn-inverse"><?php echo JText::_('MOD_WEBGOZAR_UNSUBSCRIBE'); ?></button>
		<script language="javascript" src="http://webgozar.ir/scs/n2.js"></script>
		<script language="vbscript" src="http://webgozar.ir/scs/n1.vbs"></script>
	</fieldset>
</form>
<?php
		break;
}
?>
</div>
<?php endif; ?>
