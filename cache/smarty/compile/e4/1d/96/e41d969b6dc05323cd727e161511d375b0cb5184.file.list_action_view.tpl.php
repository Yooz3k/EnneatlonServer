<?php /* Smarty version Smarty-3.1.19, created on 2018-01-19 12:45:49
         compiled from "/var/www/html/adminroot/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6273628735a61da6d438b46-52620252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e41d969b6dc05323cd727e161511d375b0cb5184' => 
    array (
      0 => '/var/www/html/adminroot/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1516351244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6273628735a61da6d438b46-52620252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a61da6d4a8a13_70007944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a61da6d4a8a13_70007944')) {function content_5a61da6d4a8a13_70007944($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
