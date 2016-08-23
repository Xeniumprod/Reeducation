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
								<?= $this->Html->tableHeaders(['ID', 'Etablissement', 'nombre', 'IPP', 'IPPFinal', 'nom', 'prenom', 'age', 'genre', 'chambre', 'etage', 'date_entree', 'date_sortie', 'presence', 'medecin', 'kinesitherapeute', 'ergotherapeute', 'apa']); ?>
							</thead>
							<tbody>
	                        	<?php 
                                    foreach ($bases as $base) {
                                        $this->Html->tableCells(
                                        [$base->id, $base->Etablissement, $base->nombre, $base->IPP, $base->IPPFinal, $base->nom, $base->prenom, $base->age, $base->genre, $base->chambre, $base->etage, $base->date_entree, $base->date_sortie, $base->presence, $base->medecin, $base->kinesitherapeute, $base->ergotherapeute, $base->apa]); 
                                    }
                                ?>
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