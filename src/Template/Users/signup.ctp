<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
			<header id="header" class="alt">
				<nav id="nav">
					<ul>
						<li class="special">
							<a href="#"><span>Connexion</span></a>
						</li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Inscription</h2>
					<!-- code erreur ici <p>erreur</p> -->
                    
                    <form method="post" accept-charset="utf-8" action="/users/login">
                        <div class="connect-container">
                            <input name="_method" value="POST" type="hidden">
                            <div style="position:relative;"><div class="search-input icon fa-user"></div><input name="username" placeholder="Nom d'utilisateur" class="sm" id="username" type="text" /></div>
                            <div style="position:relative;"><div class="search-input icon fa-lock"></div><input name="password" placeholder="Mot de passe" class="sm" id="password" type="password" /></div>
                            <input data-loading-text="Connexion ..." value="Inscription" type="submit" disabled />
                        </div>
                    </form>
				</div>
			</section>
        
	</div>