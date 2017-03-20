<main class="mdl-layout__content mdl-color--grey-100">
	<div id="demo-content" class="novo-ticket">
		<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">

			<div class="mdl-cell--12-col mdl-grid">
				<h4>Deseja abrir um novo ticket?</h4>

			</div>
			<div class="mdl-cell--12-col mdl-grid">
				<p>Basta preecher os campos abaixo, entraremos em contato o mais rápido possível.</p>
			</div>
			<div class="mdl-cell--12-col mdl-grid">
				<?php if (isset($avisored)): ?>
					<p style="color: red !important;">
						<?php echo $aviso ?>

					</p>
				</div>
			<?php endif ?>
			<?php if (isset($aviso)): ?>
				<p style="color: green !important;">
					<?php echo $aviso ?>
				</p>
			</div>
		<?php endif ?>
		<form method="POST" class="mdl-cell--12-col mdl-grid">
			<div class="mdl-cell--6-col mdl-grid">
				<div class="mdl-textfield mdl-js-textfield">
					<input class="mdl-textfield__input" type="text" id="sample1" name="produtoTicket" required>
					<label class="mdl-textfield__label" for="sample1">Nome do produto*</label>
				</div>
			</div>

			<div class="mdl-cell--6-col mdl-grid">
				<div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label">
					<select id="gender" class="mdl-selectfield__select" name="categoriaTicket" required>
						<option value=""></option>
						<option value="AMD">AMD</option>
						<option value="INTEL">INTEL</option>
					</select>
					<div class="mdl-selectfield__icon"><i class="material-icons">arrow_drop_down</i></div>
					<label class="mdl-selectfield__label" for="gender">Categoria*</label>
				</div>
			</div>

			<div class="mdl-cell--12-col mdl-grid">
				<div class="mdl-textfield mdl-js-textfield width100">
					<textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="descricaoTicket"  required>teste</textarea>

				</div>
			</div>
			<div class="mdl-cell--12-col mdl-grid">
				<p>Deseja enviar algum arquivo?</p>
			</div>
			<div class="mdl-cell--9-col mdl-grid">
				<div class="file_input_div">
					<div class="file_input">
						<label class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
							<i class="material-icons">file_upload</i>
							<input id="file_input_file" class="none" type="file" 
							name="arquivoTicket"/>
						</label>
					</div>
					<div id="file_input_text_div" class="mdl-textfield mdl-js-textfield textfield-demo">

						<input class="file_input_text mdl-textfield__input" type="text" disabled readonly id="file_input_text" />
						<label class="mdl-textfield__label" for="file_input_text"></label>
					</div>
				</div>
			</div>
			<div class="mdl-cell--3-col mdl-grid">
				<button class="mdl-button mdl-js-button mdl-button--raised pull-right" type="submit">
					ABRIR NOVO TICKET
				</button>
			</div>
		</form>
	</div>
</div>
</main>