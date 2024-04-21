{extends file="main.tpl"}
{block name=footer}Strona oferuje prosty kalkulator kredytowy do szybkiego obliczania miesięcznej raty kredytu. Wystarczy wpisać kwotę kredytu, okres spłaty i oprocentowanie, a otrzymasz wynik w kilka chwil, pomagając Ci w planowaniu budżetu i podejmowaniu świadomych decyzji finansowych.{/block}
{block name=content}


	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>


	<h2 class="content-head is-center">Kalkulator kredytowy</h2>

	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
	<fieldset>
		<label for="kwota">kwota</label>
		<input id="kwota" type="text" placeholder="kwota" name="kwota" value="{$form->kwota}">
					
		<label for="lata">lata</label>
		<input id="lata" type="text" placeholder="lata" name="lata" value="{$form->lata}">
		
		<label for="oprocentowanie">oprocentowanie</label>
		<input id="oprocentowanie" type="text" placeholder="oprocentowanie" name="oprocentowanie" value="{$form->oprocentowanie}">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
		<div class="messages inf">
			Wynik: {$res->result}
		</div>
	{/if}

{/block}