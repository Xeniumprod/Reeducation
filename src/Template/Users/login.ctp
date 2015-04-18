<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Connexion</h2>
					<!-- code erreur ici <p>erreur</p> -->
                    
                    <form method="post" accept-charset="utf-8" action="/users/login">
                        <div class="connect-container">
                            <input name="_method" value="POST" type="hidden">
                            <div style="position:relative;"><div class="search-input icon fa-user"></div><input name="username" placeholder="Nom d'utilisateur" class="sm" id="username" type="text" /></div>
                            <div style="position:relative;"><div class="search-input icon fa-lock"></div><input name="password" placeholder="Mot de passe" class="sm" id="password" type="password" /></div>
                            <input data-loading-text="Connexion ..." value="Se connecter" type="submit" disabled />
                        </div>
                    </form>
				</div>
			</section>
        
	</div>