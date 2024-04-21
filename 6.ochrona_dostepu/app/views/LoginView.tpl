{extends file="main.tpl"}
{block name=footer}Strona oferuje prosty kalkulator kredytowy do szybkiego obliczania miesięcznej raty kredytu. Wystarczy wpisać kwotę kredytu, okres spłaty i oprocentowanie, a otrzymasz wynik w kilka chwil, pomagając Ci w planowaniu budżetu i podejmowaniu świadomych decyzji finansowych.{/block}
{block name=content}
<form class="pure-form pure-form-stacked" action="{$conf->action_url}login" method="post">
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

{include file='messages.tpl'}

{/block}
