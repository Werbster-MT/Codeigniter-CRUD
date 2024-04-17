<?php
/* Smarty version 4.1.0, created on 2024-04-17 15:43:38
  from 'C:\xampp\htdocs\Codeigniter-CRUD\app\Views\home.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6620347ae2d834_36473247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6146addf14d123af0fcf7ab05189ebd08f0fc9c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Codeigniter-CRUD\\app\\Views\\home.php',
      1 => 1713381323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6620347ae2d834_36473247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10876707526620347ae2ce97_80967878', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.php");
}
/* {block 'main'} */
class Block_10876707526620347ae2ce97_80967878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_10876707526620347ae2ce97_80967878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row pb-5">
        <div class="col-md-8 offset-md-2 mt-5">
            <div class="card">
                <div class="card-header">
                    <h5>Welcome to Product Management System</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">This system allows you to manage products efficiently. You can perform the following actions:</p>
                    <ul>
                        <li><strong>Create:</strong> Add new products to the system.</li>
                        <li><strong>Read:</strong> View a list of all products and their details.</li>
                        <li><strong>Update:</strong> Modify existing product information.</li>
                        <li><strong>Delete:</strong> Remove products from the system.</li>
                    </ul>
                    <a href="/products" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'main'} */
}
