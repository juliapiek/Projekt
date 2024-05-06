<?php
/* Smarty version 3.1.34-dev-7, created on 2024-05-06 16:59:33
  from 'C:\xampp\htdocs\6b.Routing\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6638f055ed13f8_02677180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a76037b477832e672f7f62c3e2aba982fe42f89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\6b.Routing\\app\\views\\CalcView.tpl',
      1 => 1713730712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6638f055ed13f8_02677180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16118564466638f055c6db83_49809217', 'footer');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18271723266638f055c6fc57_38980831', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_16118564466638f055c6db83_49809217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16118564466638f055c6db83_49809217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Strona oferuje prosty kalkulator kredytowy do szybkiego obliczania miesięcznej raty kredytu. Wystarczy wpisać kwotę kredytu, okres spłaty i oprocentowanie, a otrzymasz wynik w kilka chwil, pomagając Ci w planowaniu budżetu i podejmowaniu świadomych decyzji finansowych.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_18271723266638f055c6fc57_38980831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18271723266638f055c6fc57_38980831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>


	<h2 class="content-head is-center">Kalkulator kredytowy</h2>

	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<fieldset>
		<label for="kwota">kwota</label>
		<input id="kwota" type="text" placeholder="kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
">
					
		<label for="lata">lata</label>
		<input id="lata" type="text" placeholder="lata" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
">
		
		<label for="oprocentowanie">oprocentowanie</label>
		<input id="oprocentowanie" type="text" placeholder="oprocentowanie" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
		<div class="messages inf">
			Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

		</div>
	<?php }?>

<?php
}
}
/* {/block 'content'} */
}
