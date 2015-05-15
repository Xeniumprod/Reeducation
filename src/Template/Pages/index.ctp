<!-- Page Wrapper -->
<div id="page-wrapper">

	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<h2><?= $this->request->session()->read('Auth.User.firstname') ?></h2>
			<p>Bienvenue</p>
			<ul class="icons major">
	            <li><a href="#two" class="scrolly no_"><span class="icon major alert style4"><span class="label">Matériel</span></span></a></li>
	            <li><a href="#three" class="scrolly no_"><span class="icon major style4"><span class="label">HDJ</span></span></a></li>
	            <li><a href="#cat" class="scrolly no_"><span class="icon major success style4"><span class="label">Balneo</span></span></a></li>
	        </ul>
		</div>
		<a href="#end" class="more scrolly">Poursuivre</a>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style6">
		<div class="inner">
            <h2>Charge de travail</h2>
			
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
                    <div class="icon major style4"><label>412BF</label></div>
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
                    <div class="icon major fa-male style4"></div>
                </div>

                <div class="row uniform">
                    <div class="6u">
                        <a>Kinésithérapeute</a>
                        <p>10h30 - 11h30 avec Sara au 2ième étage</p>
                    </div>
            
                    <div class="6u">
                        <p><a>APA</a> : Sidonie</p>
                        <p>10h30 - 11h30 au 4ième étage</p>
                    </div>
                </div>
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