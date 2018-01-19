<?php /* Smarty version Smarty-3.1.19, created on 2018-01-19 12:44:41
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10373383435a61da29d67d44-03685407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '553de55e0b91014d05ae2753fae8a3ca55efd579' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1516351244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10373383435a61da29d67d44-03685407',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a61da29d759e0_27213370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a61da29d759e0_27213370')) {function content_5a61da29d759e0_27213370($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
