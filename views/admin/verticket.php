<main class="mdl-layout__content mdl-color--grey-100">
	<div id="demo-content" class="novo-ticket">
		<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
			
			<div class="mdl-cell--12-col mdl-grid">
				<h4>TICKET NUMERO: <?php echo $ticket['categoria']; ?></h4>

			</div>
			<div class="mdl-cell--12-col mdl-grid">
				<p><b>Categoria: </b> <?php echo $ticket['codigo']; ?></p>
			</div>
			<div class="mdl-cell--12-col mdl-grid">
				<p><b>DATA: </b> <?php echo $ticket['data']; ?></p>
			</div>
			<div class="mdl-cell--12-col mdl-grid">
				<?php if (isset($avisored)): ?>
					<p style="color: red !important;">
						<?php echo $avisored; ?>
					</p>
				</div>
			<?php endif; ?>
			<?php if (isset($aviso)): ?>
				<p style="color: green !important;">
					<?php echo $aviso; ?>
				</p>
			<?php endif; ?>


			<div class="mdl-cell--12-col mdl-grid">

				<p class="dentro-ticket-text"><b>Autor: </b> <?php echo $ticket['nome_usuario']; ?></p>
			</div>
				<div class="mdl-cell--12-col mdl-grid">
				<p class="dentro-ticket-text"><?php echo $ticket['texto_ticket']; ?>
				</p>
			</div>
				<div class="mdl-cell--12-col mdl-grid">
					<form method="POST" class="mdl-cell--12-col mdl-grid">
						<h5><b>Mais alguma duvida?:</b></h5>

						<div class="mdl-textfield mdl-js-textfield width100">
							<textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="novoHistoricoTicket"  required></textarea>
							<label class="mdl-textfield__label" for="sample5">Adicione algo sobre esse ticket</label>

						</div>

					</div>
					<div class="mdl-cell--3-col mdl-grid">
						<button class="mdl-button mdl-js-button mdl-button--raised pull-right" type="submit">
							Adicionar informações
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="demo-content" class="novo-ticket">
		<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
			<div class="mdl-cell--12-col mdl-grid">
				<h4>Histórico de avisos:</h4>
			</div>
			<?php foreach ($historicoResposta as $historico): ?>
				<div class="mdl-cell--12-col mdl-grid">

					<div class="mdl-cell--12-col mdl-grid">
						<p class="dentro-ticket-text datao"><b>Dia: </b><?php echo $historico['data_att']; ?></p>
					</div>
					<div class="mdl-cell--12-col mdl-grid">
						<p class="dentro-ticket-text datao"><b>Autor: </b><?php echo $historico['nome_usuario']; ?></p>
					</div>
					<div class="mdl-cell--12-col mdl-grid">
						<p class="dentro-ticket-text"><b>Mensagem:</b> </p>
					</div>
					<div class="mdl-cell--12-col mdl-grid">
						<p class="dentro-ticket-text"><?php echo $historico['texto']; ?></p>
					</div>


				</div>
			<?php endforeach; ?>
		</div>
	</div>
</main>