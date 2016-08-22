<!-- Page Wrapper -->
<div id="page-wrapper">

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h2><?= $this->request->session()->read('Auth.User.firstname') ?></h2>
			<p>Bienvenue</p>
			<ul class="icons major">
	            <li><a href="#two" class="scrolly no_"><span class="icon major link alert style4"><span class="label">Matériel</span></span></a></li>
	            <li><a href="#three" class="scrolly no_"><span class="icon major link style4"><span class="label">HDJ</span></span></a></li>
	            <li><a href="#cat" class="scrolly no_"><span class="icon major link success style4"><span class="label">Balneo</span></span></a></li>
	        </ul>
		</div>
		<a href="#profil" class="more scrolly">Poursuivre</a>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style6">
		<div class="inner">
            <h2>Recap BDD</h2>
			<?php
				foreach ($bases as $base) {
		            debug($base->nom);
		        }
			?>
            <div class="table-wrapper">
						<table class="alt">
							<thead>
								<?= $this->Html->tableHeaders(['Chambre', 'Nom du patient', 'Kinésithérapeute', 'Ergothérapeute', 'APA']); ?>
							</thead>
							<tbody>
	                        	<?= $this->Html->tableCells([
		                            ['214D', 'LEBIDO Jeanne', 'Julien', 'Lucie', ''],
		                            ['311', 'BALTICK Madeleine', 'Flavien', '', 'Sidonie'],
		                            ['602F', 'BELAUN Pierre', 'Marine', '', ''],
		                            ['607', 'LUDICE Adeline', 'Julien', 'Lucie', ''],
		                            ['611', 'AUBERTAUX Françoise', 'Marianne', 'Claire', 'Patrick']
		                        ]); ?>
		                    </tbody>
						</table>
					</div>
		</div>
	</section>

	<!-- Footer -->
	<footer id="footer">
		<ul class="copyright">
			<li>&copy; Nicolas</li><li>Design: <a>HydraThallium</a></li>
		</ul>
	</footer>

</div>