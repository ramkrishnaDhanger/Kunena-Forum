<?php
/**
 * Kunena Component
 * @package Kunena.Administrator.Template
 * @subpackage Report
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

$document = JFactory::getDocument();
$document->addStyleSheet ( JUri::base(true).'/components/com_kunena/media/css/admin.css' );
if (JFactory::getLanguage()->isRTL()) $document->addStyleSheet ( JUri::base(true).'/components/com_kunena/media/css/admin.rtl.css' );
$document->addScriptDeclaration("window.addEvent('domready', function(){
	$('link_sel_all').addEvent('click', function(e){
		$('report_final').select();
	});
});");

JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('dropdown.init');
JHtml::_('formbehavior.chosen', 'select');
?>
	<div id="j-sidebar-container" class="span2">
		<div id="sidebar">
			<div class="sidebar-nav"><?php include KPATH_ADMIN.'/template/joomla30/common/menu.php'; ?></div>
		</div>
	</div>
	<div id="j-main-container" class="span10">

            <div class="well well-small" style="min-height:120px;">
                       <div class="nav-header"><?php echo JText::_('COM_KUNENA_REPORT_SYSTEM'); ?></div>
                         <div class="row-striped">
                         <br />
		<form action="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena') ?>" method="post" id="adminForm" name="adminForm">
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="1" />

		<fieldset><?php echo JText::_('COM_KUNENA_REPORT_SYSTEM_DESC'); ?><br /></fieldset>
		<fieldset>
			<div><a href="#" id="link_sel_all" ><?php echo JText::_('COM_KUNENA_REPORT_SELECT_ALL'); ?></a></div>
			<textarea id="report_final" name="report_final" cols="80" rows="15"><?php echo $this->escape($this->systemreport); ?></textarea>
		</fieldset>
		</form>
		</div>
        </div>

</div>

<div class="pull-right small">
	<?php echo KunenaVersion::getLongVersionHTML(); ?>
</div>
