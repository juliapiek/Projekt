<?php
/* Smarty version 3.1.30, created on 2024-04-21 22:09:02
  from "C:\xampp\htdocs\6.ochrona_dostepu\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6625725ea19cd9_01038339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cb2a3781dda3d1536a90c56a027024ee78dcbbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6.ochrona_dostepu\\app\\views\\LoginView.tpl',
      1 => 1713730137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6625725ea19cd9_01038339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6917964236625725e7ec8a4_07497525', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10571084956625725ea068e3_43684394', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_6917964236625725e7ec8a4_07497525 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Strona oferuje prosty kalkulator kredytowy do szybkiego obliczania miesięcznej raty kredytu. Wystarczy wpisać kwotę kredytu, okres spłaty i oprocentowanie, a otrzymasz wynik w kilka chwil, pomagając Ci w planowaniu budżetu i podejmowaniu świadomych decyzji finansowych.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_10571084956625725ea068e3_43684394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<button type="submit" class="pure-button pure-button-primary">Zaloguj</button>
		</div>
	</fieldset>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php
}
}
/* {/block 'content'} */
}
