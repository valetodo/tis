<?php /* Smarty version 3.1.27, created on 2016-11-06 17:59:42
         compiled from "C:\wamp64\www\seguimiento\styles\templates\home\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20547581f6f8ea353b5_53720349%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58265c29649291b853ead00c2e95dcd9e7da610c' => 
    array (
      0 => 'C:\\wamp64\\www\\seguimiento\\styles\\templates\\home\\index.tpl',
      1 => 1478455173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20547581f6f8ea353b5_53720349',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_581f6f8eba8a06_00757653',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_581f6f8eba8a06_00757653')) {
function content_581f6f8eba8a06_00757653 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20547581f6f8ea353b5_53720349';
echo $_smarty_tpl->getSubTemplate ('overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
  <?php echo $_smarty_tpl->getSubTemplate ('overall/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container" style="margin-top: 100px;">
      <div class="jumbotron">
        <h1>Bienvenido al curso!</h1>
        <p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
        <p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>

      </div>
</div>
     <?php echo $_smarty_tpl->getSubTemplate ('overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>