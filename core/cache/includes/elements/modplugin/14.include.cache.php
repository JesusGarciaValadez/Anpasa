<?php
function elements_modplugin_14($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
if (isset($_REQUEST['ctx']) && !$modx->getCount('modContext', array('key' => $_REQUEST['ctx']))) {
    $modx->switchContext('mgr');
}
if (isset($_REQUEST['HTTP_MODAUTH']) && empty($_REQUEST['HTTP_MODAUTH'])) {
    $modx->sendUnauthorizedPage();
}
}
