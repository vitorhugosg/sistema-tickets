<html>
<head>
	<meta charset="UTF-8">
	<title>Area administrativa - Ticket Taller Teste</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-indigo.min.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.material.min.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>
<body>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Sistema de Tickets de suporte</span>
				<div class="mdl-layout-spacer"></div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
					<i class="material-icons">more_vert</i>
				</button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<li class="mdl-menu__item"><a href="<?php echo BASE_URL; ?>/login/sair">Sair</a></li>
				</ul>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
				<img src="<?php echo BASE_URL; ?>/assets/images/user.jpg" class="demo-avatar">
				<div class="demo-avatar-dropdown">
					<span><?php echo $viewData['nome']; ?></span>
					<div class="mdl-layout-spacer"></div>
				</div>
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Ínicio</a>
				<a class="mdl-navigation__link" href="<?php echo BASE_URL; ?>/home/novoticket"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Novo Ticket</a>

			</nav>
		</div>
		<?php

		$this->loadViewInTemplate($viewName, $viewData);
		?>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
			<defs>
				<mask id="piemask" maskContentUnits="objectBoundingBox">
					<circle cx=0.5 cy=0.5 r=0.49 fill="white" />
					<circle cx=0.5 cy=0.5 r=0.40 fill="black" />
				</mask>
				<g id="piechart">
					<circle cx=0.5 cy=0.5 r=0.5 />
					<path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
				</g>
			</defs>
		</svg>
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
			<defs>
				<g id="chart">
					<g id="Gridlines">
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3" />
					</g>
					<g id="Numbers">
						<text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
						<text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
						<text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
						<text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
						<text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
						<text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
						<text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
						<text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
						<text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
						<text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
						<text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
						<text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
					</g>
					<g id="Layer_5">
						<polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
						294.5,80.5 380,165.2 437,75.5 469.5,223.3 	"/>
					</g>
					<g id="Layer_4">
						<polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
						296.7,128 380.7,184.3 436.7,125 	"/>
					</g>
				</g>
			</defs>
		</svg>

		<script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
		<script type="text/javascript" defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
		<script defer src="https://cdn.rawgit.com/CreativeIT/getmdl-select/master/getmdl-select.min.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.material.min.js"></script>

		<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
	</body>
	</html>
