<?php
/* Smarty version 4.1.0, created on 2024-04-15 20:59:29
  from 'C:\xampp\htdocs\Codeigniter-CRUD\app\Views\products_form.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_661ddb81e68b17_76655590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '758a029150275dcc86a6413582017779baee387c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Codeigniter-CRUD\\app\\Views\\products_form.php',
      1 => 1713232756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ddb81e68b17_76655590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2123868172661ddb81e5c475_78249592', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.php");
}
/* {block 'main'} */
class Block_2123868172661ddb81e5c475_78249592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_2123868172661ddb81e5c475_78249592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row flex-grow-1">
    <div class="row">
        <div class="col">
            <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['msgType']->value;?>
" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['errors']->value) {?>
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    <?php }?>
                </div>
            <?php }?>
        </div>
    </div>
    <div class="row pt-3">
        <form method="post">
            <input type="hidden" name="id" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value->id ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
            <div class="row d-flex">
                <div class="mb-3 col col-12 col-md-4">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value->name ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
                </div>

                <div class="mb-3 col col-12 col-md-4">
                    <label class="form-label fw-bold">Value</label>
                    <input type="text" class="form-control" name="value" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['product']->value->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" />
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
    </div>
<?php
}
}
/* {/block 'main'} */
}
