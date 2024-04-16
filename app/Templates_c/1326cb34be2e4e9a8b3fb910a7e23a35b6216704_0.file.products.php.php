<?php
/* Smarty version 4.1.0, created on 2024-04-15 20:47:18
  from 'C:\xampp\htdocs\Codeigniter-CRUD\app\Views\products.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_661dd8a63bdc50_85750910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1326cb34be2e4e9a8b3fb910a7e23a35b6216704' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Codeigniter-CRUD\\app\\Views\\products.php',
      1 => 1713232001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661dd8a63bdc50_85750910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1313025311661dd8a63b0fb3_45689162', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.php");
}
/* {block 'main'} */
class Block_1313025311661dd8a63b0fb3_45689162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1313025311661dd8a63b0fb3_45689162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?> 
            <div class="alert alert-primary" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

            </div>
        <?php }?>
    </div>

    <div class="row container pt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Value</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
        
            <tbody class="trable-group-divider">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->value;?>
</td>
                    <td>
                        <a href="/products/update/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-primary">Update</a>
                        <a href="/products/delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'main'} */
}
