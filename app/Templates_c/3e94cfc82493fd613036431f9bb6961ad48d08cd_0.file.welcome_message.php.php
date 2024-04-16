<?php
/* Smarty version 4.1.0, created on 2024-04-15 16:22:56
  from 'C:\xampp\htdocs\Codeigniter-CRUD\app\Views\welcome_message.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_661d9ab067b533_28197872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e94cfc82493fd613036431f9bb6961ad48d08cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Codeigniter-CRUD\\app\\Views\\welcome_message.php',
      1 => 1713216175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661d9ab067b533_28197872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_983346570661d9ab067aed6_76373576', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.php");
}
/* {block 'main'} */
class Block_983346570661d9ab067aed6_76373576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_983346570661d9ab067aed6_76373576',
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
