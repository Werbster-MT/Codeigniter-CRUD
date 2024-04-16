<?php
/* Smarty version 4.1.0, created on 2024-04-15 20:47:16
  from 'C:\xampp\htdocs\Codeigniter-CRUD\app\Views\home.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_661dd8a4461fd4_73292905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6146addf14d123af0fcf7ab05189ebd08f0fc9c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Codeigniter-CRUD\\app\\Views\\home.php',
      1 => 1713216175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661dd8a4461fd4_73292905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1545702476661dd8a4461926_18545180', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.php");
}
/* {block 'main'} */
class Block_1545702476661dd8a4461926_18545180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1545702476661dd8a4461926_18545180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
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
