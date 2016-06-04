<?php
/* Smarty version 3.1.29, created on 2016-06-03 23:49:57
  from "/Applications/MAMP/htdocs/Localshop/views/default/product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5751fb856e8f74_74358408',
  'file_dependency' => 
  array (
    '92739a9ca1df57225a76219d52d29652a0e37b77' => 
    array (
      0 => '/Applications/MAMP/htdocs/Localshop/views/default/product.tpl',
      1 => 1464990409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5751fb856e8f74_74358408 ($_smarty_tpl) {
?>

<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
Стоимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a href="#">Добавить в корзину</a>

<p>Описание <br /> <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
