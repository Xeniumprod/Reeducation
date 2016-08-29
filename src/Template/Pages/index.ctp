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
            <h2>Charge de travail</h2>
			
            <div class="table-wrapper">
						<table class="alt">
							<thead>
								<?= $this->Html->tableHeaders(['IPP', 'Nom du patient', 'Prénom', 'Chambre']); ?>
							</thead>
							<tbody>
                                <?php
                                    foreach ($bases as $base) {
                                        echo $this->Html->tableCells([
                                            [$base->IPP, $base->nom, $base->prenom, $base->chambre],
                                        ]); 
                                   }
                                ?>
		                    </tbody>
						</table>
					</div>
		</div>
	</section>

	<!-- CTA -->
    <section id="profil" class="wrapper style4">
        <div class="inner">
            <div class="row uniform">
            <div class="5u -1u 8u(medium) -2u(medium) 12u(xsmall)">
                <h2>Rechercher un patient</h2>
				<p>Pour rechercher un patient, merci d'entrer son numéro de chambre ou son nom dans le champs de recherche situé à droite.</p>
            </div>

            <div class="4u -1u 8u(medium) -2u(medium) 12u(xsmall)">
                <div class="placeholder-icon search">
                    <?= $this->Form->input('search', [
                        'type'=>'text', 
                        'required'=>'true', 
                        'placeholder'=>"Rechercher", 
                        'label'=>''
                    ]); ?>
                </div>
            </div>
            </div>
            
            <div class="row uniform">
                <div class="10u -1u 8u(medium) -2u(medium) 12u(xsmall)">
                    <hr></hr>    
                </div>

                <div class="1u -1u">
                    <div class="icon major size80"><label>412BF</label></div>
                </div>
                <div class="3u text-align">
                    <header>
                        <h4>DUJARDIN</h4>
                        <p>Jean</p>
                        <br/>
                        <p class="police80">19602673001</p>
                    </header>
                </div>
                <div class="1u$">
                    <div class="icon major fa-male size80"></div>
                </div>

                <ul class="info-features">
                    <li>
                        <h4>Kinésithérapeute</h4>
                        <p><span class="icon mini fa-clock-o"></span>10h30 - 11h30</p>
                        <p><span class="icon mini female fa-user"></span>Sara - 1ier étage</p>
                        <p><span class="icon mini fa-phone"></span>2710</p>
                    </li>
                    <li>
                        <h4>APA</h4>
                        <p><span class="icon mini fa-clock-o"></span>10h00 - 10h30</p>
                        <p><span class="icon mini male fa-user"></span>Patrick - 2ième étage</p>
                        <p><span class="icon mini fa-phone"></span>2714</p>
                    </li>
                    <li>
                        <h4>Ergothérapie</h4>
                        <p><span class="icon mini fa-clock-o"></span>11h30 - 12h30</p>
                        <p><span class="icon mini male fa-user"></span>Claire - 4ième étage</p>
                        <p><span class="icon mini fa-phone"></span>2717</p>
                    </li>
                </ul>
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