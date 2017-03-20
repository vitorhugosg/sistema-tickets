
<div id="demo-content">
</div>

<main class="mdl-layout__content mdl-color--grey-100">
	<?php if (isset($_GET['aviso']) && $_GET['aviso'] == 'novoticketok'): ?>
		<div id="demo-content colorgreen">
			<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
				<p class="avisook"><i class="fa fa-check" aria-hidden="true"></i> <?php echo $aviso;?></p>
			</div>
		</div>
	<?php endif; ?>
	
	<div id="demo-content">
		<div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
			<table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet" id="table-suporte">
				<thead>
					<tr>
						<th class="mdl-data-table__cell--non-numeric">Código do ticket</th>
						<th class="mdl-data-table__cell--non-numeric">Categoria</th>
						<th>Produto</th>
						<th class="mdl-data-table__cell--non-numeric">Criado em</th>
						<th class="mdl-data-table__cell--non-numeric">Ultima atualização</th>
						<th class="mdl-data-table__cell--non-numeric">Atendido por</th>
						<th class="mdl-data-table__cell--non-numeric">Status</th>
						<th class="mdl-data-table__cell--non-numeric">Anexo</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($ticketTable as $tickets): ?>
						<tr>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['codigo']; ?>
							</td>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['categoria']; ?>
							</td>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['produto']; ?>
							</td>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['data']; ?>
							</td>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['data_att']; ?>
							</td>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['atendido']; ?>
							</td>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['status']; ?>
							</td>
							<td class="mdl-data-table__cell--non-numeric">
								<?php echo $tickets['arquivo']; ?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</main>
