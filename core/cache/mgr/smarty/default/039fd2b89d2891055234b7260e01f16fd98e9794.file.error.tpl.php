<?php /* Smarty version Smarty-3.0.4, created on 2013-09-05 16:31:48
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Anpasa/manager/templates/default/workspaces/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14759683985228f844c9eed4-68626746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '039fd2b89d2891055234b7260e01f16fd98e9794' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Anpasa/manager/templates/default/workspaces/error.tpl',
      1 => 1377724948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14759683985228f844c9eed4-68626746',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="x-panel modx-form x-panel-noborder x-form-label-left">
<div class="x-panel-bwrap">
    <form class="x-panel-body x-panel-body-noheader x-panel-body-noborder x-form" method="POST" style="padding: 10px; height: auto;">

    <div class="x-panel modx-page-header x-panel-noborder">
        <h2><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['warning']) ? $_smarty_tpl->getVariable('_lang')->value['warning'] : null);?>
</h2>
    </div>

    <div class="x-panel x-form-label-left" style="display: block;">
    <div class="x-panel-bwrap">
    <div class="x-panel-body x-panel-body-noheader" style="padding: 10px; color: #111;">
        <br />
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('errors')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['error']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['error']->iteration=0;
if ($_smarty_tpl->tpl_vars['error']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
 $_smarty_tpl->tpl_vars['error']->iteration++;
 $_smarty_tpl->tpl_vars['error']->last = $_smarty_tpl->tpl_vars['error']->iteration === $_smarty_tpl->tpl_vars['error']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['errors']['last'] = $_smarty_tpl->tpl_vars['error']->last;
?>
            <p><?php echo (isset($_smarty_tpl->tpl_vars['error']->value) ? $_smarty_tpl->tpl_vars['error']->value : null);?>
</p><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['errors']['last']){?><hr /><?php }?>
        <?php }} ?>
    </div>
    </div>
    </div>

    </form>
</div>
</div>
