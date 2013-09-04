<?php /* Smarty version Smarty-3.0.4, created on 2013-08-14 12:36:30
         compiled from "/var/www/vhosts/anpasa.com/httpdocs/manager/templates/default/element/tv/renders/input/number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1861330619520bc01ebc3018-76669584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ab919df476b4a5de69fb173561a49a9d70504c' => 
    array (
      0 => '/var/www/vhosts/anpasa.com/httpdocs/manager/templates/default/element/tv/renders/input/number.tpl',
      1 => 1375814984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1861330619520bc01ebc3018-76669584',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/vhosts/anpasa.com/httpdocs/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
"
	<?php echo $_smarty_tpl->getVariable('style')->value;?>

	tvtype="<?php echo $_smarty_tpl->getVariable('tv')->value->type;?>
"
/>

<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'numberfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,width: '99%'
        ,enableKeyEvents: true
        ,autoStripChars: true
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>
        ,allowDecimals: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowDecimals']) ? $_smarty_tpl->getVariable('params')->value['allowDecimals'] : null)&&(isset($_smarty_tpl->getVariable('params')->value['allowDecimals']) ? $_smarty_tpl->getVariable('params')->value['allowDecimals'] : null)!='false'){?>true<?php }else{ ?>false<?php }?>
        ,allowNegative: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowNegative']) ? $_smarty_tpl->getVariable('params')->value['allowNegative'] : null)&&(isset($_smarty_tpl->getVariable('params')->value['allowNegative']) ? $_smarty_tpl->getVariable('params')->value['allowNegative'] : null)!='false'){?>true<?php }else{ ?>false<?php }?>
        ,decimalPrecision: <?php if ((isset($_smarty_tpl->getVariable('params')->value['decimalPrecision']) ? $_smarty_tpl->getVariable('params')->value['decimalPrecision'] : null)){?><?php echo (isset($_smarty_tpl->getVariable('params')->value['decimalPrecision']) ? $_smarty_tpl->getVariable('params')->value['decimalPrecision'] : null);?>
<?php }else{ ?>2<?php }?>
        ,decimalSeparator: <?php if ((isset($_smarty_tpl->getVariable('params')->value['decimalSeparator']) ? $_smarty_tpl->getVariable('params')->value['decimalSeparator'] : null)){?>'<?php echo (isset($_smarty_tpl->getVariable('params')->value['decimalSeparator']) ? $_smarty_tpl->getVariable('params')->value['decimalSeparator'] : null);?>
'<?php }else{ ?>'.'<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxValue']) ? $_smarty_tpl->getVariable('params')->value['maxValue'] : null)){?>,maxValue: <?php echo (isset($_smarty_tpl->getVariable('params')->value['maxValue']) ? $_smarty_tpl->getVariable('params')->value['maxValue'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['minValue']) ? $_smarty_tpl->getVariable('params')->value['minValue'] : null)){?>,minValue: <?php echo (isset($_smarty_tpl->getVariable('params')->value['minValue']) ? $_smarty_tpl->getVariable('params')->value['minValue'] : null);?>
<?php }?>
        ,msgTarget: 'under'
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
</script>
