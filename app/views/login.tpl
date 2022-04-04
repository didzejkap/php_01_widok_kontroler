{extends file="main.tpl"}

{block name=content}
	<form action="{$conf->action_url}login" method="post">
	<div class="main">
			<form>
			<p class="sign" align="center">Zaloguj się</p>
				<div class="form1">
					<input class="un" id="id_login" type="text" name="login" align="center" placeholder="nazwa uzytkownika" value="admin"/>
					<input class="password" id="id_pass" type="password" name="password" align="center" placeholder="haslo" value="admin"/>
				</div>
				<button class="submit" type="submit" value="zaloguj">Zaloguj sie</button>
			</form>
			{include file='messages.tpl'}
			</div>




{/block}