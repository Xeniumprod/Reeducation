<!-- Banner -->
<section id="banner">
	<div class="inner">
		<h2>#Nom Kiné</h2>
		<p>Bienvenue</p>
		<ul class="icons major">
            <li><a href="#two" class="scrolly no_"><span class="icon major alert style4"><span class="label">Matériel</span></span></a></li>
            <li><a href="#three" class="scrolly no_"><span class="icon major style4"><span class="label">HDJ</span></span></a></li>
            <li><a href="#cat" class="scrolly no_"><span class="icon major success style4"><span class="label">Balneo</span></span></a></li>
        </ul>
	</div>
	<a href="#two" class="more scrolly">Poursuivre</a>
</section>

<!-- One -->
<section id="one" class="wrapper style1 special">
	<div class="inner">
		<header class="major">
			<h2>Charge de travail</h2>
		</header>
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

<!-- Two -->
<section id="two" class="wrapper alt style2">
	<section class="spotlight">
		<div class="image"><img src="img/pic01.jpg" alt="" /></div><div class="content">
			<div class="table-wrapper">
					<table class="alt">
						<thead>
							<tr>
								<th>2ième étage</th>
								<th>3ième étage</th>
								<th></th>
                                <th>Ergothérapeute</th>
                                <th>APA</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>214D</td>
								<td>LEBIDO Jeanne</td>
								<td>Julien</td>
                                <td>Lucie</td>
                                <td></td>
							</tr>
							<tr>
								<td>311</td>
								<td>BALTICK Madeleine</td>
								<td>Flavien</td>
                                <td></td>
                                <td>Sidonie</td>
							</tr>
							<tr>
								<td>602F</td>
								<td>BELAUN Pierre</td>
								<td>Marine</td>
                                <td></td>
                                <td></td>
							</tr>
							<tr>
								<td>607</td>
								<td>LUDICE Adeline</td>
								<td>Julien</td>
                                <td>Lucie</td>
                                <td></td>
							</tr>
							<tr>
								<td>611</td>
								<td>AUBERTAUX Françoise</td>
								<td>Marianne</td>
                                <td>Claire</td>
                                <td>Patrick</td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
	</section>
	<section class="spotlight">
		<div class="image"><img src="img/pic02.jpg" alt="" /></div><div class="content">
			<h2>Tortor dolore feugiat<br />
			elementum magna</h2>
			<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
		</div>
	</section>
	<section class="spotlight">
		<div class="image"><img src="img/pic03.jpg" alt="" /></div><div class="content">
			<h2>Augue eleifend aliquet<br />
			sed condimentum</h2>
			<p>Aliquam ut ex ut augue consectetur interdum. Donec hendrerit imperdiet. Mauris eleifend fringilla nullam aenean mi ligula.</p>
		</div>
	</section>
</section>

<!-- Three -->
<section id="three" class="wrapper style3 special">
	<div class="inner">
		<header class="major">
			<h2>Charge de travail</h2>
			<p>Sélectionner un patient en cliquant sur son nom pour pouvoir lui apporter une modification.</p>
		</header>
		<ul class="features">
			<li>
                <h5>Patient du docteur CZERTOK</h5>
				<ul class="alt">
                    <li>BOULINIER Jeanine</li>
                    <li>PATOUCHARD Jean</li>
                </ul>
			</li>
			<li class="icon fa-laptop">
				<h3>Ac Augue Eget</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-code">
				<h3>Mus Scelerisque</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-headphones">
				<h3>Mauris Imperdiet</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-heart-o">
				<h3>Aenean Primis</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
			<li class="icon fa-flag-o">
				<h3>Tortor Ut</h3>
				<p>Augue consectetur sed interdum imperdiet et ipsum. Mauris lorem tincidunt nullam amet leo Aenean ligula consequat consequat.</p>
			</li>
		</ul>
	</div>
</section>

<!-- CTA -->
<section id="cta" class="wrapper style4">
	<div class="inner">
		<header>
			<h2>Rechercher un patient</h2>
			<p>Pour rechercher un patient, merci de bien sélectionner son numéro de chambre ou son nom dans le champs de recherche situé à droite.</p>
		</header>
		<ul class="actions vertical">
			<li><div class="search-input icon fa-search"></div><input type="text" name="search-chambre" id="search-chambre" value="" placeholder="Rechercher" /></li>
		</ul>
        <footer>
        </footer>
	</div>
</section>

<!-- Footer -->
<footer id="footer">
	<ul class="copyright">
		<li>&copy; Nicolas</li><li>Design: <a>HTML5 UP</a></li>
	</ul>
</footer>

</div>