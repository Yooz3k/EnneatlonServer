<?php /* Smarty version Smarty-3.1.19, created on 2018-01-19 12:44:58
         compiled from "/var/www/html/adminroot/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16589811645a61da3b025be6-41154640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3ca929a5513862f5476e4b23e82ed32bdae1c7' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/content.tpl',
      1 => 1516351242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16589811645a61da3b025be6-41154640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a61da3b037064_63287841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a61da3b037064_63287841')) {function content_5a61da3b037064_63287841($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
