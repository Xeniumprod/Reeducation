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
				foreach ($patients as $patient) {
		            debug($patient->nom);
		        }
			?>
            <div class="table-wrapper">
				<table class="alt">
					<thead>
						<?= $this->Html->tableHeaders(['ID', 'Etablissement_id', 'nombre', 'IPP', 'IPP_id', 'nom', 'prenom', 'age', 'genre', 'chambre_id', 'date_entree', 'date_sortie', 'presence', 'medecin_id', 'kine_id', 'ergo_id', 'apa_id']); ?>
					</thead>
					<tbody>
                    	<?php 
                            foreach ($patients as $patient) {
                                echo $this->Html->tableCells(
                                	[$patient->id, $patient->etablissement_id, $patient->nombre, $patient->IPP, $patient->IPP_id, $patient->nom, $patient->prenom, $patient->age, $patient->genre, $patient->chambre_id, $patient->date_entree, $patient->date_sortie, $patient->presence, $patient->medecin_id, $patient->kine_id, $patient->ergo_id, $patient->apa_id]
                                ); 
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