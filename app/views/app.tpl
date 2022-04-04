{extends file="main.tpl"}

{block name=content}

	<form action="{$conf->action_url}calcCompute" method="post">

		<div class="main">
			<h2>Kalkulator kredytowy</h2>
			<form>
				<div class="zawartosc">
					<label>Podaj kwotę kredytu:</label>
					<input class="form-control" id="id_credit_amount" type="text" name="credit_amount" value="{$form->credit_amount}" /><br />
				</div>
	
				<div class="zawartosc">
					<label>Wpisz liczbę oprocentowania:</label>
					<input class="form-control" id="percent" type="text" name="percent" value="{$form->percent}" /><br />
				</div>
					<div class="zawartosc">
					<label>Wybierz okres spłaty kredytu:</label>
					<div class="select">
						<select class="form-select" name="op">
							<option value="1">Jeden Rok</option>
							<option value="2">Dwa lata</option>
							<option value="3">Trzy lata</option>
							<option value="4">Pięć lat</option>
							<option value="5">Dziesięć lat</option>
						</select>
					</div></br>
				</div>
				<button class="btn btn-info" type="submit" align="center" value="Oblicz">Oblicz</button>

				{include file='messages.tpl'}

				{if isset($res->result)}
					<div style="background-color: #8C55AA; border-radius: 15px; width: 280px; padding: 20px; margin-top: 40px; line-height: 30px;">
						Wynik: {$res->result}
					</div>
                {/if}

				</div>
				<a style="position:absolute; top:0px; right:0px;" class="btn btn-primary" href ="{$conf->action_url}logout">Wyloguj</a></br>
			</form>

	</form>
{/block}