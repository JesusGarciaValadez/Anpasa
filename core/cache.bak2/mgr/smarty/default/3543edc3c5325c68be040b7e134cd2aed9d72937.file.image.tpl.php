<?php /* Smarty version Smarty-3.0.4, created on 2013-08-23 11:04:34
         compiled from "/var/www/vhosts/anpasa.com/httpdocs/manager/templates/default/element/tv/renders/input/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160815229752178812a5acf1-66993233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3543edc3c5325c68be040b7e134cd2aed9d72937' => 
    array (
      0 => '/var/www/vhosts/anpasa.com/httpdocs/manager/templates/default/element/tv/renders/input/image.tpl',
      1 => 1375814984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160815229752178812a5acf1-66993233',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/var/www/vhosts/anpasa.com/httpdocs/core/model/smarty/plugins/modifier.escape.php';
?><div id="tvbrowser<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"></div>
<div id="tv-image-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" style="width: 97%"></div>
<div id="tv-image-preview-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
">
    <?php if ($_smarty_tpl->getVariable('tv')->value->value){?><img src="<?php echo (isset($_smarty_tpl->getVariable('_config')->value['connectors_url']) ? $_smarty_tpl->getVariable('_config')->value['connectors_url'] : null);?>
system/phpthumb.php?h=150&w=150&src=<?php echo $_smarty_tpl->getVariable('tv')->value->value;?>
&source=<?php echo $_smarty_tpl->getVariable('source')->value;?>
" alt="" /><?php }?>
</div>
<?php if ($_smarty_tpl->getVariable('disabled')->value){?>
<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
 = MODx.load({
    
        xtype: 'displayfield'
        ,tv: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,renderTo: 'tv-image-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,value: '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->value);?>
'
        ,width: 400
        ,msgTarget: 'under'
    
    });
});

// ]]>
</script>
<?php }else{ ?>
<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
 = MODx.load({
    
        xtype: 'modx-panel-tv-image'
        ,renderTo: 'tv-image-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,tv: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,value: '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->value);?>
'
        ,relativeValue: '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->value);?>
'
        ,width: '97%'
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?>
        ,wctx: '<?php if ((isset($_smarty_tpl->getVariable('params')->value['wctx']) ? $_smarty_tpl->getVariable('params')->value['wctx'] : null)){?><?php echo (isset($_smarty_tpl->getVariable('params')->value['wctx']) ? $_smarty_tpl->getVariable('params')->value['wctx'] : null);?>
<?php }else{ ?>web<?php }?>'
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['openTo']) ? $_smarty_tpl->getVariable('params')->value['openTo'] : null)){?>,openTo: '<?php echo (isset($_smarty_tpl->getVariable('params')->value['openTo']) ? $_smarty_tpl->getVariable('params')->value['openTo'] : null);?>
'<?php }?>
        ,source: '<?php echo $_smarty_tpl->getVariable('source')->value;?>
'
    
        ,msgTarget: 'under'
        ,listeners: {
            'select': {fn:function(data) {
                MODx.fireResourceFormChange();
                var d = Ext.get('tv-image-preview-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
');
                if (Ext.isEmpty(data.url)) {
                    d.update('');
                } else {
                    
                    d.update('<img src="'+MODx.config.connectors_url+'system/phpthumb.php?h=150&w=150&src='+data.url+'&wctx=<?php echo $_smarty_tpl->getVariable('ctx')->value;?>
&source=<?php echo $_smarty_tpl->getVariable('source')->value;?>
" alt="" />');
                    
                }
            }}
        }
    });
    MODx.makeDroppable(Ext.get('tv-image-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'),function(v) {
        var cb = Ext.getCmp('tvbrowser<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
');
        if (cb) {
            cb.setValue(v);
            cb.fireEvent('select',{relativeUrl:v});
        }
        return '';
    });
});

// ]]>
</script>
<?php }?>
